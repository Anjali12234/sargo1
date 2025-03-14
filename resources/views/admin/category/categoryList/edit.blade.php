@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>{{ $category->title }}</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $category->title }}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.category.categoryList.index', [$category, $categoryList]) }}" role="button">
                            Back
                        </a>

                    </div>
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
            <form method="post" action="{{ route('admin.category.categoryList.update', [$category, $categoryList]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Type</label>
                        <select class="custom-select2 form-control" name="category_id" style="width: 100%; height: 38px">
                            <option value="">Type</option>
                            @foreach ($category->categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id',$categoryList->category_id)  == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}

                                </option>

                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('category_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title', $categoryList->title) }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="image">Image</label>

                        <input class="form-control" id="image" type="file" name="image">
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label for="title">Description</label>
                        <textarea name="description" id="editor" cols="50" rows="10">{{ old('description', $categoryList->description) }}</textarea>
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>



                </div>

                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>


    </div>
@endsection
