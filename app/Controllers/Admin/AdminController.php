<?php
namespace App\Controllers\Admin;

use App\Models\Tags;
use App\Models\Timelines;
use App\Controllers\Controller;

class AdminController extends Controller {

    public function index()
    {
        $this->isAdmin();

        $timelines = (new Timelines($this->getDB()))->all();

        return $this->view('admin.dashboard', compact('timelines'));
    }
    
    public function create()
    {
        $this->isAdmin();
        
        $tags = (new Tags($this->getDB()))->all();
        
        return $this->view('admin.post.form', compact('tags'));
    }
}