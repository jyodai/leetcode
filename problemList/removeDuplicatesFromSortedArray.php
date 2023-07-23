<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(&$nums)
    {
        $ret = [];

        $count = count($nums);
        $value = null;
        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] === $value) {
                continue;
            }
            array_push($ret, $nums[$i]);
            $value = $nums[$i];
        }

        $nums = $ret;
        return count($ret);
    }
}
