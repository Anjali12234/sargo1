@extends('backend.layouts.master')
@section('container')
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/backend/vendors/images/banner-img.png')}}" alt="" />
            </div>
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    Welcome back 
                    <div class="weight-600 font-30 text-blue">{{ auth()->user()->name }}!</div>
                </h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                   
                    <div class="widget-data">
                        <div class="h4 mb-0">{{ $totalCount }}</div>
                        <div class="weight-600 font-14">Total Notifications</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                  
                    <div class="widget-data">
                        <div class="h4 mb-0">{{ $unreadCount }}</div>
                        <div class="weight-600 font-14">Unread Notifications:</div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($categories as $category)
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    
                    <div class="widget-data">
                        <div class="h4 mb-0">{{$category->super_categories_count}}</div>
                        <div class="weight-600 font-14">{{$category->title}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
   

@endsection
