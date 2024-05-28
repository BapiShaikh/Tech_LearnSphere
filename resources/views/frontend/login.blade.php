<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/css/login.css') }}">


    <title>Form</title>




  </head>
  <body>

    <section class="_form_05">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_form-05-box">
              <div class="row login-div">
                <div class="col-sm-5 _lk_nb">
                  <div class="form-05-box-a">
                    <div class="_form_05_logo">
                      <h2>smart</h2>
                      <p>Login using social media to get quick access</p>
                    </div>
                    <div class="_form_05_socialmedia">
                      <ol>
                        <li class="social-text"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i>Sign With Facebook</a></li>
                        <li class="social-text"><a href="https://x.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i>Sign With Twitter</a></li>
                        <li class="social-text"><a href="https://www.google.com" target="_blank"><i class="fa fa-google-plus"></i> Sign With Google</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="col-sm-7 _nb-pl">
                  <div class="_mn_df">
                    <div class="main-head">
                      <h2 class="text-white">Login to your account</h2>
                    </div>
                    @if(session('message'))
                    <script>alert('{{session('message')}}')</script>
                    @endif
                    <form method="post" action="{{url('/login_user')}}">
                        @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Enter Email || Phone" required="" aria-required="true">
                    </div>

                    <div class="form-group">
                      <div style="position: relative;">
                          <input id="password" type="password" name="password" class="form-control" placeholder="Enter Password" aria-required="true">
                          <span class="password-toggle-icon" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); color:#000">
                              <i class="bi bi-eye-fill"></i>
                          </span>
                      </div>
                  </div>


                    <div class="checkbox form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                          Remember me
                        </label>
                      </div>
                      
                    </div>


                    <div class="form-group">
                      <div>

                        <button type="submit" class="btn btn-md btn-primary btn-block">Login</button>
                      </div>
                    </div>
                  </form>
                    <div style="text-align: center; color: rgb(251, 2, 2); font-weight: 700; font-size: 20px;">OR</div>
                    <div class="form-group">
                      <div class="_btn_04">
                        <a href="{{url('signup')}}">Create Account</a>
                      </div>
                    </div>
                    <a href="{{url('home')}}" class="go-home">Go to Home</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      const passwordField = document.getElementById("password");
      const togglePassword = document.querySelector(".password-toggle-icon i");

      togglePassword.addEventListener("click", function () {
          if (passwordField.type === "password") {
              passwordField.type = "text";
              togglePassword.classList.remove("bi-eye-fill");
              togglePassword.classList.add("bi-eye-slash");
          } else {
              passwordField.type = "password";
              togglePassword.classList.remove("bi-eye-slash");
              togglePassword.classList.add("bi-eye-fill");
          }
      });
  </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
