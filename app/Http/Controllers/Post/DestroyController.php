<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class DestroyController extends Controller
{
    public function __invoke(Post $id)
    {
        Post::find($id->id)->delete();
        return redirect()->route('post.index');
    }

}
