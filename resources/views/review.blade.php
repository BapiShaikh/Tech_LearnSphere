<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/review.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/course.css') }}">
</head>
<body>
    <header>
        <a href="{{url('home')}}"><img src="{{url('frontend/images/image.jpg')}}" alt="Your Logo" class="logo"></a>
    </header>
    @if(isset($commentinfo) && $commentinfo->count() > 0)
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($commentinfo as $index => $all)

                <div class="carousel-item @if($index == 0) active @endif">
                    <div class="carousel-caption">
                        <p>{{ $all->comment }}</p>
                        @if(session()->has('name'))


                        <img src="{{$all->image}}" class="com-img"  alt="Image" width="50">
                        <div id="image-caption" >{{$all->name}}</div>
                        @endif
                    </div>
                </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
