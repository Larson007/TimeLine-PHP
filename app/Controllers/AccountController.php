<?php

namespace App\Controllers;

use App\Models\User;

class AccountController extends Controller
{


    public function index()
    {
        $user = new User($this->getDB());
        $user = $user->all();

        
        return $this->view('blog.index', compact('posts'));
    }

}
