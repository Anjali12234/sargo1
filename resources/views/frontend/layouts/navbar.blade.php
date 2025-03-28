    <!-- ========== HEADER ========== -->
    <header
        class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full h-20 bg-white border-b border-gray-200
         dark:bg-neutral-800 dark:border-neutral-700 sticky top-0">
        <nav
            class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-0
             md:py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center gap-x-1">
                <div class='flex items-center gap-4 px-3 md:px-10'>
                    <a href="{{ route('welcome') }}">
                        <img src="{{ systemSetting()?->logo1 }}" alt="logo" class='w-44 h-24' />
                    </a>

                </div>

                <!-- Collapse Button -->
                <button type="button"
                    class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center
                    font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100
                    focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none
                    dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- End Collapse Button -->
            </div>

            <!-- Collapse -->
            <div id="hs-header-base"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block bg-white"
                aria-labelledby="hs-header-base-collapse">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full
                     [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300
                     dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                        <div class="grow">
                            <div class="flex flex-col md:flex-row md:justify-center md:items-center gap-0.5 md:gap-1">

                                @foreach (menus() as $menu)
                                    <div
                                        class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true]
                                    md:[--is-collapse:false] ">
                                        <a href="{{ App\Helpers::getFrontUrl($menu) }}" id="hs-header-base-dropdown"
                                            type="button"
                                            class="hs-dropdown-toggle w-full p-2 flex items-center text-lg font-semibold text-gray-800 hover:bg-gray-100
                                    rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700
                                    dark:focus:bg-neutral-700"
                                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m3 10 2.5-2.5L3 5" />
                                                <path d="m3 19 2.5-2.5L3 14" />
                                                <path d="M10 6h11" />
                                                <path d="M10 12h11" />
                                                <path d="M10 18h11" />
                                            </svg>
                                            {{ $menu->title }}
                                            @if ($menu->children->isNotEmpty())
                                                <svg class="hs-dropdown-open:rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            @endif
                                        </a>

                                        @if ($menu->children->isNotEmpty())
                                            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="hs-header-base-dropdown">
                                                <div class="py-1 md:px-1 space-y-0.5">
                                                    @foreach ($menu->children as $menu)
                                                        <div
                                                            class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                                                            @if ($menu->children->isNotEmpty())
                                                                <a href="#" id="hs-header-base-dropdown-sub"
                                                                    type="button"
                                                                    class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                    {{ $menu->title }}
                                                                    @if ($menu->children->isNotEmpty())
                                                                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path d="m6 9 6 6 6-6" />
                                                                    </svg>
                                                                    @endif
                                                                </a>
                                                            @else
                                                                <a href="{{ App\Helpers::getFrontUrl($menu) }}"
                                                                    id="hs-header-base-dropdown-sub" type="button"
                                                                    class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                                    {{ $menu->title }}
                                                                    @if ($menu->children->isNotEmpty())
                                                                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path d="m6 9 6 6 6-6" />
                                                                    </svg>
                                                                    @endif
                                                                </a>
                                                            @endif
                                                            @if ($menu->children->isNotEmpty())
                                                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                                                    role="menu" aria-orientation="vertical"
                                                                    aria-labelledby="hs-header-base-dropdown-sub">
                                                                    <div class="p-1 space-y-1">
                                                                        @foreach ($menu->children as $menu)
                                                                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                                href="{{ App\Helpers::getFrontUrl($menu) }}">
                                                                                {{ $menu->title }}
                                                                            </a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                {{-- <div
                                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true]
                                    md:[--is-collapse:false] ">
                                    <button id="hs-header-base-dropdown" type="button"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-lg font-semibold text-gray-800 hover:bg-gray-100
                                    rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700
                                    dark:focus:bg-neutral-700"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m3 10 2.5-2.5L3 5" />
                                            <path d="m3 19 2.5-2.5L3 14" />
                                            <path d="M10 6h11" />
                                            <path d="M10 12h11" />
                                            <path d="M10 18h11" />
                                        </svg>
                                        Products
                                        <svg class="hs-dropdown-open:rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>


                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-header-base-dropdown">
                                        <div class="py-1 md:px-1 space-y-0.5">
                                            @foreach (\App\Enums\ProductCategoryEnum::cases() as $case)
                                                <div
                                                    class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                                                    <button id="hs-header-base-dropdown-sub" type="button"
                                                        class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                        {{ $case->label() }}
                                                        <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m6 9 6 6 6-6" />
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                                        role="menu" aria-orientation="vertical"
                                                        aria-labelledby="hs-header-base-dropdown-sub">
                                                        <div class="p-1 space-y-1">
                                                            @foreach (productCategories() as $productCategory)
                                                                @if ($productCategory->type == $case)
                                                                    <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                                        href="{{ route('productCategory', $productCategory) }}">
                                                                        {{ $productCategory->title }}
                                                                    </a>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>                               

                                <div
                                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                                    <button id="hs-header-base-dropdown" type="button"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-lg font-semibold text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m3 10 2.5-2.5L3 5" />
                                            <path d="m3 19 2.5-2.5L3 14" />
                                            <path d="M10 6h11" />
                                            <path d="M10 12h11" />
                                            <path d="M10 18h11" />
                                        </svg>
                                        Ideas
                                        <svg class="hs-dropdown-open:rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-header-base-dropdown">
                                        <div class="py-1 md:px-1 space-y-0.5">

                                            <div
                                                class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                                                <a href="{{route('color')}}" id="hs-header-base-dropdown-sub" type="button"
                                                    class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                    Colours
                                                </a>
                                            </div>
                                       

                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                                    <button id="hs-header-base-dropdown" type="button"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-lg font-semibold text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m3 10 2.5-2.5L3 5" />
                                            <path d="m3 19 2.5-2.5L3 14" />
                                            <path d="M10 6h11" />
                                            <path d="M10 12h11" />
                                            <path d="M10 18h11" />
                                        </svg>
                                        Services
                                        <svg class="hs-dropdown-open:rotate-180 duration-300 shrink-0 size-4 ms-auto md:ms-1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-header-base-dropdown">
                                        <div class="py-1 md:px-1 space-y-0.5">
                                            @foreach (\App\Enums\ServiceType::cases() as $case)
                                                <div
                                                    class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                                                    <a href="{{ route('service', $case) }}"
                                                        id="hs-header-base-dropdown-sub" type="button"
                                                        class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                                        {{ $case->label() }}
                                                    </a>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                                    <button id="hs-header-base-dropdown" type="button"
                                        class="hs-dropdown-toggle w-full p-2 flex items-center text-lg font-semibold text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m3 10 2.5-2.5L3 5" />
                                            <path d="m3 19 2.5-2.5L3 14" />
                                            <path d="M10 6h11" />
                                            <path d="M10 12h11" />
                                            <path d="M10 18h11" />
                                        </svg>
                                        BathSense
                                      
                                    </button>

                                
                                </div> --}}


                            </div>
                        </div>



                        <!-- Button Group -->
                        <div class="hidden md:flex flex-wrap items-center gap-x-1.5">
                            <div class="max-w-sm">
                                <!-- SearchBox -->
                                <div class="relative"
                                    data-hs-combo-box='{
                                  "groupingType": "default",
                                  "preventSelection": true,
                                  "isOpenOnFocus": true,
                                  "groupingTitleTemplate": "<div class=\"block text-xs text-gray-500 m-3 mb-1 dark:text-neutral-500 dark:border-neutral-700\"></div>"
                                }'>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                            <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.3-4.3"></path>
                                            </svg>
                                        </div>
                                        <form action="{{ route('search') }}" method="GET">
                                            <input
                                                class="py-3 ps-10 pe-4 block w-full border-gray-200 rounded-lg 
                                            text-sm focus:border-blue-500 focus:ring-blue-500 
                                            disabled:opacity-50 disabled:pointer-events-none 
                                            dark:bg-neutral-900 dark:border-neutral-700 
                                            dark:text-neutral-400 dark:placeholder-neutral-500 
                                            dark:focus:ring-neutral-600"
                                                name="query" type="text" role="combobox" aria-expanded="false"
                                                placeholder="Search.." value="{{ request('query') }}"
                                                data-hs-combo-box-input="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->
