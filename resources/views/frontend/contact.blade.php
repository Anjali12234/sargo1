@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{ asset('assets/frontend/staticimage/banner1.jpg') }}" alt="Ad Image 1" class="w-full h-96">
        <div class="absolute inset-0 flex flex-col mt-20 items-center bg-opacity-50 text-white px-3 rounded">
            <p class="text-6xl font-semibold text-center mt-3"> <span> Get In Touch</span>
            </p>

        </div>
    </div>
    

    <h1 class="mt-14 text-3xl font-bold text-center hover:text-blue-800">Connect with us easily</h1>
    <div class="relative w-full sm:w-auto block md:grid grid-cols-2 mt-5">
        <div class="mx-5  lg:ml-20 lg:mr-[-2rem]  my-5 lg:my-10">
            <div class="mt-6">
                <div
                    class="grid sm:grid-cols-2 items-start gap-14 p-8 mx-auto max-w-4xl bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md font-[sans-serif]">
                    <div>
                        <h1 class="text-gray-800 text-3xl font-extrabold">Let's Talk</h1>
                        <p class="text-sm text-gray-500 mt-4">Have some big idea or brand to develop and need help? Then
                            reach out we'd love to hear about your project and provide help.</p>

                        <div class="mt-12">
                            <h2 class="text-gray-800 text-base font-bold">Email</h2>
                            <ul class="mt-4">
                                <li class="flex items-center">
                                    <div
                                        class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                            viewBox="0 0 479.058 479.058">
                                            <path
                                                d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                                data-original="#000000" />
                                        </svg>
                                    </div>
                                    <a href="javascript:void(0)" class="text-[#007bff] text-sm ml-4">
                                        <h1 class="block">Mail</h1>
                                        <strong>{{systemSetting()?->email}}</strong>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="text-gray-800 text-base font-bold mt-5">Location</h2>

                            <ul class="mt-4">
                                <li class="flex items-center mt-5">
                                    <div
                                        class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#007bff" viewBox="0 0 512 512">
                                            <path
                                                d="M256 0C167.64 0 96 71.64 96 160c0 112 160 352 160 352s160-240 160-352c0-88.36-71.64-160-160-160zm0 240c-44.11 0-80-35.89-80-80s35.89-80 80-80 80 35.89 80 80-35.89 80-80 80z" />
                                        </svg>
                                    </div>
                                    <a href="javascript:void(0)" class="text-[#007bff] text-sm ml-4">
                                        <h1 class="block">Address</h1>
                                        <strong>{{ systemSetting()?->address }}</strong>
                                    </a>
                                </li>
                                
                            </ul>
                            <h2 class="text-gray-800 text-base font-bold mt-5">Contact</h2>

                            <ul class="mt-4">
                                <li class="flex items-center mt-5">
                                    <div
                                        class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#007bff" viewBox="0 0 512 512">
                                            <path
                                                d="M493.4 24.6C466.9-1.9 425.9-1.9 399.4 24.6L349.6 74.4c-14.2 14.2-18.6 35.3-11 53.5 7.1 16.8 15.6 33.5 25.4 49.8 9.5 15.8 21.7 30.4 36.3 43.2l-36.2 36.2c-83.2-56.6-152.5-125.8-209-209l36.2-36.2c12.8 14.6 27.4 26.8 43.2 36.3 16.3 9.8 32.9 18.3 49.8 25.4 18.2 7.6 39.3 3.2 53.5-11l49.8-49.8c26.5-26.5 26.5-67.5 0-94L493.4 24.6zM380.5 93.5l49.8-49.8c6.2-6.2 16.4-6.2 22.6 0l19.8 19.8c6.2 6.2 6.2 16.4 0 22.6L423 136.1c-6.2 6.2-16.4 6.2-22.6 0l-19.8-19.8c-6.2-6.2-6.2-16.4 0-22.8zm-51.3 51.3l19.8 19.8c6.2 6.2 6.2 16.4 0 22.6L233.9 342.4c-6.2 6.2-16.4 6.2-22.6 0l-19.8-19.8c-6.2-6.2-6.2-16.4 0-22.6L329.2 144.8c6.2-6.2 16.4-6.2 22.6 0z" />
                                        </svg>
                                    </div>
                                    <a href="tel:{{ systemSetting()?->phone }}" class="text-[#007bff] text-sm ml-4">
                                        <h1 class="block">Phone</h1>
                                        <strong>{{ systemSetting()?->phone_number }}</strong>
                                    </a>
                                </li>
                                
                                
                            </ul>

                        </div>

                        <div class="mt-12">
                            <h2 class="text-gray-800 text-base font-bold">Socials</h2>

                            <ul class="flex mt-4 space-x-4">
                                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a target="blank" href="{{systemSetting()?->facebook_url}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" 
                                        fill='#007bff'
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                                data-original="#000000" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a href="{{ systemSetting()?->twitter_url }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" viewBox="0 0 24 24">
                                            <path d="M23.643 4.937c-.835.37-1.732.62-2.675.732a4.695 4.695 0 0 0 2.049-2.591 9.264 9.264 0 0 1-2.946 1.126 4.673 4.673 0 0 0-7.958 4.26A13.244 13.244 0 0 1 1.67 3.15a4.679 4.679 0 0 0-.633 2.348 4.674 4.674 0 0 0 2.079 3.891 4.646 4.646 0 0 1-2.114-.584v.057a4.683 4.683 0 0 0 3.743 4.583 4.673 4.673 0 0 1-2.106.08 4.68 4.68 0 0 0 4.366 3.239 9.374 9.374 0 0 1-5.806 2.004c-.376 0-.747-.022-1.116-.065a13.263 13.263 0 0 0 7.165 2.1c8.607 0 13.315-7.126 13.315-13.315 0-.2-.004-.4-.013-.598a9.525 9.525 0 0 0 2.348-2.42z" />
                                        </svg>
                                    </a>
                                </li>
                                
                                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a href="{{systemSetting()?->instagram_url}}" target="blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a href="{{ systemSetting()?->youtube_url }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#FF0000" viewBox="0 0 24 24">
                                            <path
                                                d="M23.498 6.186a2.89 2.89 0 0 0-2.033-2.048C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.465.638a2.891 2.891 0 0 0-2.033 2.048A30.6 30.6 0 0 0 0 12a30.6 30.6 0 0 0 .502 5.814 2.89 2.89 0 0 0 2.033 2.048C4.5 20.5 12 20.5 12 20.5s7.5 0 9.465-.638a2.89 2.89 0 0 0 2.033-2.048A30.6 30.6 0 0 0 24 12a30.6 30.6 0 0 0-.502-5.814ZM9.75 15.568V8.432L15.568 12 9.75 15.568Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <form class="ml-auo space-y-4" action="{{ route('enquiry') }}" method="POST">
                        @csrf
                        <input type='text' placeholder='Name' name="full_name"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4 
                            border text-sm outline-blue-500" />
                            @error('full_name')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        <input type='email' placeholder='Email' name="email"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4
                             border text-sm outline-blue-500" />
                             @error('email')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        <input type='phone_number' placeholder='Phone Number' name="phone_number"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4
                             border text-sm outline-blue-500" />
                             @error('phone_number')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                       
                        <textarea placeholder='Message' rows="6" name="message"
                            class="w-full text-gray-800 rounded-md px-4 border
                             text-sm pt-2.5 outline-blue-500"></textarea>
                             @error('message')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="terms"
                                    class="text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700 dark:text-neutral-400">I agree to
                                    the terms and conditions</span>
                            </label>
                            @error('terms')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        <button type='submit'
                            class="text-white bg-blue-500 hover:bg-blue-600 rounded-md text-sm px-4 py-3 w-full !mt-6">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mx-5 lg:mx-20 my-5 lg:my-10">
            <div class="mt-6">
                <iframe src="{{ systemSetting()->map_url }}" class="w-full h-[40rem] object-cover" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
