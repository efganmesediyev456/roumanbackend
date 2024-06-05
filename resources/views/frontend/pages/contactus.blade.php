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
    <div class="question_title">
        <div class="title">Have questions or need assistance?</div>
        <p>Lorem ipsum dolor sit amet consectetur. Mi dolor fusce purus enim commodo pulvinar mauris habitant id. Eget laoreet commodo et volutpat enim.</p>
    </div>
    <div class="question_form_section container">
        <form>
            <div class="left">
                <div class="form_group">
                    <label>Full Name *</label>
                    <input placeholder="Full Name *">
                </div>
                <div class="form_group">
                    <label>Phone number *</label>
                    <input placeholder="Full Name *">
                </div>
                <div class="form_group">
                    <label>Phone number *</label>
                    <input placeholder="Full Name *">
                </div>
            </div>
            <div class="right">
                <div class="form_group">
                    <label>Type your message into the box below</label>
                    <textarea></textarea>
                </div>
                <div class="form_group">
                    <button>Send</button>
                </div>
            </div>
        </form>
    </div>
    <div class="question_page_detail"><img src="/assets/images/unsplash_L4jrg4c7928.png">
        <div class="container">
            <div class="left">
                <div class="centered_mode">
                    <div class="title"><svg width="29.633789" height="30.000000" viewBox="0 0 29.6338 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                                <Created>with Pixso.</Created></desc>
                            <defs>
                                <clipPath id="clip359_4229">
                                    <rect id="ion:mail-outline" width="29.634146" height="30.000000" fill="white" fill-opacity="0"/>
                                </clipPath>
                            </defs>
                            <rect id="ion:mail-outline" width="29.634146" height="30.000000" fill="#FFFFFF" fill-opacity="0"/>
                            <g clip-path="url(#clip359_4229)">
                                <path id="Vector" d="M5.21 5.85L24.42 5.85C25.68 5.85 26.7 6.87 26.7 8.14L26.7 21.85C26.7 23.12 25.68 24.14 24.42 24.14L5.21 24.14C3.95 24.14 2.92 23.12 2.92 21.85L2.92 8.14C2.92 6.87 3.95 5.85 5.21 5.85Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd"/>
                                <path id="Vector" d="M6.48 9.37L14.81 15.93L23.15 9.37" stroke="#E23E57" stroke-opacity="1.000000" stroke-width="1.829268" stroke-linejoin="round" stroke-linecap="round"/>
                            </g>
                        </svg>
                    </div>
                    <div class="items">
                        <div class="item">bill.sanders@example.com</div>
                        <div class="item">bill.sanders@example.com</div>
                        <div class="item">bill.sanders@example.com</div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="centered_mode">
                    <div class="title"><svg width="30.000000" height="30.000000" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                                <Created>with Pixso.</Created></desc>
                            <defs>
                                <clipPath id="clip359_4232">
                                    <rect id="lucide:phone-call" width="30.000000" height="30.000000" fill="white" fill-opacity="0"/>
                                </clipPath>
                            </defs>
                            <rect id="lucide:phone-call" width="30.000000" height="30.000000" fill="#FFFFFF" fill-opacity="0"/>
                            <g clip-path="url(#clip359_4232)">
                                <path id="Vector" d="M24.12 20.51L24.12 23.85C24.13 24.16 24.06 24.46 23.94 24.75C23.81 25.03 23.63 25.29 23.4 25.5C23.18 25.7 22.91 25.86 22.61 25.96C22.32 26.06 22.01 26.1 21.7 26.07C18.28 25.7 14.99 24.53 12.1 22.66C9.41 20.95 7.13 18.67 5.42 15.98C3.54 13.08 2.37 9.77 2.01 6.34C1.98 6.03 2.02 5.72 2.11 5.42C2.21 5.13 2.37 4.86 2.58 4.63C2.79 4.41 3.04 4.22 3.32 4.1C3.61 3.97 3.91 3.91 4.22 3.91L7.56 3.91C8.1 3.9 8.62 4.1 9.03 4.45C9.44 4.8 9.71 5.29 9.78 5.82C9.92 6.89 10.19 7.94 10.56 8.95C10.71 9.35 10.75 9.78 10.66 10.2C10.57 10.61 10.36 10.99 10.06 11.3L8.65 12.71C10.23 15.5 12.54 17.8 15.32 19.39L16.74 17.97C17.04 17.67 17.42 17.47 17.84 17.38C18.25 17.29 18.69 17.32 19.08 17.47C20.09 17.85 21.14 18.11 22.21 18.25C22.75 18.33 23.25 18.6 23.6 19.02C23.95 19.43 24.14 19.96 24.12 20.51Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="evenodd"/>
                                <path id="Vector" d="M17.5 2.49C20.04 2.76 22.42 3.89 24.24 5.7C26.06 7.5 27.21 9.87 27.5 12.42M17.5 7.49C18.72 7.74 19.85 8.34 20.73 9.24C21.61 10.13 22.21 11.26 22.43 12.49" stroke="#E23E57" stroke-opacity="1.000000" stroke-width="1.112552" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </div>
                    <div class="items">
                        <div class="item">bill.sanders@example.com</div>
                        <div class="item">bill.sanders@example.com</div>
                        <div class="item">bill.sanders@example.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
