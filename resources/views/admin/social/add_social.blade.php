@extends('admin.master')
@section('title')
    Add Social Media
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Add Social Media</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Add Social Media</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('social')}}" class="btn btn-primary">
                        <i class="anticon anticon-arrow-left m-r-5"></i>
                        <span>Manage Social</span>
                    </a>
                </div>
            </div>
            <form action="{{route('save.social')}}" method="post">
                @csrf
                @include('admin.include.errors')
                <div class="form-group">
                    <label for="formGroupExampleInput">Social Media Name</label>
                    <input type="text" class="form-control" name="social_title" placeholder="Social Media Name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Social Media Icon Class</label>
                    <input type="text" class="form-control" name="social_icon" placeholder="Social Media Icon Class">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Social Media Link</label>
                    <input type="text" class="form-control" name="social_link" placeholder="Social Media Link: ">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>


@endsection
