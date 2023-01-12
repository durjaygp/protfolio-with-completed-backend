<div class="tokyo_tm_topbar">
        <div class="topbar_inner">
          <div class="trigger">
            <div class="hamburger hamburger--slider">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tokyo_tm_mobile_menu">
          <img src="{{asset($profile->image)}}" alt="{{$about->name}}" class="img-fluid mobile-img-circle mt-5">
          <div class="text-and-icon">
              <h4 class="mb-1 text-white">{{$about->name}}</h4>
              <div class="d-flex s-media-icon">
                @foreach($social as $soc)
                <a href="{{$soc->social_link}}" target="_blank" class="icon-mobile-hide"><i class="{{$soc->social_icon}}"></i></a>
                   
                @endforeach
              </div>

              <!-- <ul class="s-media-icon-mobile text-center">

              </ul> -->
          </div>

        <div class="menu_list">
          <ul class="transition_link mt-2">
              <li class="{{(request()->is('home')) ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
              <li class="{{(request()->is('about')) ? 'active' : ''}}"><a href="{{route('about')}}">About</a></li>
              <li class="{{(request()->is('cv')) ? 'active' : ''}}"><a href="{{route('cv')}}">CV</a></li>
              <li class="{{(request()->is('teaching.details')) ? 'active' : ''}}"><a href="{{route('teaching.details')}}">Teaching</a></li>
              @foreach($categories as $cate)

                  <li class="{{(request()->is('services',['slug'=>$cate->slug])) ? 'active' : ''}}"><a href="{{route('services',['slug'=>$cate->slug])}}">{{$cate->category_title}}</a></li>
              @endforeach
              <li class="{{(request()->is('photo')) ? 'active' : ''}}"><a href="{{route('photo')}}">Photography</a></li>
              <li class="{{(request()->is('blog')) ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>
              <li class="{{(request()->is('contact')) ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
          </ul>
        </div>

          <div class="copyright text-white ">
              <p class="mt-5-margin">{{$setting->footer}}</p>
          </div>
      </div>


      <div class="leftpart">
        <div class="">
          <div class="menu">
            <div class="left-img">
                <img src="{{asset($profile->image)}}" alt="" class="img-fluid rounded-circle mb-3">
                <h4 class="mb-1">{{$about->name}}</h4>
                <ul class="s-media-icon text-center">
                @foreach($social as $soc)
                    <li>
                        <a href="{{$soc->social_link}}" target="_blank"><i class="{{$soc->social_icon}}"></i></a>
                    </li>
                @endforeach
                </ul>
            </div>
            <br><br>
            <ul class="transition_link">
              <li class="{{(request()->is('home')) ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
              <li class="{{(request()->is('about')) ? 'active' : ''}}"><a href="{{route('about')}}">About</a></li>
                <li class="{{(request()->is('teaching.details')) ? 'active' : ''}}"><a href="{{route('teaching.details')}}">Teaching</a></li>
                @foreach($categories as $cate)

              <li class="{{(request()->is('services',['slug'=>$cate->slug])) ? 'active' : ''}}"><a href="{{route('services',['slug'=>$cate->slug])}}">{{$cate->category_title}}</a></li>
                @endforeach
              <li class="{{(request()->is('cv')) ? 'active' : ''}}"><a href="{{route('cv')}}">Curriculum Vitae</a></li>
              <li class="{{(request()->is('photo')) ? 'active' : ''}}"><a href="{{route('photo')}}">Photography</a></li>
              <li class="{{(request()->is('blog')) ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>
              <li class="{{(request()->is('contact')) ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>
          <div class="copyright">
            <p class="mt-3">{{$setting->footer}}</p>
          </div>
        </div>
      </div>
