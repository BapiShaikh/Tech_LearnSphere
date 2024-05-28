<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/signup.css') }}">



    <style>
      /* Style the search bar (you can customize this as needed) */
      .search-bar {
          display: none;
      }
  </style>
</head>
<body>

  <header>

    <a href="{{url('home')}}"><img src="{{url('frontend/images/image.jpg')}}" alt="Your Logo" class="logo"></a>

</header>


<section class="registration-background-image">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0 signup_register">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://images.unsplash.com/photo-1639548538099-6f7f9aec3b92?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Sample photo" class="img-fluid" id="animated-img"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                <div class="card signup-card">
                    <p> Welcome to Tech_LearnSphere family</p>
                 </div>
            </div>
            <div class="col-xl-6 registration">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    @if(isset($editInfo))
                    <form method="post" action="{{url('/update')}}" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                     <input type="hidden" name="hid" value={{$editInfo->user_id}}>
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="fname" value={{$editInfo->fname}}>
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lname" value={{$editInfo->lname}}>
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="number" id="form3Example1m1" class="form-control form-control-lg" name="phone" value={{$editInfo->phone}}>
                      <label class="form-label" for="form3Example1m1">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="number" id="form3Example1n1" class="form-control form-control-lg" name="pincode" value={{$editInfo->pincode}}>
                      <label class="form-label" for="form3Example1n1">Pincode</label>
                    </div>
                  </div>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="number" id="form3Example8" class="form-control form-control-lg" name="age" value={{$editInfo->age}}>
                  <label class="form-label" for="form3Example8">Age</label>
                </div>



                <div class="form-row">
                    <div class="form-group">
                    <label for="city">City :</label>
                    <div class="form-select">
                    <select name="city" id="city">
                        <option value="">Choose</option>
                        <option value="kolkata" {{ $editInfo->city == 'kolkata' ? 'selected' : '' }}>Kolkata</option>
                        <option value="mumbai" {{ $editInfo->city == 'mumbai' ? 'selected' : '' }}>Mumbai</option>
                        <option value="bangalore" {{ $editInfo->city == 'bangalore' ? 'selected' : '' }}>Bangalore</option>
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="qualification">Qualification :</label>
                    <div class="form-select">
                    <select name="qualification" id="qualification">
                    <option value="">Choose</option>
                    <option value="BCA" {{ $editInfo->qualification == 'BCA' ? 'selected' : '' }}>BCA</option>
                    <option value="MCA" {{ $editInfo->qualification == 'MCA' ? 'selected' : '' }}>MCA</option>
                    <option value="BTECH" {{ $editInfo->qualification == 'BTECH' ? 'selected' : '' }}>BTECH</option>
                    <option value="MTECH" {{ $editInfo->qualification == 'MTECH' ? 'selected' : '' }}>MTECH</option>
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    </div>
                    </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="date" id="form3Example9" class="form-control form-control-lg" name="date" value={{$editInfo->date}}>
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form3Example90" class="form-control form-control-lg" name="email" value={{$editInfo->email}}>
                  <label class="form-label" for="form3Example90">Email ID</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" name="address" value={{$editInfo->address}}>
                  <label class="form-label" for="form3Example99">Address</label>
                </div>


                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="file" id="form3Example97" class="form-control form-control-lg" name="image"/><img src="{{$editInfo->image}}" height="100px" width="100px">
                  <label class="form-label" for="form3Example97">Choose Image</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button  type="reset"  class="btn btn-danger btn-lg button_reset">Reset all</button>
                  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg ms-2 button_submit">Update form</button>
                </div>

              </div>
            </form>
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- Remove the container if you want to extend the Footer to full width. -->
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
        <!-- Footer -->
      </div>
    <!-- End of .container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js" integrity="sha512-R9X6QeQwXC7yVCCTA6qLRATaKJ1kzV6sDRGMqDx/GvT6k1IapFl7R6GEl7yeZDTvE7zzTssUKC3Z9PtYNvT3Dw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    // Get search form and search icon elements
    var searchForm = document.getElementById('searchForm');
  var searchIcon = document.getElementById('searchIcon');

  // Add click event listener to the search icon
  searchIcon.addEventListener('click', function() {
      // Toggle visibility of search form
      if (searchForm.style.display === 'none') {
          searchForm.style.display = 'block';
      } else {
          searchForm.style.display = 'none';
      }
  });
</script>

</body>
</html>
