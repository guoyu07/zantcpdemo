<?php

return [
    'trace' => [
        'engine'=> 'tcp',
        'host' => '127.0.0.1',
        'port' => '2280',
        'timeout' => 5000,
        'hasRecv' => false,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
        'pool'  => [
            'keeping-sleep-time' => 10000,
            'init-connection'=> 2,
        ],
    ],
];