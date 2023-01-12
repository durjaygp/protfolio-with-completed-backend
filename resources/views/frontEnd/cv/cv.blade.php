@extends('frontEnd.master')

@section('title')
    Curriculum vitae
@endsection

@section('content')
    <div>
        <div class="container">
            <div class="tokyo_tm_portfolio">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <h3>Curriculum vitae</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="list_wrapper">
                             <iframe src="{{$setting->cv}}" width="800" height="520" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
                

                
            </div>
        </div>
    </div>
@endsection
