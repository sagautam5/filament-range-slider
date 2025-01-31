<?php

namespace Sagautam5\FilamentRangeSlider\Traits;

use Closure;

trait HasMaxValue
{
    protected int $maxValue = 100;

    public function maxValue(int $maxValue): static
    {
        $this->maxValue = $maxValue;

        return $this;
    }

    public function showMaxValue(bool|Closure $show): static
    {
        $this->showMaxValue = (bool) $this->evaluate($show);

        return $this;
    }

    public function maxValueLabel(string|Closure $label): static
    {
        $this->maxValueLabel = (string) $this->evaluate($label);

        return $this;
    }

    public function getMaxValue(): int
    {
        return $this->maxValue;
    }

    public function shouldShowMaxValue(): bool
    {
        return $this->showMaxValue;
    }

    public function getMaxValueLabel(): string
    {
        return $this->maxValueLabel;
    }
}