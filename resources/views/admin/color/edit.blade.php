@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>color</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                color
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.color.create') }}" role="button">
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
            <form method="post" action="{{ route('admin.color.update', $color) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="name">Color Name</label>
                        <input class="form-control" id="name" name="name" type="text"
                            value="{{ old('name', $color->name) }}" />
                        <span class="text-warning">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="color_code">Color Code</label>
                        <input class="form-control" id="color_code" name="color_code" type="text"
                            value="{{ old('color_code',$color->color_code) }}" />
                        <span class="text-warning">
                            @error('color_code')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>Type</label>
                        <select class="custom-select2 form-control" name="color_category_id" style="width: 100%; height: 38px">
                            <option value="">Type</option>
                            @foreach($colorCategories as $case)
                            <option value="{{$case->id}}"
                                {{ old('color_category_id', $color->color_category_id) == $case->id ? 'selected' : '' }}>
                                {{ $case->color_name }}

                            </option>
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('color_category_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="color_code_image">Color Code Image</label>

                        <input class="form-control" id="color_code_image" type="file" name="color_code_image">
                        <span class="text-warning">
                            @error('color_code_image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Color Code Example</label>

                        <input class="form-control" id="files" type="file" name="files[]" multiple>
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>


                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug', $color->slug) }}" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position">Position</label>
                        <input class="form-control" id="position" name="position" type="text"
                            value="{{ old('position', $color->position) }}" />
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
                        <textarea name="description" id="editor" cols="50" rows="10">{{ old('description', $color->description) }}</textarea>
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

            <div class="grid grid-cols-4 gap-2 ...">
                
                @foreach ($color->files as $file)
                    <div class="flex p-9">
                     
                        <img src="{{ $file->file_url }}" height="200" width="200" alt="">
                        <form action="{{ route('file.destroy', $file) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete?')">
                                <i class="ti ti-xbox-x text-4xl font-bold"></i>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
