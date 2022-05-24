<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return inertia('Posts/Index', compact('posts'));
    }
}
