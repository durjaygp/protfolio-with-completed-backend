@extends('admin.master')
@section('title')
    Update About Me
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Update Your Details</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{route('dashboard')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Update Details</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @include('admin.include.errors')
            <form action="{{route('update.about')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Enter Your Name</label>
                            <input type="hidden" name="id" value="{{$about->id}}">
                            <input type="text" class="form-control" name="name" value="{{$about->name}}" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Your Title / Designation </label>
                            <input type="text" class="form-control" name="title" value="{{$about->title}}" placeholder="Your Title / Designation">
                        </div>

                        <div class="form-group">
                            <label>Your Image</label>
                            <input type="file" name="image"  class="dropify">
                        </div>
                        <div class="form-group">
                            <label>Recent Image</label>
                            <img src="{{asset($about->image)}}" class="form-control w-25" alt="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Give Here Short Introduction, It Will appear Home Page</label>
                            <textarea name="short_intro"  cols="30" rows="10"  class="form-control">{{$about->short_intro}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Description About Yourself</label>
                            <textarea name="description" id="description" cols="30" rows="10"  class="form-control">{{$about->description}}</textarea>
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
