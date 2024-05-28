<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/about.css') }}">



    <style>
      /* Style the search bar (you can customize this as needed) */
      .message{
        text-align: center;
        font-size:45px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
        margin-top: 200px;
        border:1px solid;
        width:40%;
        border-radius: 10px;
        background-color: lightgrey;
        color:darkgreen;
        box-shadow: 5px 10px 8px #888888;

      }
      .message1{
        font-size:30px;
        margin-top: 20px;
        color: blue;
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
        justify-content: flex-end; /* Align the container to the right */
    }

    .right-corner {
        display: flex; /* Use flexbox to position elements side by side */
    }

    .right-corner > * {
        margin-left: 10px; /* Add some spacing between the elements */
    }
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1020; /* Ensure it stays on top of other elements */
        background-color: white;

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


<!-- Search icon -->

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

<div class="container message">
    Thank you for contacting us!
    <p class="message1">We will be in touch with you shortly.</p>
</div>
</body>
</html>
