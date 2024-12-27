@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Menu </h4>
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
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.menu.create') }}" role="button">
                            Add
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Menu List</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $key => $menu)
                            @include('backend.partials.menu-row', ['menu' => $menu, 'numbering' => $key + 1])
                        @endforeach
                    </tbody>
                </table>
                {{ $menus->links() }}
            </div>
        </div>
    </div>
@endsection
