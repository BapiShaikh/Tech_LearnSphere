<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/css/contact.css') }}">



    <style>
      /* Style the search bar (you can customize this as needed) */
      .search-bar {
          display: none;
      }
      .cir{
        border-radius:50%;
        border: 1px solid;
        margin-right: 10px;
      }
      .cir-text{

        margin-right: 5px;
      }
      .guest {
        display: flex;
        justify-content: flex-end;
    }

    .right-corner {
        display: flex;
    }

    .right-corner > * {
        margin-left: 10px;
    }
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1020;
        background-color: white;

      }
      .con{
        width:35%;
        height:90vh;
      }
  </style>


  </head>
<body>
    <div class="container-fluid sticky-navbar">
        <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
  <div class="icon-logo">

  <img src="{{url('frontend/images/image.jpg')}}" height="80" ></a>

</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('about')}}">About</a>
    </li>
    <li class="nav-item dropdown">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResources" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Resources
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownResources">
              <a class="dropdown-item" href="{{url('course')}}">Course</a>
              <a class="dropdown-item" href="{{url('article')}}">Article</a>
              <a class="dropdown-item" href="{{url('signup')}}">SignUp</a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-submenu">
                <a class="dropdown-item " href="#" id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Features
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownFeatures">
                  <a class="dropdown-item" id="guideExplorationBtn" href="{{url('guide')}}">Guided Exploration</a>
                  <a class="dropdown-item" href="{{url('interactive')}}">Interactive Modules</a>
                  <a class="dropdown-item" href="{{url('real')}}">Real-World Connections</a>
                  <!-- Add more features as needed -->
                </div>
              </div>
            </div>
          </div>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li> -->
  </ul>

<form class="form-inline my-2 my-lg-0">

    @if(session()->has('name'))
    <div class="cir-text">
      {{session()->get('name')}}
  </div>
      <img src="{{session()->get('image')}}" alt="" height="50" width="50" class="cir">
      <a href="{{url('logout')}}" class="btn btn-danger my-2 my-sm-0" id="logout" type="submit">Logout</a>
      @else
      <div class="guest">
          <div class="right-corner">
      <p class="cir-text">GuestUser</p>
      <a href="{{url('login')}}" class="btn btn-primary my-2 my-sm-0" id="login" type="submit">Login</a>
      </div>
  </div>

    @endif

</form>

</div>
</nav>
</div>
<div class="modal-header">
    <marquee direction="left"
    onmouseover=this.stop()
    onmouseout=this.start()
    scrollamount="10">
    <header>

      <h1 class="title-text"><em>Enrich Your Mind: Education at Your Fingertips</em></h1>

    </header>
  </marquee>
  </div>
  <div class="map-concept">
<div class="container-fluid bg-image mapping">
  <!-- Content for about -->
  <div class="map-icon text-white">
    <p class="map-icon-text">We are here to meet your demand and teach the most beneficial way for you.</p>
  </div>


  <div class="container_1 con">

    <h2 class="modal-title label-text">Contact Us</h2>
    <form method="post" action="{{url('/contactus')}}">
        @csrf
        <div class="form-group">
            <label for="name" class="label-text">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
        </div>
        <div class="form-group">
            <label for="age" class="label-text">Age</label>
            <input type="number" name="age" id="age" placeholder="Enter age" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone" class="label-text">Phone</label>
            <input type="tel" name="phone" id="phone" placeholder="Enter phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="label-text">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" class="form-control">
        </div>
        <div class="form-group">
            <label for=""><b>How can we help you?</b></label>
            <input type="text" name="help" placeholder="Tell us few words about you" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
<div class="map-container">
<div class="image-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2784818951727!2d88.43160429999999!3d22.568685499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275ad93c8289b%3A0xc099131033eb5917!2sSDF%20Building%2C%20GP%20Block%2C%20Sector%20V%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal%20700091!5e0!3m2!1sen!2sin!4v1715700133508!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>





<!-- footer -->
<div class="container-fluid">

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #b8acac">
        <div class="container p-4">
          <section class="">
            <div class="row">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Tech_LearnSphere</h6>
                <p>
                  "Empowering Minds" suggests that the academy aims to equip students with the knowledge, skills, and confidence to navigate the complexities of the world.</p>
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                  <a href="{{url('course')}}" class="text-white">HTML</a>
                </p>
                <p>
                  <a href="{{url('course')}}" class="text-white">CSS</a>
                </p>
                <p>
                  <a href="{{url('course')}}" class="text-white">JavsScript</a>
                </p>
                <p>
                  <a href="{{url('course')}}" class="text-white">PHP</a>
                </p>
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
                <p>
                  <a href="{{url('contact')}}" class="text-white">Contact Us</a>
                </p>
                <p>
                  <a href="{{url('about')}}" class="text-white">About</a>
                </p>
                <p>
                  <a href="{{url('article')}}" class="text-white">Article</a>
                </p>
                <p>
                  <a href="{{url('guide')}}" class="text-white">Features</a>
                </p>
              </div>

              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="bi bi-house-door mr-3"></i> Kolkata, 700091, West Bengal</p>
                <p><i class="bi bi-envelope mr-3"></i> abc@gmail.com</p>
                <p><i class="bi bi-phone mr-3"></i> +91 9330550637</p>
                <p><i class="bi bi-phone mr-3"></i> +91 7586943171</p>
              </div>
            </div>
          </section>

          <hr class="my-3">

          <section class="p-3">
            <div class="row d-flex align-items-center">
              <div class="col-md-7 col-lg-8 text-center text-md-start">
                <div class="p-3">

                  <p class="text-white">© 2024 Copyright: Tech_LearnSphere</p>
                </div>
              </div>
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <a href="https://www.facebook.com/" target='_blank' class="btn btn-outline-primary btn-floating m-1"  style="background-color: #1877F2; color: white;" role="button">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="http://www.linkedin.com/in/bapi-shaikh-023a221b7" target='_blank' class="btn btn-outline-info btn-floating m-1"  style="background-color: #0077B5; color: white;" role="button">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://www.google.com/" target='_blank' class="btn btn-outline-danger btn-floating m-1" style="background: linear-gradient(45deg, #4285F4, #EA4335, #FBBC05, #34A853); color: white;" role="button">
                  <i class="bi bi-google"></i>
                </a>
                <a href="https://www.instagram.com/" target='_blank' class="btn btn-outline-success btn-floating m-1" style="background: linear-gradient(45deg, #FFD600, #FF6C00, #DD2A7B, #8134AF, #515BD4); color: white;"role="button">
                  <i class="bi bi-instagram"></i>
                </a>
              </div>
            </div>
          </section>
        </div>
      </footer>

    <!-- Footer -->
  </div>
  <!-- End of .container -->


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
