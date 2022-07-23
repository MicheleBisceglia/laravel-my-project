<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #13151a">
  
<!-- Header -->

  <!-- Header-top -->
  <nav class="navbar navbar-dark" style="background-color:black; height:30px">
    <img style="width: 80px; filter:invert()" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/FIFA_22_logo.svg/2560px-FIFA_22_logo.svg.png" alt="">
  </nav>
  <!-- /Header-top -->

  <!-- Header-bottom -->
  <nav class="navbar navbar-dark" style="background-color:#232529; height:70px">
    <ul class="navbar-nav px-3 ml-auto">
      <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </li>
    </ul>
  </nav>
  <!-- /Header-bottom -->

  <!-- Sidebar -->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar py-4 text-light" style="background-color: #232529; height:calc(100vh - 100px)">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            
            <li class="nav-item">
              <i class="fa-solid fa-house"></i>
                Home
            </li>

            <li class="nav-item">
              <i class="fa-solid fa-file"></i>
              Club
            </li>

            <li class="nav-item">
              <i class="fa-solid fa-square-plus"></i>
              Crea una nuova card
            </li>

            <li class="nav-item">
              <i class="fa-solid fa-tags"></i>
              Categorie
            </li>

         </ul>
      </div>
    </nav>
  </div>
</div>
<!-- /Sidebar -->

<!-- content -->
  @yield('content')
<!-- /content -->

</body>
</html>