@extends('layouts.app')

@section('content')
<h1>Ask a Question</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('catigory', 'Select Catigory')}}
        {{Form::select('topic', ['credit' => 'Credit Score', 'visa' => 'Visa or Greencards', 'housing' => 'Housing Solutions', 'jobs' => 'Employment', 'integration' => 'Community Integration'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        <p>Add Image:</p>{{Form::file('cover_image')}}
    </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection