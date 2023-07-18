<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $ret   = [];
        $array = str_split($s);

        $skip = false;
        for ($i = 0; $i < count($array); $i++) {
            if ($skip) {
                $skip = false;
                continue;
            }
            $skip = false;
            
            if ($array[$i] === 'I' && $array[$i + 1] === 'V') {
                array_push($ret, 4);
                $skip = true;
                continue;
            }

            if ($array[$i] === 'I' && $array[$i + 1] === 'X') {
                array_push($ret, 9);
                $skip = true;
                continue;
            }

            if ($array[$i] === 'X' && $array[$i + 1] === 'L') {
                array_push($ret, 40);
                $skip = true;
                continue;
            }

            if ($array[$i] === 'X' && $array[$i + 1] === 'C') {
                array_push($ret, 90);
                $skip = true;
                continue;
            }

            if ($array[$i] === 'C' && $array[$i + 1] === 'D') {
                array_push($ret, 400);
                $skip = true;
                continue;
            }

            if ($array[$i] === 'C' && $array[$i + 1] === 'M') {
                array_push($ret, 900);
                $skip = true;
                continue;
            }

            array_push($ret, $this->convert($array[$i]));
        }

        $num = 0;
        for ($i = 0; $i < count($ret); $i++) {
            $num = $num + $ret[$i];
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
