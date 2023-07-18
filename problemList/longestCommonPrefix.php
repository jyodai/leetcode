<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    public function longestCommonPrefix($strs)
    {
        $ret           = "";
        $smallestStr   = $this->getSmallestStr($strs);
        $smallestArray = str_split($smallestStr);

        foreach ($smallestArray as $index => $value) {
            for ($i = 0; $i < count($strs); $i++) {
                if ($value !== substr($strs[$i], $index, 1)) {
                    return $ret;
                }
            }
            $ret = $ret . $value;
        }
        return $ret;
    }

    private function getSmallestStr($strs)
    {
        $retStr    = "";
        $wordCount = 200;
        for ($i = 0; $i < count($strs); $i++) {
            if (mb_strlen($strs[$i]) < $wordCount) {
                $wordCount = mb_strlen($strs[$i]);
                $retStr    = $strs[$i];
            }
        }
        return $retStr;
    }
}
