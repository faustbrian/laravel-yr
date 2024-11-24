<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Yr\Location\Data\Forecast;

use Spatie\LaravelData\Data;

final class Wind extends Data
{
    private function __construct(
        public readonly float $min,
        public readonly float $max,
    ) {
        //
    }

    public static function fromResponse(array $data): self
    {
        return new self(
            min: $data['min'],
            max: $data['max'],
        );
    }
}
