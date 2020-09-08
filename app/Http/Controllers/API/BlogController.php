<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // READ
    public function index()
    {
        $blogs = Blog::with('user')->get();
        return BlogResource::collection($blogs);
    }

    //SHOW
    public function show(Blog $blog)
    {
        return BlogResource::make($blog);
    }

}
