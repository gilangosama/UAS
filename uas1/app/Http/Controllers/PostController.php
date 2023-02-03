<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function crud(){
        $users = user::all()    ;
        return view('crud', compact('users'));
    }
}
