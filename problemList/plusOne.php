<?php

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    public function plusOne(array $digits)
    {
        if (end($digits) < 9) {
            $lastIndex          = count($digits) - 1;
            $lastValue          = (int) $digits[$lastIndex];
            $digits[$lastIndex] = $lastValue + 1;
            return $digits;
        }

        $ret     = [];
        $reverse = array_reverse($digits);
        $reverse[0]++;
        $count = count($reverse);

        $carryForwardFlag = false;
        for ($i = 0; $i < $count; $i++) {
            $value = $reverse[$i];
            if ($carryForwardFlag) {
                $value++;
                $carryForwardFlag = false;
            }
            if (10 <= $value) {
                array_push($ret, $value - 10);
                $carryForwardFlag = true;
            } else {
                array_push($ret, $value);
            }
        }
        if ($carryForwardFlag) {
            array_push($ret, 1);
        }
        return array_reverse($ret);
    }
}
