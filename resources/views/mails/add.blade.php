@extends('layouts.app')

@section('content')
<h1>Ask a Question</h1>
{!! Form::open(['action' => 'MailController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'organization@example.com'])}}
    </div>
    <div class="form-group">
        {{Form::label('catigory', 'Select Catigory')}}
        {{Form::select('topic', ['credit' => 'Credit Score', 'visa' => 'Visa or Greencards', 'housing' => 'Housing Solutions', 'jobs' => 'Employment', 'integration' => 'Community Integration'])}}
    </div>
    <div class="form-group">
        {{Form::label('link', 'Link to website')}}
        {{Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'http://organization.com'])}}
    </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection