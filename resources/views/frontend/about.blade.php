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
              <a class="dropdown-item" href="{{url('career')}}">Career</a>
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
      <img src="{{session()->get('image')}}" alt="" width="50" class="cir">
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

  <!-- Content for about -->
  <div class="">
  <section class="bgimage_1 pt-5 pb-5 shadow-sm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="text-uppercase mb-4 about-text">About us</h3>
          <p class="about-para">Welcome to Tech_LearnSphere, your destination for high-quality, accessible online education. We empower learners with expert-led courses across various fields, offering flexibility and affordability. Join our community to advance your skills, achieve your goals, and embrace the future of learning. Start your journey with Tech_LearnSphere today!</p>
        </div>
        <div>
            <h3 class="about-text">Our Mission</h3>
               <p class="about-para"> Our mission is to make education accessible and affordable for everyone, everywhere. We aim to empower learners by providing high-quality courses that can be accessed anytime, anywhere.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
          <div class="card">
            <img src="{{url('frontend/images/about/idea.jpg')}}" class="card-img-top" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center">Ideas</h5>
              <p class="card-text mb-4">Explore innovative ideas to enhance your e-learning experience. Discover interactive content, gamification techniques, and virtual study groups to boost engagement. Learn about the latest educational tools and platforms that make online learning more effective and enjoyable. Stay updated with trends to maximize your digital education journey.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
          <div class="card">
            <img src="{{url('frontend/images/about/teamwork.jpg')}}" class="card-img-top" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center">Team work</h5>
              <p class="card-text mb-4" >Teamwork in e-learning is essential for success. Collaborate with peers through virtual study groups, discussion forums, and group projects. Utilize online tools like video conferencing and shared documents to enhance communication and productivity. Effective teamwork fosters a supportive learning environment and helps achieve common academic goals.</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3 d-flex align-items-stretch">
          <div class="card">
            <img src="{{url('frontend/images/about/learnsome.webp')}}" class="card-img-top" alt="Card Image">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center">Learn Something New</h5>
              <p class="card-text mb-4">E-learning offers endless opportunities to learn something new. Dive into diverse courses, from coding to creative writing, and expand your knowledge at your own pace. Explore interactive modules, video lectures, and real-time feedback to master new skills and stay ahead in your educational journey. Embrace the flexibility and variety of online learning.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


             <!-- Team Start -->
             <div class="container-xxl py-5">
              <div class="container">
                  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                      <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                      <h1 class="mb-5">Expert Instructors</h1>
                  </div>
                  <div class="row g-4">
                      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                          <div class="team-item bg-light">
                              <div class="overflow-hidden">
                                  <img class="img-fluid" src="{{url('frontend/images/bapi_image.jpeg')}}" alt="">
                              </div>
                              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                                  </div>
                              </div>
                              <div class="text-center p-4">
                                  <h5 class="mb-0">Bapi Shaikh</h5>
                                  <small>Developer</small>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                          <div class="team-item bg-light">
                              <div class="overflow-hidden">
                                  <img class="img-fluid" src="{{url('frontend/images/dummy-image.jpg')}}" alt="">
                              </div>
                              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
                              <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                                  </div>
                              </div>
                              <div class="text-center p-4">
                                  <h5 class="mb-0">Instructor Name</h5>
                                  <small>Designation</small>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                          <div class="team-item bg-light">
                              <div class="overflow-hidden">
                                  <img class="img-fluid" src="{{url('frontend/images/souparna1.jpg')}}" alt="">
                              </div>
                              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                      <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                                      <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                      <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                                  </div>
                              </div>
                              <div class="text-center p-4">
                                  <h5 class="mb-0">Souparna Biswas</h5>
                                  <small>Designer</small>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                          <div class="team-item bg-light">
                              <div class="overflow-hidden">
                                  <img class="img-fluid" src="{{url('frontend/images/dummy-image.jpg')}}" alt="">
                              </div>
                              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                                  </div>
                              </div>
                              <div class="text-center p-4">
                                  <h5 class="mb-0">Instructor Name</h5>
                                  <small>Designation</small>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Team End -->




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
              <a href="https://www.facebook.com/" target='_blank' class="btn btn-outline-primary btn-floating m-1" role="button">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="http://www.linkedin.com/in/bapi-shaikh-023a221b7" target='_blank' class="btn btn-outline-info btn-floating m-1" role="button">
                  <i class="bi bi-linkedin"></i>
              </a>
              <a href="https://www.google.com/" target='_blank' class="btn btn-outline-danger btn-floating m-1" role="button">
                <i class="bi bi-google"></i>
              </a>
              <a href="https://www.instagram.com/" target='_blank' class="btn btn-outline-success btn-floating m-1" role="button">
                <i class="bi bi-instagram"></i>
              </a>
            </div>
          </div>
        </section>
      </div>
    </footer>


  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
