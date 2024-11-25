<header>
    <div class="bg-slate-300 h-8 text-black text-sm">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 lg:px-16 ">
            <!-- Left Section: Design and Colour App -->
            <div class="flex gap-2 md:gap-1 items-center justify-center md:justify-start">

                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <i class="ti ti-address-book text-lg"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Design and Colour App</a>
            </div>

            <!-- Center Section: Address -->
            <div class="hidden md:flex items-center justify-center gap-1  ml-10">
                <i class="ti ti-home-2 text-lg text-gray-700 "></i>
                <a href="#" class="text-gray-700 hover:text-blue-500">Nepalgunj Fultekra # 6, Nepal</a>
            </div>

            <!-- Right Section: Contact Information and Enquiry Button -->
            <div class="flex gap-3 items-center justify-center md:justify-end  ml-10">
                <!-- Phone Number -->
                <div class="hidden lg:flex items-center gap-1 text-gray-700">
                    <span><i class="ti ti-phone h-6 text-lg"></i></span>
                    <a href="tel:+977081567896" class="text-gray-700 hover:text-blue-500">+977 081-567896</a>
                </div>

                <button type="button"
                    class="py-[1px] px-2 inline-flex font-mono items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-emerald-400 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-basic-modal"
                    data-hs-overlay="#hs-basic-modal">
                    Enquiry Form
                </button>



                <div id="hs-basic-modal"
                    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1" aria-labelledby="hs-basic-modal-label">
                    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <!-- Modal Header -->
                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                <h3 id="hs-basic-modal-label" class="font-bold text-gray-800 dark:text-white">
                                    Enquiry Form
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                    aria-label="Close" data-hs-overlay="#hs-basic-modal">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Modal Body -->
                            <div class="p-4 overflow-y-auto">
                                <form action="{{ route('enquiry') }}" method="POST">
                                    @csrf
                                    <!-- Full Name Field -->
                                    <div class="mb-4">
                                        <label for="full-name"
                                            class="block text-sm font-medium text-gray-700 dark:text-neutral-400">Full
                                            Name</label>
                                        <input type="text" id="full-name" name="full_name"
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            placeholder="Enter your full name">
                                        @error('full_name')
                                            <span class="text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Email Field -->
                                    <div class="mb-4">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 dark:text-neutral-400">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            placeholder="Enter your email">
                                        @error('email')
                                            <span class="text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="phone"
                                            class="block text-sm font-medium text-gray-700 dark:text-neutral-400">Phone
                                            No.</label>
                                        <input type="tel" id="phone" name="phone_number"
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            placeholder="Enter your phone number">
                                        @error('phone')
                                            <span class="text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- Message Text Area -->
                                    <div class="mb-4">
                                        <label for="message"
                                            class="block text-sm font-medium text-gray-700 dark:text-neutral-400">Message</label>
                                        <textarea id="message" name="message" rows="4"
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            placeholder="Write your message here..."></textarea>
                                        @error('message')
                                            <span class="text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="mb-4">
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

                                    <div
                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                        <button type="button"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                            data-hs-overlay="#hs-basic-modal">
                                            Close
                                        </button>
                                        <button type="submit"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                                            Submit
                                        </button>
                                    </div>

                                </form>

                            </div>

                            <!-- Modal Footer -->

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</header>
