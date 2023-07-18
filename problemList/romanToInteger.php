<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $numArray = [];
        $array    = str_split($s);

        $skip = false;
        for ($i = 0; $i < count($array); $i++) {
            $next = $i + 1;

            if ($array[$i] === 'I' && ($array[$next] === 'V' || $array[$next] === 'X')) {
                array_push($numArray, -1);
                continue;
            }

            if ($array[$i] === 'X' && ($array[$next] === 'L' || $array[$next] === 'C')) {
                array_push($numArray, -10);
                continue;
            }

            if ($array[$i] === 'C' && ($array[$next] === 'D' || $array[$next] === 'M')) {
                array_push($numArray, -100);
                continue;
            }

            array_push($numArray, $this->convert($array[$i]));
        }

        $num = 0;
        for ($i = 0; $i < count($numArray); $i++) {
            $num = $num + $numArray[$i];
        }

        return $num;
    }

    private function convert($str)
    {
        $roman = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        return $roman[$str];
    }
}
