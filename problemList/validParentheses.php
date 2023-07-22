<?php

class Solution
{

    private $parenthesesPattern = '/!(\(|\)|\[|\]|\{|\})/';

    /**
     * @param String $s
     * @return Boolean
     */
    public function isValid($s)
    {
        $closeingList = [];
        $string       =  preg_replace($this->parenthesesPattern, "", $s);
        $stringArray  = str_split($string);
        $count        = count($stringArray);

        for ($i = 0; $i < $count; $i++) {
            $target = $stringArray[$i];
            if ($this->isOpening($target)) {
                array_push($closeingList, $this->getCloseing($target));
            } else {
                if (array_pop($closeingList) !== $target) {
                    return false;
                }
            }
        }

        if (count($closeingList) !== 0) {
            return false;
        }

        return true;
    }

    private function isOpening(string $str): bool
    {
        if (preg_match('/\(|\[|\{/', $str)) {
            return true;
        }
        return false;
    }

    private function getCloseing($str): string
    {
        switch ($str) {
            case '(':
                return ')';
            case '[':
                return ']';
            case '{':
                return '}';
            default:
                return '';
        }
    }
}
