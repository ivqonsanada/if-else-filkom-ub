<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('title', 'tgl', 'link', 'img')->orderBy('id', 'DESC')->paginate(4);
        return response($posts, 200);
    }

    public function post(Request $request)
    {
        $post = Post::where('id', '=', $request->id)->with('carousels')->firstOrFail();
        return response($post, 200);
    }
}
