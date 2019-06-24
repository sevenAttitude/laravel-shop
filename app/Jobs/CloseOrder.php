<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Order;

class CloseOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order, $delay)
    {
        $this->order = $order;

        // 设置延迟的时间，delay()方法参数代表多少秒之后执行
        $this->delay($delay);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // 判断是否已支付
        // 如果已经被支付,不需要关闭订单，退出
        if ($this->order->paid_at) {
            return ;
        }

        // 通过事务处理
        \DB::transaction(function () {
            // 将订单的closed字段标记为true，即关闭订单
            $this->order->update(['closed' => true]);

            // 循环编辑订单中的商品sku， 将订单数量加回到sku库存中
            foreach ($this->order->items as $item) {
                $item->productSku->addStock($item->amount);
            }

            if ($this->order->couponCode) {
                $this->order->couponCode->changeUsed(false);
            }
        });
    }
}
