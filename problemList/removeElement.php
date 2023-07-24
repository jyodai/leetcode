<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(&$nums, $val)
    {
        sort($nums);

        $offset = null;
        $length = 0;

        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            if ($val === $nums[$i]) {
                unset($nums[$i]);
            }
        }
        return count($nums);
    }
}
