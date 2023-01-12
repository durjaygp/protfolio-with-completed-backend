@extends('admin.master')
@section('title')
    Show Full Message
@endsection

@section('content')
        <div class="page-header">
            <h2 class="header-title">Message</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{route('dashboard')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <a class="breadcrumb-item" href="#">Message</a>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="d-flex m-b-30">
                            <div class="m-l-15">
                                <h5>Name: {{$message->name}}</h5>
                                <h5>Email: {{$message->email}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <p>{{$message->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
