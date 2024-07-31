<div class="hero_area"> 
  <!-- header section strats -->
  <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Anupam Phool Bhandar & Shoes 
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/about') }}"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/gallery') }}"> Gallery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/contact') }}">Contact us</a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                 <!-- @if (Auth::guest()) -->
                    <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign Up</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a class="dropdown-item" href="">Log In</a>
                        <a class="dropdown-item" href="">Register</a>
                <!-- @else -->
                    <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->full_name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- @if((Auth::user() != '') && Auth::user()->user_type == 'T') -->
                            <a class="dropdown-item" href="">User List</a>
                        <!-- @endif -->
                            <a class="dropdown-item" href="">My Profile</a>
                            <a class="dropdown-item" href="">Manage fruits</a>
                            <a class="dropdown-item" href="">Log Out</a>
                        <!-- @endif -->
                  </div>
                </div>
              </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <a href="{{ url('/login') }}">
                Log in
              </a>
              <a href="">
                <img src="images/cart.png" alt="">
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->