@extends('frontEnd.master')

@section('title')
    {{$category->category_title}}
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="tokyo_tm_portfolio">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>{{$category->category_title}}</h3>
                        </div>
                    </div>
                </div>
                <div class="list_wrapper teaching-part">
                    @foreach($posts as $post)
                    <div class="details">
                        <h4 class="title main_title_a">
                            <a href="#">{{$post->post_title}}</a>
                        </h4>
                        <hr>
                        <div class="description">
                            <p>{!! $post->description  !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
