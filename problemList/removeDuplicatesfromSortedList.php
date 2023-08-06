<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function deleteDuplicates($head)
    {
        $array = array_unique($this->getVal($head));
        return $this->convert($array);
    }

    private function getVal($head, $array = [])
    {
        array_push($array, $head->val);
        if ($head->next) {
            $array = $this->getVal($head->next, $array);
        }
        return $array;
    }

    private function convert($array)
    {
        $next = null;
        $val  = array_shift($array);
        if ($array) {
            $next = $this->convert($array);
        }
        return new ListNode($val, $next);
    }
}
