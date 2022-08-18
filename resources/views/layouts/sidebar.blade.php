@extends('layouts.dashboard')

@section('content')
      <!-- Sidebar -->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar py-4 text-light" style="background-color: #172025; height:calc(100vh + 80px);">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            
            <li class="nav-item text-center pb-5">
              <h1 class="fa-solid fa-house w-100 text-center"></h1>
                Home
            </li>

            <li class="nav-item text-center pb-5">
              <h1 class="fa-solid fa-file w-100 text-center"></h1>
              Club
            </li>

            <li class="nav-item text-center pb-5">
              <h1 class="fa-solid fa-square-plus w-100 text-center"></h1>
              Crea una nuova card
            </li>

            <li class="nav-item text-center pb-5">
              <h1 class="fa-solid fa-tags w-100 text-center"></h1>
              Categorie
            </li>

         </ul>
      </div>
    </nav>
    <!-- /Sidebar -->

    <!-- content -->
    <main role="main" style="background-image: url(https://media.durmaplay.com/images/durmaplay/products/background/fifa-20-2200-fut-points-origin-cd-key-wallpaper.jpg);" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
      @yield('main-content')
    </main>
    <!-- /content -->
  </div>
</div>
@endsection