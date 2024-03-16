<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {
            $user_type = Auth()->user()->user_type;
            if ($user_type == 'user')
            {
                return redirect()->route('pendaftaran.create');
            }
            else if ($user_type == 'admin')
            {
                return redirect()->route('users.index');
            }
            else
            {
                redirect()->back();
            }
        }
    }
}
