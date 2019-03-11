<?php

namespace Testing\One;

class test
{
    public function testMe()
    {
        $a  = 'aa';
        $ab = 'ab';

        $aaa = trim(function () {
            $a = 'aa';
            $ab = 'ab';

            return $a.$ab;
        });
    }
}
