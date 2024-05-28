<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('frontend/css/article.css')}}" rel="stylesheet">
    <script src="{{url('frontend/js/article.js')}}"></script>
</head>
<body>
    <header class="article-bg text-white text-center py-3">
        <h1 class="article-head">Navigating the Digital Classroom</h1>
        <p><em>Student's Guide to Online Courses</em></p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#"></a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <main class="container my-5">
        <section id="introduction" class="mb-5">
            <p class="article-para">Navigating the digital classroom can be challenging. This guide offers students practical tips for thriving in online courses, including time management, effective communication, and utilizing digital tools. Discover strategies to stay motivated, engage with peers, and make the most of your virtual learning experience.</p>
            <h2 class="article-head-1">Introduction</h2>
            <p class="article-para-1">With the rise of digital education, online courses have become a crucial part of the modern learning landscape. While they offer unmatched flexibility and accessibility, navigating the digital classroom can present unique challenges for students. This guide aims to provide practical tips and strategies to help you succeed in your online courses. From effective time management and utilizing digital tools to maintaining motivation and engaging with peers, this article covers everything you need to make the most of your virtual learning experience. Whether you're new to online learning or looking to improve your existing approach, this guide is here to support your journey.</p>
        </section>

        <section id="content" class="mb-5">
            <h2 class="article-head-1">Main Content</h2>
            <div class="row">
                <div class="col-md-8">
                    <p class="article-para-1">Although it might be difficult to navigate the virtual classroom, you can succeed in your online classes if you have the appropriate strategies. Develop a study timetable and follow it to start with efficient time management. Keep yourself organized by using digital tools like note-taking apps, task organizers, and calendars. Activate your learning process by participating in group projects and discussion forums with your teachers and fellow students. Reward yourself when you reach your goals and create specific objectives to help you stay motivated. Make the most of your online learning experience by putting these pointers into practice and navigating the digital classroom with ease.</p>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title relate">Purpose of the Article</h5>
                            <ol>
                                <li>
                                    <ul class="list-unstyled relate-1">Relevance:
                                        <li class="desc">Mention the increasing popularity of online courses and the shift towards digital learning.</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="list-unstyled relate-2">Challenges:
                                        <li class="desc">Briefly touch on common challenges students face in online learning.</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="list-unstyled relate-3">Overview of Content:
                                        <li class="desc">Provide a snapshot of the key topics that will be covered in the article.</li>
                                    </ul>

                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="conclusion" class="mb-5">
            <h2 class="article-head-1">Conclusion</h2>
            <p class="article-para-1">In summary, a combination of good time management, thoughtful use of digital resources, active participation with peers and teachers, and motivation maintenance is needed to effectively navigate the digital classroom. The particular difficulties of online learning may be solved by making a planned study schedule, using productivity applications, taking part in conversations, and setting realistic goals. You will not only adapt to this contemporary learning environment, but you will flourish in it if you embrace the flexibility and accessibility that digital education offers. To maximize your virtual learning experience, keep in mind that your dedication and proactive demeanor are essential.</p>
        </section>

        <section id="comments" class="mb-5">
            <h2>Comments</h2>
            <form method="post" action="{{url('/commentsubmit')}}">
                @csrf



            <div class="form-group">
                <label for="comment">Leave a comment:</label>
                <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary mt-2" type="submit" name="submit">Submit</button>
            </div>

            </form>
            <div id="comment-section"></div>
        </section>
    </main>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Tech_LearnSphere Platform</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
