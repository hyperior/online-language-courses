<?php

use AlphaRemote\PhpProject\databases\Connection;

require_once __DIR__ . '/vendor/autoload.php';

$connection = Connection::getInstance();

$result = $connection->getConnection()->query('SELECT * FROM courses');
$rs = '';

while ($row = $result->fetch()) {
    $rs = $rs . $row['noun'] . PHP_EOL;
}

echo $rs;
