@foreach($comments as $comment)
    <h1>{{$comment->title}}</h1>
    <small>Written by {{$comment->post->user->name}}</small>
    <p>{!! $comment->body !!}</p>
@endforeach