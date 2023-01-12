@extends('admin.master')
@section('title')
Admin Dashboard
@endsection

@section('content')
<div class="page-header no-gutters">
    <div class="d-md-flex align-items-md-center justify-content-between">
        <div class="media m-v-10 align-items-center">
            <div class="avatar avatar-image avatar-lg">
                <img src="{{asset('backEnd')}}/assets/images/avatars/thumb-3.jpg" alt="">
            </div>
            <div class="media-body m-l-15">
                <h4 class="m-b-0">Welcome back, {{ Auth::user()->name }}!</h4>
                <span class="text-gray">Main Admin</span>
            </div>
        </div>
        <div class="d-md-flex align-items-center d-none">
            <div class="media align-items-center m-r-40 m-v-5">
                <div class="font-size-27">
                    <i class="text-primary anticon anticon-profile"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">{{$category_count}}</h2>
                    <span class="text-gray">Category</span>
                </div>
            </div>
            <div class="media align-items-center m-r-40 m-v-5">
                <div class="font-size-27">
                    <i class="text-success  anticon anticon-appstore"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">{{$post_count}}</h2>
                    <span class="text-gray">Social Media</span>
                </div>
            </div>
            <div class="media align-items-center m-r-40 m-v-5">
                <div class="font-size-27">
                    <i class="text-success  anticon anticon-file-image"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">{{$post_count}}</h2>
                    <span class="text-gray">Photos</span>
                </div>
            </div>
            <div class="media align-items-center m-v-5">
                <div class="font-size-27">
                    <i class="text-danger anticon anticon-notification"></i>
                </div>
                <div class="d-flex align-items-center m-l-10">
                    <h2 class="m-b-0 m-r-5">{{$blog_count}}</h2>
                    <span class="text-gray">Blog Post</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Latest Messages</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{!!Str::limit($message->description, 30)!!}</td>
                                <td class="">
                                    <a href="{{route('message',[$message->id])}}">
                                        <button class="btn btn-icon btn-success btn-hover btn-sm btn-rounded pull-right">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>

                                    <form action="{{route('delete.message')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$message->id}}">
                                        <button type="submit" class="btn btn-icon btn-danger btn-hover btn-sm btn-rounded">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">This Month Calender</h5>
                    <div>
                        <a href="" class="btn btn-default btn-sm">View All</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="d-flex m-b-20">
                        <div class="calendar-card border-0">
                            <div data-provide="datepicker-inline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
