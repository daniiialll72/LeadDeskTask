<?php

include_once('Anagram.php');

class AnagramImplementation
{
// PHP-Version : 8.1.11
    public function isAnagram(string $word1, string $word2): bool
    {
        $status = false;
        if ($word1 && $word2) {
            $word1 = strtolower(str_replace(" ", "", $word1));
            $word2 = strtolower(str_replace(" ", "", $word2));
            $word1 = str_split($word1);
            $word2 = str_split($word2);
            sort($word1);
            sort($word2);
            if ($word1 === $word2) {
                $status = true;
            }
        }
        return $status;
    }
}
