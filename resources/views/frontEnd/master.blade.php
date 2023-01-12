<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="{{$setting->description}}" />
    <meta name="author" content="{{$setting->author}}" />
    <meta name="tags" content="{{$setting->tags}}" />
    <meta name="google-site-verification" content="{{$setting->google}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{asset($setting->image)}}">

    <title>@yield('title')</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      rel="stylesheet"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      rel="stylesheet"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/dark.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/style.css"/>
  </head>
  <body>
    <!-- <div id="preloader">
      <div class="loader_line"></div>
    </div> -->

    <div class="tokyo_tm_all_wrap"  data-enter="fadeInLeft" data-exit="">

      @include('frontEnd.include.header')


      <div class="rightpart">
        @yield('content')
      </div>
    </div>


    <script src="{{asset('frontEnd')}}/js/jquery.js"></script>
    <!--[if lt IE 10]>
      <script type="text/javascript" src="{{asset('frontEnd')}}/js/ie8.js"></script>
    <![endif]-->
    <script src="{{asset('frontEnd')}}/js/plugins.js"></script>
    <script src="{{asset('frontEnd')}}/js/init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



  </body>
</html>
