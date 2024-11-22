@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="https://static.asianpaints.com/content/dam/asian_paints/products/listing-page/interior-walls-interior-plain-finishes-spotlight-asian-paints.jpg"
            alt="Ad Image 1" class="w-full h-96">
        <div class="absolute inset-0 flex flex-col mt-10 items-center bg-opacity-50 text-white px-3 rounded">
            <h1 class="font-slabo  text-center text-sm">COLOUR CATALOGUE</h1>
            <p class="text-5xl font-semibold text-center mt-3"> <span> See 1800+colours</span><br />
                <span> for wall inspirations</span>
            </p>

        </div>
    </div>
    <div class="mx-0 lg:mx-20 my-0 lg:my-20">
        <h1 class=" text-4xl text-neutral-700 font-bold">
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


            <div class="border-b border-gray-200 dark:border-neutral-700  ">
                <nav class="flex gap-x-5  pt-5" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-neutral-800 hs-tab-active:text-neutral-800 py-4 px-1 inline-flex 
                    items-center gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-500 hover:text-neutral-800 
                    focus:outline-none focus:text-neutral-800 disabled:opacity-50 disabled:pointer-events-none  
                     active"
                        id="tabs-with-underline-item-1" aria-selected="true" data-hs-tab="#tabs-with-underline-1"
                        aria-controls="tabs-with-underline-1" role="tab">
                        A hassle-free end-to-end service
                    </button>
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-neutral-800 hs-tab-active:text-neutral-800 py-4 px-1 inline-flex 
                    items-center gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-500 hover:text-neutral-800 
                    focus:outline-none focus:text-neutral-800 disabled:opacity-50 disabled:pointer-events-none  
                    "
                        id="tabs-with-underline-item-2" aria-selected="false" data-hs-tab="#tabs-with-underline-2"
                        aria-controls="tabs-with-underline-2" role="tab">
                        Trained Professional
                    </button>
                    <button type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-neutral-800 hs-tab-active:text-neutral-800 py-4 px-1 inline-flex 
                    items-center gap-x-2 border-b-2 border-transparent text-xl whitespace-nowrap text-gray-500 hover:text-neutral-800
                    focus:outline-none focus:text-neutral-800 disabled:opacity-50 disabled:pointer-events-none  
                    "
                        id="tabs-with-underline-item-3" aria-selected="false" data-hs-tab="#tabs-with-underline-3"
                        aria-controls="tabs-with-underline-3" role="tab">
                        Supervised Painting
                    </button>
                </nav>
            </div>

            <div class="mt-10">
                <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                    <div class="flex grid grid-cols-12 gap-5">
                        <div class="col-span-4">
                            <img class="w-full"
                                src="https://www.asianpaintsnepal.com/content/dam/ap-np-revamp/services/img3.jpg"
                                alt="">
                        </div>
                        <div class="col-span-8">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta eaque, molestias id
                                voluptates, enim eius mollitia nesciunt maxime, dolores alias fuga accusamus harum facilis
                                iure dolorem optio! Expedita, maiores voluptates.</p>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
                    <div class="flex grid grid-cols-12 gap-5">
                        <div class="col-span-4">
                            <img class="w-full"
                                src="https://www.asianpaintsnepal.com/content/dam/ap-np-revamp/services/sps-why-choose-us-mobile-Trained-Contractors.jpg"
                                alt="">
                        </div>
                        <div class="col-span-8">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta eaque, molestias id
                                voluptates, enim eius mollitia nesciunt maxime, dolores alias fuga accusamus harum facilis
                                iure dolorem optio! Expedita, maiores voluptates.</p>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
                    <div class="flex grid grid-cols-12 gap-5">
                        <div class="col-span-4">
                            <img class="w-full"
                                src="https://www.asianpaintsnepal.com/content/dam/ap-np-revamp/services/img1.jpg"
                                alt="">
                        </div>
                        <div class="col-span-8">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta eaque, molestias id
                                voluptates, enim eius mollitia nesciunt maxime, dolores alias fuga accusamus harum facilis
                                iure dolorem optio! Expedita, maiores voluptates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

</html>
