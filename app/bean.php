<?php

use Swoft\Http\Server\HttpServer;
use Swoft\Db\Database;
use Swoft\Db\Pool;
use Swoft\Redis\RedisDb;

return [
    'config' => [
        'path' => __DIR__.'/../config',
        'env' =>env('ENV','dev'),
    ],
    'logger'     => [
        'flushRequest' => false,
        'enable'       => true,
        'json'         => false,
    ],
    'httpServer' => [
        'class'   => HttpServer::class,
        'port'    => 18306,
        /* @see HttpServer::$setting */
        'setting' => [
            'worker_num' => 8,
            'enable_static_handler' => true,
            'document_root' => dirname(__DIR__).'/public',
        ]
    ],
    'view' => [
        'viewsPath' => dirname(__DIR__).'/resource/views',
    ],
    'db'=> [
        'class' => Database::class,
        'dsn' => 'mysql:dbname=swoft;host=127.0.0.1:3306',
        'username' => 'swoft',
        'password' => 'testswoft',
        'charset' => 'utf8mb4',
        'prefix' => '',
        'options' => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
        ],
        'config' => [
            'collation' => 'utf8mb4_unicode_ci',
            'strict' => true,
            'timezone' => '+08:00',
            'modes' => 'NO_ENGINE_SUBSTITUTION,STRICT_TRANS_TABLES',
            'fetchMode' => PDO::FETCH_ASSOC,
        ],
    ],
    'redis'              => [
        'class'    => RedisDb::class,
        'host'     => '127.0.0.1',
        'port'     => 6379,
        'database' => 0,
        'option'   => [
            'prefix' => 'swoft:'
        ]
    ],
];
