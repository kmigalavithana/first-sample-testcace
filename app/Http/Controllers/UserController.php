<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        return response()->json([ 'user_name' => 'kavindu',
            'email' => 'kavindugmail.com',
            'user_role' => 'admin',
            ]);


    }
}
