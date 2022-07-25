<?php

namespace serhioli\leetcode\palindromeLinkedList;

class ListNode
{
    public int $val = 0;
    public ListNode|null $next = null;

    function __construct(int $val = 0, ListNode $next = null)
    {
        $this->val  = $val;
        $this->next = $next;
    }
}
