<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class UserController extends Controller
{
    public function show(User $user) {
        $user = User::find($user->id);
        $posts = $user->posts()->orderBy('updated_at', 'desc')->paginate(5);
        return view('users.show', ['user' => $user, 'posts' => $posts]);
    }
}
