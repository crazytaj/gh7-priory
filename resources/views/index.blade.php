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
    height: 115px;
    width: 120px;
    text-align: center;
}
</style>
</head>

<div class="jumbotron border border-dark">
<h1>{{$title}}</h1> 
<br>
<h4>Pick your preferred language </h4>

<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">English</p> <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1280px-Flag_of_the_United_States.svg.png" class="responsive" alt="American Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Français</p> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAFVBMVEX///8AI5XtKTkAFJJ6gbrzg4ntHTC7o1gDAAAA/klEQVR4nO3QSQ0AIAADsHH6l4yKPUhaCc2oWTs9586aOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHy4ckD5KrN4eD2boIAAAAASUVORK5CYII=" class="responsive" alt="French Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">日本語</p> <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1200px-Flag_of_Japan.svg.png" class="responsive" alt="Japanese Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Español</p> <img src="data:image/png;base64,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" class="responsive" alt="Spanish Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Deutsch</p> <img src="https://www.iamexpat.nl/sites/default/files/styles/article--full/public/flag-netherlands.jpg?itok=37PGr3ck" class="responsive" alt="Dutch Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Русский</p> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEX///8AOabVKx4AMqTTKxXmvQ9FAAAA9UlEQVR4nO3QsQGAMAzAsBT4/2b2eOwqnaAZAAAAAAAAAAAAAAAAAAAAAK69bHPYnJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JS87HNw+aknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk/oBg6TI4mvpq6EAAAAASUVORK5CYII=" class="responsive" alt="Russian Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Italiano</p> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAWlBMVEX///8Bb0rFEjADSTHKEzLVa3fEACcAakNyCx8Ac0x6o5GBDSCnp6cCQyyTlJQCSzJGYFTcbXzPEzJQa18FKh0GMCF7PkZyABk9ChWnp6iLSE+AABpHCRZ3DB+L9+3wAAABLUlEQVR4nO3Q2QGCMAAFsCq1gqII3tf+azrF8ysZIeU6dSnnMeU5vt77lE+ZhpTtruTMrYYs39INq5DoyaatQ2rvxIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06c/PVkGlKiJ3OrIUtfLoeY0zHndu9THj8F9v0iMK6fBwAAAABJRU5ErkJggg==" class="responsive" alt="Italian Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">普通话</p> <img src="data:image/png;base64,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" class="responsive" alt="Chinese Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Português</p> <img src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/3707320/580/387/m1/fpnw/wm0/portugal-.jpg?1512759149&s=4bfeb81ec0be15a20cb3f54bfedc549c" class="responsive" alt="Portuguese Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Polski</p> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACxCAMAAAAh3/JWAAAADFBMVEX////cFDzup6/bAC47xqeuAAAA0UlEQVR4nO3QMQHAMAzAsLTjz3kI4qO3BEEzAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPLms5mM1h5WcICfICXKCnCAnyAlygpwgJ8gJcoKcICfICXKCnCAnyAlygpwgJ8gJcoKcICfICXKCnCAnyAlygpwgJ8gJcoKcICfICXKCnCAnyAlygpwgJ8gJcoKcICfICXKCnCAnyAlygpwgJ8gJcoKcICfICXKCnCAnyAlygpwgJ8gJcoKcICfICXKCnCAnyAlygpwgJ8gJcoKcICf8zMtmEUHJBe8AAAAASUVORK5CYII=" class="responsive" alt="Polish Flag"></a>
<a class="btn btn-outline-dark custom m-4 p-3" href="" role="button"><p class="lead">Filipino</p> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/383px-Flag_of_the_Philippines.svg.png" class="responsive" alt="Flag of the Philippines"></a>

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
