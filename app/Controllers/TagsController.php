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

    
    public function create()
    {
        return $this->view('tags.create');
    }

    public function createTags()
    {

        $tags = new Tags($this->getDB());


        $result = $tags->create($_POST);

        if ($result) {
            return header('Location: /tags');
        } else {
            // var_dump($result);
            // die();
            echo "erreur";
        }
    }
}
