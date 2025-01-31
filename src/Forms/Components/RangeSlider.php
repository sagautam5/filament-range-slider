<?php

namespace Sagautam5\FilamentRangeSlider\Forms\Components;

use Closure;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasExtraAttributes;
use Sagautam5\FilamentRangeSlider\Enums\RangeSliderSize;
use Sagautam5\FilamentRangeSlider\Traits\HasColor;
use Sagautam5\FilamentRangeSlider\Traits\HasMaxValue;
use Sagautam5\FilamentRangeSlider\Traits\HasMinValue;
use Sagautam5\FilamentRangeSlider\Traits\HasSize;
use Sagautam5\FilamentRangeSlider\Traits\HasStep;

class RangeSlider extends Field
{
    use HasExtraAttributes;

    use HasMinValue, HasMaxValue, HasColor, HasSize, HasStep;

    protected string $view = 'filament-range-slider::forms.components.range-slider';
    
    protected int $default = 0;
                
    protected bool $showMaxValue = false;


    protected string $maxValueLabel = 'Max';
    

    public function default(mixed $default): static
    {
        $this->default = (int) $this->evaluate($default);

        return $this;
    }

    public function getDefault(): int
    {
        return $this->default;
    }

    public function getRangeValues(): array
    {
        return [$this->minValue, $this->maxValue];
    }
}
