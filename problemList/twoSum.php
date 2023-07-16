<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  function twoSum($nums, $target) {
      $ret = [];

      foreach ($nums as $index => $numA) {
          $searchNum = $target - $numA;
          $searchIndex = array_search($searchNum, $nums);
          if ($searchIndex !== false && $index !== $searchIndex) {
              return [$index, $searchIndex];
          }
      }
  }
}
