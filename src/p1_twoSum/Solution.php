<?php

declare(strict_types=1);

namespace serhioli\leetcode\p1_twoSum;

class Solution
{
    /**
     * @psalm-param list<int> $nums
     *
     * @psalm-return array<int, int>|null
     */
    public function twoSum(array $nums, int $target): ?array
    {
        $remains = array_flip($nums);

        foreach ($nums as $index => $value) {
            $remainExpected = $target - $value;
            $remainIndex = $remains[$remainExpected] ?? null;
            if (!$remainIndex || $remainIndex === $index) {
                continue;
            }

            return [$remainIndex, $index];
        }

        return null;
    }
}
