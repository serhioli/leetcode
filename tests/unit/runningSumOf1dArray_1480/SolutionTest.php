<?php declare(strict_types=1);

namespace serhioli\leetcode\tests\unit\runningSumOf1dArray_1480;

use PHPUnit\Framework\TestCase;
use serhioli\leetcode\p1480_RunningSumOf1dArray\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsSolved(array $nums, array $expectedResult): void
    {
        $solution = new Solution();

        $actualResult = $solution->runningSum($nums);

        $this->assertSameSize($nums, $actualResult);
        $this->assertEquals($expectedResult, $actualResult);

    }

    public function dataProvider(): array
    {
        return [
            [
                [1, 2, 3, 4],
                [1, 3, 6, 10],
            ],
            [
                [1, 1, 1, 1, 1],
                [1, 2, 3, 4, 5],
            ],
        ];
    }
}
