@extends('frontEnd.master')

@section('title')
    Photography
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="tokyo_tm_portfolio">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>Photo Gallery</h3>
                        </div>
                    </div>
                </div>
                <div class="list_wrapper">
                    <ul class="portfolio_list gallery_zoom">
                        @foreach($photos as $photo)
                        <li class="image">
                            <div class="inner">
                                <div
                                    class="entry tokyo_tm_portfolio_animation_wrap"
                                    data-title="{{$photo->title}}"
                                    data-category="Image"
                                >
                                    <a class="zoom" href="{{asset($photo->image)}}">
                                        <img src="{{asset('frontEnd')}}/img/thumbs/1-1.jpg" alt="" />
                                        <div
                                            class="abs_image"
                                            data-img-url="{{asset($photo->image)}}"
                                        ></div>
                                    </a>

                                </div>

                            </div>
                            <span class="text-sm">Caption: {{$photo->title}}</span>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
