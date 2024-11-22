@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="mx-0 lg:mx-20 my-0 lg:my-20 mt-10">
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
