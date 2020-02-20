<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    
    public function index(){
    	// $posts = Post::all();
    	// $posts = Post::orderBy('title', 'desc') ->take(2)->get();
    	// return Post::where('title', 'Post Two')->get();
    	// $posts = DB::select('SELECT * FROM posts');

    	//pagination
    	$posts = Post::orderBy('created_at', 'desc')->paginate(5);
    	return view('posts.index')->with('posts', $posts);
    }

    public function show($id){
    	$post = Post::find($id);
    	// $post = Post::where('title', 'Post Two')->get();
    	return view('posts.show')->with('post',$post);
    }

    public function edit($id){
    	$post = Post::find($id);
    	return view('posts.edit')->with('post',$post);
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(Request $request){
    	$this->validate($request, ['title' => 'required', 'body' => 'required']);

    	$post = new Post;
    	$post->title = $request->input('title');
    	$post->body = $request->input('body');
    	$post->user_id = auth()->user()->id;
    	$post->save();
    	return redirect('./posts');
    }
    public function update(Request $request, $id){
    	$post = Post::find($id);
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();
    	return redirect('posts');
    }

    public function destroy($id){
    	$post = Post::find($id);
    	$post->delete();
    	return redirect('posts');

    }
}

