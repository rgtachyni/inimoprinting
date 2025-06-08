<?php

return [
    'serverKey' => env('MIDTRANS_SERVER_KEY'),
    'clientKey' => env('MIDTRANS_CLIENT_KEY'),
    'isProduction' => env('MIDTRANS_IS_PRODUCTION'),
    'isSanitized' => env('MIDTRANS_IS_SANITIZED'),
    'is3ds' => env('MIDTRANS_IS_3DS'),
];
// 'midtrans' => [
//     'server_key'     => env('MIDTRANS_SERVER_KEY'),
//     'client_key'     => env('MIDTRANS_CLIENT_KEY'),
//     'is_production'  => env('MIDTRANS_IS_PRODUCTION', false),
// ],
