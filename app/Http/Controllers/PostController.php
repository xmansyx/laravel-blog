<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("Posts.index")->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate data 
        $this->validate($request,[
            'title' => 'required | max:25',
            'slug' => 'required | max:100|unique:posts,slug',
            'post_body' => 'required',

        ]);

        // store the data 
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->post_body;
        $post->save();

        Session::flash('success',"your post is saved successfully");

        return redirect()->route('post.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($postdata)
    {
        if(is_numeric($postdata)){
            $thePost = Post::find($postdata);
        }


        else{
            $thePost = Post::where('slug','=',$postdata)->first();
        }

        return view("Posts.show")->with('post',$thePost);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($postdata)
    {
        if(is_numeric($postdata)){
            $thePost = Post::find($postdata);
        }


        else{
            $thePost = Post::where('slug','=',$postdata)->first();
        }

        return view("Posts.edit")->with('post',$thePost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate data 
        $this->validate($request,[
            'title' => 'required | max:25',
            'body' => 'required',
        ]);

        // store the data 
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        Session::flash('success',"your post is saved successfully");

        return redirect()->route('post.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success',"your post successfully deleted");
        return redirect()->route('post.index');
    }

    public function getIndex(){
        $posts = Post::all();
        return view("Pages.welcome")->withPosts($posts);
    }

}
