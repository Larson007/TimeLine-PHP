<?php

namespace App\Controllers;


use DateTime;
use App\Models\Tags;
use Gumlet\ImageResize;
use App\Models\Timelines;

class TimelinesController extends Controller
{

    /**
     * It creates a new instance of the Timelines class, calls the all() method on it, and then passes the result to the view.
     */
    public function index()
    {
        $timeline = new Timelines($this->getDB());
        $timelines = $timeline->all();
        return $this->view('timelines.index', compact('timelines'));
    }

    /**
     * It returns the view of each timelines.
     */
    public function slider(int $id)
    {
        $timeline = new Timelines($this->getDB());
        $timeline = $timeline->findById($id);
        return $this->view('timelines.slider', compact('timeline'));
    }

    /**
     * It returns the view of the create a timeline.
     */
    public function create()
    {
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('timelines.create', compact('tags'));
    }

    /**
     * Send the request to create a timeline & rezise the file image
     */
    public function createTimeline()
    {
        $imgName = trim(str_replace(" ", "", $_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgFile = $imgName . "_" . $imgDate . ".webp";
        $_POST['thumbnail'] = $imgFile;
        $_POST['thumbnail_alt'] = "Vignette de la timeline " . $_POST['title'];
        $_POST['user_id'] = 1;
        $timeline = new Timelines($this->getDB());
        $tags = array_pop($_POST);
        $result = $timeline->create($_POST, $tags);
        if ($result) {
            // Image Resize and move tu upload folder 
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->save("./assets/images/timelines/" . $imgFile);
            return header('Location: /timelines/');
        }
    }
}
