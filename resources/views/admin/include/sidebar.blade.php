<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown active">
                <a class="dropdown-toggle" href="{{route('dashboard')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown active">
                <a class="dropdown-toggle" href="{{route('aboutMe')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">About</span>
                    <span class="arrow">
                        <i class="anticon anticon-arrow-right"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-tag"></i>
                    </span>
                    <span class="title">All Teaching Post</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'g.teaching') ? 'active' : '' }}">
                        <a href="{{route('g.teaching')}}">Save Teaching</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'courses.teaching') ? 'active' : '' }}">
                        <a href="{{route('courses.teaching')}}">Courses Taught</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'philosophy.teaching') ? 'active' : '' }}">
                        <a href="{{route('philosophy.teaching')}}">Teaching Philosophy</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'professional.teaching') ? 'active' : '' }}">
                        <a href="{{route('professional.teaching')}}">Professional Development</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-tags"></i>
                    </span>
                    <span class="title">Category</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'add.category') ? 'active' : '' }}">
                        <a href="{{route('add.category')}}">Add Category</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'category') ? 'active' : '' }}">
                        <a href="{{route('category')}}">Manage Category</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-like"></i>
                    </span>
                    <span class="title">Post</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'add.post') ? 'active' : '' }}">
                        <a href="{{route('add.post')}}">Add Post</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'post') ? 'active' : '' }}">
                        <a href="{{route('post')}}">Manage Post</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-facebook"></i>
                    </span>
                    <span class="title">Social Media</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'add.social') ? 'active' : '' }}">
                        <a href="{{route('add.social')}}">Add Social Media</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'social') ? 'active' : '' }}">
                        <a href="{{route('social')}}">Manage Social Media</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-notification"></i>
                    </span>
                    <span class="title">Blog</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'add.news') ? 'active' : '' }}">
                        <a href="{{route('add.news')}}">Add Blog</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'news') ? 'active' : '' }}">
                        <a href="{{route('news')}}">Manage Blog</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-file-image"></i>
                    </span>
                    <span class="title">Photography</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'add.photo') ? 'active' : '' }}">
                        <a href="{{route('add.photo')}}">Add photo</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'manage.photo') ? 'active' : '' }}">
                        <a href="{{route('manage.photo')}}">Manage Photos</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a class="dropdown-toggle" href="{{route('setting.website')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-setting"></i>
                    </span>
                    <span class="title">Website Setting</span>
                    <span class="arrow">
                        <i class="anticon anticon-arrow-right"></i>
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown active">
                <a class="dropdown-toggle" href="{{route('profile.image')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-file-jpg"></i>
                    </span>
                    <span class="title">Left Side Menu Image</span>
                    <span class="arrow">
                        <i class="anticon anticon-arrow-right"></i>
                    </span>
                </a>
            </li>



        </ul>
    </div>
</div>
