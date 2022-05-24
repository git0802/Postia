<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostResource::collection(Post::latest()->get());

        return inertia('Posts/Index', compact('posts'));
    }

    public function create()
    {
        return inertia('Posts/Create');
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('posts.index')
            ->with('message', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        return inertia('Posts/Edit', compact('post'));
    }

    public function update(Post $post, StorePostRequest $request)
    {
        $post->update($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
            ->with('message', 'Post deleted successfully');
    }
}
