@extends('frontend.layouts.master')

@section('mainContainer')
<x-carousel :services="$services"/>

<div class="mx-5 lg:mx-20 my-5 lg:my-10">
    <div class="text-center">
        <p class="text-slate-500 text-sm sm:text-base lg:text-lg">
            Painting your home is exciting, but choosing the right colours, products, and house 
            painters while ensuring your family’s safety can be a huge task. That's where we come in 
            with our aim to make home painting a safe and great experience! With Sargo Paints Safe 
            Painting Services, be rest assured from all your painting worries.
        </p>
        <p class="text-slate-500 mt-5 text-sm sm:text-base lg:text-lg">
            Start your consultation with Sargo Paints Safe Painting Services and let us guide you 
            through all the questions you may have.
        </p>
    </div>

    <h1 class="text-2xl lg:text-4xl text-neutral-700 font-bold mt-10 text-center lg:text-left">
        Our Services
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-10 gap-5 lg:gap-10">
        @foreach ($services as $service)
            <div>
                <img class="w-full h-40 sm:h-56 rounded-md transform transition-transform duration-300 ease-in-out hover:scale-110"
                    src="{{ $service->image }}" alt="">
                <p class="mt-3 text-lg font-semibold text-center sm:text-left">{{ $service->title }}</p>
                <p class="mt-3 text-sm text-justify">{!! $service->description !!}</p>
            </div>
        @endforeach
    </div>
</div>

<div class="mx-5 lg:mx-20 my-5 lg:my-20">
    <h1 class="text-2xl lg:text-4xl text-neutral-700 font-bold text-center lg:text-left">
        Why choose us?
    </h1>

    <div class="bg-slate-100 mt-10 px-5 py-5">
        <!-- Tab Navigation -->
        <div class="border-b border-gray-200 dark:border-neutral-700 overflow-x-auto">
            <nav class="flex gap-x-5 pt-5 whitespace-nowrap" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                @foreach ($whyChooses as $index => $whychoose)
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-neutral-800 hs-tab-active:text-neutral-800 
                        py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-base sm:text-xl whitespace-nowrap 
                        text-gray-500 hover:text-neutral-800 focus:outline-none focus:text-neutral-800 disabled:opacity-50 
                        disabled:pointer-events-none {{ $loop->first ? 'active' : '' }}"
                        id="tabs-with-underline-item-{{ $index }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}" 
                        data-hs-tab="#tabs-with-underline-{{ $index }}" aria-controls="tabs-with-underline-{{ $index }}" 
                        role="tab">
                        {{ $whychoose->title }}
                    </button>
                @endforeach
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="mt-10">
            @foreach ($whyChooses as $index => $whychoose)
                <div id="tabs-with-underline-{{ $index }}" role="tabpanel" aria-labelledby="tabs-with-underline-item-{{ $index }}" 
                    class="{{ $loop->first ? '' : 'hidden' }}">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-8 text-sm sm:text-base lg:text-lg">
                            {!! $whychoose->description !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
