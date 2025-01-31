<?php

namespace Sagautam5\FilamentRangeSlider\Infolists\Components;

use Filament\Infolists\Components\Entry;
use Sagautam5\FilamentRangeSlider\Traits\HasColor;
use Sagautam5\FilamentRangeSlider\Traits\HasMaxValue;
use Sagautam5\FilamentRangeSlider\Traits\HasMinValue;

class RangeSlider extends Entry
{
    use HasMinValue, HasMaxValue, HasColor;

    protected string $view = 'filament-range-slider::infolists.components.range-slider';
}
