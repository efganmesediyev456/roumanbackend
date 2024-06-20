@extends('frontend.layouts.layout')
@push('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    <style type="text/css">


.permission{
  display:flex;
  gap:8px;
  align-items: center;
  flex-wrap: wrap;
  span{
    margin-bottom: 0px!important;
  }
  button{
      flex:0 0 100%;

  }
}

.checbox_container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.checbox_container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checbox_container .checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.checbox_container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.checbox_container input:checked ~ .checkmark {
  background: linear-gradient(270deg,#e23e57 48.929%,#88304e 161.42%);
}

/* Create the checkmark/indicator (hidden when not checked) */
.checbox_container .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.checbox_container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.checbox_container .checkmark:after {
     left: 8px;
    top: 4px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


        input.error{
            border:1px solid red;
        }
        .error_message{
          color:red;
          font-size:14px;
          margin-top:12px;
        }

      .get_quote{
        cursor: pointer;
      }

.valid{
  border:1px solid green!important;
}
          .iti{
            width: 100%;
          }

        .guide{
          display:flex;
          gap:20px!important;
          align-items: center;
          p,.language_area{
            display: none;
          }
        }
        span svg{
          transition: all ease .5s;
        }

        .anime  svg{
          
            transform: rotate(180deg);
          
        }
        .guide > div{
          display: flex;
          gap:8px;
          align-items: center;
        }

        .guide p{
          /* Open Sans/Regular/18 */
color: rgb(0, 0, 0);
font-family: Open Sans;
font-size: 18px;
font-weight: 400;
line-height: 125%;
letter-spacing: 0.5px;
text-align: left;
        }

.guide .language_area .selected{
    display:flex;
    cursor: pointer;
    gap:8px;
    align-items: center;
    padding:4px;
    span{
           /* Open Sans/Regular/18 */
color: rgb(0, 0, 0);
font-family: Open Sans;
font-size: 18px;
font-weight: 400;
line-height: 125%;
letter-spacing: 0.5px;
text-align: left;
display: flex;
align-items: center;
justify-content: center;
    }
}

.guide .language_area {
  position: relative;
}
.guide .language_area .dropdown{
    position: absolute;
    top:28px;
    display: flex;
    flex-direction: column;
    width: 130px;
    background-color: white;
    display: none;
}
.guide .language_area .dropdown .item{
  /* Open Sans/Regular/18 */
color: rgb(0, 0, 0);
font-family: Open Sans;
cursor: pointer;
font-size: 18px;
border-bottom: unset!important;
font-weight: 400;
line-height: 125%;
letter-spacing: 0.5px;
text-align: left;
display: flex;
align-items: center;
gap:8px;
padding:4px 4px;
transition: all ease .5s;
}

.guide .language_area .dropdown .item:hover{
  box-sizing: border-box;
/* Gray/standart */
border-bottom: 0.5px solid rgb(185, 185, 185);
/* Pinkish red/bright */
background: rgb(226, 62, 87);

color:white;
}
       input{
          outline:unset;
        }
        .valid {
            border: 1px solid green;
        }
        .invalid {
            border: 1px solid red;
        }

          .d-flex{
            display:flex;
            gap:4px;
            align-items: center;
          }



.switch {
    position: relative;
    display: inline-block;
    width: 35px;
    height: 20px;
  }

  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .switch .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 20px;
  }

  .switch .slider:before {
    position: absolute;
    content: "";
    height: 14px;
    width: 14px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
  }

  .switch input:checked + .slider {
    background-color: red;
  }

  .switch input:checked + .slider:before {
    transform: translateX(15px);
  }


    </style>
@endpush
@section('content')



      <div class="success_message_modal">
        <div class="modal">
          <div class="close_modal"><svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
            <Created>with Pixso.</Created></desc>
<defs>
<clipPath id="clip1021_4009">
<rect id="ph:x" width="20.000000" height="20.000000" fill="white" fill-opacity="0"/>
</clipPath>
</defs>
<rect id="ph:x" width="20.000000" height="20.000000" fill="#FFFFFF" fill-opacity="0"/>
<g clip-path="url(#clip1021_4009)">
<path id="Vector" d="M16.06 15.18C16.12 15.24 16.17 15.3 16.2 15.38C16.23 15.46 16.25 15.54 16.25 15.62C16.25 15.7 16.23 15.78 16.2 15.86C16.17 15.93 16.12 16 16.06 16.06C16 16.12 15.94 16.17 15.86 16.2C15.78 16.23 15.7 16.25 15.62 16.25C15.54 16.25 15.46 16.23 15.38 16.2C15.31 16.17 15.24 16.12 15.18 16.06L10 10.88L4.81 16.06C4.7 16.18 4.54 16.25 4.37 16.25C4.2 16.25 4.05 16.18 3.93 16.06C3.81 15.94 3.75 15.79 3.75 15.62C3.75 15.45 3.81 15.29 3.93 15.18L9.11 10L3.93 4.81C3.81 4.69 3.75 4.54 3.75 4.37C3.75 4.2 3.81 4.04 3.93 3.93C4.05 3.81 4.2 3.74 4.37 3.74C4.54 3.74 4.7 3.81 4.81 3.93L10 9.11L15.18 3.93C15.3 3.81 15.46 3.74 15.62 3.74C15.79 3.74 15.95 3.81 16.06 3.93C16.18 4.04 16.25 4.2 16.25 4.37C16.25 4.54 16.18 4.69 16.06 4.81L10.88 10L16.06 15.18Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
</g>
</svg>
          </div>
          <div class="modal_image"><img src="/assets/images/success.png"></div>
          <div class="modal_body">
            <p>Thank you for choosing us!</p>
            <p>We will reach you out to discuss further transportation details.</p>
            <button>Explore More</button>
          </div>
        </div>

      </div>
    <div id="body">
      <div class="home_header_and_slider tour_inside">
        <header>
          <div class="container">
            <div class="logo"><img src="/assets/images/logoblack.svg"></div>
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
      <div class="tour_inside_arrows">
        <div class="container">
          <div class="arrows">
            <div class="left"><svg width="27.980713" height="14.586426" viewBox="0 0 27.9807 14.5864" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
              <Created>with Pixso.</Created></desc>
<defs/>
<path id="Vector" d="M8.04 0.29C8.13 0.38 8.2 0.49 8.25 0.62C8.31 0.74 8.33 0.87 8.33 1C8.33 1.13 8.31 1.26 8.25 1.39C8.2 1.51 8.13 1.62 8.04 1.71L3.44 6.31L26.98 6.31C27.24 6.31 27.5 6.42 27.68 6.6C27.87 6.79 27.98 7.05 27.98 7.31C27.98 7.58 27.87 7.83 27.68 8.02C27.5 8.21 27.24 8.31 26.98 8.31L3.46 8.31L8.04 12.88C8.22 13.07 8.33 13.32 8.33 13.59C8.33 13.85 8.22 14.1 8.04 14.29C7.85 14.48 7.59 14.58 7.33 14.58C7.07 14.58 6.81 14.48 6.63 14.29L0.27 7.93C0.18 7.85 0.11 7.75 0.07 7.64C0.02 7.53 0 7.41 0 7.3C0 7.18 0.02 7.06 0.07 6.95C0.11 6.84 0.18 6.74 0.27 6.66L6.62 0.29C6.71 0.2 6.82 0.12 6.94 0.07C7.06 0.02 7.19 0 7.33 0C7.46 0 7.59 0.02 7.71 0.07C7.83 0.12 7.94 0.2 8.04 0.29Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>
            </div>
            <div class="right"><svg width="27.980713" height="14.586426" viewBox="0 0 27.9807 14.5864" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
              <Created>with Pixso.</Created></desc>
<defs/>
<path id="Vector" d="M8.04 0.29C8.13 0.38 8.2 0.49 8.25 0.62C8.31 0.74 8.33 0.87 8.33 1C8.33 1.13 8.31 1.26 8.25 1.39C8.2 1.51 8.13 1.62 8.04 1.71L3.44 6.31L26.98 6.31C27.24 6.31 27.5 6.42 27.68 6.6C27.87 6.79 27.98 7.05 27.98 7.31C27.98 7.58 27.87 7.83 27.68 8.02C27.5 8.21 27.24 8.31 26.98 8.31L3.46 8.31L8.04 12.88C8.22 13.07 8.33 13.32 8.33 13.59C8.33 13.85 8.22 14.1 8.04 14.29C7.85 14.48 7.59 14.58 7.33 14.58C7.07 14.58 6.81 14.48 6.63 14.29L0.27 7.93C0.18 7.85 0.11 7.75 0.07 7.64C0.02 7.53 0 7.41 0 7.3C0 7.18 0.02 7.06 0.07 6.95C0.11 6.84 0.18 6.74 0.27 6.66L6.62 0.29C6.71 0.2 6.82 0.12 6.94 0.07C7.06 0.02 7.19 0 7.33 0C7.46 0 7.59 0.02 7.71 0.07C7.83 0.12 7.94 0.2 8.04 0.29Z" fill="#311D3F" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>
            </div>
          </div>
        </div>
      </div>
      <div class="container tour_inside_page">
        <div class="tour_inside_page_left">
          <div class="slider-for">

           

            @foreach($tour->media as $media)
            <div class="item">
               <img src="/storage/medias/{{$media->name}}">
           </div>

               @endforeach
          </div>
          <div class="slider-nav">
            @foreach($tour->media as $media)
            <div class="item">
               <img src="/storage/medias/{{$media->name}}">
           </div>
               
               @endforeach
    
          </div>
          <div class="content_and_tour">
            <div class="content">
              <h1>{{$tour->title}}</h1>
              <div class="tour_content">
               {!!$tour->content!!}
              </div>
            </div>
            <div class="tour_information">
              <h1>Moscow - Russia</h1>
              <h2>Tour Information:</h2>
              <div class="tour_detail">
                <div class="item"><img src="/assets/images/solar_calendar-outline.svg"><span>Duration: {{$tour->duration}}</span></div>
                <div class="item"><img src="/assets/images/Group.svg"><span>Accommodation: {{$tour->accommodation }}</span></div>
                <div class="item"><img src="/assets/images/image 13.svg"><span>Transportation: {{$tour->transportation }}</span></div>
                <div class="item"><img src="/assets/images/image 12.svg"><span>Cuisine: {{$tour->cuisine }}</span></div>
                <div class="item"><img src="/assets/images/image 11.svg"><span>Guide: {{$tour->guide}}</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="tour_inside_page_right">
          <form>
            <div class="tour_inside_forms">
              <div class="form_group">
                <label>Full Name *</label>
                <input id="name" placeholder="e.g. Sanan Shirinov">
              </div>
              <div class="form_group">
                <label>Phone number *</label>
                <input id=phone type="tel" id="phone" name="phone">
              </div>
              <div class="form_group">
                <label>E-mail *</label>
                <input id="email" placeholder="e.g. Sanan Shirinov">
              </div>
              <div class="form_group adult_and_kids">
                <div class="adult_and_kids_items">
                  <div class="item">
                    <div class="text">Adults</div>
                    <div class="input_groups">
                      <div class="minus">-</div>
                      <input id="adults" value="1">
                      <div class="plus">+</div>
                    </div>
                  </div>
                  <div class="item kids">
                    <div class="text">Kids</div><span>(0-5 years)</span>
                    <div class="input_groups">
                      <div class="minus">-</div>
                      <input id="kids" value="1">
                      <div class="plus">+</div>
                    </div>
                  </div>
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


                  @foreach($cars as $car)

                  <div class="item" data-id="{{$car->id}}"><img src="/storage/car/{{$car->image}}">
                    <p>{{$car->title}}</p>
                  </div>
                 
                 @endforeach



                </div>
              </div>
              <div class="price">
                <div class="amount">$ Price</div>
              </div>
              <div class="guide d-flex">
                <div> 
                <h1>Guide</h1>
                 <label class="switch">
    <input type="checkbox" id="guide" name=guide>
    <span class="slider"></span>
  </label>
</div>

    <p> Guides Language </p>

    <div class='language_area'>
      <div class="selected">
        <img src="/frontend/assets/images/englishflag.svg">
        <span>English</span>
        <span><svg width="9.375000" height="5.000000" viewBox="0 0 9.375 5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <desc>
      Created with Pixso.
  </desc>
  <defs/>
  <path id="Vector" d="M4.68 0L0 5L9.37 5L4.68 0Z" fill="#000000" fill-opacity="1.000000" fill-rule="nonzero"/>
</svg>
</span>
      </div>
      <div class="dropdown">
        <div class="item">
                  <img src="/frontend/assets/images/englishflag.svg">
                  <span>Azerbaijan</span>
        </div>
        <div class="item">
                  <img src="/frontend/assets/images/englishflag.svg">
                  <span>Russia</span>
        </div>
        <div class="item">
                  <img src="/frontend/assets/images/englishflag.svg">
                  <span>Ukraine</span>
        </div>

      </div>
    </div>

              </div>
              <div class="activities d-flex">
                <h1>Activities</h1>
                 <label class="switch">
    <input id="activities" type="checkbox">
    <span class="slider"></span>
  </label>
              </div>
              <p class="after">After submitting your quote, we'll offer you the best options. Please note, prices may vary.</p>
              <div class="special_request">
                <label>Special Requests and Preferences</label>
                <textarea id="message" class="special"></textarea>
                <div class="permission" style="margin-bottom:24px;">
                   <label class="checbox_container"><input type="checkbox">
  <span class="checkmark"></span>
</label>
                  <span style="transform: translateY(4px);">Special Requests and Preferences</span>
                   </div>
                   <div class="permission">
                  <button class="get_quote">Get a Quote</button>
                </div>
               
              </div>
              <div class="need_help">
                <p>Need any help?</p>
                <div class="whatsapp"><span><svg width="28.000000" height="28.000000" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
                    <Created>with Pixso.</Created></desc>
<defs/>
<path id="Vector" d="M14 0C6.26 0 0 6.26 0 14C0 16.64 0.73 19.12 2.01 21.23L0.76 25.48C0.69 25.72 0.68 25.98 0.75 26.22C0.81 26.47 0.94 26.69 1.12 26.87C1.3 27.05 1.52 27.18 1.77 27.24C2.01 27.31 2.27 27.3 2.52 27.23L6.76 25.98C8.94 27.3 11.44 28 14 28C21.73 28 28 21.73 28 14C28 6.26 21.73 0 14 0ZM10.83 17.16C13.66 19.99 16.36 20.37 17.32 20.4C18.77 20.46 20.18 19.35 20.73 18.06C20.8 17.9 20.83 17.72 20.81 17.55C20.79 17.38 20.72 17.21 20.61 17.08C19.84 16.1 18.81 15.39 17.79 14.69C17.58 14.55 17.32 14.49 17.07 14.53C16.81 14.57 16.59 14.71 16.43 14.91L15.59 16.19C15.55 16.26 15.48 16.31 15.4 16.33C15.32 16.35 15.24 16.34 15.16 16.3C14.59 15.97 13.76 15.42 13.17 14.82C12.57 14.23 12.05 13.43 11.76 12.9C11.72 12.83 11.71 12.76 11.73 12.68C11.75 12.61 11.79 12.54 11.85 12.49L13.15 11.53C13.33 11.37 13.45 11.15 13.48 10.91C13.51 10.67 13.45 10.42 13.31 10.22C12.69 9.3 11.96 8.13 10.9 7.36C10.76 7.26 10.6 7.2 10.43 7.18C10.26 7.16 10.09 7.19 9.94 7.25C8.65 7.8 7.54 9.22 7.59 10.67C7.62 11.63 8 14.33 10.83 17.16Z" fill="#008069" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg></span><span>Whatsapp</span></div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="container you_may_like_this_area">
        <h2>@lang('frontend.You may like these')</h2>
        <div class="you_may_like_this">
          <div class="buttons">
            <div class="left"><svg width="31.066650" height="13.630859" viewBox="0 0 31.0667 13.6309" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
              <Created>with Pixso.</Created></desc>
<defs/>
<path id="Vector" d="M30.31 6.81L0.75 6.81" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
<path id="Vector" d="M6.81 0.75L0.75 6.81L6.81 12.87" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
</svg>
            </div>
            <div class="right"><svg width="31.066650" height="13.630859" viewBox="0 0 31.0667 13.6309" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<desc>
              <Created>with Pixso.</Created></desc>
<defs/>
<path id="Vector" d="M30.31 6.81L0.75 6.81" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
<path id="Vector" d="M6.81 0.75L0.75 6.81L6.81 12.87" stroke="#FFFCF5" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
</svg>
            </div>
          </div>
          <div class="splide">
            <div class="splide__track">
              <div class="splide__list">

                @foreach($tours as $tt)
                <div class="splide__slide"><img src="/storage/tour/{{$tt->image}}">
                  <div class="content">
                    <p>{{$tt->title}}</p>
                  </div>
                </div>
                @endforeach
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection



@push('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {


      $(".guide input").on("change", function(e){
        if($(this).is(":checked")){
          $(".guide p, .guide .language_area").show()
        }else{
          $(".guide p, .guide .language_area").hide()

        }
      })
        // Initialize phone input
        var input = document.querySelector("#phone");
        window.iti = window.intlTelInput(input, {
                      initialCountry: "az", // Azerbaycan seçili olarak gelmesi için

            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            validationNumberType: "MOBILE", // Sadece mobil numaraları geçerli kabul et
            strictMode: true,
            separateDialCode: true, // Ülke kodunu ayrı göster
        });

        // Event listener for input change
        input.addEventListener('input', function() {
            var isValid = iti.isValidNumber();
            if (isValid) {
                input.classList.remove('invalid');
                input.classList.add('valid');
            } else {
                input.classList.remove('valid');
                input.classList.add('invalid');
            }
        });
    });


    $(".language_area .selected").click(function(){
      $(this).siblings('.dropdown').slideToggle();

      $(this).find('span').toggleClass('anime')

    })

    $(".language_area .dropdown .item").click(function(){
      $(this).parents('.dropdown').slideUp();
      $('span.anime').removeClass('anime');
      var text=$(this).text().trim();
      $(".language_area .selected span:first-of-type").text(text)
    })


    $(function(){
      $(".get_quote").click(function(e){
        e.preventDefault();
        let name=$("#name").val();
        let phone = window.iti.getNumber();
        let email=$("#email").val();
        let adults=$("#adults").val();
        let kids=$("#kids").val();
        let car=$(".tour_slider_right  .slick-active .item").attr('data-id');


        var checkbox = $("#activities");
        let activities=0;


        if($("#activities").is(":checked")==true){
            activities=1;
        }


        let permission=0;


        if($(".permission input").is(":checked")==true){
            permission=1;
        }

        let guide=$("#guide").is(":checked") ? 1:0;

        let guide_language=$(".language_area .selected span:first-of-type").text().trim();

        let message=$("#message").val()


      


       
        var formdata=new FormData();
        formdata.append('_token','{{csrf_token()}}')
        formdata.append('name',name)
        formdata.append('email',email)
        formdata.append('adults',adults)
        formdata.append('kids',kids)
        formdata.append('car',car)
        formdata.append('activities', activities)
        formdata.append("guide",guide)
        formdata.append("permission",permission)


        formdata.append("guide_language",guide_language)

        formdata.append("message",message)



       

        formdata.append('phone',phone)
        $.ajax({
          url:"/{{app()->getLocale()}}/tour/apply/{{$tour->id}}",
          type:"post",
          data:formdata,
          contentType: false,
          processData: false,
          success:function(e){
            $(".error").removeClass('error')
            $(".error_message").remove();

               $("#name").val('');
               window.iti.setNumber('');
              $("#email").val('');
              $("#adults").val(1);
              $("#kids").val(1);
              $("#activities").prop("checked", false)
              $(".permission input").prop("checked",false);
              $("#message").val('')
              $("#guide").prop("checked", false)

              $(".success_message_modal").addClass("show");
              setTimeout(function(e){
              $(".success_message_modal").removeClass("show");

              },3000)


          },
          error:function(e){

            let errors=e.responseJSON.errors;
            $(".error").removeClass('error')
            $(".error_message").remove()

            Swal.fire({
              success:"error",
              icon:"error",
              showConfirmButton:false,
              timer:1200,
              text:"Please fill all inputs"
            })
            for(let error in errors){

              $("#"+error).addClass('error');
              for(let a in errors[error]){
                console.log(errors[error][a])
                $("#"+error).parents('.form_group').append('<span class="error_message">'+errors[error][a]+'</span>');
              }
            }

          }
        })



      })
    })

</script>


@endpush