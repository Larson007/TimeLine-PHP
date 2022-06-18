<?php
namespace App\Controllers;

use App\Controllers\Controller;

class HomepageController extends Controller {


/**
 * It returns the view of the homepage.
 */
    public function index() {
        return $this->view('homepage.index');
    }
}