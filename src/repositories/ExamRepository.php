<?php

namespace AlphaRemote\PhpProject\repositories;

use AlphaRemote\PhpProject\databases\Connection;

class ExamRepository implements BaseRepository
{

    public function getLikeArg($search)
    {
        $connection = Connection::getInstance();

        $statement = $connection->getConnection()->prepare('SELECT * FROM exams WHERE noun LIKE ?');
        $statement->execute(['%' . $search . '%']);

        return $statement->fetchAll();
    }
}