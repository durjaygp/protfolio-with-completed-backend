@extends('admin.master')
@section('title')
    Website Settings
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Update Website Data</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{route('dashboard')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Update Website Details</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route('setting.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.include.errors')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Website Name</label>
                            <input type="hidden" name="id" value="">
                            <input type="text" class="form-control" name="name" value="{{$set->name}}" placeholder="Website Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Personal CV</label>
                            <input type="text" class="form-control" name="cv" value="{{$set->cv}}" placeholder="Example: https://drive.google.com/file/d/1PbcfHk7ErZjUzI7WTYGNal2KNLLwrgU2/preview">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">description</label>
                            <input type="text" class="form-control" name="description" value="{{$set->description}}" placeholder="Your Title / Designation">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Website Meta data, google-site-verification</label>
                            <input type="text" class="form-control" name="google" value="{{$set->google}}" placeholder="Example: +nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34=">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Website Meta data, Author Name</label>
                            <input type="text" class="form-control" name="author" value="{{$set->author}}" placeholder="Example: Website owner Name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Website Meta data, Description</label>
                            <input type="text" class="form-control" name="description" value="{{$set->description}}" placeholder="Example: Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Website Meta data, Seo Tags Use Comma</label>
                            <input type="text" class="form-control" name="tags" value="{{$set->tags}}" placeholder="Example: my name is jhon, web developer,">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Website Icon</label>
                                    <input type="file" name="image"  class="dropify">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Recent Image</label>
                                    <img src="{{asset($set->image)}}" class="form-control w-25" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Website Footer Text</label>
                            <input type="text" class="form-control" name="footer" value="{{$set->footer}}" placeholder="Exmple: © 2022 Tokyo">
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
