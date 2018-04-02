@extends('mainlayout')
@section('pagename',' welcome')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p class="lead">hi ana mostafa</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="post">
                        <h1 class="postTitle">{{$post->title}}</h1>
                        <p>
                            {{substr($post->body,0,150)}}{{strlen($post->body) > 50 ? '...':''}}
                            
                        </p>
                        {!! Html::linkRoute('post.show','read more',[$post->slug],['class' => 'btn btn-primary'])!!}
                    </div>
                @endforeach
                

                
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1> sideBar</h1>
                
            </div>
        </div>
@endsection