@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{ $category->bg_image }}" alt="Ad Image 1" class="w-full h-96">
        {{-- <div class="absolute inset-0 flex flex-col mt-10 items-center bg-opacity-50 text-white px-3 rounded">
            <h1 class="font-slabo  text-center text-sm"></h1>
            <p class="text-5xl font-semibold text-center mt-3"> <span>{{ $category->title }}</span>
            </p>

        </div> --}}
    </div>

    <div class="text-center p-10">
        <h1 class="font-bold text-4xl mb-4">{{ $category->title }} List</h1>
        <h1 class="text-3xl"></h1>
    </div>

    <div class="mx-5 lg:mx-20 my-5 lg:my-10">


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-10 gap-5 lg:gap-10">
            @foreach ($category->categoryLists as $categoryList)
                <div>
                    <img class="w-full h-40 sm:h-56 rounded-md transform transition-transform duration-300 ease-in-out hover:scale-110"
                        src="{{ $categoryList->image }}" alt="">
                    <p class="mt-3 text-lg font-semibold text-center sm:text-left">{{ $categoryList->title }}</p>
                    <p class="mt-3 text-sm text-justify">{!! Str::limit($categoryList->description, 100) !!}</p>

                    <div class="mt-4">
                        <a href="{{ route('categoryList', $categoryList) }}"
                            class="inline-block w-full text-center bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700">
                            View
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

</html>
