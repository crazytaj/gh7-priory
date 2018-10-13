@extends('layouts.app')

@section('content')
        <a class="btn btn-info" href="/posts" role="button">Go back</a>
        <br><br>
    <?php //@if($post->cover_image !== 'noimage.jpg')
    //<img style="height:200px" src="/storage/cover_images/{{$post->cover_image}}">
    //@endif
    ?>
    <h1>{{$post->title}}</h1>
        <p>Catigory: {{$post->catigory}}</p>
        <div class="jumbotron">
    <p>{!! $post->body !!}</p>
        </div>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit Question</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 style="color:grey"><br>Responses:</h1>
        </div>
        @if(count($comments) > 0)
    @foreach($comments as $comment)
    <div class="panel-body">
    <h3>{{$comment->title}}</h3>
    <p>{!! $comment->body !!}</p>
    <small>Written by {{$comment->post->user->name}}</small>
    <hr>
</div>
@endforeach
@else 
    <h3 style="color:red">No Responses</h3>
    @endif
    </div>
@include('comments.create')
@endsection