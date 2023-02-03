<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get users
        $users = user::all();

        //render view with users
        return view('users.index', compact('users'));
    }
}
