@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="relative w-full sm:w-auto">
        <img src="{{ asset('assets/frontend/staticimage/banner.jpg') }}" alt="Ad Image 1" class="w-full h-96">
        <div class="absolute inset-0 flex flex-col mt-20 items-center bg-opacity-50 text-white px-3 rounded">
            <p class="text-6xl font-semibold text-center mt-3"> <span> About Us</span>
            </p>

        </div>
    </div>


    <div class="mt-5 font-slabo"
        style="background-image: url('{{ asset('assets/frontend/staticimage/element.png') }}'); 
             background-repeat: no-repeat; background-size: contain; background-position: center;">
       
        @foreach ($abouts as $about)
            <div class="mt-6 mx-5 md:mx-20 ">
                <h1 class="mt-14 text-4xl font-bold ">{{$about->title}}</h1>
               <div class="font-slabo text-lg mt-5">

                   {!!$about->description!!}
               </div>


            </div>
        @endforeach

    </div>
@endsection
