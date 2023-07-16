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
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $reverse1 = $this->convertArray($l1);
        $reverse2 = $this->convertArray($l2);
        
        if (count($reverse1) < count($reverse2)) {
            $count = count($reverse2);
        } else {
            $count = count($reverse1);
        }
        
        $sumArray = [];
        $carryForwardFlag = false;
        for($i = 0; $i < $count; $i++) {
            $num1 = isset($reverse1[$i]) ? $reverse1[$i] : 0;
            $num2 = isset($reverse2[$i]) ? $reverse2[$i] : 0;

            $sum = $num1 + $num2;
            if ($carryForwardFlag) {
                $sum++;
            }
            $carryForwardFlag = false;
            
            if ($sum < 10) {
                array_push($sumArray, $sum);
            } else {
                array_push($sumArray, $sum - 10);
                $carryForwardFlag = true;
            }
        }

        if ($carryForwardFlag) {
            array_push($sumArray, 1);
        }

        $listNode = $this->convertListNode($sumArray);
        return $listNode;
    }

    function convertArray($l) {
        $ret = [];
        array_push($ret, $l->val);
        if ($l->next !== null) {
            $ret = array_merge($ret, $this->convertArray($l->next));
        }
        return $ret;
    }

    function convertListNode($array) {
        $reverseArray = array_reverse($array);
        $listNode = null;
        foreach($reverseArray as $val) {
            $listNode = new ListNode($val, $listNode);
        }
        return $listNode;
    }
}
