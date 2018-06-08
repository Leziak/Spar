<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('profile', [
            'username'=>$user->name,
            'email'=>$user->email,
            'password'=>$user->password]);

    }

}
