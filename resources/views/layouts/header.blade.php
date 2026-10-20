<div class="container d-flex align-items-center">

    <h2 class="logo mr-auto"><a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/kaiyi_logo.png') }}" style="max-width:3.8rem;" class="pr-2" /><span>Kaiyi</span>Car 楷懿國際</a></h2>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">首頁</a></li>
        <li class="{{ request()->is('about_us') ? 'active' : '' }}"><a href="{{ url('/about_us') }}">關於我們</a></li>
        <li class="{{ request()->is('authenticate') ? 'active' : '' }}"><a href="{{ url('/authenticate') }}">安心認證</a></li>
        <li class="{{ request()->is('catalog*') ? 'active' : '' }}"><a href="{{ url('/catalog') }}">精選車款</a></li>
        <li class="{{ request()->is('witnessCar*') ? 'active' : '' }}"><a href="{{ url('/witnessCar') }}">購車見證</a></li>
        <li class="{{ request()->is('process') ? 'active' : '' }}"><a href="{{ url('/process') }}">購車流程</a></li>
        <li class="{{ request()->is('democar') ? 'active' : '' }}"><a href="{{ url('/democar') }}">購車知識</a></li>
        <li class="{{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ url('/contactus') }}">聯絡我們</a></li>
        <li class="{{ request()->is('friendlink') ? 'active' : '' }}"><a href="{{ url('/friendlink') }}">友情連結</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>

  <script>
    //   $(".drop-down ul li").click(function() {
    //       alert("尚未開放！！！");
    //   });
    function lock(){
        alert("尚未開放！！！");
    }
  </script>
