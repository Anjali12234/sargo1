@extends('frontend.layouts.master')
@section('title', $product?->keywords)

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{ $product->bg_image_url }}" alt="Ad Image 1" class="w-full h-96">
        <div class="absolute inset-0 flex flex-col mt-20 items-center bg-opacity-50 text-white px-3 rounded">
            <h1 class="font-slabo  text-center text-base">{{ $product->bg_title }}</h1>
            <p class="text-6xl font-semibold text-center mt-3"> <span> {{ $product->title }}</span>
            </p>

        </div>
    </div>

    <div class="mx-0 lg:mx-20 my-0 lg:my-20 mt-10">
        <div class="flex flex-col items-center justify-center h-screen bg-gray-100 px-6">

            <div class="mb-6">
                <img src="{{ $product->image_url }}" alt="Product" class="w-72 h-80 object-cover rounded-xl shadow-md">
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


    @if(!empty($product->productSteps) && $product->productSteps->count() > 0)

    <div class="mx-0 lg:mx-20 my-0 lg:my-20 mt-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 p-6">
            <!-- CARD 1 -->
            @foreach ($product->productSteps as $productStep)
                <div
                    class="rounded-lg overflow-hidden shadow-xl  hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="px-6 py-4 bg-white text-center">
                        
                        <p class="text-gray-600 text-xs">{{$productStep->step_no}}</p>
                        <a href="#"
                            class="font-medium text-2xl text-gray-800 hover:text-indigo-600 transition duration-300 
                        ease-in-out inline-block">
                            {{ $productStep->step_name }}
                        </a>
                    </div>
                    <div class="flex items-center justify-center ">
                        <a href="#" class="relative">
                            <img class="w-30 h-56 object-cover" src="{{ $productStep->image_url }}" alt="Step 1 Image">
                        </a>
                    </div>

                    <div class="px-6 py-4 bg-white text-center">
                        <p class="text-gray-600 text-sm">{{$productStep->product_name}}</p>
                        <a href="#"
                            class="font-medium text-lg text-gray-800 hover:text-indigo-600 transition duration-300 
                        ease-in-out inline-block mb-2">
                        {{$productStep->coat}}
                        </a>
                    </div>
                </div>
            @endforeach
            
        </div>
        
    </div>
    @endif
    <hr class="border-t-1 border-slate-300 my-6">
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
        <!-- Image Section -->
        <div class="overflow-hidden">
            <img src="{{ asset('assets/frontend/staticimage/productdetail1.jpg') }}" alt="Ad Image"
                class="w-full h-full object-cover transition-transform duration-300 ease-in-out transform hover:scale-110">
        </div>

        <!-- Content Section -->
        <div class="bg-neutral-100 flex items-center justify-center">
            <div class="text-center px-6 md:px-20">
                <p class="text-2xl md:text-4xl font-semibold text-slate-700 hover:text-slate-800 font-slabo">
                    Downloadable resources
                </p>
                <h1 class="mt-4 text-sm md:text-base font-semibold text-slate-700 hover:text-slate-900">
                    Get more information about this product with these downloadable files.
                </h1>
                <div class="mt-6">
                    {{-- <a href="{{ asset('assets/frontend/staticimage/royale-bling.pdf') }}" --}}
                    <a href="#"
                     download
                        class="inline-block px-6 py-2 bg-white text-red-600 hover:bg-red-600 hover:text-white font-semibold text-lg rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        PRODUCT INFORMATION SHEET<i class="ti ti-download ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>
