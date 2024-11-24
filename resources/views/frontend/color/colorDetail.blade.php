@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="mx-4 lg:mx-20 my-8 lg:my-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Image Carousel Section -->
            <div>
                <div class="text-center my-6">
                    <h1 class="font-bold text-lg lg:text-3xl">{{ $color->name }}</h1>
                </div>

                <style>
                    .carousel-item {
                        display: none;
                    }

                    .carousel-item.active {
                        display: block;
                    }
                </style>

                <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Main image display -->
                    <div class="carousel-container relative">
                        <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Room 1"
                            class="carousel-item active w-full h-[12rem] lg:h-[24rem] object-cover">
                        <img src="{{ asset('assets/frontend/staticimage/banner2.jpg') }}" alt="Room 2"
                            class="carousel-item w-full h-[12rem] lg:h-[24rem] object-cover">
                        <img src="{{ asset('assets/frontend/staticimage/banner3.jpg') }}" alt="Room 3"
                            class="carousel-item w-full h-[12rem] lg:h-[24rem] object-cover">
                    </div>
                </div>

                <!-- Thumbnails -->
                <div class="flex space-x-4 mt-4 overflow-x-auto pb-2">
                    <div class="text-center">
                        <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Thumbnail 1"
                            class="w-24 h-16 object-cover cursor-pointer rounded"
                            onclick="setSlide(0)">
                        <p class="font-bold text-sm text-neutral-700">Tranquill Bl..</p>
                        <p class="text-base font-semibold">9856</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('assets/frontend/staticimage/banner2.jpg') }}" alt="Thumbnail 2"
                            class="w-24 h-16 object-cover cursor-pointer rounded"
                            onclick="setSlide(1)">
                        <p class="font-bold text-sm text-neutral-700">Velvet Dre..</p>
                        <p class="text-base font-semibold">9856</p>
                    </div>
                    <div class="text-center hidden lg:block">
                        <img src="{{ asset('assets/frontend/staticimage/banner3.jpg') }}" alt="Thumbnail 3"
                            class="w-24 h-16 object-cover cursor-pointer rounded"
                            onclick="setSlide(2)">
                        <p class="font-bold text-sm text-neutral-700">Lasting Spre..</p>
                        <p class="text-base font-semibold">9856</p>
                    </div>
                </div>
            </div>

            <!-- Details Section -->
            <div class="flex flex-col justify-center bg-white shadow-lg rounded-lg p-6 space-y-4">
                <h1 class="font-bold text-2xl text-gray-800">Details</h1>
                <p class="text-lg text-neutral-700">
                    <span class="font-semibold">Color Name:</span> {{ $color->name }}
                </p>
                <p class="text-lg text-neutral-700">
                    <span class="font-semibold">Color Code:</span> {{ $color->color_code }}
                </p>
                <p class="text-lg text-neutral-700">
                    <span class="font-semibold">Description:</span> {!!$color->description!!}
                </p>
               
            </div>
        </div>
    </div>
@endsection
