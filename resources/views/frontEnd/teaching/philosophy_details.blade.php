@extends('frontEnd.master')

@section('title')
    Teaching Philosophy
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="tokyo_tm_portfolio">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>Teaching</h3>
                        </div>
                        <div class="right text-dark">
                            <h6 class="mobile-data-project">
{{--                                <a href="{{route('teaching.details')}}" class="text-dark">Teaching</a>--}}
                                <a href="{{route('courses.details')}}" class="text-dark">Courses Taught</a>
                                <a href="{{route('philosophy.details')}}" class="text-dark underline-2">Teaching Philosophy</a>
                                <a href="{{route('professional.details')}}" class="text-dark">Professional Development</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="list_wrapper teaching-part">
                    <div class="details">
                        <h4 class="title main_title_a">
                            <a href="#">{{$philosophy->title}}</a>
                        </h4>
                        <hr>

                        <div class="description">
                            <p class="text-justify">{{$philosophy->description}}</p>
                        </div>
                        <div class="tokyo_tm_button margin-20">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
