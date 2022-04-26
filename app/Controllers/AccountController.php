<?php

namespace App\Controllers;

use App\Models\User;

class AccountController extends Controller
{


    public function index($id)
    {
        $user = new User($this->getDB());
        $user = $user->findById($id);

        
        return $this->view('account.index', compact('user'));
    }

}
