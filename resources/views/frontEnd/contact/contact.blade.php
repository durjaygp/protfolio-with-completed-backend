@extends('frontEnd.master')

@section('title')
    Contact
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="tokyo_tm_contact">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>Get in Touch</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                         <div class="fields">
                    <form action="{{route('send.contact')}}" method="post">
                        @csrf
                        @include('admin.include.errors')

                        @if(Session::has('message-send'))
                            <div class="alert alert-success">{{ Session::get('message-send') }}</div>
                        @endif

                        <div class="empty_notice">
                            <span>Please Fill Required Fields</span>
                        </div>
                        <div class="first">
                            <ul>
                                <li>
                                    <input name="name" id="name" type="text" placeholder="Name" />
                                </li>
                                <li>
                                    <input name="email" id="email" type="text" placeholder="Email" />
                                </li>
                            </ul>
                        </div>
                        <div class="last">
                            <textarea name="description" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="tokyo_tm_button" data-position="left">
                            <input type="submit" value="Submit">
{{--                            <a id="send_message" href="#">--}}
{{--                                <span>Send Message</span>--}}
{{--                            </a>--}}
                        </div>
                    </form>
                </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
