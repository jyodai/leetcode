<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function containsDuplicate($nums)
    {
        $array = array_count_values($nums);
        foreach ($array as $value) {
            if (1 < $value) {
                return true;
            }
        }
        return false;
    }
}
