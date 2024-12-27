<div {{ $attributes->merge(['class' => 'hs-dropdown [--strategy:static] md:[--strategy:absolute] relative']) }}>
    <button type="button" 
        class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none dark:text-neutral-400 dark:hover:bg-neutral-700">
        {{ $title }}
        <svg class="hs-dropdown-open:rotate-180 duration-300 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>

    @if ($items->isNotEmpty())
        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[150ms] opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:md:bg-neutral-800">
            <div class="p-1 space-y-1">
                @foreach ($items as $item)
                    <x-dropdown :title="$item->title" :items="$item->children" />
                @endforeach
            </div>
        </div>
    @endif
</div>
