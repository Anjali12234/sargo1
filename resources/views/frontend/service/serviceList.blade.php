@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{asset("assets/frontend/staticimage/service.jpg")}}"
            alt="Ad Image 1" class="w-full h-96">
        {{-- <div class="absolute inset-0 flex flex-col mt-10 items-center bg-opacity-50 text-white px-3 rounded">
            <h1 class="font-slabo  text-center text-sm">COLOUR CATALOGUE</h1>
            <p class="text-5xl font-semibold text-center mt-3"> <span> See 1800+colours</span><br />
                <span> for wall inspirations</span>
            </p>

        </div> --}}
    </div>
    <div class="mx-0 lg:mx-20 my-0 lg:my-20">
        <div>
         <p class="text-slate-500">
               <span >Painting your home is exciting, but choosing the right colours, products, and house 
                painters while ensuring your family’s safety can be a huge task. That's where we come in 
                with our aim to make home painting a safe and great experience! With Sargo Paints Safe 
                Painting Services, be rest assured from all your painting worries.</span><br>
            <span>Start your consultation with Sargo Paints Safe Painting Services and let us guide you through all the questions you may have.</span>
        </p>
        </div>
        <h1 class=" text-4xl text-neutral-700 font-bold mt-10">
            Our Services
        </h1>
        <div class="grid grid-cols-4 mt-10 gap-10">
            @foreach ($services as $service)
                <div>
                    <img class="w-full h-56 sm:rounded-se-none transform transition-transform duration-300 ease-in-out hover:scale-110"
                        src="{{ $service->image }}" alt="">

                    <p class="mt-3 text-xl font-semibold">{{ $service->title }}</p>
                </div>
            @endforeach

        </div>
    </div>

    <div class="mx-0 lg:mx-20 my-0 lg:my-20">
        <h1 class=" text-4xl text-neutral-700 font-bold ">
            Why choose us?
        </h1>
        <div class="bg-slate-100 mt-10 px-5 font-slabo">
            <div class="border-b border-gray-200 dark:border-neutral-700">
                <nav class="flex gap-x-5 pt-5" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                    @foreach ($whyChooses as $index => $whychoose)
                        <button type="button"
                            class="hs-tab-active:font-semibold hs-tab-active:border-neutral-800 hs-tab-active:text-neutral-800 
                            py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap 
                            text-gray-500 hover:text-neutral-800 focus:outline-none focus:text-neutral-800 disabled:opacity-50 
                            disabled:pointer-events-none {{ $loop->first ? 'active' : '' }}"
                            id="tabs-with-underline-item-{{ $index }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}" 
                            data-hs-tab="#tabs-with-underline-{{ $index }}" aria-controls="tabs-with-underline-{{ $index }}" 
                            role="tab">
                            {{ $whychoose->title }}
                        </button>
                    @endforeach
                </nav>
            </div>
        
            <div class="mt-10">
                @foreach ($whyChooses as $index => $whychoose)
                    <div id="tabs-with-underline-{{ $index }}" role="tabpanel" aria-labelledby="tabs-with-underline-item-{{ $index }}" 
                        class="{{ $loop->first ? '' : 'hidden' }}">
                        <div class="flex grid grid-cols-12 gap-5">
                            <div class="col-span-4">
                                <img class="w-full"
                                    src="{{ $whychoose->image_url ?? 'https://www.asianpaintsnepal.com/content/dam/ap-np-revamp/services/img3.jpg' }}"
                                    alt="{{ $whychoose->title }}">
                            </div>
                            <div class="col-span-8">
                                {!! $whychoose->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        

    </div>
@endsection

</html>
