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
    <div class="watercarft_header"><img src="/frontend/assets/images/unsplash_L4jrg4c7928.png">
        <div class="container">
            <h3>Looking to Rent Watercraft? Let Us Help You!</h3>
            <form class="form">
                <div class="form_group">
                    <input placeholder="Full Name *">
                </div>
                <div class="form_group">
                    <input placeholder="Full Name *">
                </div>
                <div class="form_group">
                    <button>Get a Quote</button>
                </div>
            </form>
            <div class="searching_items">
                @foreach($rentcategories as $category)
                <a href="{{route('rent.category',[app()->getLocale(),$category->id])}}" class="item"><img src="/storage/rentcategory/{{$category->image}}"></a>
                    @endforeach

            </div>
        </div>
    </div>
    <div class="water_carft_items container">
        <div class="tranportation_page_more">
            <div class="items">
                @foreach($rents as $rent)
                <div class="item"><img src="/storage/rent/{{$rent->image}}">
                    <div class="content">
                        <div class="title">{{$rent->title}}</div>
                        <div class="icons">
                            <div class="icon-bar column2"><svg width="10.000000" height="12.000000" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        <Created>with Pixso.</Created></desc>
                                    <defs/>
                                    <path id="Shape" d="M5 11.5C4.72 11.91 4.72 11.91 4.72 11.91L5 11.5ZM5.27 11.91C5.1 12.02 4.89 12.02 4.72 11.91L4.72 11.91L4.71 11.91L4.7 11.9C4.69 11.89 4.68 11.88 4.66 11.87C4.62 11.85 4.57 11.81 4.51 11.76C4.38 11.67 4.2 11.54 3.98 11.36C3.55 11.02 2.96 10.52 2.38 9.9C1.24 8.69 0 6.95 0 5C0 3.67 0.52 2.4 1.46 1.46C2.4 0.52 3.67 0 5 0C6.32 0 7.59 0.52 8.53 1.46C9.47 2.4 10 3.67 10 5C10 6.95 8.75 8.69 7.61 9.9C7.03 10.52 6.44 11.02 6.01 11.36C5.79 11.54 5.61 11.67 5.48 11.76C5.42 11.81 5.37 11.85 5.33 11.87C5.31 11.88 5.3 11.89 5.29 11.9L5.28 11.91L5.27 11.91L5.27 11.91ZM5 1C3.93 1 2.92 1.42 2.17 2.17C1.42 2.92 1 3.93 1 5C1 6.54 2 8.05 3.11 9.21C3.65 9.79 4.19 10.25 4.6 10.58C4.76 10.7 4.89 10.8 5 10.88C5.1 10.8 5.23 10.7 5.39 10.58C5.8 10.25 6.34 9.79 6.88 9.21C7.99 8.05 9 6.54 9 5C9 3.93 8.57 2.92 7.82 2.17C7.07 1.42 6.06 1 5 1ZM3 5C3 3.89 3.89 3 5 3C6.1 3 7 3.89 7 5C7 6.1 6.1 7 5 7C3.89 7 3 6.1 3 5ZM5 4C4.44 4 4 4.44 4 5C4 5.55 4.44 6 5 6C5.55 6 6 5.55 6 5C6 4.44 5.55 4 5 4Z" fill="#2D3648" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </svg><span>{{$rent->title2}}</span>
                            </div>
                            <div class="icon-bar"><svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        <Created>with Pixso.</Created></desc>
                                    <defs>
                                        <clipPath id="clip562_4115">
                                            <rect id="formkit:people" width="15.000000" height="15.000000" fill="white" fill-opacity="0"/>
                                        </clipPath>
                                    </defs>
                                    <rect id="formkit:people" width="15.000000" height="15.000000" fill="#FFFFFF" fill-opacity="0"/>
                                    <g clip-path="url(#clip562_4115)">
                                        <path id="Vector" d="M13.06 10.39C12.79 10.39 12.59 10.18 12.59 9.92C12.59 9.66 12.79 9.45 13.06 9.45C13.32 9.45 13.52 9.25 13.52 8.98C13.52 8.36 13.28 7.77 12.84 7.33C12.4 6.89 11.8 6.64 11.18 6.64L10.25 6.64C9.98 6.64 9.78 6.44 9.78 6.17C9.78 5.91 9.98 5.71 10.25 5.71C11.02 5.71 11.65 5.08 11.65 4.3C11.65 3.52 11.02 2.9 10.25 2.9C9.98 2.9 9.78 2.69 9.78 2.43C9.78 2.17 9.98 1.96 10.25 1.96C10.87 1.96 11.46 2.21 11.9 2.65C12.34 3.09 12.59 3.68 12.59 4.3C12.59 4.88 12.38 5.41 12.03 5.82C13.42 6.19 14.46 7.47 14.46 8.98C14.46 9.76 13.83 10.39 13.06 10.39ZM1.82 10.39C1.04 10.39 0.42 9.76 0.42 8.98C0.42 7.47 1.45 6.19 2.85 5.82C2.5 5.41 2.29 4.88 2.29 4.3C2.29 3.68 2.54 3.09 2.97 2.65C3.41 2.21 4.01 1.96 4.63 1.96C4.89 1.96 5.1 2.17 5.1 2.43C5.1 2.69 4.89 2.9 4.63 2.9C3.85 2.9 3.22 3.52 3.22 4.3C3.22 5.08 3.85 5.71 4.63 5.71C4.89 5.71 5.1 5.91 5.1 6.17C5.1 6.44 4.89 6.64 4.63 6.64L3.69 6.64C3.07 6.64 2.48 6.89 2.04 7.33C1.6 7.77 1.35 8.36 1.35 8.98C1.35 9.25 1.56 9.45 1.82 9.45C2.08 9.45 2.29 9.66 2.29 9.92C2.29 10.18 2.08 10.39 1.82 10.39ZM10.25 13.2L4.63 13.2C3.85 13.2 3.22 12.57 3.22 11.79L3.22 10.86C3.22 9.05 4.69 7.58 6.5 7.58L8.37 7.58C10.18 7.58 11.65 9.05 11.65 10.86L11.65 11.79C11.65 12.57 11.02 13.2 10.25 13.2ZM6.5 8.51C5.88 8.51 5.29 8.76 4.85 9.2C4.41 9.64 4.16 10.23 4.16 10.86L4.16 11.79C4.16 12.05 4.37 12.26 4.63 12.26L10.25 12.26C10.51 12.26 10.71 12.05 10.71 11.79L10.71 10.86C10.71 10.23 10.47 9.64 10.03 9.2C9.59 8.76 9 8.51 8.37 8.51L6.5 8.51Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="nonzero"/>
                                        <path id="Vector" d="M7.49 6.41C6.83 6.41 6.19 6.16 5.72 5.72C5.24 5.28 4.98 4.68 4.98 4.05C4.98 3.43 5.24 2.83 5.72 2.38C6.19 1.94 6.83 1.69 7.49 1.69C8.16 1.69 8.8 1.94 9.27 2.38C9.74 2.83 10.01 3.43 10.01 4.05C10.01 4.68 9.74 5.28 9.27 5.72C8.8 6.16 8.16 6.41 7.49 6.41ZM7.49 2.64C6.66 2.64 5.98 3.27 5.98 4.05C5.98 4.83 6.66 5.47 7.49 5.47C8.33 5.47 9 4.83 9 4.05C9 3.27 8.33 2.64 7.49 2.64Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="nonzero"/>
                                    </g>
                                </svg><span>{{$rent->title3}}</span>
                            </div>
                            <div class="icon-bar"><svg width="14.062500" height="10.781250" viewBox="0 0 14.0625 10.7812" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                        <Created>with Pixso.</Created></desc>
                                    <defs/>
                                    <path id="Vector" d="M13.12 7.73C13.12 4.53 10.64 1.9 7.5 1.66L7.5 0L6.56 0L6.56 1.66C3.42 1.9 0.93 4.53 0.93 7.73L0.93 8.7L13.12 8.7L13.12 7.73ZM12.18 7.76L1.87 7.76L1.87 7.73C1.87 4.89 4.18 2.58 7.03 2.58C9.87 2.58 12.18 4.89 12.18 7.73L12.18 7.76ZM0 9.84L14.06 9.84L14.06 10.78L0 10.78L0 9.84Z" fill="#000000" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg><span>{{$rent->title4}}</span>
                            </div>
                        </div>
                        <div class="price"><strong>${{$rent->price}}</strong><span>&nbsp;{{$rent->price_detail}}</span></div><a>Send a Quote</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
