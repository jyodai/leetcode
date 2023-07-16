<?php

class Solution
{

  /**
   * @param int[] $nums
   * @param int $target
   * @return int[]
   */
    public function twoSum($nums, $target)
    {
        $ret = [];

        foreach ($nums as $index => $numA) {
            $searchNum   = $target - $numA;
            $searchIndex = array_search($searchNum, $nums);
            if ($searchIndex !== false && $index !== $searchIndex) {
                return [$index, $searchIndex];
            }
        }
    }

    public function execTest()
    {
        $this->testFirst();
        $this->testSecond();
        $this->testThird();
    }

    public function testFirst()
    {
        $nums   = [2,7,11,15];
        $target = 9;
        $result = $this->twoSum($nums, $target);
        assert($result === [0, 1] || $result === [1, 0]);
    }
  
    public function testSecond()
    {
        $nums   = [3,2,4];
        $target = 6;
        $result = $this->twoSum($nums, $target);
        assert($result === [1, 2] || $result === [2, 1]);
    }

    public function testThird()
    {
        $nums   = [3,3];
        $target = 6;
        $result = $this->twoSum($nums, $target);
        assert($result === [0, 1] || $result === [1, 0]);
    }
}

$solution = new Solution();
$solution->execTest();
