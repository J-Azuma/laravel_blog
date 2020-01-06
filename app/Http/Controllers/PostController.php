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

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
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

    public function showEditform(User $user, Post $post) {

       if ($post->user_id !== Auth::user()->id) {
            abort(403);
        }
        return view('posts.edit', ['post' => $post]);
    }

    public function edit(User $user, Post $post, EditPost $request) {

        $post = Post::find($post->id);
        if ($post->user_id !== Auth::user()->id) {
            abort(403);
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }


}
