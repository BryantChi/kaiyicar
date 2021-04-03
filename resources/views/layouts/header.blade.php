<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}"><span>Kaiyi</span>Car</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}" class="nav-link">首頁</a></li>
          <li class="nav-item {{ request()->is('about_us') ? 'active' : '' }}"><a href="{{ url('/about_us') }}" class="nav-link">關於我們</a></li>
          <li class="nav-item {{ request()->is('authenticate') ? 'active' : '' }}"><a href="{{ url('/authenticate') }}" class="nav-link">安心認證</a></li>
          <li class="nav-item {{ request()->is('catalog*') ? 'active' : '' }}"><a href="{{ url('/catalog') }}" class="nav-link">上架型錄</a></li>
          <li class="nav-item {{ request()->is('process') ? 'active' : '' }}"><a href="{{ url('/process') }}" class="nav-link">購車流程</a></li>
          <li class="nav-item {{ request()->is('democar') ? 'active' : '' }}"><a href="{{ url('/democar') }}" class="nav-link">購車知識</a></li>
          <li class="nav-item {{ request()->is('contactus') ? 'active' : '' }}"><a href="{{ url('/contactus') }}" class="nav-link">聯絡我們</a></li>
          <li class="nav-item {{ request()->is('friendlink') ? 'active' : '' }}"><a href="{{ url('/friendlink') }}" class="nav-link">友情連結</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
