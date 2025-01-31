<?php

namespace Sagautam5\FilamentRangeSlider\Traits;

use Closure;

trait HasMinValue
{
    protected int $minValue = 0;

    protected bool $showMinValue = false;

    protected string $minValueLabel = 'Min';

    public function minValue(int $minValue): static
    {
        $this->minValue = $minValue;

        return $this;
    }

    public function minValueLabel(string|Closure $label): static
    {
        $this->minValueLabel = (string) $this->evaluate($label);

        return $this;
    }

    public function showMinValue(bool|Closure $show): static
    {
        $this->showMinValue = (bool) $this->evaluate($show);

        return $this;
    }
    public function getMinValue(): int
    {
        return $this->minValue;
    }

    public function shouldShowMinValue(): bool
    {
        return $this->showMinValue;
    }

    public function getMinValueLabel(): string
    {
        return $this->minValueLabel;
    }
}