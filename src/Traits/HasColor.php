<?php 

namespace Sagautam5\FilamentRangeSlider\Traits;

trait HasColor
{
    protected string $color = '#f59e0b';

    public function color(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}