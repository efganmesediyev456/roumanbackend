@include('frontend.inc.head')
@stack('css')
<div id="body">

    @yield('content')

    @include('frontend.inc.footer')
    @stack('js')
