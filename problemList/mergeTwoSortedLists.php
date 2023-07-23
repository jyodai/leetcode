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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function mergeTwoLists($list1, $list2)
    {
        if ($list1->val === null) {
            return $list2;
        }
        if ($list2->val === null) {
            return $list1;
        }

        $array1 = $this->convertArray($list1);
        $array2 = $this->convertArray($list2);

        $merge = array_merge($array1, $array2);
        asort($merge);

        return $this->convertList($merge);
    }

    public function convertArray($list): array
    {
        if ($list->val === null) {
            return [];
        }

        $ret    = [];
        $target = null;
        do {
            if ($target === null) {
                $target = $list;
            } else {
                $target = $target->next;
            }
            array_push($ret, $target->val);
        } while ($target->next !== null);
        return $ret;
    }

    public function convertList($merge)
    {
        $val = array_shift($merge);
        if (count($merge) === 0) {
            return new ListNode($val);
        } else {
            return new ListNode($val, $this->convertList($merge));
        }
    }
}
