<?php

namespace AlphaRemote\PhpProject\models;

class Resource
{

    public $noun;
    public $option;
    public $type;

    /**
     * @param $noun
     * @param $option
     * @param $type
     */
    public function __construct($noun, $option, $type)
    {
        $this->noun   = $noun;
        $this->option = $option;
        $this->type   = $type;
    }


}