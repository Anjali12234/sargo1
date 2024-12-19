@extends('frontend.layouts.master')

@section('mainContainer')


    @include('frontend.layouts.carousel')

    <div class="mx-0 lg:mx-20 my-0 lg:my-20 mt-10">
        <div class="grid  gap-5  shadow-sm overflow-hidden sm:flex   
                dark:shadow-neutral-700/70 ">
                <div class="flex flex-col flex-[1_0_0%] bg-white dark:bg-neutral-800 shadow-xl shadow-neutral-200">
                    <!-- Image Container with Zoom Effect -->
                    <div class="relative overflow-hidden">
                        <img class="w-full h-56 sm:rounded-se-none transform transition-transform duration-300 ease-in-out hover:scale-110"
                            src="{{ $productCategory->image }}" alt="Card Image">
                    </div>

                    <div class="p-4 flex-1 md:p-5">
                        <!-- Flex container for title and icon -->
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                {{ $productCategory->title }}
                            </h3>
                            <a href=""> <span class="text-2xl">
                                    <i class="ti ti-arrow-right"></i>
                                </span></a>
                        </div>

                        <p class="mt-1 text-gray-500 dark:text-neutral-400">
                            {!! $productCategory->description !!}
                        </p>
                    </div>

                    <div class="p-4 sm:px-5">
                        <p class="text-xs text-gray-500 dark:text-neutral-500">
                            Last updated 5 mins ago
                        </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="overflow-hidden">
            <img src="{{ asset('assets/frontend/staticimage/ad.png') }}" alt="Ad Image"
                class="transition-transform duration-300 ease-in-out transform hover:scale-110">
        </div>
        <div class="bg-neutral-200 md:bg-neutral-200 sm:bg-black justify-center">
            <div class="mt-10 md:mt-28 ">
                <h1 class="pl-8 md:px-32 font-slabo text-justify md:text-center font-semibold text-sm md:text-base text-slate-700 hover:text-slate-900">ASIAN
                    PAINTS SAFE PAINTING SERVICE</h1>
                <p class="text-2xl md:text-4xl font-semibold pl-8 md:px-32 mt-2 text-justify md:text-center text-slate-700 hover:text-slate-800 font-slabo">
                    <span>Get the right assistance </span><br />
                    <span>for all your painting </span><br />
                    <span>needs </span>
                </p>
                <div class="pl-8 md:px-32 text-justify md:text-center mt-5">
                    <a href="#"
                        class="inline-block px-6 py-2 mb-5 text-white bg-red-500 hover:bg-red-600 font-semibold text-lg rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        CLICK FOR FREE CONSULTATION
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex flex-wrap mt-28 gap-10 justify-center items-center">
        <div class="relative w-full sm:w-auto">
            <img src="{{ asset('assets/frontend/staticimage/ad1.jpg') }}" alt="Ad Image 1" class="w-full h-auto">
            <div class="absolute bottom-2 bg-opacity-50 text-white px-3 py-1 rounded">
                <h1 class="font-slabo font-bold">COLOUR CATALOGUE</h1>
                <p class="text-4xl font-bold pr-32"> <span> See 1800+colours</span><br/>
                <span>  for wall inspirations</span> </p>
                <a href="" class="mt-2">Explore now</a>
                <hr class="border-t-2 border-purple-600 w-1/5 mt-1 hover:border-purple-900">
            </div>
        </div>
    
        <div class="relative w-full sm:w-auto">
            <img src="{{ asset('assets/frontend/staticimage/ad1.jpg') }}" alt="Ad Image 2" class="w-full h-auto">
            <div class="absolute bottom-2 bg-opacity-50 text-white px-3 py-1 rounded">
                <h1 class="font-slabo font-bold">COLOUR CATALOGUE</h1>
                <p class="text-4xl font-bold pr-32"> <span> See 1800+colours</span><br/>
                <span>  for wall inspirations</span> </p>
                <a href="" class="mt-2">Explore now</a>
                <hr class="border-t-2 border-purple-600 w-1/5 mt-1 hover:border-purple-900">
            </div>
        </div>
    </div>
    
   
@endsection

</html>
