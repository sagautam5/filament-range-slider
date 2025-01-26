<?php

namespace Sagautam5\FilamentRangeSlider\Enums;

enum RangeSliderSize: string
{
    case EXTRA_SMALL = 'xs';
    case SMALL = 'sm';
    case MEDIUM = 'md';
    case LARGE = 'lg';
    case EXTRA_LARGE = 'xl';
    public function height(): string
    {
        return match ($this) {
            self::EXTRA_SMALL => '1px',
            self::SMALL => '3px',
            self::MEDIUM => '5px',
            self::LARGE => '7px',
            self::EXTRA_LARGE => '8px',
        };
    }

    public function marginTop(): string
    {
        return match ($this) {
            self::EXTRA_SMALL => '-8px',
            self::SMALL => '-6px',
            self::MEDIUM => '-5px',
            self::LARGE => '-4px',
            self::EXTRA_LARGE => '-4px',
        };
    }
}
