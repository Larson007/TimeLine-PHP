<?php

namespace App\Controllers;

use App\Models\User;
use App\Validation\Validator;
use App\Controllers\Controller;

class UserController extends Controller
{
    /**
     * It returns the view of the login page.
     */
    public function login()
    {
        return $this->view('auth.login');
    }

    /**
     * It checks if the user exists, if it does, it checks if the password is correct, if it is, it sets
     * the session variables and redirects to the dashboard.
     * 
     * @return The return value of the function is the return value of the last statement executed in the
     * function.
     */
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
        $user = new User($this->getDB());
        $userExist = $user->checkUsername($_POST['username']);
        if ($userExist) {
            $user = $user->getByUsername($_POST['username']);
            if (password_verify($_POST['password'], $user->password)) {
                $_SESSION['id'] = (int) $user->id;
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
        } else {
            return header('Location: /login?message=true');
        }
    }

    /**
     * It returns the view of the register page.
     */
    public function register()
    {
        return $this->view('auth.register');
    }


/**
 * It takes the data from the form, validates it, and if it's valid, it creates a new user in the
 * database.
 * 
 * @return The return value of the header() function.
 */
    public function registerPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'valide'],
            'password' => ['required', 'min:4']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /register');
            exit;
        }
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user = new User($this->getDB());
        $result = $user->create($_POST);

        if ($result) {
            return header('Location: /login?register=true');
        } else {
            return header('Location: /register');
        }
    }

/**
 * It destroys the session and redirects the user to the homepage.
 */
    public function logout()
    {
        session_destroy();
        return header('Location: /');
    }
}
