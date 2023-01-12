@extends('admin.master')
@section('title')
    Add Blog
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Create New Blog</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Create Blog</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('news')}}" class="btn btn-primary">
                        <i class="anticon anticon-arrow-left m-r-5"></i>
                        <span>Manage Blog</span>
                    </a>
                </div>
            </div>
            <form action="{{route('save.news')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.include.errors')
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Blog Title</label>
                            <input type="text" class="form-control" name="blog_title" placeholder="Please Insert Blog title">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label>Post Image</label>--}}
{{--                            <input type="file" name="image" id="" class="dropify">--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="formGroupExampleInput">Post Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"  class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
