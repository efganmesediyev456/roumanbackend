@extends('frontend.layouts.layout')

@section('content')
    <div class="home_header_and_slider search transportation">
        <header>
            <div class="container">
                <div class="logo"><img src="/assets/images/logo.png"></div>
                <div class="header_menus">
                    <ul>
                        @include('frontend.inc.menu')
                    </ul>
                </div>
                <div class="planning_and_languages">
                    <div class="planning planning_model"><span>Planning</span><span><img src="/assets/images/ic_round-plus.svg"></span></div>
                    <div class="language">
                        <div class="selected"><img src="/assets/images/englishflag.svg"><span>EN</span><svg width="9.000000" height="5.000000" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Vector" d="M4.18 4.5L-0.5 -0.5L8.87 -0.5L4.18 4.5Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="container about_us_page_title">
        <h1>{{$aboutus->title}}</h1>
        {!! $aboutus->content !!}
    </div>
    <div class="container amazing_teams">
        <h3>@lang('frontend.Amazing Team')</h3>
        <div class="items">
            @foreach($teams as $team)
            <div class="item"><img src="/storage/team/{{$team->image}}">
                <h4>{{$team->name}}</h4>
                <p>{{$team->position}}</p>
            </div>
                @endforeach

        </div>
    </div>
    <div class="container">
        <div class="what_we_offer">
            <div class="title">@lang('frontend.What we offer')</div>
            <div class="items">
                @foreach($whatweoffers as $what)
                <div class="item">
                    <div class="order">{{$what->number}}</div>
                    <h3>{{$what->title}}</h3>
                    <p>{{$what->subtitle}}</p>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
    <div class="explore_section"><img src="/storage/aboutus/{{$aboutus->image}}">
        <div class="content">
            <h4>{{$aboutus->explore}}</h4>
            <p>{{$aboutus->explore_text}}</p>
            <div  class="more"><a href="{{$aboutus->about_us_link}}">@lang('frontend.See Our Tours')</a></div>
        </div>
    </div>
    @endsection