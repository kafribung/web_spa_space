<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 1)->get();
        return view('dashboard.admin', compact('users'));
    }

    public function edit(User $user)
    {
        return view('dashboard_edit.admin_edit', compact('user'));
    }

    public function update(AdminRequest $request, $id)
    {
        $data = $request->all();
        User::findOrFail($id)->update($data);
        return redirect()->back()->with('msg', 'Data Admin Berhasil diedit');
    }
}
