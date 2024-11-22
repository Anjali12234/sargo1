<nav id="mainNavbar" class="">
    <div class='flex flex-wrap items-center justify-between px-1 py-3 gap-4 w-full h-20 lg:h-28'>
        <div class='flex items-center gap-4 px-10'>
            <a href="javascript:void(0)">
                <img src="{{ asset('assets/frontend/static image/logo1.jpg') }}" alt="logo" class='w-44 h-20' />
            </a>

        </div>

        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px]
                 max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="../img/logo1.png" alt="logo" class='w-36' />
                    </a>
                </li>

                <li class='group text-[14px] max-lg:border-b max-lg:px-3 max-lg:py-2 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-500 font-semibold text-[18px] block'>Product<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <div
                        class='absolute lg:top-5 max-lg:top-8 -left-6 z-50 flex shadow-lg bg-white max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-8 group-hover:pb-8 group-hover:pt-6 transition-all duration-500'>
                        <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                            <h6 class="text-base text-[#007bff] font-bold">Interior Wall Paints  </h6>
                            <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                <li class='max-lg:border-b py-1 rounded'><a href="{{route('productList')}}"
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Plain Finishes</a></li>
                                <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Wall Textures</a></li>
                                <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Undercoats</a></li>

                            </ul>
                        </div>
                        <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                            <h6 class="text-base text-[#007bff] font-bold">UK</h6>
                            <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Exterior Wall Paints </a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h6 class="text-base text-[#007bff] font-bold">Canada</h6>
                            <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Toronto</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Ideas<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                        </li>

                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Services<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                        </li>

                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold block'>BathSense</a>
                </li>

            </ul>
        </div>

        <div class='flex items-center space-x-8 max-lg:ml-auto'>
            <div
                class='flex xl:w-80 max-xl:w-full bg-gray-100 px-6 py-3 rounded outline outline-transparent focus-within:outline-[#007bff] focus-within:bg-transparent'>
                <input type='text' placeholder='Search something...'
                    class='w-full text-sm bg-transparent rounded outline-none pr-2' />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                    class="cursor-pointer fill-gray-400">
                    <path
                        d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                    </path>
                </svg>
            </div>

            <button id="toggleOpen" class='lg:hidden'>
                <svg class="w-7 h-7 z-10" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

        </div>
    </div>
</nav>
<div class="fixed top-0 left-0 right-0 z-50 hidden bg-white shadow-lg shadow-slate-300 " id="stickyNavbar">
    <div class='flex flex-wrap items-center justify-between px-10 py-2 gap-4 w-full h-20 lg:h-26'>
        <div class='flex items-center gap-4 px-10'>
            <a href="javascript:void(0)">
                <img src="{{ asset('assets/frontend/static image/logo1.jpg') }}" alt="logo" class='w-44 h-20' />
            </a>
            {{-- <div class="h-20 border-l border-gray-300"></div> <!-- Vertical line -->
            <div class="flex flex-col text-black">
                <span class="text-4xl font-bold tracking-widest">SVS</span>
                <span class="text-xl ">Nepalgunj,Banke</span>
            </div> --}}
        </div>

        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px]
                 max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="../img/logo1.png" alt="logo" class='w-36' />
                    </a>
                </li>

                <li class='group text-[14px] max-lg:border-b max-lg:px-3 max-lg:py-2 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-500 font-semibold text-[18px] block'>Product<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <div
                        class='absolute lg:top-5 max-lg:top-8 -left-6 z-50 flex shadow-lg bg-white max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-8 group-hover:pb-8 group-hover:pt-6 transition-all duration-500'>
                        <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                            <h6 class="text-base text-[#007bff] font-bold">Interior Wall Paints </h6>
                            <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                <li class='max-lg:border-b py-1 rounded'><a href="{{route('productList')}}"
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Plain Finishes</a></li>

                            </ul>
                        </div>
                        <div class="lg:min-w-[180px] max-lg:min-w-[140px]">
                            <h6 class="text-base text-[#007bff] font-bold">UK</h6>
                            <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>London</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h6 class="text-base text-[#007bff] font-bold">Canada</h6>
                            <ul class='mt-3 pt-3 border-t border-1 space-y-3'>
                                <li class='max-lg:border-b py-1 rounded'><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-500 font-bold text-sm block'>Toronto</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Ideas<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                        </li>

                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold lg:hover:fill-[#007bff] block'>Services<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block" viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a>
                        </li>

                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:py-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[18px] font-semibold block'>BathSense</a>
                </li>

            </ul>
        </div>

        <div class='flex items-center space-x-8 max-lg:ml-auto'>

            <button id="toggleOpen" class='lg:hidden'>
                <svg class="w-7 h-7 z-10" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    const mainNavbar = document.getElementById('mainNavbar');
    const stickyNavbar = document.getElementById('stickyNavbar');
    const headerHeight = document.querySelector('header').offsetHeight + mainNavbar.offsetHeight;

    window.addEventListener('scroll', () => {
        if (window.scrollY > headerHeight) {
            stickyNavbar.classList.remove('hidden');
        } else {
            stickyNavbar.classList.add('hidden');
        }
    });

    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
