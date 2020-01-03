<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;
use App\Http\Requests\EditPost;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('posts.index',[
            //テンプレート内の変数postsにパラメータを渡している
            'posts' => $posts,
        ]);
    }

    public function show($id) {
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }

    public function showCreateForm() {
        return view('posts.create');
    }

    public function create(CreatePost $request) {
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        Auth::user()->posts()->save($post);

        $posts = Post::all();

        return redirect()->route('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function showEditform($id) {
        return view('posts.edit', ['post' => Post::findOrFail($id)]);
    }

    public function edit($id, EditPost $request) {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        //$posts = Post::all();

        return redirect()->route('posts.index');
    }
}
