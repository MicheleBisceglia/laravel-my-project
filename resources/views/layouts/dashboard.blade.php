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
  <nav class="navbar navbar-dark" style="background-color:black; height:70px">
    <img style="width: 80px; filter:invert()" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/FIFA_22_logo.svg/2560px-FIFA_22_logo.svg.png" alt="">
  
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
  <!-- /Header-->

  @yield('content')

</body>
</html>