@extends('frontEnd.master')

@section('title')
{{$post->post_title}}
@endsection

@section('content')
        <div>
            <div class="container">
                <div class="tokyo_tm_about">
                    <div class="tokyo_tm_title">
                        <div class="title_flex">
                            <div class="left">
                                <h3>{{$post->category->category_title}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="top_author_image">
                        @if(($post->image)!= null)
                            <img src="{{asset($post->image)}}" alt="" />
                        @endif
                    </div>
                    <div class="about_title">
                        <h3>{{$post->post_title}}</h3>
                    </div>
                    <div class="about_text">
                        {!! $post->description!!}
                    </div>

                </div>

            </div>


        </div>


@endsection
