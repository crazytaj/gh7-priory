@extends('layouts.app')

@section('content')
<h1>Questions <a href="/posts/create" class="btn btn-primary float-right">Ask Question</a></h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
    <h1></h1>
        <div class="card-block card bg-light">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="height:200px" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                        <br>
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Last Updated on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                </div>
            </div>
            
    @endforeach
    {{$posts->links()}}
@else 
<h3>No Questions</h3>
@endif
@endsection