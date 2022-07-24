<?php

declare(strict_types=1);

namespace serhioli\leetcode\palindromeLinkedList;

class Solution
{
    function isPalindrome(int $x): bool
    {
        $intStr = (string)$x;

        return strrev($intStr) === $intStr;
    }
}
