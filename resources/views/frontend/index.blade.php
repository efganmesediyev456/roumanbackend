@extends('frontend.layouts.layout')

@section('content')


    <div class="home_header_and_slider">
        <header>
            <div class="container">
                <div class="logo"><img src="/frontend/assets/images/logo.png"></div>
                <div class="header_menus">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Tours</a></li>
                        <li><a href="">Transporlation</a></li>
                        <li><a href="">Rent</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="planning_and_languages">
                    <div class="planning planning_model"><span>Planning</span><span><img src="/frontend/assets/images/ic_round-plus.svg"></span></div>
                    <div class="language">
                        <div class="selected"><img src="/frontend/assets/images/englishflag.svg"><span>EN</span><svg width="9.000000" height="5.000000" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Vector" d="M4.18 4.5L-0.5 -0.5L8.87 -0.5L4.18 4.5Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="splide slider_splides"><div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <svg width="21.000000" height="9.000000" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path id="Vector" d="M19.91 4L0.2 4" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            <path id="Vector" d="M4.24 -0.05L0.2 4L4.24 8.04" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <svg width="21.000000" height="9.000000" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path id="Vector" d="M19.91 4L0.2 4" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            <path id="Vector" d="M4.24 -0.05L0.2 4L4.24 8.04" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach($banners as $banner)
                        <div class="splide__slide"><img src="/storage/banner/{{$banner->image}}"></div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="find-your-destination">
            <div class="title">@lang('frontend.Find Your Dream Destination')</div>
            <form class="search_form">
                <div class="select_input">
                    <div class="selected"><span>@lang('frontend.Cities')</span><span><svg width="15.000000" height="8.000000" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs/>
<path id="Vector" d="M7.09 6.46L13.05 0.51C13.11 0.45 13.17 0.41 13.25 0.37C13.33 0.34 13.41 0.33 13.49 0.33C13.57 0.33 13.65 0.35 13.73 0.38C13.8 0.41 13.87 0.46 13.93 0.52C14.04 0.64 14.11 0.8 14.11 0.97C14.1 1.14 14.04 1.3 13.92 1.42L7.51 7.81C7.46 7.87 7.39 7.92 7.31 7.95C7.24 7.98 7.16 8 7.08 8C6.99 7.99 6.91 7.98 6.84 7.95C6.76 7.91 6.7 7.87 6.64 7.81L0.07 1.08C-0.05 0.96 -0.12 0.8 -0.12 0.63C-0.12 0.46 -0.05 0.3 0.07 0.18C0.12 0.12 0.19 0.08 0.27 0.04C0.34 0.01 0.42 0 0.51 0C0.59 0 0.67 0.01 0.74 0.04C0.82 0.08 0.89 0.12 0.95 0.18L7.09 6.46Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg></span></div>
                    <div class="dropdown">
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                    </div>
                </div>
                <div class="select_input">
                    <div class="selected"><span>@lang('frontend.Tours')</span><span><svg width="15.000000" height="8.000000" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs/>
<path id="Vector" d="M7.09 6.46L13.05 0.51C13.11 0.45 13.17 0.41 13.25 0.37C13.33 0.34 13.41 0.33 13.49 0.33C13.57 0.33 13.65 0.35 13.73 0.38C13.8 0.41 13.87 0.46 13.93 0.52C14.04 0.64 14.11 0.8 14.11 0.97C14.1 1.14 14.04 1.3 13.92 1.42L7.51 7.81C7.46 7.87 7.39 7.92 7.31 7.95C7.24 7.98 7.16 8 7.08 8C6.99 7.99 6.91 7.98 6.84 7.95C6.76 7.91 6.7 7.87 6.64 7.81L0.07 1.08C-0.05 0.96 -0.12 0.8 -0.12 0.63C-0.12 0.46 -0.05 0.3 0.07 0.18C0.12 0.12 0.19 0.08 0.27 0.04C0.34 0.01 0.42 0 0.51 0C0.59 0 0.67 0.01 0.74 0.04C0.82 0.08 0.89 0.12 0.95 0.18L7.09 6.46Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg></span></div>
                    <div class="dropdown">
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                    </div>
                </div>
                <div class="select_input">
                    <div class="selected"><span>@lang('frontend.Categories')</span><span><svg width="15.000000" height="8.000000" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs/>
<path id="Vector" d="M7.09 6.46L13.05 0.51C13.11 0.45 13.17 0.41 13.25 0.37C13.33 0.34 13.41 0.33 13.49 0.33C13.57 0.33 13.65 0.35 13.73 0.38C13.8 0.41 13.87 0.46 13.93 0.52C14.04 0.64 14.11 0.8 14.11 0.97C14.1 1.14 14.04 1.3 13.92 1.42L7.51 7.81C7.46 7.87 7.39 7.92 7.31 7.95C7.24 7.98 7.16 8 7.08 8C6.99 7.99 6.91 7.98 6.84 7.95C6.76 7.91 6.7 7.87 6.64 7.81L0.07 1.08C-0.05 0.96 -0.12 0.8 -0.12 0.63C-0.12 0.46 -0.05 0.3 0.07 0.18C0.12 0.12 0.19 0.08 0.27 0.04C0.34 0.01 0.42 0 0.51 0C0.59 0 0.67 0.01 0.74 0.04C0.82 0.08 0.89 0.12 0.95 0.18L7.09 6.46Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg></span></div>
                    <div class="dropdown">
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                        <div class="item">Tourist</div>
                    </div>
                </div>
                <div class="search_input">
                    <button>@lang('frontend.Search')</button>
                </div>
            </form>
        </div>
    </div>
    <div class="tours_section">
        <div class="container">
            <div class="tour_content">
                <div class="title">@lang('frontend.Let Your Journey Begin')</div>
                <div class="content">@lang('frontend.Whether you\'re seeking relaxation or adrenaline-fueled experiences, our tours offer something for every traveler. Let us guide you on your next extraordinary journey')</div>
                <div class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            @foreach($tours as $category)
                            <div class="splide__slide">
                                <div class="item"><img src="/storage/tour/{{$category->image}}"><img class="img2" src="/storage/tour/{{$category->image2}}">
                                    <div class="item_content">
                                        <p>{{$category->title}}</p>
                                        <div class="arrow"><svg width="37.000000" height="11.000000" viewBox="0 0 37 11" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs/>
                                                <path id="Vector" d="M-0.3 4.74L35.37 4.74M30.53 9.74L35.52 4.74L30.53 -0.26" stroke="#FFFFFF" stroke-opacity="1.000000" stroke-width="1.041667" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="tour_all"><a><span>All tours</span><span><svg width="15.000000" height="9.000000" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
                <Created>with Pixso.</Created></desc>
<defs>
<linearGradient x1="14.311542" y1="4.000072" x2="-9.292991" y2="4.000072" id="paint_linear_15_14_0" gradientUnits="userSpaceOnUse">
<stop offset="0.303118" stop-color="#E23E57"/>
<stop offset="1.000000" stop-color="#88304E"/>
</linearGradient>
</defs>
<path id="Vector" d="M-0.32 4L14.18 4M10.1 8.21L14.31 4L10.1 -0.22" stroke="url(#paint_linear_15_14_0)" stroke-opacity="1.000000" stroke-width="0.877193" stroke-linejoin="round"/>
</svg></span></a></div>
        </div>
    </div>
    <div class="categories_section">
        <div class="container">
            <div class="title">@lang('frontend.Choose from Our Tour Categories')</div>

            <div class="categories">
                @foreach($tourcategories as $category)
                <a class="item"><img src="/storage/tourcategory/{{$category->image}}"><span>{{$category->title}}</span></a>
                @endforeach

            </div>
            <div class="all_categories"><a><span>All categories</span><span><svg width="16.000000" height="16.000000" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<linearGradient x1="15.311542" y1="8.000072" x2="-8.292991" y2="8.000072" id="paint_linear_16_8_0" gradientUnits="userSpaceOnUse">
<stop offset="0.303118" stop-color="#E23E57"/>
<stop offset="1.000000" stop-color="#88304E"/>
</linearGradient>
</defs>
<path id="Vector" d="M0.68 8L15.18 8M11.1 12.21L15.31 8L11.1 3.78" stroke="url(#paint_linear_16_8_0)" stroke-opacity="1.000000" stroke-width="0.877193" stroke-linejoin="round"/>
</svg></span></a></div>
        </div>
    </div>
    <div class="story_section">
        <div class="container">
            <div class="story_left">
                <div class="title">{{$ourstory->title}}</div>
                <div class="content">{{strip_tags($ourstory->content)}}</div><a>@lang('frontend.About us')</a>
            </div>
            <div class="story_right"><img src="/storage/ourstory/{{$ourstory->image}}"></div>
        </div>
    </div>
    <div class="blog_section">
        <div class="splide">
            <div class="splide__track">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <svg width="21.000000" height="9.000000" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path id="Vector" d="M19.91 4L0.2 4" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            <path id="Vector" d="M4.24 -0.05L0.2 4L4.24 8.04" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <svg width="21.000000" height="9.000000" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs/>
                            <path id="Vector" d="M19.91 4L0.2 4" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            <path id="Vector" d="M4.24 -0.05L0.2 4L4.24 8.04" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.000000" stroke-linejoin="round" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
                <div class="splide__list">
                    @foreach($blogs as $blog)
                    <div class="splide__slide"><a class="item"><img src="/storage/blog/{{$blog->image}}">
                            <div class="content">
                                <p>{{$blog->title}}</p>
                                <p>{{$blog->subtitle}}</p>
                            </div></a></div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="all_blogs">
        <a><span>Blog</span><span><svg width="15.000000" height="9.000000" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
            <Created>with Pixso.</Created></desc>
<defs>
<linearGradient x1="14.311542" y1="4.300854" x2="-9.292991" y2="4.300854" id="paint_linear_16_11_0" gradientUnits="userSpaceOnUse">
<stop offset="0.303118" stop-color="#E23E57"/>
<stop offset="1.000000" stop-color="#88304E"/>
</linearGradient>
</defs>
<path id="Vector" d="M-0.32 4.3L14.18 4.3M10.1 8.51L14.31 4.3L10.1 0.09" stroke="url(#paint_linear_16_11_0)" stroke-opacity="1.000000" stroke-width="0.877193" stroke-linejoin="round"/>
</svg></span></a></div>
    <div class="modal_container">
        <div class="modal_journey">
            <div class="modal_content">
                <div class="modal_header"><span>Plan Your Own Journey</span><span class="modal_close"><svg width="13.000000" height="13.000000" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
</desc>
<defs/>
<path id="Vector" d="M12.06 11.18C12.12 11.24 12.17 11.3 12.2 11.38C12.23 11.46 12.25 11.54 12.25 11.62C12.25 11.7 12.23 11.78 12.2 11.86C12.17 11.93 12.12 12 12.06 12.06C12 12.12 11.94 12.17 11.86 12.2C11.78 12.23 11.7 12.25 11.62 12.25C11.54 12.25 11.46 12.23 11.38 12.2C11.3 12.17 11.24 12.12 11.18 12.06L6 6.88L0.81 12.06C0.69 12.18 0.54 12.25 0.37 12.25C0.2 12.25 0.05 12.18 -0.07 12.06C-0.19 11.94 -0.26 11.79 -0.26 11.62C-0.26 11.45 -0.19 11.29 -0.07 11.18L5.11 6L-0.07 0.81C-0.19 0.69 -0.26 0.54 -0.26 0.37C-0.26 0.2 -0.19 0.04 -0.07 -0.07C0.05 -0.19 0.2 -0.26 0.37 -0.26C0.54 -0.26 0.69 -0.19 0.81 -0.07L6 5.11L11.18 -0.07C11.3 -0.19 11.45 -0.26 11.62 -0.26C11.79 -0.26 11.95 -0.19 12.06 -0.07C12.18 0.04 12.25 0.2 12.25 0.37C12.25 0.54 12.18 0.69 12.06 0.81L6.88 6L12.06 11.18Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg></span></div>
                <div class="modal_body">
                    <form>
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input type="text" placeholder="e.g. Sanan Shirinov">
                        </div>
                        <div class="form_group">
                            <label>Phone number *</label>
                            <input type="text" placeholder="e.g. Sanan Shirinov">
                        </div>
                        <div class="form_group">
                            <label>Starting in:</label>
                            <div class="select_form svg_transform">
                                <div class="selected"><span>Starting in:</span><span><svg width="11.000000" height="7.000000" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
</desc>
<defs/>
<path id="Vector" d="M10 0.5L5 5.5L0 0.5" stroke="#FFFFFF" stroke-opacity="1.000000" stroke-width="1.666667" stroke-linejoin="round" stroke-linecap="round"/>
</svg></span></div>
                                <div class="dropdown">
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                </div>
                            </div>
                        </div>
                        <div class="form_group svg_transform">
                            <label>Ending in:</label>
                            <div class="select_form">
                                <div class="selected"><span>Ending in:</span><span><svg width="11.000000" height="7.000000" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
</desc>
<defs/>
<path id="Vector" d="M10 0.5L5 5.5L0 0.5" stroke="#FFFFFF" stroke-opacity="1.000000" stroke-width="1.666667" stroke-linejoin="round" stroke-linecap="round"/>
</svg></span></div>
                                <div class="dropdown">
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                    <div class="item">Starting In</div>
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label>Start date:</label>
                            <div class="select_form">
                                <div class="selected"><span>Ending in:</span><span><svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
                        <Created>with Pixso.</Created></desc>
<defs>
<clipPath id="clip19_1018">
<rect id="clarity:date-line" width="20.000000" height="20.000000" fill="white" fill-opacity="0"/>
</clipPath>
</defs>
<rect id="clarity:date-line" width="20.000000" height="20.000000" fill="#FFFFFF" fill-opacity="0"/>
<g clip-path="url(#clip19_1018)">
<path id="Vector" d="M17.91 3.33L16.11 3.33L16.11 4.44L17.77 4.44L17.77 16.66L2.22 16.66L2.22 4.44L3.88 4.44L3.88 3.33L2.08 3.33C1.95 3.33 1.82 3.36 1.7 3.41C1.58 3.46 1.47 3.54 1.38 3.63C1.29 3.72 1.22 3.83 1.17 3.95C1.13 4.08 1.1 4.2 1.11 4.33L1.11 16.77C1.1 16.9 1.13 17.03 1.17 17.15C1.22 17.27 1.29 17.38 1.38 17.47C1.47 17.56 1.58 17.64 1.7 17.69C1.82 17.74 1.95 17.77 2.08 17.77L17.91 17.77C18.04 17.77 18.17 17.74 18.29 17.69C18.41 17.64 18.52 17.56 18.61 17.47C18.7 17.38 18.77 17.27 18.81 17.15C18.86 17.03 18.89 16.9 18.88 16.77L18.88 4.33C18.89 4.2 18.86 4.08 18.81 3.95C18.77 3.83 18.7 3.72 18.61 3.63C18.52 3.54 18.41 3.46 18.29 3.41C18.17 3.36 18.04 3.33 17.91 3.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M4.44 7.77L5.55 7.77L5.55 8.88L4.44 8.88L4.44 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.77 7.77L8.88 7.77L8.88 8.88L7.77 8.88L7.77 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M11.11 7.77L12.22 7.77L12.22 8.88L11.11 8.88L11.11 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 7.77L15.55 7.77L15.55 8.88L14.44 8.88L14.44 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M4.44 10.55L5.55 10.55L5.55 11.66L4.44 11.66L4.44 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.77 10.55L8.88 10.55L8.88 11.66L7.77 11.66L7.77 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M11.11 10.55L12.22 10.55L12.22 11.66L11.11 11.66L11.11 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 10.55L15.55 10.55L15.55 11.66L14.44 11.66L14.44 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M4.44 13.33L5.55 13.33L5.55 14.44L4.44 14.44L4.44 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.77 13.33L8.88 13.33L8.88 14.44L7.77 14.44L7.77 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M11.11 13.33L12.22 13.33L12.22 14.44L11.11 14.44L11.11 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 13.33L15.55 13.33L15.55 14.44L14.44 14.44L14.44 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M5.55 5.55C5.7 5.55 5.84 5.49 5.94 5.39C6.05 5.28 6.11 5.14 6.11 5L6.11 1.66C6.11 1.51 6.05 1.37 5.94 1.27C5.84 1.16 5.7 1.11 5.55 1.11C5.4 1.11 5.26 1.16 5.16 1.27C5.05 1.37 5 1.51 5 1.66L5 5C5 5.14 5.05 5.28 5.16 5.39C5.26 5.49 5.4 5.55 5.55 5.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 5.55C14.59 5.55 14.73 5.49 14.83 5.39C14.94 5.28 15 5.14 15 5L15 1.66C15 1.51 14.94 1.37 14.83 1.27C14.73 1.16 14.59 1.11 14.44 1.11C14.29 1.11 14.15 1.16 14.05 1.27C13.94 1.37 13.88 1.51 13.88 1.66L13.88 5C13.88 5.14 13.94 5.28 14.05 5.39C14.15 5.49 14.29 5.55 14.44 5.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.22 3.33L12.77 3.33L12.77 4.44L7.22 4.44L7.22 3.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
</g>
</svg></span></div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label>Start date:</label>
                            <div class="select_form">
                                <div class="selected"><span>Ending in:</span><span><svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
                        <Created>with Pixso.</Created></desc>
<defs>
<clipPath id="clip19_1060">
<rect id="clarity:date-line" width="20.000000" height="20.000000" fill="white" fill-opacity="0"/>
</clipPath>
</defs>
<rect id="clarity:date-line" width="20.000000" height="20.000000" fill="#FFFFFF" fill-opacity="0"/>
<g clip-path="url(#clip19_1060)">
<path id="Vector" d="M17.91 3.33L16.11 3.33L16.11 4.44L17.77 4.44L17.77 16.66L2.22 16.66L2.22 4.44L3.88 4.44L3.88 3.33L2.08 3.33C1.95 3.33 1.82 3.36 1.7 3.41C1.58 3.46 1.47 3.54 1.38 3.63C1.29 3.72 1.22 3.83 1.17 3.95C1.13 4.08 1.1 4.2 1.11 4.33L1.11 16.77C1.1 16.9 1.13 17.03 1.17 17.15C1.22 17.27 1.29 17.38 1.38 17.47C1.47 17.56 1.58 17.64 1.7 17.69C1.82 17.74 1.95 17.77 2.08 17.77L17.91 17.77C18.04 17.77 18.17 17.74 18.29 17.69C18.41 17.64 18.52 17.56 18.61 17.47C18.7 17.38 18.77 17.27 18.81 17.15C18.86 17.03 18.89 16.9 18.88 16.77L18.88 4.33C18.89 4.2 18.86 4.08 18.81 3.95C18.77 3.83 18.7 3.72 18.61 3.63C18.52 3.54 18.41 3.46 18.29 3.41C18.17 3.36 18.04 3.33 17.91 3.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M4.44 7.77L5.55 7.77L5.55 8.88L4.44 8.88L4.44 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.77 7.77L8.88 7.77L8.88 8.88L7.77 8.88L7.77 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M11.11 7.77L12.22 7.77L12.22 8.88L11.11 8.88L11.11 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 7.77L15.55 7.77L15.55 8.88L14.44 8.88L14.44 7.77Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M4.44 10.55L5.55 10.55L5.55 11.66L4.44 11.66L4.44 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.77 10.55L8.88 10.55L8.88 11.66L7.77 11.66L7.77 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M11.11 10.55L12.22 10.55L12.22 11.66L11.11 11.66L11.11 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 10.55L15.55 10.55L15.55 11.66L14.44 11.66L14.44 10.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M4.44 13.33L5.55 13.33L5.55 14.44L4.44 14.44L4.44 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.77 13.33L8.88 13.33L8.88 14.44L7.77 14.44L7.77 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M11.11 13.33L12.22 13.33L12.22 14.44L11.11 14.44L11.11 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 13.33L15.55 13.33L15.55 14.44L14.44 14.44L14.44 13.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M5.55 5.55C5.7 5.55 5.84 5.49 5.94 5.39C6.05 5.28 6.11 5.14 6.11 5L6.11 1.66C6.11 1.51 6.05 1.37 5.94 1.27C5.84 1.16 5.7 1.11 5.55 1.11C5.4 1.11 5.26 1.16 5.16 1.27C5.05 1.37 5 1.51 5 1.66L5 5C5 5.14 5.05 5.28 5.16 5.39C5.26 5.49 5.4 5.55 5.55 5.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M14.44 5.55C14.59 5.55 14.73 5.49 14.83 5.39C14.94 5.28 15 5.14 15 5L15 1.66C15 1.51 14.94 1.37 14.83 1.27C14.73 1.16 14.59 1.11 14.44 1.11C14.29 1.11 14.15 1.16 14.05 1.27C13.94 1.37 13.88 1.51 13.88 1.66L13.88 5C13.88 5.14 13.94 5.28 14.05 5.39C14.15 5.49 14.29 5.55 14.44 5.55Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
<path id="Vector" d="M7.22 3.33L12.77 3.33L12.77 4.44L7.22 4.44L7.22 3.33Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
</g>
</svg></span></div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label>Adults:</label>
                            <div class="increase_and_decrease"><span class="minus">-</span>
                                <input value="1" type="number"><span class="plus">+</span>
                            </div>
                        </div>
                        <div class="form_group">
                            <label>Kids (0-5 years):</label>
                            <div class="increase_and_decrease"><span class="minus">-</span>
                                <input value="1" type="number"><span class="plus">+</span>
                            </div>
                        </div>
                        <div class="form_group center_form">
                            <label>Your Hotel Rating Preferences:</label>
                            <div class="stars">
                                <div class="star"><svg width="31.000000" height="29.000000" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            <Created>with Pixso.</Created></desc>
                                        <defs/>
                                        <path id="Vector" d="M15.51 24.09L23.27 28.77C24.02 29.23 24.96 28.55 24.76 27.69L22.7 18.87C22.61 18.5 22.74 18.13 23.02 17.88L29.87 11.95C30.54 11.37 30.18 10.27 29.3 10.19L20.28 9.43C19.91 9.4 19.59 9.16 19.44 8.82L15.92 0.5C15.57 -0.31 14.42 -0.31 14.07 0.5L10.55 8.82C10.4 9.16 10.08 9.4 9.71 9.43L0.69 10.19C-0.19 10.27 -0.55 11.37 0.12 11.95L6.97 17.88C7.25 18.13 7.38 18.5 7.29 18.87L5.23 27.69C5.03 28.55 5.97 29.23 6.72 28.77L14.48 24.09C14.8 23.9 15.19 23.9 15.51 24.09ZM21.73 19.09L23.78 27.91L16.03 23.23Q15.51 22.92 15 22.92Q14.48 22.92 13.96 23.23L6.21 27.91L8.27 19.09Q8.4 18.51 8.24 18.01Q8.08 17.52 7.63 17.13L0.77 11.19L9.8 10.43Q10.4 10.37 10.81 10.07Q11.23 9.77 11.47 9.21L15 0.89L18.52 9.21Q18.76 9.77 19.18 10.07Q19.59 10.37 20.19 10.43L29.22 11.19L22.36 17.13Q21.91 17.52 21.75 18.01Q21.59 18.51 21.73 19.09Z" fill="#FFC147" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="star"><svg width="31.000000" height="29.000000" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            <Created>with Pixso.</Created></desc>
                                        <defs/>
                                        <path id="Vector" d="M15.51 24.09L23.27 28.77C24.02 29.23 24.96 28.55 24.76 27.69L22.7 18.87C22.61 18.5 22.74 18.13 23.02 17.88L29.87 11.95C30.54 11.37 30.18 10.27 29.3 10.19L20.28 9.43C19.91 9.4 19.59 9.16 19.44 8.82L15.92 0.5C15.57 -0.31 14.42 -0.31 14.07 0.5L10.55 8.82C10.4 9.16 10.08 9.4 9.71 9.43L0.69 10.19C-0.19 10.27 -0.55 11.37 0.12 11.95L6.97 17.88C7.25 18.13 7.38 18.5 7.29 18.87L5.23 27.69C5.03 28.55 5.97 29.23 6.72 28.77L14.48 24.09C14.8 23.9 15.19 23.9 15.51 24.09ZM21.73 19.09L23.78 27.91L16.03 23.23Q15.51 22.92 15 22.92Q14.48 22.92 13.96 23.23L6.21 27.91L8.27 19.09Q8.4 18.51 8.24 18.01Q8.08 17.52 7.63 17.13L0.77 11.19L9.8 10.43Q10.4 10.37 10.81 10.07Q11.23 9.77 11.47 9.21L15 0.89L18.52 9.21Q18.76 9.77 19.18 10.07Q19.59 10.37 20.19 10.43L29.22 11.19L22.36 17.13Q21.91 17.52 21.75 18.01Q21.59 18.51 21.73 19.09Z" fill="#FFC147" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="star"><svg width="31.000000" height="29.000000" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            <Created>with Pixso.</Created></desc>
                                        <defs/>
                                        <path id="Vector" d="M15.51 24.09L23.27 28.77C24.02 29.23 24.96 28.55 24.76 27.69L22.7 18.87C22.61 18.5 22.74 18.13 23.02 17.88L29.87 11.95C30.54 11.37 30.18 10.27 29.3 10.19L20.28 9.43C19.91 9.4 19.59 9.16 19.44 8.82L15.92 0.5C15.57 -0.31 14.42 -0.31 14.07 0.5L10.55 8.82C10.4 9.16 10.08 9.4 9.71 9.43L0.69 10.19C-0.19 10.27 -0.55 11.37 0.12 11.95L6.97 17.88C7.25 18.13 7.38 18.5 7.29 18.87L5.23 27.69C5.03 28.55 5.97 29.23 6.72 28.77L14.48 24.09C14.8 23.9 15.19 23.9 15.51 24.09ZM21.73 19.09L23.78 27.91L16.03 23.23Q15.51 22.92 15 22.92Q14.48 22.92 13.96 23.23L6.21 27.91L8.27 19.09Q8.4 18.51 8.24 18.01Q8.08 17.52 7.63 17.13L0.77 11.19L9.8 10.43Q10.4 10.37 10.81 10.07Q11.23 9.77 11.47 9.21L15 0.89L18.52 9.21Q18.76 9.77 19.18 10.07Q19.59 10.37 20.19 10.43L29.22 11.19L22.36 17.13Q21.91 17.52 21.75 18.01Q21.59 18.51 21.73 19.09Z" fill="#FFC147" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="star"><svg width="31.000000" height="29.000000" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            <Created>with Pixso.</Created></desc>
                                        <defs/>
                                        <path id="Vector" d="M15.51 24.09L23.27 28.77C24.02 29.23 24.96 28.55 24.76 27.69L22.7 18.87C22.61 18.5 22.74 18.13 23.02 17.88L29.87 11.95C30.54 11.37 30.18 10.27 29.3 10.19L20.28 9.43C19.91 9.4 19.59 9.16 19.44 8.82L15.92 0.5C15.57 -0.31 14.42 -0.31 14.07 0.5L10.55 8.82C10.4 9.16 10.08 9.4 9.71 9.43L0.69 10.19C-0.19 10.27 -0.55 11.37 0.12 11.95L6.97 17.88C7.25 18.13 7.38 18.5 7.29 18.87L5.23 27.69C5.03 28.55 5.97 29.23 6.72 28.77L14.48 24.09C14.8 23.9 15.19 23.9 15.51 24.09ZM21.73 19.09L23.78 27.91L16.03 23.23Q15.51 22.92 15 22.92Q14.48 22.92 13.96 23.23L6.21 27.91L8.27 19.09Q8.4 18.51 8.24 18.01Q8.08 17.52 7.63 17.13L0.77 11.19L9.8 10.43Q10.4 10.37 10.81 10.07Q11.23 9.77 11.47 9.21L15 0.89L18.52 9.21Q18.76 9.77 19.18 10.07Q19.59 10.37 20.19 10.43L29.22 11.19L22.36 17.13Q21.91 17.52 21.75 18.01Q21.59 18.51 21.73 19.09Z" fill="#FFC147" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="star"><svg width="31.000000" height="29.000000" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            <Created>with Pixso.</Created></desc>
                                        <defs/>
                                        <path id="Vector" d="M15.51 24.09L23.27 28.77C24.02 29.23 24.96 28.55 24.76 27.69L22.7 18.87C22.61 18.5 22.74 18.13 23.02 17.88L29.87 11.95C30.54 11.37 30.18 10.27 29.3 10.19L20.28 9.43C19.91 9.4 19.59 9.16 19.44 8.82L15.92 0.5C15.57 -0.31 14.42 -0.31 14.07 0.5L10.55 8.82C10.4 9.16 10.08 9.4 9.71 9.43L0.69 10.19C-0.19 10.27 -0.55 11.37 0.12 11.95L6.97 17.88C7.25 18.13 7.38 18.5 7.29 18.87L5.23 27.69C5.03 28.55 5.97 29.23 6.72 28.77L14.48 24.09C14.8 23.9 15.19 23.9 15.51 24.09ZM21.73 19.09L23.78 27.91L16.03 23.23Q15.51 22.92 15 22.92Q14.48 22.92 13.96 23.23L6.21 27.91L8.27 19.09Q8.4 18.51 8.24 18.01Q8.08 17.52 7.63 17.13L0.77 11.19L9.8 10.43Q10.4 10.37 10.81 10.07Q11.23 9.77 11.47 9.21L15 0.89L18.52 9.21Q18.76 9.77 19.18 10.07Q19.59 10.37 20.19 10.43L29.22 11.19L22.36 17.13Q21.91 17.52 21.75 18.01Q21.59 18.51 21.73 19.09Z" fill="#FFC147" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="form_group apply_submit">
                            <div class="aggre"><span><svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
                      <Created>with Pixso.</Created></desc>
<defs/>
<rect id="Rectangle 14" y="-0.500000" rx="2.000000" width="15.000000" height="15.000000" fill="#FFFFFF" fill-opacity="1.000000"/>
<rect id="Rectangle 14" x="0.250000" y="-0.250000" rx="2.000000" width="14.500000" height="14.500000" stroke="#B9B9B9" stroke-opacity="1.000000" stroke-width="0.500000"/>
</svg></span><span>I have read and agree to the privacy & policy.</span></div>
                            <button>Get a Quote</button>
                        </div>
                    </form>
                    <div class="recommendations">
                        <div class="item"><img src="/frontend/assets/images/Group (2).png"><span>Hotel Recommendation</span>
                            <p>Hotel suggestions based on your preferences and needs. Breakfast included.</p>
                        </div>
                        <div class="item"><img src="/frontend/assets/images/outline.png"><span>Hotel Recommendation</span>
                            <p>Hotel suggestions based on your preferences and needs. Breakfast included.</p>
                        </div>
                        <div class="item"><img src="/frontend/assets/images/XMLID_339_.png"><span>Hotel Recommendation</span>
                            <p>Hotel suggestions based on your preferences and needs. Breakfast included.</p>
                        </div>
                        <div class="item"><img src="/frontend/assets/images/XMLID_339_.png"><span>Hotel Recommendation</span>
                            <p>Hotel suggestions based on your preferences and needs. Breakfast included.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
