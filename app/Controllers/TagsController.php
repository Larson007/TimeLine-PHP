<?php

namespace App\Controllers;

use App\Models\Tags;
use App\Controllers\Controller;
use App\Models\Timelines;

class TagsController extends Controller
{

    public function index()
    {
        $tag = new Tags($this->getDB());
        $tags = $tag->all();

        return $this->view('tags.index', compact('tags'));
    }


    public function show(int $id)
    {
        $tag = new Tags($this->getDB());
        $tag = $tag->findById($id);
        $timelines = new Timelines($this->getDB());
        $timelines = $timelines->all();



        return $this->view('tags.show', compact('tag', 'timelines'));
    }
}
