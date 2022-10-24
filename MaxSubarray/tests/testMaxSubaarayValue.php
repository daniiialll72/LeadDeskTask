<?php

use PHPUnit\Framework\TestCase;

include_once('src/MaxSubarrayImplementation.php');

final class testMaxSubarrayValue extends TestCase
{
    public function testContiguousMethod()
    {
        $array1 = [-1, 1, 5, -6, 3];
        $array2 = [-2, -3, 4, -1,-2, 1, 5, -3 ];

        $expected1 = 6;
        $expected2 = 7;

        $max1 = new MaxSubarrayImplementation();
        $max2 = new MaxSubarrayImplementation();

       $this->assertEquals($expected1,$max1->contiguous($array1));

       $this->assertEquals($expected2,$max2->contiguous($array2));
    }
}
