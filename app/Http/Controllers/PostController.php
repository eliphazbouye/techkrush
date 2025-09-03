<?php

namespace App\Http\Controllers;

use App\Enums\PostStatus;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::all()
            ->where('status', PostStatus::Published)
            ->values();

        return view('posts.index', compact('posts'));
    }
}
