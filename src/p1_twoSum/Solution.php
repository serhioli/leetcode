<?php

declare(strict_types=1);

namespace serhioli\leetcode\p1_twoSum;

class Solution
{
    /**
     * @param int[] $nums
     *
     * @return array{array-key, array-key}|null
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
