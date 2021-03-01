<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller 
{
    function postData(request $req)

    {
        $req->validate([
            'username'=> ['required'],
            'email'=> ['required', 'email'],
            'password'=> ['required', 'confirmed'],
            'password_confirmation'=> ['required'],
        ]);
     
        return $req->input();
    }

}
