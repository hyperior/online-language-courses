<?php

namespace AlphaRemote\PhpProject\controllers;

use AlphaRemote\PhpProject\helpers\Utils;
use AlphaRemote\PhpProject\models\Resource;
use AlphaRemote\PhpProject\repositories\CourseRepository;
use AlphaRemote\PhpProject\repositories\ExamRepository;

class Controller
{

    public function __construct()
    {
    }

    public function search($arg){

        if(!Utils::isArgValid($arg)) exit();

        $courseRepository = new CourseRepository();
        $examRepository = new ExamRepository();

        $courses = $courseRepository->getLikeArg($arg);
        $exams = $examRepository->getLikeArg($arg);

        $resources = [];

        foreach ($courses as $c) {
            $resources[] = new Resource($c['noun'], $c['level'], 'clase');
        }
        foreach ($exams as $e) {
            $resources[] = new Resource($e['noun'], $e['option'], 'examen');
        }

        return Utils::show($resources);
    }
}