<div class="w-full filament-range-slider-column flex items-center gap-2 px-3">
    <div class="rounded-full bg-gray-200 dark:bg-gray-600 shadow-inner w-full">
        <div style="background-color: {{ 'red' }}; width: {{min(20 ,100) }}%" class="rounded-full h-3"></div>
    </div>
    <span class="text-sm text-gray-700 dark:text-gray-200">{{ $getState() }}</span>
</div>