@extends('admin.master')
@section('title')
    Manage Categories
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Manage Category</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Category</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('add.category')}}" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Add Category</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Category Name / Menu Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                         @endphp
                        @foreach($categories as $cat)

                    <tr>

                        <td>
                            {{$i++}}
                        </td>
                        <td>{{$cat->category_title}}</td>
                        <td class="text-left d-flex">
                            <a href="{{route('edit.category',['id'=>$cat->id])}}" class="btn btn-primary ">
                                <i class="anticon anticon-edit py-1"></i> Edit
                            </a>&nbsp;
                            <form action="{{route('delete.category')}}" method="post">
                               @csrf
                               <input type="hidden" name="id" value="{{$cat->id}}">
                               <input type="submit" value="Delete" class="btn btn-danger">

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
