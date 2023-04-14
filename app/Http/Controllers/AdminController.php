<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Falha;

class AdminController extends Controller
{
    
    public function dashboard()
    {
        $user = Auth::user();
        $numUsuarios = DB::table('users')->count();
        $numPosts = DB::table('posts')->count();
        $numComments = DB::table('comentarios')->count();
        $numFalhas = DB::table('falhas')->count();

        return view('admin.dashboard', compact('user', 'numUsuarios', 'numPosts', 'numComments', 'numFalhas'));
    }

    public function users()
    {
        $user = Auth::user();
        $usuarios = User::all();

        return view('admin.users', compact('user', 'usuarios'));
    }

    public function posts()
    {
        $user = Auth::user();
        $posts = Post::all();

        return view('admin.posts', compact('user','posts',));
        
    }

    public function falhas()
    {
        $user = Auth::user();
        $falhas = Falha::all();

        return view('admin.falhas', compact('user','falhas',));
        
    }

}
