@extends('frontend.layouts.layout')

@section('content')
  
   <div id="body">
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
      <div class="container blog_section_page">
        <h1>Destination Guides & Activities</h1>
        <p>Lorem ipsum dolor sit amet consectetur. Mi dolor fusce purus enim commodo pulvinar mauris habitant id. Eget laoreet commodo et volutpat enim.</p>
      </div>
      <div class="container blog_all_categories">
        <div class="items">
            <a href="/{{app()->getLocale()}}/news" class="item @if(!isset($blogCat)) active @endif">All</a>
            @foreach($blogCats as $cat)
          <a  href='/{{app()->getLocale()}}/news/category/{{$cat->id}}' style="cursor: pointer;" class="item @if(isset($blogCat) and $blogCat->id==$cat->id) active @endif">{{$cat->title}}</a>
          @endforeach
        </div>
      </div>
      <div class="container all_blogs_area">
        <div class="items">

            @foreach($blogs as $blog)
            <a class="item" href="/{{app()->getLocale()}}/news/{{$blog->slug}}">
            <div class="column"><img src="/storage/blog/{{$blog->image}}"></div>
            <div class="column">
              <div class="title">{{$blog->title}}</div>
              <div class="content">{{$blog->subtitle}}</div>
            </div>
            <div class="column"><button>@lang('frontend.See details')</button></div></a>
            @endforeach

          </div>
      </div>
    @endsection