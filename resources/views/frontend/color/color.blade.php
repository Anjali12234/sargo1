@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="mx-0 lg:mx-20 my-0 lg:my-20">
        <div class="px-5 font-slabo">
            <!-- Tabs -->
            <div class="border-b border-gray-200 dark:border-neutral-700">
                <nav class="flex gap-x-1 overflow-x-auto scrollbar-hidden whitespace-nowrap" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                    <!-- All Tab -->
                    <button type="button"
                        class="px-5 hs-tab-active:font-semibold hs-tab-active:text-blue-600 
                               hs-tab-active:bg-slate-100 py-4 inline-flex flex-col items-center gap-y-2 border-b-2 
                               border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 
                               focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none 
                               dark:text-neutral-400 dark:hover:text-blue-500 active"
                        id="tabs-with-underline-item-all" aria-selected="true" data-hs-tab="#tabs-with-underline-all"
                        role="tab">
                        <div class="bg-white border-2 h-10 w-10 rounded-full"></div>
                        <span>All</span>
                    </button>

                    <!-- Loop Tabs -->
                    @foreach ($colorCategories as $index => $colorCategory)
                        <button type="button"
                            class="px-5 hs-tab-active:font-semibold hs-tab-active:text-blue-600 
                                   hs-tab-active:bg-slate-100 py-4 inline-flex flex-col items-center gap-y-2 border-b-2 
                                   border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 
                                   focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none 
                                   dark:text-neutral-400 dark:hover:text-blue-500"
                            id="tabs-with-underline-item-{{ $index }}" aria-selected="false"
                            data-hs-tab="#tabs-with-underline-{{ $index }}" role="tab">
                            <div class="bg-{{ $colorCategory->color_code }}">
                                <img class="border-2 h-10 w-10 rounded-full" src="{{ $colorCategory->color_code_image }}" alt="">
                            </div>
                            <span>{{ $colorCategory->color_name }}</span>
                        </button>
                    @endforeach
                </nav>
            </div>

            <!-- Tab Content -->
            <div class="bg-slate-100 px-5 pt-5">
                <!-- All Tab Content -->
                <div id="tabs-with-underline-all" class="" role="tabpanel"
                    aria-labelledby="tabs-with-underline-item-all">
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-8 ">
                    {{-- <div class="flex gap-20"> --}}
                        @foreach ($colorCategories as $colorCategory)
                            @foreach ($colorCategory->colors as $color)
                                <div>
                                    <a href="{{ route('colorDetail', $color) }}">
                                        <div class="rounded-lg h-24 w-24 overflow-hidden bg-gray-200">
                                            <img class="h-full w-full object-cover" src="{{ $color->color_code_image }}"
                                                alt="">
                                        </div>

                                        <p class="text-gray-500 dark:text-neutral-400">
                                            {{ $color->name }}
                                        </p>
                                        <p class="text-gray-500 dark:text-neutral-400">{{ $color->color_code }}</p>
                                    </a>
                                </div>
                            @endforeach
                        @endforeach


                    </div>
                </div>

                <!-- Loop Tab Content -->
                @foreach ($colorCategories as $index => $colorCategory)
                    <div id="tabs-with-underline-{{ $index }}" role="tabpanel"
                        aria-labelledby="tabs-with-underline-item-{{ $index }}" class="hidden">
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-8 ">
                            @foreach ($colorCategory->colors as $color)
                                <div>
                                    <a href="{{ route('colorDetail', $color) }}">
                                        <div class="rounded-lg h-24 w-24 overflow-hidden bg-gray-200">
                                            <img class="h-full w-full object-cover" src="{{ $color->color_code_image }}" alt="">
                                        </div>
                                        <p class="text-gray-500 dark:text-neutral-400">{{ $color->name }}</p>
                                        <p class="text-gray-500 dark:text-neutral-400">{{ $color->color_code }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
