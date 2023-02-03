<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get users
        $users = User::latest()->paginate(5);

        //render view with users
        return view('users.index', compact('users'));
    }
}