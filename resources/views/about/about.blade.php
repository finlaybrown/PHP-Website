@extends('layouts.app')
@section('content')
    <header class="py-5 bg-image-full"
            style="Height:200px; background-image: url('http://www.planwallpaper.com/static/images/518169-backgrounds.jpg');">
        <div class="col-md-3"></div>
        <div class="col-md-9 change-me"><h1>About Our Creative Team</h1>
        </div>
    </header>
    <br>
    <br>
    <div class="container">
        <p class="medium-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur,
            delectus doloremque
            excepturi fuga omnis placeat provident reprehenderit saepe totam. Accusantium alias culpa cum dicta
            dignissimos dolor dolores esse eum eveniet explicabo fugiat id, laborum maxime nemo odio placeat rerum
            voluptas? Ab accusantium ad amet architecto aut blanditiis cum cumque delectus deleniti dicta, dignissimos
            dolor dolorem doloremque doloribus eligendi fugiat impedit, incidunt inventore iusto labore laboriosam
            minima modi nobis nulla omnis pariatur perferendis placeat praesentium quasi quis reiciendis repellat
            repudiandae sapiente sequi tempore ut voluptatum. Ea exercitationem facilis fugiat incidunt minus mollitia
            nihil nisi quae quas quisquam repellendus, sapiente veniam?</p>
    </div>
    <br>
    <br>
    <hr>
    <h2 class="text-center display-1"><u>Our Team</u></h2>
    <hr>
    <div class="container">
        <div class="row">
            <br>
            <div class="our-photos align-content-center">
                <img class="col-md-3 our-photos" src="/images/Us/pam.jpg" alt="Pam">
                <img class="col-md-3 our-photos" src="/images/Us/finlay.jpg" alt="Finlay">
                <img class="col-md-3 our-photos" src="/images/Us/ben.jpg" alt="Ben">
                <img class="col-md-3 our-photos" src="/images/Us/thomas.jpg" alt="Thomas">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <p class="col-3 d-inline text-center">Pam Phoemphoon</p>
            <p class="col-3 d-inline text-center">Finlay Brown</p>
            <p class="col-3 d-inline text-center">Ben Barton</p>
            <p class="col-3 d-inline text-center">Thomas Pickford</p>
        </div>
        <hr class="padding-none">
        <div class="row">
            <p class="col-3 text-center">Our lead designer creating ideas for the site</p>
            <p class="col-3 text-center">The teams website developer programming the website</p>
            <p class="col-3 text-center">No idea what this cucks doing</p>
            <p class="col-3 text-center">Will eventually give finlay the user database information</p>
        </div>
    </div>
@endsection

