@extends('admin.master')
@section('title')
    Add Professional Development Post
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Create Professional Development Post</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Professional Development Post</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                </div>
            </div>
            <form action="{{route('save.courses.teaching')}}" method="post">
                @csrf
                @include('admin.include.errors')
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Professional Development Post Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Please insert Professional Development title" value="{{$courses->title}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Professional Development Post Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"  class="form-control">{{$courses->description}}</textarea>
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
