@extends('mainlayout')
@section("pagename"," $post->title")
@section("content")

	<div class="row">
		<div class="col-md-8">
			<h2> {{$post->title}} </h2>
			<div class="lead">
				{{$post->body}}
			</div>
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
					<div class="col-md-6">
						{!! Html::linkRoute('post.edit','Edit',[$post->id],['class'=>'btn btn-primary btn-block'])!!}	
					</div>

					<div class="col-md-6 ">
						{!! Form::open( ['route'=>['post.destroy',$post->id],'method'=>'DELETE']) !!}	
			
						{!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
						
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection