<?php

use PHPUnit\Framework\TestCase;

include_once('src/AnagramImplementation.php');

final class testIsAnagram extends TestCase
{
    public function testTwoWordsAreAnagram()
    {
        $word1 = 'cat';
        $word2 = 'tac';
        $word3 = 'tat';

        $res = new AnagramImplementation();

        $this->assertTrue($res->isAnagram($word1,$word2));
        $this->assertNotTrue($res->isAnagram($word1,$word3));
    }
}
