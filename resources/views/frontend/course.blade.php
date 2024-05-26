<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/course.css') }}">
</head>
<body>

    <header>
        <a href="{{url('home')}}"><img src="{{url('frontend/images/image.jpg')}}" alt="Your Logo" class="logo"></a>
    </header>

    <div class="container">
        <div class="card ">
          <img src="{{url('frontend/images/php-programming-language.jpg')}}" class="card-img-top" alt="PHP" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title text-white">PHP</h5>
              <p class="card-text">"Explore the dynamic world of web development with our PHP course. Dive into server-side scripting and unlock the power to create dynamic and interactive web pages.
                <details>
                    <summary class="summary">Read More..</summary>
                    Learn the fundamentals of PHP programming, from variables and control structures to functions and databases. Through practical examples and hands-on exercises, master the art of building dynamic websites and web applications. Whether you're a beginner or seasoned developer, this PHP course equips you with essential skills for web development success."</p></details>
            </div>
            <div class="cta-section">
              <div>$129.00</div>
              @if(session()->has('name'))
              <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

              @else
              <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
              @endif
            </div>
          </div>
        </div>

        <div class="card mt-4">
            <img src="{{url('frontend/images/unnamed.png')}}" class="card-img-top" alt="HTML5" height="200">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold text-white">HTML5</h5>
                <span class="card-text">
                  "Unlock the basics of web development with our HTML course. Learn to structure content, create links, and incorporate images in your web pages.

                  <details>
                    <summary class="summary">Read More..</summary>
                    Dive into the world of HyperText Markup Language and build a solid foundation for crafting visually appealing and well-structured websites. Whether you're a novice or an experienced developer, this course provides the essential skills needed to excel in web design and development.
                  </details>
                </span>
              </div>
              <div class="cta-section">
                <div class="text-white">$129.00</div>
                @if(session()->has('name'))
                <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

                @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
                @endif
              </div>
            </div>
          </div>

        <div class="card mt-4">
          <img src="{{url('frontend/images/sta-je-css.png')}}" class="card-img-top" alt="CSS" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">CSS</h5>
              <p class="card-text">"Immerse yourself in the world of web design with our CSS course. Discover the power of cascading style sheets to transform the look and feel of your web pages. Learn the fundamentals of CSS, from selectors and properties to layouts and animations.
                <details>
                    <summary class="summary">Read More..</summary>
                    Through practical exercises and real-world examples, master the art of styling websites to perfection. Whether you're a novice or seasoned developer, this CSS course equips you with essential skills to create visually stunning and responsive web designs."</details></p>
            </div>
            <div class="cta-section">
              <div>$129.00</div>
              @if(session()->has('name'))
                <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

                @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
                @endif
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <img src="{{url('frontend/images/images (1).jpg')}}" class="card-img-top" alt="JavaScript" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">JavaScript</h5>
              <p class="card-text">"Embark on an exciting journey into web development with our JavaScript course.
                <details>
                    <summary class="summary">Read More..</summary>
                    Delve into the realm of client-side scripting and unleash the potential to create dynamic and interactive web applications. Learn the core concepts of JavaScript programming, from variables and functions to DOM manipulation and event handling. Through hands-on projects and real-world examples, develop the skills needed to breathe life into your web pages. Whether you're a beginner or an experienced coder, this JavaScript course empowers you to build engaging and responsive web experiences."</p></details>
            </div>
            <div class="cta-section">
              <div class="text-white">$129.00</div>
              @if(session()->has('name'))
                <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

                @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
                @endif
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <img src="{{url('frontend/images/best-laravel-based-cms-that-you-should-know-224x171.webp')}}" class="card-img-top" alt="Laravel" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">Laravel</h5>
              <p class="card-text">"Dive into modern web development with our Laravel course. Explore the elegant PHP framework that streamlines the creation of robust, scalable web applications. Learn the ins and outs of Laravel, from its powerful routing and templating system to its built-in authentication and security features. Through hands-on projects and expert guidance, master the art of building high-quality web applications efficiently.
                <details>
                    <summary class="summary">Read More..</summary>
                    Whether you're a beginner or an experienced developer', this Laravel course is your gateway to building professional-grade web applications with ease."</p></details>
            </div>
            <div class="cta-section">
              <div class="text-white">$129.00</div>

                @if(session()->has('name'))
                <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

                @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
                @endif
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <img src="{{url('frontend/images/react_logo.png')}}" class="card-img-top" alt="React" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">React</h5>
              <p class="card-text">This React course covers the fundamentals of React.js, including components, state, props, and lifecycle methods. Participants will learn to build dynamic web applications, manage component states, and handle events.
                <details>
                    <summary class="summary">Read More..</summary>
                    The course includes practical projects and exercises to reinforce concepts. It is suitable for beginners and those with some JavaScript experience, aiming to provide a solid foundation in React development.</p></details>
            </div>
            <div class="cta-section">
              <div class="text-white">$129.00</div>
              @if(session()->has('name'))
                <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

                @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
                @endif
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <img src="{{url('frontend/images/angular.png')}}" class="card-img-top" alt="Angular" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">Angular</h5>
              <p class="card-text">This Angular course offers a comprehensive introduction to Angular, focusing on building dynamic web applications. Key topics include components, modules, services, dependency injection, routing, and data binding.
                <details>
                    <summary class="summary">Read More..</summary>
                    Through hands-on projects and practical exercises, learners will gain proficiency in creating and managing Angular applications. Suitable for beginners and those with some JavaScript experience, the course aims to equip participants with the skills needed for modern web development using Angular.</p></details>
            </div>
            <div class="cta-section">
              <div class="text-white">$129.00</div>
              @if(session()->has('name'))
                <a href="{{ url('/payment') }}" class="btn btn-primary">Buy Now</a>

                @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Buy Now</a>
                @endif
            </div>
          </div>
        </div>

        <div class="card mt-4">
          <img src="{{url('frontend/images/dotnet.jpg')}}" class="card-img-top" alt=".NET" height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">DotNet</h5>
              <p class="card-text">This .NET course provides a thorough introduction to .NET development, covering essential topics such as 'C# programming', ASP.NET Core, MVC architecture, and Entity Framework. Participants will learn to build robust web applications, implement RESTful APIs, and manage databases.
                <details>
                    <summary class="summary">Read More..</summary>
                    The course includes practical projects to reinforce learning. Designed for beginners and those with programming experience, it aims to equip learners with the skills needed for professional .NET development.</p></details>
            </div>
            <div class="cta-section">
              <div class="text-white">$129.00</div>
              <a href="#" class="btn btn-light">Buy Now</a>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
