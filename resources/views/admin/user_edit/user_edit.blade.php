@extends('admin.master')
@section('title')
    Update Password And Name
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
                    <a href="" class="btn btn-primary">
                        <i class="anticon anticon-arrow-left m-r-5"></i>
                        <span>Back To Dashboard</span>
                    </a>
                </div>
            </div>
            <form action="{{route('save.useredit')}}" method="post">
                @csrf
                @include('admin.include.errors')
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">Full Name:</label>
                            <input type="name" class="form-control" name="name" placeholder="Full Name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold">Password <small>(Enter password if you want change.)</small></label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary d-block">

                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
