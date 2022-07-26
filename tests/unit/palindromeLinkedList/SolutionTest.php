<?php

declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\palindromeLinkedList;

use PHPUnit\Framework\TestCase;
use serhioli\leetcode\palindromeLinkedList\ListNode;
use serhioli\leetcode\palindromeLinkedList\Solution;

final class SolutionTest extends TestCase
{
    public function testListNode(): void
    {
        $node = new ListNode();

        $this->assertInstanceOf(ListNode::class, $node);
        $this->assertSame(0, $node->val);
    }

    /**
     * @depends      testListNode
     * @dataProvider dataProvider
     */
    public function testIsSolved(ListNode $head, bool $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->isPalindrome($head);

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function dataProvider(): array
    {
        return [
            [
                $this->buildForSequence([1, 2, 1]), true,
            ],
            [
                $this->buildForSequence([1, 2, 2, 1]), true,
            ],
            [
                $this->buildForSequence([1, 2, 3, 1]), false,
            ],
            [
                $this->buildForSequence([-1, 2, 1]), false,
            ],
            [
                $this->buildForSequence([1, 0]), false,
            ],
        ];
    }

    protected function buildForSequence(array $seq): ListNode
    {
        $previous = null;
        foreach (array_reverse($seq) as $value) {
            $previous = new ListNode($value, $previous);
        }

        return $previous;
    }
}
