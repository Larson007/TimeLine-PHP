<?php

namespace App\Controllers;


use App\Models\Tags;
use App\Models\Timelines;

class TimelinesController extends Controller
{
    public function index()
    {
        $timeline = new Timelines($this->getDB());
        $timelines = $timeline->all();

        
        return $this->view('timelines.index', compact('timelines'));
    }


    public function show(int $id)
    {   
        $timeline = new Timelines($this->getDB());
        $timeline = $timeline->findById($id);



        return $this->view('timelines.show', compact('timeline'));
    }


    public function create()
    {

        $tags = (new Tags($this->getDB()))->all();

        return $this->view('timelines.create', compact('tags'));
    }

    public function createTimeline()
    {
        $_POST['thumbnail_alt'] = "Vignette de la timeline ". $_POST['title'];
        $_POST['user_id'] = 1;

        $timeline = new Timelines($this->getDB());
        $tags = array_pop($_POST);
        $result = $timeline->create($_POST, $tags);

        if ($result) {
            return header('Location: /timelines');
        }
    }
    // public function tag(int $id)
    // {
    //     $tag = (new Tags($this->getDB()))->findById($id);
    //     return $this->view('timeline.tag', compact('tag'));
    // }
}
