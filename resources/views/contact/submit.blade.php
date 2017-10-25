@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="heading-1">Thank you for your feedback</h1>
        <h3 class="small">We appreciate it</h3>
    </div>
    @php
        var_dump($_POST);
    @endphp
@endsection