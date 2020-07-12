<?php

use Swoft\Db\Database;

return [

    'class' => Database::class,
    'dsn' => 'mysql:dbname=swoft2;host=127.0.0.1:3306',
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

];
