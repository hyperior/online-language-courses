<?php

namespace AlphaRemote\PhpProject\databases;

use AlphaRemote\PhpProject\configuration\Databases;
use PDO;

class Connection
{
    private static $instance;

    private $connection;

    private function __construct()
    {
        $config = Databases::getMysqlConfig();

        $this->connection = new PDO(
            $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'],
            $config['username'],
            $config['password'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]
        );
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}