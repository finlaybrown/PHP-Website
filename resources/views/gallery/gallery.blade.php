@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="heading-1 text-center">Gallery</h1>
        <br>
        <div class="">

        <?php
        $dir = "images/gallery/";
        foreach (glob("images/gallery/*.*") as $filename) {
            echo "<div class='thumb1' style='background: url($filename) 50% 50% no-repeat;'></div>";
        }
        ?>
        </div>
    </div>
@endsection
