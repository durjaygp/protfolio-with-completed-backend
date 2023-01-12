@extends('frontEnd.master')

@section('title')
    Blog
@endsection
@section('content')
    <div>
        <div class="container">
            <div class="tokyo_tm_portfolio">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>Latest Blog</h3>
                        </div>
                    </div>
                </div>
                <div class="list_wrapper teaching-part">
                    @foreach($blogs as $blog)
                        <div class="details">
                            <h4 class="title main_title_a">
                                <a href="{{route('blog.details',['slug'=>$blog->slug])}}">{{$blog->blog_title}}</a>
                            </h4>
                            <div class="extra">
                                <div class="short">
                                    <p class="date">
                                        <b>Date:<span>{{ $blog->created_at->format('M d, Y') }}</span></b>
                                    </p>
                                </div>
                            </div>
                            <div class="description">
                                <p>{!! Str::words($blog->description, 70)  !!} <a href="{{route('blog.details',['slug'=>$blog->slug])}}">Read More</a></p>

                            </div>
                            <div class="tokyo_tm_button margin-20">
{{--                                <a href="{{route('blog.details',['slug'=>$blog->slug])}}" class="btn btn-primary">Read More</a>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection


{{--@extends('frontEnd.master')--}}

{{--@section('title')--}}
{{--    {{$category->category_title}}--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <div>--}}
{{--        <div class="container">--}}
{{--            <div class="tokyo_tm_portfolio">--}}
{{--                <div class="tokyo_tm_title">--}}
{{--                    <div class="title_flex">--}}
{{--                        <div class="left">--}}
{{--                            <span>{{$category->category_title}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="list_wrapper teaching-part">--}}
{{--                    @foreach($posts as $post)--}}
{{--                        <div class="details">--}}
{{--                            <h4 class="title main_title_a">--}}
{{--                                <a href="{{route('service',['slug'=>$post->slug])}}">{{$post->post_title}}</a>--}}
{{--                            </h4>--}}
{{--                            <div class="extra">--}}
{{--                                <div class="short">--}}
{{--                                    <p class="date">--}}
{{--                                        <b>Category: <a href="#">{{$category->category_title}}</a></b>--}}
{{--                                        <b>Date:<span>{{ $post->created_at->format('M d, Y') }}</span></b>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="description">--}}
{{--                                <p>{!! Str::words($post->description, 70)  !!}</p>--}}
{{--                            </div>--}}
{{--                            <div class="tokyo_tm_button margin-20">--}}
{{--                                <a href="{{route('service',['slug'=>$post->slug])}}" class="btn btn-primary">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    --}}{{--    <div>--}}
{{--    --}}{{--        <div class="container">--}}
{{--    --}}{{--            <div class="tokyo_tm_services">--}}
{{--    --}}{{--                <div class="tokyo_tm_title">--}}
{{--    --}}{{--                    <div class="title_flex">--}}
{{--    --}}{{--                        <div class="left">--}}
{{--    --}}{{--                            <h3>{{$category->category_title}}</h3>--}}
{{--    --}}{{--                        </div>--}}
{{--    --}}{{--                    </div>--}}
{{--    --}}{{--                </div>--}}
{{--    --}}{{--                <div class="list_wrapper teaching-part">--}}
{{--    --}}{{--                    @foreach($posts as $post)--}}
{{--    --}}{{--                    <div class="details">--}}
{{--    --}}{{--                        <h4 class="title main_title_a">--}}
{{--    --}}{{--                            <a href="{{route('service',['slug'=>$post->slug])}}">{{$post->post_title}}</a>--}}
{{--    --}}{{--                        </h4>--}}
{{--    --}}{{--                        <div class="extra">--}}
{{--    --}}{{--                            <div class="short">--}}
{{--    --}}{{--                                <p class="date">--}}
{{--    --}}{{--                                    <b>Category: <a href="#">{{$category->category_title}}</a></b>--}}
{{--    --}}{{--                                    <b>Date:<span> {{$post->created_at}}</span></b>--}}
{{--    --}}{{--                                </p>--}}
{{--    --}}{{--                            </div>--}}
{{--    --}}{{--                        </div>--}}
{{--    --}}{{--                        <div class="description">--}}
{{--    --}}{{--                            <p>{!! Str::limit($post->description, 50)  !!}</p>--}}
{{--    --}}{{--                        </div>--}}
{{--    --}}{{--                        <div class="tokyo_tm_button margin-20">--}}
{{--    --}}{{--                            <a href="{{route('service',['slug'=>$post->slug])}}" class="btn btn-primary">Read More</a>--}}
{{--    --}}{{--                        </div>--}}
{{--    --}}{{--                    </div>--}}
{{--    --}}{{--                        @endforeach--}}
{{--    --}}{{--                </div>--}}


{{--    --}}{{--                <div class="list">--}}
{{--    --}}{{--                    <ul>--}}
{{--    --}}{{--                        @php $i=1 @endphp--}}
{{--    --}}{{--                        @foreach($posts as $post)--}}
{{--    --}}{{--                        <li>--}}
{{--    --}}{{--                            <div class="list_inner">--}}
{{--    --}}{{--                                <span class="number">{{$i++}}</span>--}}
{{--    --}}{{--                                <h3 class="title">{{Str::words($post->post_title, 10)}}</h3>--}}
{{--    --}}{{--                                <p class="text">--}}
{{--    --}}{{--                                    {!! Str::words($post->description, 15)  !!}--}}
{{--    --}}{{--                                </p>--}}
{{--    --}}{{--                                <div class="tokyo_tm_read_more">--}}
{{--    --}}{{--                                    <a href="{{route('service',['slug'=>$post->slug])}}"><span>Read More</span></a>--}}
{{--    --}}{{--                                </div>--}}
{{--    --}}{{--                            </div>--}}
{{--    --}}{{--                        </li>--}}
{{--    --}}{{--                        @endforeach--}}
{{--    --}}{{--                    </ul>--}}
{{--    --}}{{--                </div>--}}

{{--    --}}{{--            </div>--}}
{{--    --}}{{--        </div>--}}
{{--    --}}{{--    </div>--}}


{{--@endsection--}}
