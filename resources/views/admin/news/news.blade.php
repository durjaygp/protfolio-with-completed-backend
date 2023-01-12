@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Manage Blog</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Blog</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('add.news')}}" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Add Blog</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Blog Title</th>
{{--                        <th>Image</th>--}}
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $sl=1; @endphp
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$sl++}}</td>
                            <td>{{$blog->blog_title}}</td>
{{--                            <td><img src="{{asset($blog->image)}}" alt="" class="img-fluid w-50"></td>--}}

                            <td>{!! Str::words($blog->description, 30)!!}</td>

                            <td class="d-flex">

                                <a href="{{route('edit.news',[$blog->id])}}" class="btn btn-primary ">
                                    <i class="anticon anticon-edit"></i> Edit
                                </a>&nbsp;
                                <form action="{{route('delete.news')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                    <button type="submit" class="btn btn-danger"><i class="anticon anticon-delete"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
