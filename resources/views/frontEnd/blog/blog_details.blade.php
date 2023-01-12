@extends('frontEnd.master')

@section('title')
    {{$blog->blog_title}}
@endsection

@section('content')

    <div  class="">
        <div class="container">
            <div class="tokyo_tm_about">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>Blog Details</h3>
                        </div>
                    </div>
                </div>
                <div class="top_author_image">
                    <img src="{{asset($blog->image)}}" alt=""  class="img-fluid"/>
                </div>
                <div class="about_title">
                    <h3>{{$blog->blog_title}}</h3>
                </div>
                <div class="about_text">
                    <p>
                        {!! $blog->description!!}
                    </p>
                </div>
            </div>
        </div>


    </div>

@endsection
