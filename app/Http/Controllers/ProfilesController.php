<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfilesController extends Controller
{
    public function index()
    {

        $users = User::all();
        return view('profiles', ['users'=>$users]);
    }
}
