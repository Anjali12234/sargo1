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
                   <div class="">
                    <div class="relative bg-white shadow-lg overflow-hidden">
                        @foreach ($color->files as $index => $file)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
                                <img src="{{ $file->file_url }}" alt="Room {{ $index + 1 }}"
                                    class="w-full h-[30rem] object-cover">
                            </div>
                        @endforeach
                    </div>
                
                    <div class="flex space-x-4 mt-4 overflow-x-auto pb-2 ">
                        @foreach ($color->files as $index => $file)
                            <img src="{{ $file->file_url }}" alt="Thumbnail {{ $index + 1 }}"
                                class="mx-5 mt-10 thumbnail w-32 h-32 object-cover cursor-pointer rounded-full border-2 border-gray-300 
                                hover:scale-105 transition-transform duration-300 ease-in-out {{ $index === 0 ? 'border-indigo-500' : '' }}"
                                onclick="setSlide({{ $index }})">
                        @endforeach
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
        const items = document.querySelectorAll('.carousel-item');
        const thumbnails = document.querySelectorAll('.thumbnail');

        function updateSlides() {
            items.forEach((item, index) => {
                item.classList.toggle('active', index === currentSlide);
            });
            thumbnails.forEach((thumbnail, index) => {
                thumbnail.classList.toggle('active', index === currentSlide);
            });
        }

        function changeSlide(direction) {
            currentSlide = (currentSlide + direction + items.length) % items.length;
            updateSlides();
        }

        function setSlide(index) {
            currentSlide = index;
            updateSlides();
        }
    </script>
@endsection
