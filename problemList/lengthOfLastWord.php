<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLastWord($s)
    {
        $str      = trim($s);
        $words    = explode(' ', $str);
        $lastWord = end($words);
        return strlen($lastWord);
    }
}
