<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    // READ
    public function index()
    {
        $blogs = Blog::with('user')->paginate(20);
        return view('dashboard.blog', compact('blogs'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.blog_create');
    }

    // STORE
    public function store(BlogRequest $request)
    {
        $data = $request->all();
        $data['slug'] = \Str::slug(request('title'));
        if (Blog::where('slug', $data['slug']) != null) {
            $data['slug'] .= rand(1,10);
        }
        $request->user()->blogs()->create($data);
        return redirect('/blogs')->with('msg', 'data added successfully');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit(Blog $blog)
    {
        return view('dashboard_edit.blog_edit', compact('blog'));
    }

    // UPDATE
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();
        $blog = Blog::findOrFail($id);
        $data['slug'] = \Str::slug(request('title'));
        if (Blog::where('slug', $data['slug']) != null) {
            $data['slug'] .= rand(1,10);
        }
        $blog->update($data);
        return redirect('/blogs')->with('msg', 'data update successfully');
    }

    // DELETE
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('/blogs')->with('msg', 'data delete successfully');
    }
}
