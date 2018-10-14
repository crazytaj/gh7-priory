@extends('layouts.app')

@section('content')
@if(!Auth::guest())
<h1>Entries <a href="/entry/create" class="btn btn-primary float-right">Add Entry</a></h1>
@endif
@if(count($posts) > 0)
    @foreach($posts as $post)
    @if(!Auth::guest())
        <h1><a href="/entry/{{$post->id}}/edit" class="btn btn-info float-right">Edit Entry</a></h1>
    @endif
    <br><br>
    <?php //@if($post->cover_image !== 'noimage.jpg')
    //<img style="height:200px" src="/storage/cover_images/{{$post->cover_image}}">
    //@endif
    ?>
    <h1 id={!!$post->urlstub!!}>{{$post->title}}:</h1>
        <div class="jumbotron">
    <p>{!! $post->body !!}</p>
        </div>
    <small>Written on {{$post->created_at}}</small>
    <hr>
            
    @endforeach
@else 
<h3>No Entries</h3>
@endif
@endsection