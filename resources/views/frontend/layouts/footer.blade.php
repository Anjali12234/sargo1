<!-- ========== FOOTER ========== -->
<footer class="mt-10 bg-slate-100 w-full py-12 px-6 sm:px-10 lg:px-16">
    <!-- Footer Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Branding Section -->
        <div class="lg:col-span-1">
            <span class="" >
                <img class="" src="{{systemSetting()?->logo1}}" height="150" width="150" alt="" />

                {{-- <img src="{{ asset('assets/backend/vendors/images/photo1.jpg')}}" alt="" /> --}}
            </span> 
            <a href="{{route('welcome')}}" 
                class="font-semibold text-xl text-gray-800 dark:text-white hover:text-gray-900 focus:outline-none focus:text-gray-900">
                {{systemSetting()?->name}}
            </a>
            <a href="https://bitsnpj.com/" class="block md:hidden mt-4 text-sm text-gray-600 dark:text-neutral-400">
                © 2024 Brilliant IT Solution. All rights reserved.
            </a>
        </div>
        <!-- End Branding Section -->

        <!-- About Section -->
        <div>
            <h4 class="text-sm font-semibold text-gray-900 uppercase dark:text-neutral-100">About</h4>
            <ul class="mt-3 space-y-2">
                <li>
                    <a href="{{route('about')}}" class="text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                        About Us
                    </a>
                </li>
              
                <li>
                    <a href="{{ route('contact')}}" class="text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('whyChooseUs')}}" class="text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                        Why Choose Us
                    </a>
                </li>
            </ul>
        </div>
        <!-- End About Section -->

        <!-- Quick Links Section -->
        <div>
            <h4 class="text-sm font-semibold text-gray-900 uppercase dark:text-neutral-100">Quick Links</h4>
            <ul class="mt-3 space-y-2">
                <li>
                    <a href="#" class="text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                        Terms of Service
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                        Help Center
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Quick Links Section -->

        <!-- Language and Social Section -->
        <div class="flex flex-col space-y-4">
            <!-- Language Dropdown -->
            <div class="hs-dropdown [--placement:top-left] relative inline-flex">
                <button id="hs-footer-language-dropdown" type="button"
                    class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    
                    Nepal
                    <svg class="hs-dropdown-open:rotate-180 shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                </button>

                <div class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-footer-language-dropdown">
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                        href="#">
                        <svg class="shrink-0 size-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg"
                            id="flag-icon-css-us" viewBox="0 0 512 512">
                            <g fill-rule="evenodd">
                                <g stroke-width="1pt">
                                    <path fill="#bd3d44"
                                        d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                        transform="scale(3.9385)" />
                                    <path fill="#fff"
                                        d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                        transform="scale(3.9385)" />
                                </g>
                                <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                <path fill="#fff"
                                    d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                    transform="scale(3.9385)" />
                            </g>
                        </svg>
                        English (US)
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                        href="#">
                        <svg class="shrink-0 size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                            id="flag-icon-css-de" viewBox="0 0 512 512">
                            <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                            <path d="M0 0h512v170.7H0z" />
                            <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                        </svg>
                        Deutsch
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                        href="#">
                        <svg class="shrink-0 size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                            id="flag-icon-css-dk" viewBox="0 0 512 512">
                            <path fill="#c8102e" d="M0 0h512.1v512H0z" />
                            <path fill="#fff" d="M144 0h73.1v512H144z" />
                            <path fill="#fff" d="M0 219.4h512.1v73.2H0z" />
                        </svg>
                        Dansk
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                        href="#">
                        <svg class="shrink-0 size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                            id="flag-icon-css-it" viewBox="0 0 512 512">
                            <g fill-rule="evenodd" stroke-width="1pt">
                                <path fill="#fff" d="M0 0h512v512H0z" />
                                <path fill="#009246" d="M0 0h170.7v512H0z" />
                                <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                            </g>
                        </svg>
                        Italiano
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                        href="#">
                        <svg class="shrink-0 size-3 rounded-full" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                            viewBox="0 0 512 512">
                            <defs>
                                <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                            </defs>
                            <path fill="#de2910" d="M0 0h512v512H0z" />
                            <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                xlink:href="#a" />
                            <use width="30" height="20"
                                transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                            <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                xlink:href="#a" />
                            <use width="30" height="20"
                                transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                            <use width="30" height="20"
                                transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                        </svg>
                        中文 (繁體)
                    </a>
                </div>
            </div>
            <!-- Social Links -->
            <div class="space-x-4">
                <a target="blank" class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                    href=" {{systemSetting()?->facebook_url}}">
                    <i class="ti ti-brand-facebook-filled text-lg"></i>
                </a>
                <a target="blank" class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                    href="{{systemSetting()?->twitter_url}}">
                    <i class="ti ti-brand-twitter-filled text-lg"></i>
                </a>
                <a target="blank" class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                    href="{{systemSetting()?->youtube_url}}">
                    <i class="ti ti-brand-youtube-filled text-lg"></i>
                </a>
                <a target="blank" class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                    href=" {{systemSetting()?->instagram_url}}">
                    <i class="ti ti-brand-instagram" ></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Footer Grid -->

    <!-- Bottom Border -->
    <div class="hidden md:block mt-8 border-t border-gray-200 dark:border-neutral-700 pt-4 text-center">
        <a href="https://bitsnpj.com/" class="text-center text-sm text-gray-500 dark:text-neutral-400">
            © 2024 Brilliant IT Solution. All rights reserved.
        </a>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
