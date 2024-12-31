@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Service </h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Service 
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.service.create') }}" role="button">
                            Add
                        </a>

                    </div>
                </div>
            </div>
        </div>
       
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Service List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th>Image</th>
                            <th>Title </th>
                            <th>Type </th>
                            <th>Choose Slider Page </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $key => $service)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td><img src="{{ $service?->image }}" height="150" width="100" alt="">
                                </td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->type->label() }}</td>
                                <td>
                                    <div class="dropdown">
                                        <form action="{{ route('admin.service.updateSlider', $service) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select class="custom-select2 form-control" name="slider_page" 
                                                style="width: 100%; height: 38px" onchange="this.form.submit()">
                                                <option value="" {{ is_null($service->slider_page) ? 'selected' : '' }}>Choose Slider Page</option>
                                                @foreach (\App\Enums\SliderTypeEnum::cases() as $case)
                                                    <option value="{{ $case->value }}" 
                                                        {{old('slider_page',$service->slider_page)==$case->value ? 'selected':''}}>
                                                        {{ $case->label() }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <span class="text-warning">
                                                @error('slider_page') 
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </form>
                                    </div>
                                </td>
                                
                                
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('admin.service.edit', $service) }}"><i
                                                    class="dw dw-edit2"></i> Edit</a>

                                            <form action="{{ route('admin.service.destroy', $service) }}" method="post"
                                                style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Are You sure want to delete')"> <i
                                                        class="dw dw-delete-3"></i>Delete </button>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $services->links() }}
            </div>
        </div>

    </div>
@endsection
