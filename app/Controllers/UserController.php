<?php

namespace App\Controllers;

use App\Models\User;
use App\Validation\Validator;
use App\Controllers\Controller;

class UserController extends Controller
{

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }

        $user = (new User($this->getDB()))->getByUsername($_POST['username']);



        if (password_verify($_POST['password'], $user->password)) {

            $_SESSION['username'] = (string) $user->username;
            $_SESSION['email'] = (string) $user->email;
            $_SESSION['password'] = (string) $user->password;
            $_SESSION['auth'] = (int) $user->admin;
            if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1) {
                return header('Location: /admin/dashboard?success=true');
            }
            return header('Location: /?success=true');
        } else {

            return header('Location: /login');
        }
    }

    public function register()
    {
        return $this->view('auth.register');
    }

    public function registerPost()
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user = new User($this->getDB());
        $result = $user->create($_POST);

        if ($result) {
            return header('Location: /login');
        } else {
            return header('Location: /register');
        }


    }

    public function logout()
    {

        session_destroy();
        return header('Location: /');
    }
}
