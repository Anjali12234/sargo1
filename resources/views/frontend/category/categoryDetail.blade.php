@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="mx-4 lg:mx-20 my-8 lg:my-20">
        <div class="text-center my-6">
            <h1 class="font-bold text-lg lg:text-3xl text-gray-800 hover:text-indigo-600 transition-all duration-300">
                {{ $categoryList->title }}
            </h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-5">
            <!-- Image Carousel Section -->
            <div>
              

                <section>
                    <div class="relative bg-white shadow-lg overflow-hidden rounded-lg hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{ $categoryList->image }}" alt="Room" class="w-full h-[30rem] object-cover">
                    </div>
                </section>
            </div>

            <!-- Details Section -->
            <div class="flex flex-col justify-center bg-white shadow-lg rounded-lg p-6 space-y-6 transition-transform hover:scale-105 duration-300">
                <h1 class="font-bold text-2xl text-gray-800 border-b pb-2">Details</h1>
                <div class="space-y-4">
                    <p class="text-lg text-neutral-700">
                        <span class="font-semibold">Title:</span> 
                        <span class="text-indigo-600">{{ $categoryList->title }}</span>
                    </p>
                    <p class="text-lg text-neutral-700">
                        <span class="font-semibold">Category Title:</span> 
                        <span class="text-indigo-600">{{ $categoryList->category->title }}</span>
                    </p>
                    <p class="text-lg text-neutral-700">
                        <span class="font-semibold">Description:</span> 
                        <span class="italic">{!! $categoryList->description !!}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
