<?php

declare(strict_types=1);

namespace serhioli\leetcode\p234_palindromeLinkedList;

class Solution
{
    public function isPalindrome(ListNode $head): bool
    {
        $result = '';

        $next = $head;
        while ($next) {
            $result .= $next->val;
            $next = $next->next;
        }

        return strrev($result) === $result;
    }
}
