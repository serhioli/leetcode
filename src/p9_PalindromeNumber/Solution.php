<?php

declare(strict_types=1);

namespace serhioli\leetcode\p9_PalindromeNumber;

class Solution
{
    public function isPalindrome(int $x): bool
    {
        $intStr = (string) $x;

        return strrev($intStr) === $intStr;
    }
}
