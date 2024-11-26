<header>
    <div class="bg-slate-300 h-8 text-black text-sm">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 lg:px-16 ">
            <!-- Left Section -->
            <div class="flex gap-2 md:gap-1 items-center justify-center md:justify-start">
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <i class="ti ti-address-book text-lg"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Design and Colour App</a>
            </div>

            <!-- Center Section -->
            <div class="hidden md:flex items-center justify-center gap-1 ml-10">
                <i class="ti ti-home-2 text-lg text-gray-700"></i>
                <a href="#" class="text-gray-700 hover:text-blue-500">Nepalgunj Fultekra # 6, Nepal</a>
            </div>

            <!-- Right Section -->
            <div class="flex gap-3 items-center justify-center md:justify-end ml-10">
                <div class="hidden lg:flex items-center gap-1 text-gray-700">
                    <span><i class="ti ti-phone h-6 text-lg"></i></span>
                    <a href="tel:+977081567896" class="text-gray-700 hover:text-blue-500">+977 081-567896</a>
                </div>

                <button type="button"
                    class="py-[1px] px-2 inline-flex font-mono items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent 
                    bg-emerald-400 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    onclick="toggleModal('hs-basic-modal')">
                    Enquiry Form
                </button>

                <div id="hs-basic-modal"
                    class="hidden fixed top-0 left-0 z-[80] w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="sm:max-w-lg sm:w-full bg-white rounded-xl shadow-lg">
                        <div class="flex justify-between items-center py-3 px-4 border-b">
                            <h3 class="font-bold text-gray-800">Enquiry Form</h3>
                            <button type="button"
                                class="size-8 inline-flex justify-center items-center rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200"
                                onclick="toggleModal('hs-basic-modal')">
                                <span class="sr-only">Close</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="p-4 mx-auto">
                            <form action="{{ route('enquiry') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="full-name"
                                        class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <input type="text" id="full-name" name="full_name"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Enter your full name">
                                    @error('full_name')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Enter your email">
                                    @error('email')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="phone"
                                        class="block text-sm font-medium text-gray-700">Phone No.</label>
                                    <input type="tel" id="phone" name="phone_number"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Enter your phone number">
                                    @error('phone')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="message"
                                        class="block text-sm font-medium text-gray-700">Message</label>
                                    <textarea id="message" name="message" rows="4"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Write your message here..."></textarea>
                                    @error('message')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 text-gray-800 rounded hover:bg-gray-300"
                                        onclick="toggleModal('hs-basic-modal')">
                                        Close
                                    </button>
                                    <button type="submit"
                                        class="ml-2 py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
    }
</script>
