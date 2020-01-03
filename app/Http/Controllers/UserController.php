<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class UserController extends Controller
{
    public function show(int $id) {
        $user = User::find($id);
        $posts = $user->posts()->orderBy('updated_at', 'desc')->paginate(5);
        return view('users.show', ['user' => User::findOrFail($id), 'posts' => $posts]);
    }
}
