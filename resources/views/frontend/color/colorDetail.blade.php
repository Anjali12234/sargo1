@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="mx-4 lg:mx-20 my-8 lg:my-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Image Carousel Section -->
            <div>
                <div class="text-center my-6">
                    <h1 class="font-bold text-lg lg:text-3xl">{{ $color->name }}</h1>
                </div>

                <section>
                   
                    <style>
                        .carousel-item {
                            display: none;
                        }

                        .carousel-item.active {
                            display: block;
                        }
                    </style>
                    <div class="max-w-5xl">
                        <!-- Main image display -->
                        <div class="relative bg-white shadow-lg overflow-hidden mt-10">
                            <div class="carousel-container relative">
                                <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Room 1"
                                    class="carousel-item active w-full h-[12rem] lg:h-[24rem] object-cover">
                                <img src="{{ asset('assets/frontend/staticimage/banner2.jpg') }}" alt="Room 2"
                                    class="carousel-item w-full h-[12rem] lg:h-[24rem] object-cover">
                                <img src="{{ asset('assets/frontend/staticimage/banner3.jpg') }}" alt="Room 3"
                                    class="carousel-item w-full h-[12rem] lg:h-[24rem] object-cover">
                            </div>
                        </div>
                        <div class="mx-4 lg:mx-0 my-6 lg:my-0">
                            <div class="flex">
                                <p class="text-lg mt-1 lg:mt-4 font-semibold text-neutral-700">PAINTS</p>
                                <span class="mt-4 ml-2 lg:ml-[13rem] text-2xl w-[2rem]">
                                    <i class="ti ti-arrow-right"></i>
                                </span>
                            </div>
                            <!-- Thumbnails -->
                            <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                                <div class="thumbnail" onclick="setSlide(0)">
                                    <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Thumbnail 1"
                                        class="w-32 h-24 object-cover cursor-pointer rounded border-2 border-transparent active-thumbnail">
                                    <p class="font-bold text-sm text-neutral-700">Tranquill Bl..</p>
                                    <p class="text-base font-semibold">9856</p>
                                </div>
                                <div class="thumbnail" onclick="setSlide(1)">
                                    <img src="{{ asset('assets/frontend/staticimage/banner2.jpg') }}" alt="Thumbnail 2"
                                        class="w-32 h-24 object-cover cursor-pointer rounded border-2 border-transparent">
                                    <p class="font-bold text-sm text-neutral-700">Velvet Dre..</p>
                                    <p class="text-base font-semibold">9856</p>
                                </div>
                                <div class="thumbnail hidden lg:block" onclick="setSlide(2)">
                                    <img src="{{ asset('assets/frontend/staticimage/banner3.jpg') }}" alt="Thumbnail 3"
                                        class="w-32 h-24 object-cover cursor-pointer rounded border-2 border-transparent">
                                    <p class="font-bold text-sm text-neutral-700">Lasting Spre..</p>
                                    <p class="text-base font-semibold">9856</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                    <span class="font-semibold">Description:</span> {!! $color->description !!}
                </p>
            </div>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        function setSlide(index) {
            slides[currentSlide].classList.remove('active');
            currentSlide = index;
            slides[currentSlide].classList.add('active');
        }
    </script>
@endsection
