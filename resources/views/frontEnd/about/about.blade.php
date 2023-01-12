@extends('frontEnd.master')

@section('title')
    About Me
@endsection

@section('content')

    <div  class="">
        <div class="container">
            <div class="tokyo_tm_about">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>About</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_title">
                            <h3>{{$about->name}}</h3>
                            <span>{{$about->title}}</span>

                            <p>{{$about->short_intro}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hello-about-image-">
                            <img src="{{asset($about->image)}}" alt=""  />
                        </div>
                    </div>
                </div>
                <div class="about_text">
                    <p>
                        {{$about->description}}
                    </p>
                </div>

            </div>
        </div>


    </div>

@endsection
