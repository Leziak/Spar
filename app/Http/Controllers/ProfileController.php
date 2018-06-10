<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{

    public function index($id)
    {

        $owner = Auth::user();
        $user = User::find($id);
        return view('profile', [
            'id'=>$user->id,
            'name'=>$user->name,
            'email'=>$user->email,
            'height'=>$user->height,
            'weight'=>$user->weight,
            'age'=>$user->age,
            'sex'=>$user->sex,
            'about'=>$user->about,
            'contact'=>$user->contact,
            'avatar'=>$user->avatar,
            'nationality'=>$user->nationality,
            'level'=>$user->level,
            'looking_for_trainer'=>$user->looking_for_trainer,
            'owner' => $owner]);

    }

}
