<?php

namespace App\Controllers;

use App\Models\User;

class AccountController extends Controller
{


/**
 * It gets a user from the database and passes it to the view.
 * 
 * @param id The id of the user to be displayed
 * 
 * @return The view is being returned.
 */
    public function index($id)
    {
        $user = new User($this->getDB());
        $user = $user->findById($id);

        return $this->view('account.index', compact('user'));
    }

}
