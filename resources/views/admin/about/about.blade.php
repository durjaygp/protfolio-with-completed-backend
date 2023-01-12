@extends('admin.master')
@section('title')
    About Me
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">About</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">About</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class=" text-center">About Me</h2>

        </div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="d-md-flex align-items-center">
                    <div class="text-center text-sm-left ">
                        <div class="avatar avatar-image" style="width: 250px; height:250px">
                            <img src="{{asset($about->image)}}" alt="">
                        </div>
                    </div>
                    <div class="text-center text-sm-left m-v-15 p-l-30">
                        <h2 class="m-b-5">{{$about->name}}</h2>
                        <p class="text-dark m-b-20">{{$about->title}}</p>
                        <p class="text-danger">{{$about->short_intro}}</p>

                    </div>
                </div>
                <div class="card-collapse-btn description">
                    <div>
                        <p>{{$about->description}}</p>



                    </div>
                </div>
                <a href="{{route('about.me')}}" class="btn btn-primary  align-content-center">Update About Yourself</a>
            </div>
        </div>
    </div>


@endsection
