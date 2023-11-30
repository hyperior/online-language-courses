<?php

namespace AlphaRemote\PhpProject\repositories;

use AlphaRemote\PhpProject\databases\Connection;

class CourseRepository implements BaseRepository
{

    public function getLikeArg($search)
    {
        $connection = Connection::getInstance();

        $statement = $connection->getConnection()->prepare('SELECT * FROM courses WHERE noun LIKE ?');
        $statement->execute(['%' . $search . '%']);

        return $statement->fetchAll();
    }
}