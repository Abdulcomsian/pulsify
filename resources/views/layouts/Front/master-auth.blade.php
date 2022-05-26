@include('frontend.includes.head')
<body style="background-color: transparent;">
@include('frontend.includes.auth-header')
   @yield('content')
@include('frontend.includes.footer')
</body>

@include('frontend.includes.script')