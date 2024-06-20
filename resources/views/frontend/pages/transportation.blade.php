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
<div class="transportation_page"><img class="back" src="/assets/images/image 372.png">
    <div class="container">
        <div class="transportation_page_left">
            <h1>Need assistance getting to your destination?</h1>
            <p>Thank you for choosing our transportation service! Whether you're traveling for business or pleasure, we're here to ensure your journey is smooth and comfortable. Please take a moment to provide us with some details about your trip, and we'll get back to you with a personalized quote.</p>
            <h2>Curious to learn more about our transportation service?</h2>
            <div class="buttons"><a class="button1">Contact Us</a><a class="button2">About us</a></div>
        </div>
        <div class="transportation_page_right">
            <form class="form_transportion">
                <div class="columns">
                    <div class="double_row">
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input placeholder="e.g. Sanan Shirinov">
                        </div>
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input placeholder="e.g. Sanan Shirinov">
                        </div>
                    </div>
                    <div class="double_row">
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input placeholder="e.g. Sanan Shirinov">
                        </div>
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input placeholder="e.g. Sanan Shirinov">
                        </div>
                    </div>
                    <div class="double_row">
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input placeholder="e.g. Sanan Shirinov">
                        </div>
                        <div class="form_group">
                            <label>Full Name *</label>
                            <input placeholder="e.g. Sanan Shirinov">
                        </div>
                    </div>
                    <div class="adults_row">
                        <div class="adult"><span>Adults</span>
                            <div class="inputs"><span>-</span><span>1</span><span>+</span></div>
                        </div>
                        <div class="adult"><span>Kids (0-5 years)</span>
                            <div class="inputs"><span>-</span><span>1</span><span>+</span></div>
                        </div>
                    </div>
                    <div class="form_detail">Get our recommended car based on your group size, or choose your own model.</div>
                    <div class="tour_carousel">
                        <div class="buttons">
                            <div class="left"><svg width="7.668945" height="13.313965" viewBox="0 0 7.66895 13.314" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                    </desc>
                                    <defs/>
                                    <path id="Vector" d="M0.29 5.93C0.1 6.12 0 6.37 0 6.64C0 6.9 0.1 7.16 0.29 7.35L5.94 13C6.04 13.1 6.15 13.18 6.27 13.23C6.39 13.28 6.52 13.31 6.66 13.31C6.79 13.31 6.92 13.28 7.04 13.23C7.17 13.18 7.28 13.11 7.37 13.02C7.46 12.92 7.54 12.81 7.59 12.69C7.64 12.56 7.66 12.43 7.66 12.3C7.66 12.17 7.64 12.04 7.58 11.91C7.53 11.79 7.45 11.68 7.36 11.59L2.41 6.64L7.36 1.69C7.54 1.5 7.64 1.25 7.64 0.99C7.64 0.72 7.53 0.47 7.35 0.29C7.16 0.1 6.91 0 6.65 0C6.39 -0.01 6.13 0.09 5.94 0.28L0.29 5.93Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="right"><svg width="7.668945" height="13.313965" viewBox="0 0 7.66895 13.314" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                    </desc>
                                    <defs/>
                                    <path id="Vector" d="M7.37 5.93C7.56 6.12 7.66 6.37 7.66 6.64C7.66 6.9 7.56 7.16 7.37 7.35L1.71 13C1.62 13.1 1.51 13.18 1.39 13.23C1.27 13.28 1.14 13.31 1 13.31C0.87 13.31 0.74 13.28 0.62 13.23C0.49 13.18 0.38 13.11 0.29 13.02C0.19 12.92 0.12 12.81 0.07 12.69C0.02 12.56 -0.01 12.43 0 12.3C0 12.17 0.02 12.04 0.08 11.91C0.13 11.79 0.2 11.68 0.3 11.59L5.25 6.64L0.3 1.69C0.12 1.5 0.02 1.25 0.02 0.99C0.02 0.72 0.13 0.47 0.31 0.29C0.5 0.1 0.75 0 1.01 0C1.27 -0.01 1.53 0.09 1.71 0.28L7.37 5.93Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="tour_slider_right">
                            <div class="item"><img src="/assets/images/unsplash_L4jrg4c7928.png">
                                <p>Range Rover</p>
                            </div>
                            <div class="item"><img src="/assets/images/unsplash_L4jrg4c7928.png">
                                <p>Range Rover</p>
                            </div>
                            <div class="item"><img src="/assets/images/unsplash_L4jrg4c7928.png">
                                <p>Range Rover</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="amount">$ Price</div>
                    </div>
                    <div class="permission">
                        <input type="checkbox">
                        <p>I have read and agree to the privacy & policy.</p>
                    </div>
                    <button>Order Tranportation</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="tranportation_page_more">
        <h2>Choose from the following options:</h2>
        <div class="items">
            @foreach($transportations as $trans)
            <div class="item"><img src="/storage/transportation/{{$trans->image}}">
                <div class="content">
                    <div class="icons">
                        <div class="icon-bar column2"><svg width="13.582031" height="14.291748" viewBox="0 0 13.582 14.2917" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    <Created>with Pixso.</Created></desc>
                                <defs/>
                                <path id="Vector" d="M11.44 1.76C11.73 1.75 12 1.81 12.26 1.92C12.52 2.02 12.75 2.18 12.95 2.38C13.15 2.58 13.31 2.81 13.41 3.07C13.52 3.33 13.58 3.61 13.58 3.89C13.58 5.49 11.44 7.85 11.44 7.85C11.44 7.85 9.31 5.49 9.31 3.89C9.31 3.61 9.37 3.33 9.47 3.07C9.58 2.81 9.74 2.58 9.94 2.38C10.14 2.18 10.37 2.02 10.63 1.92C10.89 1.81 11.16 1.75 11.44 1.76ZM11.44 4.65C11.6 4.65 11.74 4.6 11.87 4.52C11.99 4.44 12.09 4.32 12.15 4.18C12.21 4.04 12.22 3.89 12.19 3.74C12.16 3.59 12.09 3.46 11.98 3.35C11.88 3.24 11.74 3.17 11.59 3.14C11.45 3.11 11.29 3.13 11.15 3.18C11.01 3.24 10.9 3.34 10.81 3.46C10.73 3.59 10.68 3.74 10.68 3.89C10.68 4.09 10.76 4.28 10.91 4.43C11.05 4.57 11.24 4.65 11.44 4.65ZM0.7 6.62L0.7 3.54C0.7 3.22 0.75 2.9 0.85 2.59C1.08 1.77 1.6 1.06 2.31 0.59C3.02 0.12 3.88 -0.08 4.72 0.02C5.57 0.13 6.35 0.53 6.93 1.16C7.5 1.79 7.83 2.6 7.86 3.46L7.86 3.63L7.87 4.26L7.87 11.38L7.87 11.38L7.87 11.41C7.87 11.79 8.02 12.16 8.29 12.42C8.56 12.69 8.92 12.84 9.3 12.84C9.68 12.84 10.05 12.69 10.31 12.42C10.58 12.16 10.73 11.79 10.73 11.41C10.73 11.4 10.73 11.39 10.73 11.39L10.73 11.39L10.73 9.99L12.17 9.99L12.17 11.43L12.16 11.43C12.16 12.19 11.86 12.91 11.32 13.45C10.79 13.99 10.06 14.29 9.3 14.29C8.54 14.29 7.81 13.98 7.28 13.45C6.74 12.91 6.44 12.18 6.44 11.42L6.44 11.42L6.44 10.72L6.43 10.72L6.43 4.97L6.43 3.63L6.43 3.46C6.41 2.89 6.17 2.36 5.76 1.97C5.35 1.59 4.8 1.38 4.24 1.39C3.67 1.4 3.14 1.63 2.74 2.04C2.35 2.44 2.13 2.98 2.13 3.55L2.13 6.61C2.41 6.76 2.62 7 2.74 7.29C2.87 7.58 2.89 7.91 2.81 8.21C2.73 8.52 2.56 8.79 2.31 8.98C2.06 9.17 1.75 9.28 1.44 9.28C1.12 9.29 0.82 9.18 0.57 9C0.31 8.81 0.13 8.54 0.05 8.23C-0.04 7.93 -0.02 7.61 0.1 7.32C0.22 7.02 0.43 6.78 0.7 6.62Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="nonzero"/>
                            </svg><span>{{$trans->title1}}</span>
                        </div>
                        <div class="icon-bar"><svg width="14.887207" height="14.887207" viewBox="0 0 14.8872 14.8872" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    <Created>with Pixso.</Created></desc>
                                <defs>
                                    <pattern id="pattern_562_41000" patternContentUnits="objectBoundingBox" width="1.000000" height="1.000000">
                                        <use xlink:href="#image562_4100_0" transform="matrix(0.001953,0,0,0.001953,0,0)"/>
                                    </pattern>
                                    <image id="image562_4100_0" width="512.000000" height="512.000000" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                <rect id="image 13" width="14.887132" height="14.887132" fill="url(#pattern_562_41000)" fill-opacity="1.000000"/>
                            </svg><span>{{$trans->title2}}</span>
                        </div>
                        <div class="icon-bar"><svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    <Created>with Pixso.</Created></desc>
                                <defs>
                                    <clipPath id="clip562_4103">
                                        <rect id="grommet-icons:clock" width="15.000000" height="15.000000" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <rect id="grommet-icons:clock" width="15.000000" height="15.000000" fill="#FFFFFF" fill-opacity="0"/>
                                <g clip-path="url(#clip562_4103)">
                                    <path id="Vector" d="M8.12 4.37C8.12 4.2 8.05 4.05 7.94 3.93C7.82 3.81 7.66 3.75 7.49 3.75C7.33 3.75 7.17 3.81 7.05 3.93C6.94 4.05 6.87 4.2 6.87 4.37L6.87 7.5C6.87 7.59 6.89 7.69 6.94 7.77C6.98 7.86 7.04 7.94 7.12 8L9.62 9.87C9.75 9.97 9.92 10.01 10.08 9.99C10.25 9.97 10.39 9.88 10.49 9.75C10.59 9.61 10.64 9.45 10.61 9.28C10.59 9.12 10.5 8.97 10.37 8.87L8.12 7.18L8.12 4.37Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="nonzero"/>
                                    <path id="Vector" d="M7.49 0.62C3.7 0.62 0.62 3.7 0.62 7.49C0.62 11.29 3.7 14.37 7.49 14.37C11.29 14.37 14.37 11.29 14.37 7.49C14.37 3.7 11.29 0.62 7.49 0.62ZM1.87 7.49C1.87 6.76 2.01 6.02 2.3 5.34C2.58 4.66 2.99 4.04 3.52 3.52C4.04 2.99 4.66 2.58 5.34 2.3C6.02 2.02 6.75 1.87 7.49 1.87C8.23 1.87 8.96 2.02 9.65 2.3C10.33 2.58 10.95 2.99 11.47 3.52C11.99 4.04 12.41 4.66 12.69 5.34C12.97 6.02 13.12 6.76 13.12 7.49C13.12 8.99 12.53 10.42 11.47 11.47C10.42 12.53 8.98 13.12 7.49 13.12C6 13.12 4.57 12.53 3.52 11.47C2.46 10.42 1.87 8.99 1.87 7.49Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </g>
                            </svg><span>{{$trans->title3}}</span>
                        </div>
                        <div class="icon-bar"><svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    <Created>with Pixso.</Created></desc>
                                <defs>
                                    <clipPath id="clip562_4125">
                                        <rect id="lets-icons:return" width="15.000000" height="15.000000" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <rect id="lets-icons:return" width="15.000000" height="15.000000" fill="#FFFFFF" fill-opacity="0"/>
                                <g clip-path="url(#clip562_4125)">
                                    <path id="Vector" d="M12.5 6.25L12.94 6.69L13.38 6.25L12.94 5.8L12.5 6.25ZM1.87 11.25C1.87 11.41 1.94 11.57 2.05 11.69C2.17 11.8 2.33 11.87 2.5 11.87C2.66 11.87 2.82 11.8 2.94 11.69C3.06 11.57 3.12 11.41 3.12 11.25L1.87 11.25ZM9.81 9.81L12.94 6.69L12.05 5.8L8.93 8.93L9.81 9.81ZM12.94 5.8L9.81 2.68L8.93 3.56L12.05 6.69L12.94 5.8ZM12.5 5.62L6.25 5.62L6.25 6.87L12.5 6.87L12.5 5.62ZM1.87 10L1.87 11.25L3.12 11.25L3.12 10L1.87 10ZM6.25 5.62C5.09 5.62 3.97 6.08 3.15 6.9C2.33 7.72 1.87 8.84 1.87 10L3.12 10C3.12 9.17 3.45 8.37 4.04 7.79C4.62 7.2 5.42 6.87 6.25 6.87L6.25 5.62Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </g>
                            </svg><span>{{$trans->title4}}</span>
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
                            </svg><span>{{$trans->title5}}</span>
                        </div>
                    </div>
                    <div class="price"><strong>${{$trans->price}}</strong><span>{{$trans->price_detail}}</span></div><a>Send a Quote</a>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>

    @endsection