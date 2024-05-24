<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real World Connections</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/real.css')}}">
    <style>
        body {
            padding-top: 50px;
            background-color: rgb(243, 214, 143);
        }
        .header-text {

            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 55px;
            font-weight:700 ;
            color:rgb(124, 124, 241);
        }
        .text-real{
            font-size: 25px;
            font-weight: 400;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style: italic;
            color: rgb(204, 55, 38);
        }

        .card {
            margin-bottom: 20px;
            transition: transform 0.2s;
            box-shadow: 5px 10px 8px #888888;
}

        .card:hover {
            transform: scale(1.05);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>

        <a href="{{url('home')}}"><img src="{{url('frontend/images/image.jpg')}}" alt="Your Logo" class="logo"></a>

    </header>
    <div class="header-text">
        <h1>Real World Connections</h1>

        <p class="text-real">Explore practical insights at our Real-World Connection Hub. Discover how theory meets practice with our collection of real-world case studies, expert interviews, and hands-on projects. Start exploring today!</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('frontend/images/guide/real.jpg')}}" class="card-img-top" alt="Connection 1">
                    <div class="card-body">
                        <h5 class="card-title">Problem-Solving Forums</h5>
                        <p class="card-text">Welcome to our Problem-Solving Forums, where real-world challenges meet innovative solutions! Engage with a community of learners and professionals to tackle practical problems across various fields. Each forum presents a unique challenge, encouraging you to apply your knowledge and collaborate with peers to find creative solutions. Share insights, brainstorm ideas, and receive feedback from industry experts.

                            <details>
                                <summary>Read More</summary>
                                These forums are designed to bridge the gap between theoretical learning and real-world application, enhancing your critical thinking and problem-solving skills. Join our forums today and start making meaningful connections while contributing to impactful solutions!</p></details>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('frontend/images/guide/case.jpg')}}" class="card-img-top" alt="Connection 2">
                    <div class="card-body">
                        <h5 class="card-title">Case Studies</h5>
                        <p class="card-text">Discover the power of real-world case studies on our e-learning platform! Each case study delves into actual industry challenges, providing a comprehensive look at how professionals navigate and solve complex problems. Analyze detailed scenarios, from initial issues to innovative solutions, and learn the strategies and thought processes behind successful outcomes.
                        <details>
                            <summary>Read More</summary>
                            These case studies bridge the gap between theory and practice, offering valuable, practical knowledge that enhances your learning experience. Start exploring our real-world case studies today and elevate your problem-solving skills!</details>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('frontend/images/guide/project.jpg')}}" class="card-img-top" alt="Connection 3">
                    <div class="card-body">
                        <h5 class="card-title">Project-Based Learning</h5>
                        <p class="card-text">Immerse yourself in Project-Based Learning (PBL) to forge strong real-world connections. Our platform offers dynamic, hands-on projects that mimic real-life scenarios and industry challenges. By working on these projects, you'll apply theoretical knowledge to practical problems, enhancing your critical thinking and problem-solving skills. Collaborate with peers, receive feedback from industry professionals'.
                        <details>
                            <summary>Read More</summary>
                            PBL not only solidifies your understanding but also prepares you for the complexities of the professional world. Dive into our project-based learning modules today and transform your educational experience into a journey of real-world discovery and achievement!
                        </p>
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
