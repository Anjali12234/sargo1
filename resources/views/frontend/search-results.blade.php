@extends('frontend.layouts.master')

@section('mainContainer')
    <div class="sm:pl-20 sm:pr-30 min-h-screen mt-10">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Search Results for "{{ $query }}"</h1>

            <div class="mt-4">
                @if ($products->isEmpty() && $services->isEmpty() && $colors->isEmpty())
                    <p class="text-gray-500">No results found. Please try searching with different keywords.</p>
                @else
                    <div class="space-y-8">
                        <!-- Products Section -->
                        @if (!$products->isEmpty())
                            <div>
                                <h2 class="text-lg font-semibold text-blue-600 mb-2">Products</h2>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach ($products as $product)
                                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                            <img src="{{ $product->image }}" 
                                                 alt="{{ $product->title }}" 
                                                 class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h3 class="text-lg font-bold mb-2">{{ $product->title }}</h3>
                                                <p class="text-sm text-gray-700">{{ $product->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Services Section -->
                        @if (!$services->isEmpty())
                            <div>
                                <h2 class="text-lg font-semibold text-green-600 mb-2">Services</h2>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach ($services as $service)
                                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                            <img src="{{$service->image }}" 
                                                 alt="{{ $service->title }}" 
                                                 class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h3 class="text-lg font-bold mb-2">{{ $service->title }}</h3>
                                                <p class="text-sm text-gray-700">{{ $service->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Colors Section -->
                        @if (!$colors->isEmpty())
                            <div>
                                <h2 class="text-lg font-semibold text-red-600 mb-2">Colors</h2>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    @foreach ($colors as $color)
                                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                            <img src="{{$color->color_code_image }}" 
                                                 alt="{{ $color->name }}" 
                                                 class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h3 class="text-lg font-bold mb-2">{{ $color->name }}</h3>
                                                <p class="text-sm text-gray-700">{{ $color->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
