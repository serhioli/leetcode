<?php

namespace serhioli\leetcode\p234_PalindromeLinkedList;

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
