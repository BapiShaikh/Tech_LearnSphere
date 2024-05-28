<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .sticky-navbar {
            position: sticky;
            top: 0;
            z-index: 1020; /* Ensure it stays on top of other elements */

          }
          .s{
            background-color :rgb(174, 177, 177);
          }
        .container {
            margin-top: 50px;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
        }
        .profile-card {
            margin-bottom: 40px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .profile-card:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }
        .profile-image {
            border-radius: 50%;
            margin-bottom: 10px;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .profile-info {
            margin-bottom: 20px;
        }
        .profile-info div {
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }
        .profile-info div label {
            flex: 0 0 120px;
            font-weight: bold;
            color: #555;
        }
        .profile-info div span {
            flex: 1;
            color: #333;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        .btn-action {
            margin: 0 10px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
    </style>
</head>
<body>
    <div class="container-fluid sticky-navbar s">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navi">
          <a class="navbar-brand" href="#">
            <div class="icon-logo">
              <img src="{{url('frontend/images/image.jpg')}}" height="80">
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('contact')}}">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('about')}}">About</a>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownResources" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resources
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownResources">
                    <a class="dropdown-item" href="{{url('course')}}">Course</a>
                    <a class="dropdown-item" href="{{url('article')}}">Article</a>
                    <a class="dropdown-item" href="{{url('review')}}">Review</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-submenu">
                      <a class="dropdown-item" href="#" id="navbarDropdownFeatures" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </ul>
          </div>
        </nav>
      </div>
    <div class="container">
        <div class="profile-header">
            <h1>Student Data</h1>
        </div>

        @if(isset($allInfo))
            @foreach($allInfo->all() as $all)
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="profile-card">
                            <div class="text-center">
                                <img src="{{$all->image}}" alt="Profile Image" class="profile-image">
                            </div>
                            <div class="profile-info">
                                <div>
                                    <label>First Name:</label>
                                    <span>{{$all->fname}}</span>
                                </div>
                                <div>
                                    <label>Last Name:</label>
                                    <span>{{$all->lname}}</span>
                                </div>
                                <div>
                                    <label>Phone:</label>
                                    <span><a href="tel:{{$all->phone}}">{{$all->phone}}</a></span>
                                </div>
                                <div>
                                    <label>Pincode:</label>
                                    <span>{{$all->pincode}}</span>
                                </div>
                                <div>
                                    <label>Age:</label>
                                    <span>{{$all->age}}</span>
                                </div>
                                <div>
                                    <label>Gender:</label>
                                    <span>{{$all->gender}}</span>
                                </div>
                                <div>
                                    <label>City:</label>
                                    <span>{{$all->city}}</span>
                                </div>
                                <div>
                                    <label>Qualification:</label>
                                    <span>{{$all->qualification}}</span>
                                </div>
                                <div>
                                    <label>Date of Birth:</label>
                                    <span>{{$all->date}}</span>
                                </div>
                                <div>
                                    <label>Email:</label>
                                    <span><a href="mailto:{{$all->email}}">{{$all->email}}</a></span>
                                </div>
                                <div>
                                    <label>Address:</label>
                                    <span>{{$all->address}}</span>
                                </div>
                            </div>
                            <div class="button-container">
                                <a href="{{ url('/logout') }}" class="btn btn-danger btn-action">Logout</a>
                                <a href="{{ url('/changepass') }}{{ $all->user_id }}" class="btn btn-warning btn-action">Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
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
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
