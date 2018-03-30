@extends('mainlayout')
@section('pagename',"all Posts")
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
			
		</div>
		<div class="col-md-2">
			{!! Html::linkRoute('post.create','New Post',[],['class'=>'btn btn-primary btn-block'])!!}
		</div>
	</div>
	<div class="row col-md-12">
		<table class="table">
				<thead>
					<th>Id</th>
					<th>Title</th>
					<th>body</th>
					<th>created at</th>
					<th>last update</th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{$post->id}}</td>
							<td>{!! Html::linkRoute('post.show',$post->title,[$post->id])!!}</td>
							<td>{{substr($post->body,0,50)}} {{ strlen($post->body) > 50 ? "...":""}}</td>
							<td>{{$post->created_at}}</td>
							<td>{{$post->updated_at}}</td>
							<td>
								{!! Html::linkRoute('post.show','View',[$post->id],["class"=>'btn btn-default btn-sm'])!!}
								{!! Html::linkRoute('post.edit','Edit',[$post->id],["class"=>'btn btn-default btn-sm'])!!}
								{!! Form::open( ['route'=>['post.destroy',$post->id],'method'=>'DELETE']) !!}	
			
								{!! Form::submit('Delete',['class'=>'btn btn-default btn-sm']) !!}
						
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	</div>
@endsection