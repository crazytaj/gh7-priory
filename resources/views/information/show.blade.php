@extends('layouts.app')

@section('content')
        <br><br>
    <?php //@if($post->cover_image !== 'noimage.jpg')
    //<img style="height:200px" src="/storage/cover_images/{{$post->cover_image}}">
    //@endif
    ?>
    <h1>{{$post->title}}</h1>
        <div class="jumbotron">
    <p>{!! $post->body !!}</p>
        </div>
    <small>Written on {{$post->created_at}}</small>
    <hr>
@endsection