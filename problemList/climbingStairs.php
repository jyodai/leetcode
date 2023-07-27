<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    public function climbStairs(int $num): int
    {
        if ($num < 1) {
            return 1;
        }

        $max   = $num - 1;
        $array = [1, 1];
        for ($i = 0; $i < $max; $i++) {
            array_push($array, $array[$i] + $array[$i + 1]);
        }

        return $array[$num] + $array[$num + 1];
    }
}
