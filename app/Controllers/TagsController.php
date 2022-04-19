<?php

namespace App\Controllers;

use App\Models\Tags;
use Gumlet\ImageResize;
use App\Models\Timelines;
use App\Controllers\Controller;

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
        $imgName = trim($_POST['name']);
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName.$imgExtention;
        
        
        $_POST['thumbnail'] = $imgFile;


        $tags = new Tags($this->getDB());
        $result = $tags->create($_POST);

        if ($result) {
        // Image Resize and move tu upload folder 
        $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
        $image->resizeToWidth(400);
        $image->save("./assets/images/tags/" . $imgFile);
            return header('Location: /tags');
        } else {
            echo "erreur";
        }
    }
}
