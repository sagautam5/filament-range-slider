<?php

namespace Sagautam5\FilamentRangeSlider\Traits;

use Sagautam5\FilamentRangeSlider\Enums\RangeSliderSize;

trait HasSize
{
    protected RangeSliderSize $size = RangeSliderSize::MEDIUM;

    public function size(RangeSliderSize $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): RangeSliderSize
    {
        return $this->size;
    }
}