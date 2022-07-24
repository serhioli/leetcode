<?php declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\palindromeLinkedList;

use PHPUnit\Framework\TestCase;
use serhioli\leetcode\palindromeLinkedList\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsSolved(int $x, bool $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->isPalindrome($x);

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function dataProvider(): array
    {
        return [
            [
                121, true
            ],
            [
                -121, false
            ],
            [
                10, false
            ]
        ];
    }
}
