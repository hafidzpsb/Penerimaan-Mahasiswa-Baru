<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users_index', compact('users'));
    }

    public function create()
    {
        return view('admin.users_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);
  
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type === 'on' ? 'admin' : 'user',
        ]);
    
        return redirect(route('users.index'));
    }

    public function edit(User $user)
    {
        if (Auth()->user()->id == $user->id) {
            return redirect(route('users.index'));
        }
        return view('admin.users_edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:' . User::class],
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type === 'on' ? 'admin' : 'user',
        ]);
        return redirect(route('users.index'));
    }

    public function destroy(User $user)
    {
        if (Auth()->user()->id == $user->id) {
            return redirect(route('users.index'));
        }
        $user->delete();
        return back();
    }
}
