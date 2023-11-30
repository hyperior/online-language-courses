<?php

namespace AlphaRemote\PhpProject\configuration;

class Databases
{

    public function __construct()
    {
    }

    public static function getMysqlConfig()
    {
        return [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'alpha_test',
            'username' => 'root',
            'password' => '',
        ];
    }
}