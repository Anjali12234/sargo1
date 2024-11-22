@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Slider</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Slider
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
            <form method="post" action="{{ route('admin.slider.update', $slider) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>

                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title',$slider->title) }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <img src="{{ $slider?->image }}" height="100" width="100" alt="">

                        <input class="form-control" id="image" name="image" type="file"
                            value="{{ old('image', $slider?->image) }}" />
                        <span class="text-warning">
                            @error('image')
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
