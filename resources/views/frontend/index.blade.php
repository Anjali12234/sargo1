@extends('frontend.layouts.master')

@section('mainContainer')

@include('frontend.layouts.carousel')

<!-- End Slider -->
<div class="mx-0 lg:mx-20 my-0 lg:my-20">

    <section>
        <div class="text-center mx-8 lg:mx-0 my-6 lg:my-0">
            <h1 class="font-bold text-lg lg:text-3xl">Exquisite Finishes For Your Dream Home</h1>
        </div>
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
            <div class="relative bg-white shadow-lg  overflow-hidden mt-10">
                <div class="carousel-container relative">
                    <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Room 1"
                        class="carousel-item active w-full h-[12rem] lg:h-[24rem] object-cover">
                    <img src="{{ asset('assets/frontend/staticimage/banner2.jpg') }}" alt="Room 2"
                        class="carousel-item w-full h-[12rem] lg:h-[24rem]  object-cover">
                    <img src="{{ asset('assets/frontend/staticimage/banner3.jpg') }}" alt="Room 3"
                        class="carousel-item w-full h-[12rem] lg:h-[24rem]  object-cover">
                    <!-- Add more images as needed -->
                </div>


            </div>
            <div class="mx-4 lg:mx-0 my-6 lg:my-0">


                <div class="flex ">
                    <p class="text-lg mt-1 lg:mt-4 font-semibold text-neutral-700">PAINTS</p>
                    <span class="mt-4 ml-2 lg:ml-[13rem] text-2xl w-[2rem]">
                        <i class="ti ti-arrow-right"></i>
                    </span>
                </div>
                <!-- Thumbnails -->
                <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                    <div>
                        <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Thumbnail 1"
                            class="w-24 h-16 object-cover cursor-pointer rounded" onclick="setSlide(0)">
                        <p class="font-bold text-sm text-neutral-700">Tranquill Bl..</p>
                        <p class="text-base font-semibold">9856</p>
                    </div>
                    <div>
                        <img src="{{ asset('assets/frontend/staticimage/banner2.jpg') }}" alt="Thumbnail 2"
                            class="w-24 h-16 object-cover cursor-pointer rounded" onclick="setSlide(1)">
                        <p class="font-bold text-sm text-neutral-700">Velvet Dre..</p>
                        <p class="text-base font-semibold">9856</p>
                    </div>
                    <div class="hidden lg:block">
                        <img src="{{ asset('assets/frontend/staticimage/banner3.jpg') }}" alt="Thumbnail 3"
                            class="w-24 h-16 object-cover cursor-pointer rounded" onclick="setSlide(2)">
                        <p class="font-bold text-sm text-neutral-700">Lasting Spre..</p>
                        <p class="text-base font-semibold">9856</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection

