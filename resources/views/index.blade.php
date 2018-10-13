@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$title}}</h1>
<p>This is part of a test project in order for me to learn Laravel</p>
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
