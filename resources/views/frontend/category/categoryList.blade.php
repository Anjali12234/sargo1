@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{ $category->bg_image }}" alt="Ad Image 1" class="w-full h-96">
       
    </div>

    <div class="text-center p-10">
        <h1 class="font-bold text-4xl mb-4">{{ $category->title }} List</h1>
        <h1 class="text-3xl"></h1>
    </div>

   
    <section id="Projects"
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    @foreach ($category->categoryLists as $categoryList)
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
         
            <div class="flex items-center justify-center ">
                <a href="#" class="relative">
                    <img class="w-full h-56 object-cover" src="{{ $categoryList->image }}"
                        alt="{{ $categoryList->title }}">
                </a>
            </div>
            <!-- Product Details -->
            <div class="px-4 py-3 w-72">
                <p class="text-lg font-bold text-black truncate block capitalize">{{ $categoryList->title }}</p>
                <p class="mt-3 text-sm text-justify">{!! Str::limit($categoryList->description, 150) !!}</p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <a href="{{ route('categoryList', $categoryList) }}"
                        class="inline-block w-full text-center bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700">
                        View Product
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection

</html>
