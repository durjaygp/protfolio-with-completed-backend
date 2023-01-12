@extends('admin.master')
@section('title')
    Manage Posts
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Manage Post</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Post</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('add.post')}}" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Add Post</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Title</th>
                        <th>Category Name / Menu Name</th>
{{--                        <th>Image</th>--}}
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $sl=1; @endphp
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$sl++}}</td>
                        <td>{{$post->post_title}}</td>
                        <td>{{$post->category_title}}</td>
{{--                        <td><img src="{{asset($post->image)}}" alt="" class="img-fluid w-25"></td>--}}
                        <td><p> {!! Str::words($post->description, 20)!!}</p></td>
                        <td class="d-flex">

                            <a href="{{route('edit.post',[$post->id])}}" class="btn btn-primary ">
                                <i class="anticon anticon-edit"></i> Edit
                            </a>&nbsp;

                            <form action="{{route('delete.post')}}" method="post">
                               @csrf
                               <input type="hidden" name="id" value="{{$post->id}}">
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
