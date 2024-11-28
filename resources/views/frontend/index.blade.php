@extends('frontend.layouts.master')

@section('mainContainer')
    @include('frontend.layouts.carousel')


    {{-- popup --}}

    <div class="relative">
     
        <!-- Pop-up Modal -->
        @if (session('showPopup'))
            <div id="popup" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-gray-600 mb-4">Please fill out the form below, and we’ll get back to you shortly.</p>

                    <!-- Form -->
                    <form action="{{ route('enquiry') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="full-name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="full-name" id="full-name" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('full-name')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('email')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-4">
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('phone_number')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" id="message" rows="4" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>

                            @error('message')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Checkbox -->
                        <div class="mb-4 flex items-center">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="terms"
                                    class="text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700 dark:text-neutral-400">I agree to
                                    the terms and conditions</span>
                            </label>
                            @error('terms')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">
                                Submit
                            </button>
                            <button type="button" onclick="closePopup()"
                                class="ml-2 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 focus:outline-none">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
    {{-- endpopup --}}


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
                            <img src="{{ asset('assets/frontend/staticimage/blue.png') }}" alt="Thumbnail 1"
                                class="w-32 h-24 object-cover cursor-pointer rounded border-2 border-transparent active-thumbnail">
                            <p class="font-bold text-sm text-neutral-700">Tranquill Bl..</p>
                            <p class="text-base font-semibold">9215</p>
                        </div>
                        <div class="thumbnail" onclick="setSlide(1)">
                            <img src="{{ asset('assets/frontend/staticimage/red.png') }}" alt="Thumbnail 2"
                                class="w-32 h-24 object-cover cursor-pointer rounded border-2 border-transparent">
                            <p class="font-bold text-sm text-neutral-700">Velvet Dre..</p>
                            <p class="text-base font-semibold">8117</p>
                        </div>
                        <div class="thumbnail hidden lg:block" onclick="setSlide(2)">
                            <img src="{{ asset('assets/frontend/staticimage/green.png') }}" alt="Thumbnail 3"
                                class="w-32 h-24 object-cover cursor-pointer rounded border-2 border-transparent">
                            <p class="font-bold text-sm text-neutral-700">Lasting Spre..</p>
                            <p class="text-base font-semibold">9350</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <script>
        const carouselItems = document.querySelectorAll('.carousel-item');
        const thumbnails = document.querySelectorAll('.thumbnail img');

        function setSlide(index) {
            // Remove active class from all carousel items
            carouselItems.forEach(item => item.classList.remove('active'));
            // Set the active class to the selected carousel item
            carouselItems[index].classList.add('active');

            // Remove the active-thumbnail class from all thumbnails
            thumbnails.forEach(thumbnail => {
                thumbnail.classList.remove('active-thumbnail');
                thumbnail.classList.replace('border-gray-500', 'border-transparent');
            });

            // Add the active-thumbnail class to the clicked thumbnail
            thumbnails[index].classList.add('active-thumbnail');
            thumbnails[index].classList.replace('border-transparent', 'border-gray-500');
        }
    </script>
   <script>
    function closePopup() {
        const popup = document.getElementById('popup');
        popup.style.display = 'none';
    }
</script>
@endsection
