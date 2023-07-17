<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }
        $str = (string) $x;
        return strrev($str) === $str;
    }
}
