@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="sm:pl-20 sm:pr-30 min-h-screen mt-10">
        <div>
            @if (isset($message))
                <p>{{ $message }}</p>
            @else
                <div class="mb-4">
                    <p class="text-gray-700 text-lg font-medium">Found {{ $resultsCount }} result(s)</p>
                </div>
                <div>
                    @foreach ($results as $result)
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 mt-5">
                            <!-- Name or Title -->
                            <a href="{{ route('productDetail', $result->slug ?? '#') }}" class="block">
                                <p class="text-gray-800 text-lg">
                                    {{ Str::words($result->name ?? $result->title, 5) }}
                                </p>
                            </a>

                            <!-- Breadcrumb -->
                            @if (isset($result->productCategory))
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a> > </li>
                                        <li class="breadcrumb-item"><a href="{{ route('productDetail', $result->slug) }}">Product Category</a> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->productCategory->title }}</li>
                                    </ol>
                                </nav>
                            @elseif (isset($result->colorCategory))
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a> > </li>
                                        <li class="breadcrumb-item"><a href="{{ route('colorDetail', $result->slug) }}">Color Category</a> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->colorCategory->title }}</li>
                                    </ol>
                                </nav>
                            @else
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->title }}</li>
                                    </ol>
                                </nav>
                            @endif

                            <!-- Image and Description -->
                            <div class="flex mt-2">
                                <!-- Image -->
                                <img src="{{ $result->files->isNotEmpty() ? $result->files->first()->file_url : ($result->image ?? $result->color_code_image) }}"
                                     alt="Result Image"
                                     class="h-20 w-20 object-cover rounded-md mr-4">
                                <!-- Description -->
                                <div>
                                    <p class="text-gray-600">
                                        {!! Str::words($result->description ?? 'No description available', 10) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
