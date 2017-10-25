@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="heading-1 text-center">Gallery</h1>
        <br>
        <div class="d-inline">

        <?php
        $dir = "images/gallery/";
        foreach (glob("images/gallery/*.*") as $filename) {
            echo "<span><img width='30%' height='30%' src='$filename' alt='photo'></span>";
        }
        ?>
        </div>
    </div>
@endsection
