<?php

declare(strict_types=1);

namespace serhioli\leetcode\twoSum;

class Solution
{
    public function twoSum(array $nums, int $target): ?array
    {
        foreach ($nums as $numAIndex => $numA) {
            foreach ($nums as $numBIndex => $numB) {
                if ($numAIndex === $numBIndex) {
                    continue;
                }
                if ($numA + $numB === $target) {
                    return [$numAIndex, $numBIndex];
                }
            }
        }
    }

    public function _twoSum(array $nums, int $target): ?array
    {
        $remains = array_flip($nums);

        foreach ($nums as $index => $value) {
            if ($remain_index = $remains[$value - $target] ?? null) {
                if ($index !== $remain_index) {
                    return $remain_index;
                }
            }
        }

        return null;
    }
}
