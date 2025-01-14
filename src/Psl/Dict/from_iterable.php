<?php

declare(strict_types=1);

namespace Psl\Dict;

/**
 * Convert the given iterable to a dict.
 *
 * @template Tk of array-key
 * @template Tv
 *
 * @param iterable<Tk, Tv> $iterable
 *
 * @return array<Tk, Tv>
 */
function from_iterable(iterable $iterable): array
{
    $result = [];
    foreach ($iterable as $key => $value) {
        $result[$key] = $value;
    }

    return $result;
}
