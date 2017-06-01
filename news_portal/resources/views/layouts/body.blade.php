<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>


<body>
{{--________________________navbar______________________________--}}

@include('layouts.navbar')
{{--________________Bootstrap JS Carousel_________________________________--}}
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/images/test11.jpg" height="250" width="100%" alt="Los Angeles">
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
            </div>
        </div>

        <div class="item">
            <img src="/images/test2.jpg" height="200" width="100%"  alt="Chicago">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>
        </div>

        <div class="item">
            <img src="/images/test3.jpg" height="200" width="100%"  alt="New York">
        </div>

        <div class="item">
            <img src="/images/test4.jpg"  height="200" width="100%" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

@yield('content')

@include('layouts.footer')
</body>
</html>
