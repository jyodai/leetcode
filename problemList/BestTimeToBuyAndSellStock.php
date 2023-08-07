<?php

class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
    {
        $count     = count($prices);
        $minVal    = $prices[0];
        $maxProfit = 0;
        for ($i = 0; $i < $count; $i++) {
            $price = (int) $prices[$i];
            if ($price < $minVal) {
                $minVal = $price;
            }
            $profit    = $price - $minVal;
            $maxProfit = max($maxProfit, $profit);
        }
        return $maxProfit;
    }
}
