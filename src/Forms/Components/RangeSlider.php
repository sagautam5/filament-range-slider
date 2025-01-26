<?php

namespace Sagautam5\FilamentRangeSlider\Forms\Components;

use Closure;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasExtraAttributes;
use Sagautam5\FilamentRangeSlider\Enums\RangeSliderSize;

class RangeSlider extends Field
{
    use HasExtraAttributes;

    protected string $view = 'filament-range-slider::forms.components.range-slider';

    protected int $minValue = 0;
    
    protected int $maxValue = 100;
    
    protected int $default = 0;
    
    protected int $step = 1;
    
    protected RangeSliderSize $size = RangeSliderSize::MEDIUM;
    
    protected string $accentColor = '#f59e0b';
    
    protected bool $showMaxValue = false;

    protected bool $showMinValue = false;

    protected string $maxValueLabel = 'Max';
    
    protected string $minValueLabel = 'Min';

    public function minValue(string|int|Closure $minValue): static
    {
        $this->minValue = (int) $this->evaluate($minValue);

        return $this;
    }

    public function maxValue(string|int|Closure $maxValue): static
    {
        $this->maxValue = (int) $this->evaluate($maxValue);

        return $this;
    }

    public function default(mixed $default): static
    {
        $this->default = (int) $this->evaluate($default);

        return $this;
    }

    public function step(int|Closure $step): static
    {
        $this->step = (int) $this->evaluate($step);

        return $this;
    }

    public function size(RangeSliderSize $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function accentColor(string|Closure $color): static
    {
        $this->accentColor = (string) $this->evaluate($color);

        return $this;
    }

    public function showMaxValue(bool|Closure $show): static
    {
        $this->showMaxValue = (bool) $this->evaluate($show);

        return $this;
    }

    public function showMinValue(bool|Closure $show): static
    {
        $this->showMinValue = (bool) $this->evaluate($show);

        return $this;
    }

    public function maxValueLabel(string|Closure $label): static
    {
        $this->maxValueLabel = (string) $this->evaluate($label);

        return $this;
    }

    public function minValueLabel(string|Closure $label): static
    {
        $this->minValueLabel = (string) $this->evaluate($label);

        return $this;
    }

    public function getMinValue(): int
    {
        return $this->minValue;
    }

    public function getMaxValue(): int
    {
        return $this->maxValue;
    }

    public function getDefault(): int
    {
        return $this->default;
    }

    public function getStep(): int
    {
        return $this->step;
    }

    public function getSize(): RangePickerSize
    {
        return $this->size;
    }

    public function getAccentColor(): string
    {
        return $this->accentColor;
    }

    public function shouldShowMaxValue(): bool
    {
        return $this->showMaxValue;
    }

    public function shouldShowMinValue(): bool
    {
        return $this->showMinValue;
    }

    public function getMaxValueLabel(): string
    {
        return $this->maxValueLabel;
    }

    public function getMinValueLabel(): string
    {
        return $this->minValueLabel;
    }

    public function getRangeValues(): array
    {
        return [$this->minValue, $this->maxValue];
    }
}
