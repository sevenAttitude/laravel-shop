<?php

namespace App\Console\Commands\Elasticsearch;

use App\Models\Product;
use Illuminate\Console\Command;

class SyncProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // 添加一个名为 index，默认值为 products 的参数
    protected $signature = 'es:sync-products {--index=products}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '将商品数据同步到 Elasticsearch';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $es = app('es');

        Product::query()
            ->with(['skus', 'properties'])
            ->chunkById(100, function ($products) use ($es) {
                $this->info(sprintf('正在同步 ID 范围 %s 至 %s 的商品', $products->first()->id, $products->last()->id));

                // 初始化请求体
                $req = ['body' => []];

                foreach ($products as $product) {
                    // 将商品模型转为es所用的数组
                    $data = $product->toESArray();

                    $req['body'][] = [
                        'index' => [
                            // 从参数中读取索引名称
                            '_index' => $this->option('index'),
                            '_type' => 'doc',
                            '_id' => $data['id'],
                        ],
                    ];

                    $req['body'][] = $data;
                }

                try {
                    // 使用 bulk 方法批量创建
                    $es->bulk($req);
                } catch (\Exception $e) {
                    $this->error($e->getMessage());
                }
            });

        $this->info('同步完成');
    }
}
