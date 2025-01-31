<?php 

namespace Sagautam5\FilamentRangeSlider\Traits;

trait HasStep   
{
    protected int $step = 1;

    public function step(int $step): static
    {
        $this->step = $step;

        return $this;
    }

    public function getStep(): int
    {
        return $this->step;
    }
}