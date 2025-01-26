<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ 
            state: $wire.$entangle('{{ $getStatePath() }}'),
        }">

            <style type="text/css">
                input[id="{{$getId()}}"] {
                    accent-color: {!!$getAccentColor() !!};
                }
                input[id="{{$getId()}}"]::-webkit-slider-thumb {
                    margin-top: {!! ($getSize()->marginTop()) !!};
                }
                input[id="{{$getId()}}"]::-webkit-slider-runnable-track {
                    height: {!! $getSize()->height()!!};
                }
            </style>

            <div class="w-9/12 relative">
                <input
                    id="{{$getId()}}" 
                    x-model="state"
                    type="range" 
                    value="{{$getDefault()}}" 
                    class="w-full cursor-pointer"
                    min="{{$getMinValue()}}"
                    max="{{$getMaxValue()}}"
                    step="{{$getStep()}}"
                    @if($isDisabled()) disabled @endif
                >

                <div class="mt-1/4">
                    @if($shouldShowMinValue())
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0">{{$getMinValueLabel()}}: {{$getMinValue()}}</span>
                    @endif
                    @if($shouldShowMaxValue())
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0">{{$getMaxValueLabel()}}: {{$getMaxValue()}}</span>
                    @endif    
                </div>
            </div>

            <div class="w-3/12 flex justify-center">
                <span 
                    x-text="state" 
                    class="text-sm text-gray-500 dark:text-gray-400"
                ></span>
            </div>        
    </div>
</x-dynamic-component>
