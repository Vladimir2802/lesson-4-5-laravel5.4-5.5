<?php

namespace App\Http\Controllers;

use App\Post;
use App\Themes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post, $string)
    {
        dd($post);
    }

    public function theme()
    {
        $theme = Themes::find(1);

        dd($theme->posts);
    }

    public function post(){
        $post = Post::find(1);

        dd($post->theme);
    }
}
