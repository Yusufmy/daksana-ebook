<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">WikBook</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('landing.page')}}">Home</a></li>
          @if(Auth::user())
          <form action="{{route('logout')}}" method="POST">
            @csrf
          <li><button type="submit" class="getstarted scrollto btn decoration-none">Logout</button></li>
          </form>
          @else
          <li><a class="getstarted scrollto" href="{{route('login')}}">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->