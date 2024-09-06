<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        
        $user = User::first();
        // $letra = mb_strtoupper("Olá {$user->name}! ({$user->email})");
        // return $letra;

        return view("admin.users.index", compact('user'));
    }
}
