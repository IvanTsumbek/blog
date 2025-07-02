<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
