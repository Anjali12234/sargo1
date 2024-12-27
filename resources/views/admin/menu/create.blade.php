@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Menu</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Menu
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.menu.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title') }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        Slug For Static Menus: about,contact,color,whyChooseUs
                        <label for="slug">Slug for static</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug') }}" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Parent Type</label>
                        <select class="custom-select2 form-control" name="menu_id" style="width: 100%; height: 38px">
                            <option value="">Type</option>
                            @foreach ($mainMenus as $mainMenu)
                                <option value="{{ $mainMenu->id }}">{{ $mainMenu->title }}</option>
                                @foreach ($mainMenu->children as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                @endforeach
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('menu_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">

                        <label for="position">Position</label>
                        <input class="form-control" id="position" name="position" type="text"
                            value="{{ old('position') }}" />
                        <span class="text-warning">
                            @error('position')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label>Chosse Main Category</label>
                        <select class="custom-select2 form-control" name="menu_type" style="width: 100%; height: 38px">
                            <option value="">Choose Main Category </option>
                            
                                <option value="productCategory">Product Category</option>
                                <option value="category">Main Category</option>
                        </select>
                        <span class="text-warning">
                            @error('menu_type')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Chosse Category</label>
                        <select class="custom-select2 form-control" name="model_id" style="width: 100%; height: 38px">
                            <option value="">Choose Category </option>
                            <option value="">Choose Category </option>
                            @foreach (categories() as $sharedCategory)
                                <option class="bg-danger" value="">--------{{ $sharedCategory->title }}--------</option>
                            @foreach ($sharedCategory->categories as $superCategory)
                                <option value="{{ $superCategory->id }}">{{ $superCategory->title }}</option>
                                
                            @endforeach
                            @endforeach
                            <option class="bg-danger" value="">--------Product--------</option>
                            @foreach ($productCategories as $productCategory)
                                <option value="{{ $productCategory->id }}">{{ $productCategory->title }}/{{$productCategory->type}}</option>
                            @endforeach
                           
                        </select>
                        <span class="text-warning">
                            @error('model_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}

                    {{-- @livewire('menu-category-livewire') --}}
                    {{-- @livewire('assignment') --}}
                    {{-- @livewire('menu-type') --}}

                    <div class="form-group col-md-6">
                        <label>Choose Main Category</label>
                        <select class="form-control" name="menu_type" id="menu_type">
                            <option value="">Choose Main Category</option>
                            <option value="productCategory">Product Category</option>
                            <option value="category">Main Category</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Choose Category</label>
                        <select class="form-control" name="model_id" id="model_id">
                            <option value="">Choose Category</option>
                        </select>
                    </div>


                </div>


                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#menu_type').on('change', function() {
                var menuType = $(this).val();
                var modelDropdown = $('#model_id');

                // Clear previous options
                modelDropdown.empty();
                modelDropdown.append('<option value="">Choose Category</option>');

                if (menuType) {
                    $.ajax({
                        url: "{{ route('admin.get.menu.types') }}",
                        type: "GET",
                        data: {
                            menu_type: menuType
                        },
                        success: function(data) {
                            if (menuType === 'category') {
                                $.each(data, function(index, item) {
                                    modelDropdown.append(
                                        '<option disabled class="bg-secondary text-white">--------' +
                                        item.title + '--------</option>');
                                    $.each(item.categories, function(index, subItem) {
                                        modelDropdown.append('<option value="' +
                                            subItem.id + '">' + subItem
                                            .title + '</option>');
                                    });
                                });
                            } else if (menuType === 'productCategory') {
                                $.each(data, function(index, item) {
                                    modelDropdown.append('<option value="' + item.id +
                                        '">' + item.title + '/' + item.type +
                                        '</option>');
                                });
                            }
                        },
                        error: function() {
                            alert('Error fetching data. Please try again.');
                        }
                    });
                }
            });
        });
    </script>

@endsection
