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
            <form method="post" action="{{ route('admin.menu.update', $menu) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title', $menu->title) }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        Slug For Static Menus: about,contact,productCategory
                        <label for="slug">Slug for static</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug', $menu->slug) }}" />
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
                                <option value="{{ $mainMenu->id }}"
                                    {{ old('menu_id', $menu->menu_id) == $mainMenu->id ? 'selected' : '' }}>
                                    {{ $mainMenu->title }}</option>
                                @foreach ($mainMenu->children as $child)
                                    <option value="{{ $child->id }}" style="background-color: aqua"
                                        {{ old('menu_id', $menu->menu_id) == $child->id ? 'selected' : '' }}>
                                        &nbsp;&nbsp;-- {{ $child->title }}
                                    </option>
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
                            value="{{ old('position', $menu->position) }}" />
                        <span class="text-warning">
                            @error('position')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Choose Main Category</label>
                        <select class="custom-select2 form-control" name="menu_type" style="width: 100%; height: 38px">
                            <option value="">Choose Main Category </option>

                            @foreach (config('menuTypes') as $configMenu)
                                <option value="{{ $configMenu }}"{{ old('type',$menu->type) == $configMenu  ? 'selected' : ''}}>{{ $configMenu }}</option>
                            @endforeach
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
                            <option value="">Choose Category</option>
                            @foreach (categories() as $sharedCategory)
                                <option value="{{ $sharedCategory->id }}">{{ $sharedCategory->title }}</option>
                                @foreach ($sharedCategory->categories as $superCategory)
                                    <option value="{{ $superCategory->id }}" 
                                        {{ old('model_id', 'category_' . $menu->model_id) == 'category_' . $superCategory->id ? 'selected' : '' }}>
                                        &nbsp;&nbsp;-- {{ $superCategory->title }}
                                    </option>
                                @endforeach
                            @endforeach
                            <option value="">Product</option>
                            @foreach ($productCategories as $productCategory)
                                <option value="{{ $productCategory->id }}" 
                                    {{ old('model_id', 'product_' . $menu->model_id) == 'product_' . $productCategory->id ? 'selected' : '' }}>
                                    &nbsp;&nbsp;-- {{ $productCategory->title }}/{{ $productCategory->type }}
                                </option>
                            @endforeach
                        </select>
                        
                        <span class="text-warning">
                            @error('model_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- @livewire('menu-category-livewire') --}}

                </div>


                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>


    </div>
@endsection
