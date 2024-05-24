<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide Exploration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/interactive.css')}}">
    <style>
        body {
            padding-top: 50px;
            background-color: rgb(246, 203, 166);
        }
        .card {
            margin-bottom: 20px;
        }
    </style>

</head>
<body>
    <header>

        <a href="{{url('home')}}"><img src="{{url('frontend/images/image.jpg')}}" alt="Your Logo" class="logo"></a>

    </header>
    <div class="container">
        <h1 class="text-center header-guide">Interactive Modules</h1>
        <p class="text-center guide-text">Discover dynamic learning experiences with our interactive modules! From engaging simulations to interactive quizzes, our modules make learning fun and effective. Dive in and explore a world of interactive content designed to enhance understanding and retention. Start your interactive learning journey today!</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('frontend/images/guide/php.jpg')}}" class="card-img-top" alt="Guide 1">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">
                             Welcome to our PHP Interactive Modules! Dive into an engaging learning experience with our interactive PHP modules. Practice coding in real-time with hands-on exercises and interactive tutorials. From beginner to advanced levels, our modules cater to learners of all skill levels. Explore PHP fundamentals, object-oriented programming, web development, and more.
                        <details>
                            <summary>Read More</summary>
                            Get instant feedback, track your progress, and unlock achievements as you master PHP. Whether you're a student, developer, or enthusiast, our interactive PHP modules are designed to make learning enjoyable and rewarding. Start coding with confidence and elevate your PHP skills today!</p></details>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('frontend/images/guide/js.webp')}}" class="card-img-top" alt="Guide 2">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">Welcome to our JavaScript Interactive Modules! Immerse yourself in the world of JavaScript with our interactive modules designed to make learning dynamic and engaging.Explore a wide range of topics including basic syntax, DOM manipulation.
                            <details>
                            <summary>Read More</summary>
                            Event handling, and advanced concepts like asynchronous programming and frameworks. Our interactive exercises and coding challenges provide hands-on practice to reinforce your understanding and build confidence in your JavaScript skills.Whether you're a beginner or an experienced developer, our interactive modules offer a fun and effective way to learn JavaScript. Start your journey towards mastering JavaScript today and unlock endless possibilities in web development!</p></details>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('frontend/images/guide/react.png')}}" class="card-img-top" alt="Guide 3">
                    <div class="card-body">
                        <h5 class="card-title">React</h5>
                        <p class="card-text">Welcome to our React Interactive Modules! Step into the world of modern web development with our interactive React modules. From the basics of JSX and components to advanced topics like state management and hooks, our modules cover everything you need to become a proficient React developer. Dive into interactive coding exercises, build real-world projects, and collaborate with fellow learners in our vibrant community.
                            <details>
                                <summary>Read More</summary>
                                With instant feedback and personalized progress tracking, mastering React has never been more enjoyable. Whether you're a beginner or looking to level up your skills, our interactive modules provide a hands-on approach to learning React. Start building dynamic web applications today!</p></details>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
