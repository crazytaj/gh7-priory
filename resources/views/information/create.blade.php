@extends('layouts.app')

@section('content')
<h1>Add Entry</h1>
{!! Form::open(['action' => 'EntrysController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
                {{Form::label('stub', 'Url Stub')}}
                {{Form::text('stub', '', ['class' => 'form-control', 'placeholder' => 'Url Stub (sidenav linking)'])}}
            </div>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection