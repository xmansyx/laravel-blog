@extends('mainlayout')
@section("pagename","| create post")
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::open(['route' => 'post.store']) !!}

			<h1>Creat new post</h1>
			{{ Form::submit("Post",['class'=>'btn btn-primary btn-lg '])}}
			<hr>
    		{{ Form::label('title',"Title:") }}
    		{{ Form::text('title',null,['placeholder'=>'post title','class'=>'form-control'])}}

    		{{ Form::label('slug',"slug:") }}
    		{{ Form::text('slug',null,['placeholder'=>'slug','class'=>'form-control'])}}

    		{{ Form::label('post_body',"Post Body:") }}
    		{{ Form::textarea('post_body',null,['placeholder'=>'hi','class'=>'form-control'])}}
			<hr>
		{!! Form::close() !!}
	</div>
</div>
@stop