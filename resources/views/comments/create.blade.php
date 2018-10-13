@if(!Auth::guest())
<h1>Respond</h1>
{!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {!! Form::hidden('post_id', $post->id) !!}
    </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@else 
<h1 style="color:orangered">Log in to respond</h1>
@endif