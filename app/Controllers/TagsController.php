<?php

namespace App\Controllers;

use DateTime;
use App\Models\Tags;
use Gumlet\ImageResize;
use App\Models\Timelines;
use App\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * It creates a new instance of the Tags class, calls the all() method on it, and then passes the result to the view.
     */
    public function index()
    {
        $tag = new Tags($this->getDB());
        $tags = $tag->all();
        return $this->view('tags.index', compact('tags'));
    }

    /**
     * It returns the view of each tags.
     */
    public function show(int $id)
    {
        $tag = new Tags($this->getDB());
        $tag = $tag->findById($id);
        $timelines = new Timelines($this->getDB());
        $timelines = $timelines->all();
        return $this->view('tags.show', compact('tag', 'timelines'));
    }

    /**
     * It returns the view of the create a tag.
     */
    public function create()
    {
        return $this->view('tags.create');
    }


    /**
     * Send the request to create a tag & rezise the file image
     */
    public function createTags()
    {
        $imgName = trim(str_replace(" ", "", $_POST['name'], $test));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName . "_" . $imgDate . $imgExtention;
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
