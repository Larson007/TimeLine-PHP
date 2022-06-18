<?php
namespace App\Controllers;

use Database\DBConnection;

abstract class Controller {

    protected $db;


/**
 * If the session has not started, start it.
 * 
 * @param DBConnection db This is the database connection object.
 */
    public function __construct(DBConnection $db)
    {
        if (session_start() === PHP_SESSION_NONE) {
            session_start();
        } 
        $this->db = $db;
    }


/**
 * It takes a path to a view, and a list of parameters, and then it includes the view, and then it
 * includes the layout
 * 
 * @param string path The path to the view file.
 * @param array params an array of parameters to pass to the view.
 */
    protected function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        $content = ob_get_clean();

        require VIEWS . 'layout.php';
    }

/**
 * This function returns the database connection.
 */
    protected function getDB()
    {
        return $this->db;
    }

/**
 * If the user is logged in, return true, otherwise redirect to the login page
 * 
 * @return The function isAdmin() is being returned.
 */
    protected function isAdmin()
    {
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1) {
            return true;
        } else {
            return header('Location: /login');
        }
    }
}