<?php declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\palindromeNumber;

use PHPUnit\Framework\TestCase;
use serhioli\leetcode\palindromeNumber\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsSolved(int $x, bool $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->isPalindrome($x);

        $this->assertSame($expectedResult, $actualResult);
    }

    public function dataProvider(): array
    {
        return [
            [121, true],
            [-121, false],
            [728, false],
            [12, false],
        ];
    }
}
