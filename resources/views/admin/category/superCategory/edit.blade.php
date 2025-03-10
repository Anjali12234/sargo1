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
                        <a class="btn btn-primary " href="{{ route('admin.category.superCategory.index', [$category, $superCategory]) }}" role="button">
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
            <form method="post" action="{{ route('admin.category.superCategory.update', [$category, $superCategory]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title', $superCategory->title) }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Slider Pages</label>
                        <select class="custom-select2 form-control" name="slider_page[]" multiple style="width: 100%; height: 38px">
                            @foreach (\App\Enums\SliderTypeEnum::cases() as $case)
                                <option value="{{ $case->value }}" 
                                    {{ in_array($case->value, old('slider_page', $superCategory->slider_page ?? [])) ? 'selected' : '' }}>
                                    {{ $case->label() }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('slider_page')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bg_image">Bg Image</label>
                        <img src="{{ $superCategory?->bg_image }}" height="100" width="100" alt="">

                        <input class="form-control" id="bg_image" name="bg_image" type="file"
                            value="{{ old('bg_image') }}" />
                        <span class="text-warning">
                            @error('bg_image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>


                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug', $superCategory->slug) }}" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position">Position</label>
                        <input class="form-control" id="position" name="position" type="text"
                            value="{{ old('position', $superCategory->position) }}" />
                        <span class="text-warning">
                            @error('position')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>



                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="editor" cols="50" rows="10">{{ old('description', $superCategory->description) }}</textarea>
                        <span class="text-warning">
                            @error('description')
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
