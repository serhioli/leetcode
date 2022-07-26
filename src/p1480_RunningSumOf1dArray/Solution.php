<?php

declare(strict_types=1);

namespace serhioli\leetcode\p1480_RunningSumOf1dArray;

class Solution
{
    /**
     * @psalm-param list<int> $nums
     *
     * @psalm-return list<int>
     */
    public function runningSum(array $nums): array
    {
        $runningSum = 0;

        return array_map(
            static function(int $value) use (&$runningSum): int {
                $runningSum = (int)$runningSum + $value;

                return $value + ($runningSum - $value);
            },
            $nums
        );
    }
}
