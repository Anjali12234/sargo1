@extends('frontend.layouts.master')
@section('title', $productCategory->keywords)

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{ $productCategory->image }}"
            alt="Ad Image 1" class="w-full h-96">
        <div class="absolute inset-0 flex flex-col mt-10 items-center bg-opacity-50 text-white px-3 rounded">
            <h1 class="font-slabo  text-center text-xl">{{ $productCategory->type->label() }}</h1>
            <div class="text-5xl font-semibold text-center mt-3"> {!! $productCategory->description !!}
            </div>

        </div>
    </div>

    <div class="text-center p-10">
        <h1 class="font-bold text-4xl mb-4">{{ $productCategory->title }}</h1>
        <h1 class="text-3xl">{{ $productCategory->type->label() }}</h1>
    </div>

    <section id="Projects"
        class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

        @foreach ($productCategory->products as $product)
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                {{-- <a href="#">
                    <!-- Product Image -->
                    <img src="{{ $product->image }}" alt="Product" class="h-60 w-72 object-cover rounded-t-xl" />
                </a> --}}
                <div class="flex items-center justify-center ">
                    <a href="#" class="relative">
                        <img class="w-48 h-56 object-cover" src="{{ $product->image_url }}"
                            alt="{{ $product->title }}">
                    </a>
                </div>
                <!-- Product Details -->
                <div class="px-4 py-3 w-72">
                    <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->title }}</p>

                    <!-- View Product Button -->
                    <div class="mt-4">
                        <a href="{{ route('productDetail', $product) }}"
                            class="inline-block w-full text-center bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700">
                            View Product
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


    {{-- <div class="grid grid-cols-1 md:grid-cols-2 mt-5">
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
    </div> --}}

    <div class="flex flex-wrap mt-28 gap-10 justify-center items-center">
        <div class="relative w-full sm:w-auto">
            <img src="{{ asset('assets/frontend/staticimage/productimage.jpg') }}" alt="Ad Image 1" class="w-full h-auto">
            <div class="absolute bottom-2 bg-opacity-50 text-white px-3 py-1 rounded">
                <h1 class="font-slabo font-bold">EXTERIOR WALL TEXTURE</h1>
                <p class="text-4xl font-bold pr-32"> <span>Textured finishes</span><br />
                    <span> that redefine luxury</span>
                </p>
                <a href="" class="mt-2">Explore now</a>
                <hr class="border-t-2 border-purple-600 w-1/5 mt-1 hover:border-purple-900">
            </div>
        </div>

        <div class="relative w-full sm:w-auto">
            <img src="{{ asset('assets/frontend/staticimage/productimage1.png') }}" alt="Ad Image 2" class="w-full h-auto">
            <div class="absolute bottom-2 bg-opacity-50 text-white px-3 py-1 rounded">
                <h1 class="font-slabo font-bold">SMARTCARE WATERPROOFING RANGE</h1>
                <p class="text-4xl font-bold pr-32"> <span>Say goodbye to</span><br />
                    <span> all waterproofing problems</span>
                </p>
                <a href="" class="mt-2">Explore now</a>
                <hr class="border-t-2 border-purple-600 w-1/5 mt-1 hover:border-purple-900">
            </div>
        </div>
    </div>

  
@endsection

</html>
