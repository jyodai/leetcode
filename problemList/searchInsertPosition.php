<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert($nums, $target)
    {
        $count = count($nums);
        if ($nums[$count - 1] < $target) {
            return $count;
        }
        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] === $target) {
                return $i;
            }
            if ($target < $nums[$i]) {
                return $i;
            }
        }
    }
}
