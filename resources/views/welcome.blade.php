@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="text-center">
                <h2>Welcome to 100 Men YYC </h2>
                <p>New Members please fill sign up</p>
                <p><a href="/register" class="btn btn-primary">New Member</a></p>
                <p>For Retruning Members please login</p>
                <p><a href="/login" class="btn btn-primary">Returning Member</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
