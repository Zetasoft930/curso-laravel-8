<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){


        $posts = Post::get();

        return view('admin.posts.index',compact('posts'));
    }


    public function create(){

        return view('admin.posts.create');
    }
     public function store(StoreUpdatePost $request){

       /* $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();*/

         Post::create($request->all());

        return redirect()->route('post.index');
    }
}
