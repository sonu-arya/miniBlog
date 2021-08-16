
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">mini<span>BLOG</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
            @guest
              <li class="active"><a href="{{ url('/') }}">Home</a></li>
             
              <li><a href="{{ url('/blog') }}">Blog</a></li>
              <li><a href="{{ url('register') }}">Register</a></li>
              <li><a href="{{ url('login') }}">Login</a></li>
              @else
              <li><a href="{{ url('/dashboard') }}">Post</a></li>
              <li><a href="{{ url('/logout') }}"> logout  </a></li>
               
          @endif
    
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->