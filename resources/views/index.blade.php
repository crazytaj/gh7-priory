@extends('layouts.app')

@section('content')
<head>
<style>
.responsive {
    max-height: 70%;
    max-width: 70%;
    height: auto;
    width: auto;
}
.custom {
    width: 100px;
    text-align: center;
}
</style>
</head>

<div class="jumbotron border border-dark">
<h1>{{$title}}</h1> 
<br>
<h4>Pick your preferred language </h4>

<a class="btn btn-outline-dark custom m-5 p-3" href="" role="button"><p class="lead">English</p> <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1280px-Flag_of_the_United_States.svg.png" class="responsive" alt="American Flag"></a>
<br> <br> <br>


@guest
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>&nbsp;<a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
@else 
<p><a class="btn btn-primary btn-lg" href="/dashboard" role="button">Dashboard</a>&nbsp;<a class="btn btn-danger btn-lg" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a></p>
@endif
</div>
@endsection
