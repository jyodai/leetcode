<?php

class Solution
{

    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     * @return NULL
     */
    public function merge(&$nums1, $m, $nums2, $n)
    {
        $nums1 = array_slice($nums1, 0, $m);
        $value = null;
        for ($i = 0; $i < count($nums1); $i++) {
            if (!$nums2 && $value === null) {
                break;
            }
            if ($value === null) {
                $value = array_shift($nums2);
            }
            if ($value < $nums1[$i]) {
                array_splice($nums1, $i, 0, $value);
                $value = null;
            }
        }
        if ($value !== null) {
            array_push($nums1, $value);
        }
        $nums1 = array_merge($nums1, $nums2);
    }
}
