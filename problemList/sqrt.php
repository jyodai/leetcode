<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    public function mySqrt($x)
    {
        if ($x < 1) {
            return 0;
        }
        if ($x < 4) {
            return 1;
        }
        $max = 46340; // 2 ^ 31
        for ($i = 2; $i < $x; $i++) {
            if ($max === $i) {
                return $max - 1;
            }
            $value = $i * $i;
            if ($x < $value) {
                return $i - 1;
            }
        }
    }
}
