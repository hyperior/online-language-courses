<?php

namespace AlphaRemote\test\PhpProject;

use AlphaRemote\PhpProject\helpers\Utils;
use PHPUnit\Framework\TestCase;

final class UtilsTest extends TestCase
{

    public function testReturnFalseWhenArgLenIsLessThanMin(){

        $this->assertFalse(Utils::isArgValid('test',5));

    }

}