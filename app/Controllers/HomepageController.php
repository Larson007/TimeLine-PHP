<?php
namespace App\Controllers;

use App\Controllers\Controller;

class HomepageController extends Controller {


    public function index() {


        return $this->view('homepage.index');
    }
}