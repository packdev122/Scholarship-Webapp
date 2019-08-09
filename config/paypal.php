<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AdMpRCe6xDUluc8yIZqpCiKT4vCr4Vo2iqsA1Cnk-TqoWAKmArJ8kXArbBVbUVeGlTE-RJCorsQER4nI'),
    'secret' => env('PAYPAL_SECRET','EJ_rtp8mjH30zGTNBopCkHZATkmX_IKtVCX1KOWEtts2iP37Gn_bCKVnCMzQehZcCjd2boaV7pfXDu9T'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];