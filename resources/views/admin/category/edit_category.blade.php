@extends('admin.master')
@section('title')
    Edit Category
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Edit Category</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Edit Category</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger mt-3 md-3">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('category')}}" class="btn btn-primary">
                        <i class="anticon anticon-arrow-left m-r-5"></i>
                        <span>Manage Category</span>
                    </a>
                </div>
            </div>
            <form action="{{route('update.category')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <label for="formGroupExampleInput">Edit Name</label>
                    <input type="text" class="form-control" name="category_title" value="{{$category->category_title}}" placeholder="Please insert category title">
                </div>
                <div class="form-group">
                    <label>Category Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$category->slug}}" placeholder="Category slug url">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>


@endsection
