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
            false;
        }
        $str = (string) $x;

        $count = strlen($str);
        for ($i = 0; $i < $count; $i++) {
            if (substr($str, $i, 1) !== substr($str, $count - $i - 1, 1)) {
                return false;
            }
        }

        return true;
    }
}
