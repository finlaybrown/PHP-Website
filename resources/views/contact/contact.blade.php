@extends('layouts.app')
@section('content')
    <header class="py-5 bg-image-full"
            style="Height:200px; background-image: url('http://www.planwallpaper.com/static/images/518169-backgrounds.jpg');">
        <div class="col-md-3"></div>
        <div class="col-md-9 change-me"><h1>Contact Us</h1>
        </div>
    </header>

    <div class="container">
        <div class="col-md-5">
            <div class="form-area">
                <form action="{{route('submit_form')}}" role="form" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                               required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message"
                                  maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft"
                                                    class="help-block ">You have reached the limit</p></span>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form
                    </button>
                </form>
            </div>
        </div>
    </div>

    <br>
@endsection