<?php

use LoickVirot\Classes\IsTrue;

class IsTrueTest extends PHPUnit_Framework_TestCase
{
    public function testShouldReturnTrue()
    {
        $variable = "true";
        $this->assertTrue(IsTrue::test($variable));

        $variable = "TRUE";
        $this->assertTrue(IsTrue::test($variable));

        $variable = "TrUe";
        $this->assertTrue(IsTrue::test($variable));

        $variable = true;
        $this->assertTrue(IsTrue::test($variable));
    }

    public function testShouldReturnFalse() {
        $variable = "false";
        $this->assertTrue(!IsTrue::test($variable));

        $variable = "FALSE";
        $this->assertTrue(!IsTrue::test($variable));

        $variable = "I am a fish";
        $this->assertTrue(!IsTrue::test($variable));

        $variable = false;
        $this->assertTrue(!IsTrue::test($variable));

        $variable = "truelle";
        $this->assertTrue(!IsTrue::test($variable));
    }
}
