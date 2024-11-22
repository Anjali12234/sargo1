@extends('frontend.layouts.master')

@section('mainContainer')
    @include('frontend.layouts.carousel')

    <div class="mx-0 lg:mx-20 my-0 lg:my-20 mt-10">
        <div class="flex flex-col items-center justify-center h-screen bg-gray-100 px-6">

            <div class="mb-6">
                <img src="{{ $product->image }}" alt="Product" class="w-80 h-80 object-cover rounded-xl shadow-md">
            </div>


            <p class="text-2xl font-bold text-gray-800 mb-4">
                {{ $product->title }}
            </p>


            <div class="text-center max-w-2xl text-gray-600 mb-6">
                {{ $product->description }}
            </div>


            <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-2xl">
                <h1 class="text-xl font-semibold text-gray-800 mb-4">Product Key Features</h1>
                <ul class="list-disc ml-5 text-gray-700 space-y-2">
                    @foreach ($product->productKeyFeatures as $productKeyFeature)
                        <li>{{ $productKeyFeature->feature }}</li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
    <hr class="border-t-1 border-slate-300 my-6">


    
    <div class="mx-0 lg:mx-20 my-0 lg:my-20 mt-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 p-6">
            <!-- CARD 1 -->
            <div class="rounded-lg overflow-hidden shadow-xl  hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <a href="#">
                    <div class="relative">
                        <img class="w-full h-56 object-cover" src="{{ asset('assets/frontend/staticimage/step1.jpg') }}" alt="Step 1 Image">
                        <div class="absolute inset-0 bg-black opacity-25 hover:opacity-0 transition-all duration-300"></div>
                    </div>
                </a>
                <div class="px-6 py-4 bg-white">
                    <a href="#" class="font-medium text-2xl text-gray-800 hover:text-indigo-600 transition duration-300 ease-in-out inline-block mb-2">
                        Step 1
                    </a>
                    <p class="text-gray-500 text-sm mb-2">Asian Paints Wall Putty</p>
                    <p class="text-gray-600 text-sm">2 COATS</p>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-xl  hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <a href="#">
                    <div class="relative">
                        <img class="w-full h-56 object-cover" src="{{ asset('assets/frontend/staticimage/step1.jpg') }}" alt="Step 1 Image">
                        <div class="absolute inset-0 bg-black opacity-25 hover:opacity-0 transition-all duration-300"></div>
                    </div>
                </a>
                <div class="px-6 py-4 bg-white">
                    <a href="#" class="font-medium text-2xl text-gray-800 hover:text-indigo-600 transition duration-300 ease-in-out inline-block mb-2">
                        Step 2
                    </a>
                    <p class="text-gray-500 text-sm mb-2">Asian Paints Wall Putty</p>
                    <p class="text-gray-600 text-sm">1 COATS</p>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-xl  hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <a href="#">
                    <div class="relative">
                        <img class="w-full h-56 object-cover" src="{{ asset('assets/frontend/staticimage/step1.jpg') }}" alt="Step 1 Image">
                        <div class="absolute inset-0 bg-black opacity-25 hover:opacity-0 transition-all duration-300"></div>
                    </div>
                </a>
                <div class="px-6 py-4 bg-white">
                    <a href="#" class="font-medium text-2xl text-gray-800 hover:text-indigo-600 transition duration-300 ease-in-out inline-block mb-2">
                        Step 3
                    </a>
                    <p class="text-gray-500 text-sm mb-2">Asian Paints Wall Putty</p>
                    <p class="text-gray-600 text-sm">2 COATS</p>
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
                <h1
                    class="pl-8 md:px-32 font-slabo text-justify md:text-center font-semibold text-sm md:text-base text-slate-700 hover:text-slate-900">
                    ASIAN
                    PAINTS SAFE PAINTING SERVICE</h1>
                <p
                    class="text-2xl md:text-4xl font-semibold pl-8 md:px-32 mt-2 text-justify md:text-center text-slate-700 hover:text-slate-800 font-slabo">
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
    
@endsection

</html>
