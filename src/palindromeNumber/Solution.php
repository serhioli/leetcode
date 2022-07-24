<?php

declare(strict_types=1);

namespace serhioli\leetcode\palindromeNumber;

class Solution
{
    public function isPalindrome(int $x): bool
    {
        $intStr = (string)$x;

        return strrev($intStr) === $intStr;
    }
}
