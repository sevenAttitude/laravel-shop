<?php

return [
    'alipay' => [
        'app_id' => '2016092900621575',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnD3tMCO6QRTe+7lcT8hJ2Grj5oIRloEOU8NWbUdsmIwelrriHdqmFMHrd3xRc+QrL0lvyRLCyvKXF6VO7CcwD74XhK/H0BjUSAYB6w08Dhoiz4ozRtSjwh012HIQuOYb+7QQDuEZefuHAGZX3fs7nMKDFdQ/5K5BD/QiVLmp/2aZxaY7gw2qZlIpVxKDU1IhlzD05f1QJazTJ3jRf7DUq9VVuO7e/zbyMDYUs1SUmFGgLiyWwObygOBRBl+bkr8XbPB08YQTL14MZ4vB8+ROXKkeb8oBRWpwKlpo9VLcK3iGDqV12BVc6ezpO6huOXdRP6dYyATklljr6tExRhKJUQIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEA6MXsKfCLjtY1Db+IClZD/u5c5DhicBBvAFWCU5qCXDQCRWUqE4E2Jjj1ebOpjnahcCyDaDuda8C7QnbMZZp9C5k00t7GltOkdMDyqGL/2/eJYxE40cVm1ELT8fb/md8QYP5AgO6ToDC0QZWr02u1CsmkHSFHBFUdvulTK5iucjRRYVcxXSzGjUBtIV8cagSWRcsoJwHbsmurwzS3/F4TWk/EenmJuv4MzM4zLOmTZ0bjT/32+8EUT+iB462uLbAA9GOZG0k6Av8LGTZqT5Lr18cS7pW9eXj58dC7l/kwmzLO1XGSTmhyDF3blSMZIj0OqECD7VdqISJTRORpDAIO0wIDAQABAoIBAEmZm0y/hEELtga80tUB5coLsE9xDJ8GczKV1vl8V0+0Giu7CwzTxD1dsTBkAG7NT8paKMqiXuodLJidW4+cw4ERVkR+sCgsj0ljYNahRulUYZpzbZXWZuciokVVpggPIeypN9gMl50FCVnba1MUMVBR5ZRYW04hY6Bjwip8wlvVWK2VKN7cWbjUFnIW/YF2dInWr0mRkI6gWVlfWCP9R4NChCdIgJJmCnQ/4Iry6ptG5bp/GQQWZOyWzhE8FFZGVvuK+4VTZXKwBd6+krTHDO/5/Uazw4r3JTLYc0Av9QO7xYPe9vezKHDL291mQHAP1vYVWNbWgLd7P4yQpi+utwECgYEA9gnQla41jFN50FDiGBdNxvj3IeBUvQat/OqZeSuhrgozmW3nGmB06uVGhb9oJFODQfBP7NrKqvhV9EvF9OTpzu9JxNadNKVpyXdxA39WgZXQj1AxwzsnnW/FZ1CeNfArct/luxj62WxYmW4djSmm8eKXFIuPc3cfHsdogq5eiZMCgYEA8jKdL4k/BZU/Uf8LlleOrxPDIpBLsce5Va2hbauIZDgX7PXVH68N5yUl0uZPVNwNvffrqt1YC5Abmbl7SRSoFeEAvMRgYU2afNKpr5yAGAqUrfWyJpXZkyM4GVeZLd3xOud7QE75hB4zZ6TIvgaRVMLwroI7G8aZo7pjCMesrcECgYEAylIf2DY9intKfGdGxRDEwI4SiyTyCc7oXEZ+lgmvFnMFI3IgzKvs+Qw5Bdr0RIr4MMzwrJDuf9FevVliG5PyQFy9iMQC2jv71dQGdx3LgRw1OOR1R1nppak351GACFLLJ9e+DjDodsqFwQWv/1j1E4uFOTvaZtTaHnFUG8JPs0kCgYB033m8e6U+w3OH1OQ5i0zeLVIntqvgQTmtH5lbe7/YZL0e6s4KeQXjeaiT6fF0SLAU8LL3g9I92i+HcdsNO/uUezxI2xaLPdCD1YBurr2dXFW80GhEeGFCwGcMy5muaYBD5XozYSjE2XIC3KDGGhM9bMiJ3Ww6jg6L1KB/lyM7wQKBgGxxCDHK1oMOi/63YvukE8Ej+tPbG5i/CmZEDAfU6ebvULp+baXvHE8AUXI832jYbLADqXMUlnlcnkwAsRqEZXXnF/tq0dx8XJI0jtqxaCXGs44GeqV2/fqztvnKv+89lqx4L8ws/qun5HQ9DC9j6BTQIHzMLQ8th6JLiBhZjzEO',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];