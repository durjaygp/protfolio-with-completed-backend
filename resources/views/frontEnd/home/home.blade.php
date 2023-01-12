@extends('frontEnd.master')
@section('title')
{{$setting->name}}
@endsection

@section('content')
<div class="rightpart_in">
          <div id="home" class="tokyo_tm_section animated">
            <div class="container">
              <div class="tokyo_tm_home">
                <div class="home_content">
                  <div class="avatar" data-type="wave">
                    <div class="image" data-img-url="{{asset($about->image)}}"></div>
                  </div>
                  <div class="details">
                    <h3 class="name">{{$about->name}}</h3>
                    <p class="job">
                        {{Str::limit($about->short_intro, 200)}}<a href="{{route('about')}}">Read More</a>
                    </p>
                    <div class="social">
                      <ul>
                          @foreach($social as $soc)
                        <li>
                          <a href="{{$soc->social_link}}" target="_blank"><i class="{{$soc->social_icon}}"></i></a>
                        </li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
