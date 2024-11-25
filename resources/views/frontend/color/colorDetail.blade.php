{{-- @extends('frontend.layouts.master')

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
                        @foreach($color->files as $index => $file)
                            <img src="{{ $file->file_url }}" 
                                alt="Image {{ $index + 1 }}"
                                class="carousel-item {{ $index === 0 ? 'active' : '' }} w-full h-[12rem] lg:h-[24rem] object-cover">
                        @endforeach
                    </div>
                </div>

                <!-- Thumbnails -->
                <div class="flex space-x-4 mt-4 overflow-x-auto pb-2">
                    @foreach($color->image as $index => $image)
                        <div class="text-center">
                            <img src="{{ $file->file_url }}" 
                                alt="Thumbnail {{ $index + 1 }}"
                                class="w-24 h-16 object-cover cursor-pointer rounded"
                                onclick="setSlide({{ $index }})">
                            <p class="font-bold text-sm text-neutral-700">Image {{ $index + 1 }}</p>
                        </div>
                    @endforeach
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
@endsection --}}
