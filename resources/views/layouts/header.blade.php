{{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/kaiyi_logo.png') }}" style="max-width:3.8rem;" class="pr-2" /><span>Kaiyi</span>Car 楷懿國際</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}" class="nav-link">首頁</a></li>
          <li class="nav-item {{ request()->is('about_us') ? 'active' : '' }}"><a href="{{ url('/about_us') }}" class="nav-link">關於我們</a></li>
          <li class="nav-item {{ request()->is('authenticate') ? 'active' : '' }}"><a href="{{ url('/authenticate') }}" class="nav-link">安心認證</a></li>
          <li class="nav-item {{ request()->is('catalog*') ? 'active' : '' }}"><a href="{{ url('/catalog') }}" class="nav-link">精選車款</a></li>
          <li class="nav-item {{ request()->is('process') ? 'active' : '' }}"><a href="{{ url('/process') }}" class="nav-link">購車流程</a></li>
          <li class="nav-item {{ request()->is('democar') ? 'active' : '' }}"><a href="{{ url('/democar') }}" class="nav-link">購車知識</a></li>
          <li class="nav-item {{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ url('/contactus') }}" class="nav-link">聯絡我們</a></li>
          <li class="nav-item {{ request()->is('friendlink') ? 'active' : '' }}"><a href="{{ url('/friendlink') }}" class="nav-link">友情連結</a></li>
        </ul>
      </div>
    </div>
  </nav> --}}
<!-- END nav -->

<div class="container d-flex align-items-center">

    <h2 class="logo mr-auto"><a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/kaiyi_logo.png') }}" style="max-width:3.8rem;" class="pr-2" /><span>Kaiyi</span>Car 楷懿國際</a></h2>
    <!-- Uncomment below if you prefer to use an image logo -->
    {{-- <a href="{{ Route('index') }}" class="logo mr-auto"><img src="{{ asset('images/logo.png') }}" alt="Richful&nbsp;加州瑞渥" class="img-fluid"></a> --}}

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">首頁</a></li>
        <li class="{{ request()->is('about_us') ? 'active' : '' }}"><a href="{{ url('/about_us') }}">關於我們</a></li>
        <li class="{{ request()->is('authenticate') ? 'active' : '' }}"><a href="{{ url('/authenticate') }}">安心認證</a></li>
        <li class="{{ request()->is('catalog*') ? 'active' : '' }}"><a href="{{ url('/catalog') }}">精選車款</a></li>
        <li class="{{ request()->is('process') ? 'active' : '' }}"><a href="{{ url('/process') }}">購車流程</a></li>
        <li class="{{ request()->is('democar') ? 'active' : '' }}"><a href="{{ url('/democar') }}">購車知識</a></li>
        <li class="{{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ url('/contactus') }}">聯絡我們</a></li>
        <li class="{{ request()->is('friendlink') ? 'active' : '' }}"><a href="{{ url('/friendlink') }}">友情連結</a></li>
        {{-- <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ Route('Featured') }}">Home</a></li>
        <li class="{{ request()->routeIs('AboutUs') ? 'active' : '' }}"><a href="{{ Route('AboutUs') }}">關於瑞渥</a></li>
        <li class="{{ (request()->routeIs('Featured') || request()->routeIs('FeaturedCar'))  ? 'active' : '' }}"><a href="{{ Route('FeaturedCar') }}">美洲精選</a></li>
        <li class="{{ request()->routeIs('ChooseOwn') ? 'active' : '' }}"><a href="{{ Route('ChooseOwn') }}">自辦外匯車</a></li> --}}
        {{-- <li class=""><a href="#team">常見問題</a></li> --}}
        {{-- <li class="drop-down"><a href="">訂製新車</a> --}}
          {{-- <ul> --}}
            {{-- <li><a href="" onclick="lock()">BMW</a></li> --}}
            {{-- <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li> --}}
            {{-- <li><a href="{{ url('/ChooseOwnBuildNew/benz') }}">BENZ</a></li> --}}
            {{-- <li><a href="" onclick="lock()">Porsche</a></li> --}}
            {{-- <li><a href="#">Drop Down 4</a></li> --}}
          {{-- </ul> --}}
        {{-- </li> --}}
        {{-- <li class="{{ request()->routeIs('ContactUs') ? 'active' : '' }}"><a href="{{ Route('ContactUs') }}">聯絡我們</a></li> --}}

      </ul>
    </nav><!-- .nav-menu -->

    {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

  </div>

  <script>
    //   $(".drop-down ul li").click(function() {
    //       alert("尚未開放！！！");
    //   });
    function lock(){
        alert("尚未開放！！！");
    }
  </script>
