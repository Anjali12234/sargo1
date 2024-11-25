@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Enquiry Details</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.enquiry.index') }}">Enquiry Messages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Enquiry Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="pd-20 card-box mb-30">
            <h4 class="text-blue h4 mb-4">Enquiry Information</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-4 shadow">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <strong>Full Name:</strong>
                                <p>{{ $enquiry->full_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Email:</strong>
                                <p>{{ $enquiry->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Phone No:</strong>
                                <p>{{ $enquiry->phone_number }}</p>
                            </div>
                            <div class="col-md-12">
                                <strong>Message:</strong>
                                <p>{{ $enquiry->message }}</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('admin.enquiry.index') }}" class="btn btn-primary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
