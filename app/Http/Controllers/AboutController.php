<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::with('user')->get();
        return view('dashboard.about', compact('abouts'));
    }

    // Store
    public function store(AboutRequest $request)
    {
        if (About::count() >= 1) {
            $errors = [
                'errors' => ['description' => 'Sapi']
            ];
            return response()->withErrors($errors);
        }
        $data = $request->all();
        $request->user()->about()->create($data);
        return redirect('/abouts');
    }

    // EDIT
    public function edit(About $about)
    {
        return view('dashboard_edit.about_edit', compact('about'));
    }

    // UPDATE
    public function update(AboutRequest $request, About $about)
    {
        $data = $request->all();
        $about->update($data);
        return redirect('/abouts');
    }
}
