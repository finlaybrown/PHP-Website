@extends('layouts.app')
@section('content')

    <header class="py-5 bg-image-full" style="background-image: url('http://www.planwallpaper.com/static/images/518169-backgrounds.jpg');">
        <div class="col-md-3"></div>
        <div class="col-md-2"><h1 class="text-center" style="color: #ffffff; padding-top: 50px">Some Text</h1></div>
        <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
    </header>

    <br>

    <div class="container gap">
        <p class="text-center text-justify medium-font">Lorem iHellos rerum saepe voluptas. Blanditiis commodi culpa dignissimos eligendi eos, est facere, illum necessitatibus nemo odio qui quibusdam rerum soluta tempora temporibus vel veritatis. Architecto consequatur corporis, eaque esse excepturi, facilis harum iure laboriosam maiores nam nostrum obcaecati odit, quibusdam rem repudiandae saepe tempore voluptates? A, alias architecto asperiores dicta dolore explicabo itaque iure maxime mollitia possimus provident quaerat quasi qui quia recusandae vel voluptas! Assumenda consequatur dolore ducimus ipsa ipsam labore modi neque numquam obcaecati sequi? Illum iste odit quas quo tempore!</p>
        <p>Some more text here boi</p>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/slide1.jpg" alt="About Us">
                <div class="carousel-caption large-font">
                    <p>About Us</p>
                </div>
            </div>

            <div class="item">
                <img src="/images/slide2.jpg" alt="Our Work">
                <div class="carousel-caption large-font">
                    <p>Some Of Our Work</p>
                </div>
            </div>

            <div class="item">
                <img src="/images/slide3.jpg" alt="Contact">
                <div class="carousel-caption large-font">
                    <p>Contact Us</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection