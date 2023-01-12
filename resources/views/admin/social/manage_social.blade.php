@extends('admin.master')
@section('title')
    Manage Social
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Manage Social Media</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Social Media</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-12 text-right">
                    <a href="{{route('add.social')}}" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Add Social Media</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Social Media Name</th>
                        <th>Social Media Icons</th>
                        <th>Social Media Links</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($socials as $soc)

                        <tr>

                            <td>
                                {{$i++}}
                            </td>
                            <td>{{$soc->social_title}}</td>
                            <td>{{$soc->social_icon}}</td>
                            <td>{{$soc->social_link}}</td>
                            <td class="text-left d-flex">
                                <a href="{{route('edit.social',['id'=>$soc->id])}}" class="btn btn-primary ">
                                    <i class="anticon anticon-edit py-1"></i> Edit
                                </a>&nbsp;
                                <form action="{{route('delete.social')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$soc->id}}">
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
