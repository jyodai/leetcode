<?php

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    public function strStr($haystack, $needle)
    {
        $ret = strpos($haystack, $needle);
        return $ret === false ? -1 : $ret;
    }
}
