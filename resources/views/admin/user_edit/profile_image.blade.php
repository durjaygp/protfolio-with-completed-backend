@extends('admin.master')
@section('title')
    LeftSide Menu Image Settings
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Update Website Data</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{route('dashboard')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">LeftSide Menu Image Settings</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route('save.profile.image')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.include.errors')
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>LeftSide Menu Image</label>
                                    <input type="file" name="image"  class="dropify">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Recent Image</label>
                                    <img src="{{asset($menu->image)}}" class="form-control w-25" alt="">
                                </div>
                            </div>
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
