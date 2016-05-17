<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */

return [
    'pfapi' => [
        'engine'=> 'novaClient',
        'host' => '127.0.0.1',
        'port' => '8020',
//        'host' => '172.17.9.215',
//        'port' => '28181',
        'timeout' => 5000,
        'persistent' => true,
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