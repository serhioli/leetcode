<?php

namespace serhioli\leetcode\palindromeLinkedList;

class ListNode
{
    public int $val = 0;
    public ?ListNode $next = null;

    public function __construct(int $val = 0, ?self $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
