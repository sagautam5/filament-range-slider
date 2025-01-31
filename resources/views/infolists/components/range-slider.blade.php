<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div class="filament-range-slider-column w-full flex items-center gap-2">
        <div class="rounded-full bg-gray-200 dark:bg-gray-600 shadow-inner w-full">
            <div style="background-color: {{ $getColor() }}; width: {{ min( ($getState() - $getMinValue()) / ($getMaxValue() - $getMinValue()) * 100, 100) }}%" class="rounded-full h-3"></div>
        </div>
        <span class="text-sm text-gray-700 dark:text-gray-200">{{ $getState() }}</span>
    </div>
</x-dynamic-component>
