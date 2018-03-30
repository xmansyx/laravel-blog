@extends('mainlayout')
@section("pagename"," $post->title")
@section("content")

	<div class="row">
		{!! Form::model($post,['route' => ['post.update',$post->id],"method"=>"PUT"]) !!}

		<div class="col-md-8">
			{{ Form::label('title',"Title:") }}
			{{Form::text("title",null,["class"=>"form-control"])}} 
			{{ Form::label('body',"body:") }}
			{{Form::textarea("body",null,["class"=>"form-control"])}}
			
		</div>
		<div class="col-md-3 col-md-offset-1">
			<div class="well">
				<dl class="dl-horizontel">
					<dt>Created at</dt>
					<dl>{{date("D dS\, M Y g\:i A",strtotime($post->created_at))}}</dl>
				</dl>

				<dl class="dl-horizontel">
					<dt>updated at</dt>
					<dl>{{date("D dS\, M Y g\:i A",strtotime($post->updated_at))}}</dl>
				</dl>

				<div class="row">
					<div class="col-md-12">
						{{ Form::submit("save changes",['class'=>'btn btn-primary btn-block '])}}
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						{!! Html::linkRoute('post.show','Cancel',[$post->id],["class"=>'btn btn-danger btn-block'])!!}
					</div>
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>
@endsection