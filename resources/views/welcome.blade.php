@extends('layouts.app')

@section('content')
    <div class="welcome container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5 welcomelogo">
                <img src="/images/100-Men-Logo-White.png" alt="#">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="text-center">
                    <h2 class=lead>Do <strong>You</strong> Give a Damn?</h2>
                    <p>Returning Member?</p>
                    <p><a href="/login" class="btn btn-primary">Login</a></p>
                    <p>New Member?</p>
                    <p><a href="/register" class="btn btn-primary">Sign Up</a></p>
                    
                </div>
            </div>
        </div>        
    </div>
    

@endsection
