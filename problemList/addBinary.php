<?php

class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    public function addBinary($a, $b)
    {
        $binaryA = str_split($a);
        $binaryB = str_split($b);

        $reverseA = array_reverse($binaryA);
        $reverseB = array_reverse($binaryB);

        $count = count($reverseA) > count($reverseB) ? count($reverseA) : count($reverseB);

        $retArray        = [];
        $carryFowardFlag = false;
        for ($i = 0; $i < $count; $i++) {
            $valueA = $reverseA[$i] ? (int) $reverseA[$i] : 0;
            $valueB = $reverseB[$i] ? (int) $reverseB[$i] : 0;

            $sum = $valueA + $valueB;
            if ($carryFowardFlag) {
                $sum++;
                $carryFowardFlag = false;
            }

            if ($sum > 1) {
                $sum             = $sum - 2;
                $carryFowardFlag = true;
            }

            array_push($retArray, (string) $sum);
        }

        if ($carryFowardFlag) {
            array_push($retArray, 1);
        }

        return implode('', array_reverse($retArray));
    }
}
