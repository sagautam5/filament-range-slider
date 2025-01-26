<?php 

namespace Sagautam5\FilamentRangeSlider\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RangeSliderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::addNamespace('filament-range-slider', __DIR__ . '/../../resources/views');
    }
}  