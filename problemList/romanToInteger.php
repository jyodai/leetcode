<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $num   = 0;
        $array = str_split($s);

        for ($i = 0; $i < count($array); $i++) {
            $next = $i + 1;
            if ($array[$next]) {
                $convertNum = $this->convert($array[$i], $array[$next]);
            } else {
                $convertNum = $this->convert($array[$i]);
            }
            $num = $num + $convertNum;
        }

        return $num;
    }

    private function convert($strA, $strB = '')
    {
        $roman = [
            'I'  => 1,
            'V'  => 5,
            'X'  => 10,
            'L'  => 50,
            'C'  => 100,
            'D'  => 500,
            'M'  => 1000,
            'IV' => -1,
            'IX' => -1,
            'XL' => -10,
            'XC' => -10,
            'CD' => -100,
            'CM' => -100,
        ];

        if (array_key_exists($strA . $strB, $roman)) {
            return $roman[$strA . $strB];
        } else {
            return $roman[$strA];
        }
    }
}
