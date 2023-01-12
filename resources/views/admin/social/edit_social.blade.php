@extends('admin.master')
@section('title')
    Edit Social Media
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Edit Category</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Edit Social Media</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('social')}}" class="btn btn-primary">
                        <i class="anticon anticon-arrow-left m-r-5"></i>
                        <span>Manage Social Media</span>
                    </a>
                </div>
            </div>
            <form action="{{route('update.social')}}" method="post">
                @csrf
                @include('admin.include.errors')
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$social->id}}">
                    <label for="formGroupExampleInput">Social Media Name</label>
                    <input type="text" class="form-control" name="social_title" value="{{$social->social_title}}" placeholder="Please insert category title">
                </div>
                <div class="form-group">
                    <label>Social Media icon</label>
                    <input type="text" class="form-control" name="social_icon" value="{{$social->social_icon}}" placeholder="Category slug url">
                </div>
                <div class="form-group">
                    <label>Social Media Links</label>
                    <input type="text" class="form-control" name="social_link" value="{{$social->social_link}}" placeholder="Category slug url">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>


@endsection
