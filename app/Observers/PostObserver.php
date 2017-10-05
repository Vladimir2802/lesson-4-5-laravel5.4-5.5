<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 10/5/17
 * Time: 8:18 PM
 */

namespace App\Observers;


use App\Post;
use Illuminate\Support\Facades\Auth;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->created_by = Auth::user()->id;
    }
}