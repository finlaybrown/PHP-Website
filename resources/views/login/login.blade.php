@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="col-md-5">
            <div class="form-area">
                <form action="{{route('log_in')}}" role="form" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Login</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                               required>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Login</button>
                </form>
            </div>
        </div>


        <div class="col-md-5 offset-2">
            <div class="form-area">
                <form action="" role="form" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Signup</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                               required>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection