<?php
namespace App\Controllers\Admin;

use DateTime;
use App\Models\Tags;
use Gumlet\ImageResize;
use App\Models\Timelines;
use App\Controllers\Controller;

class AdminController extends Controller {

    public function index()
    {
        $this->isAdmin();

        $timelines = (new Timelines($this->getDB()))->all();
        $tags = (new Tags($this->getDB()))->all();

        return $this->view('admin.dashboard', compact('timelines', 'tags'));
    }
    
    public function createTimeline()
    {
        $this->isAdmin();
        
        $tags = (new Tags($this->getDB()))->all();
        
        return $this->view('timelines.create', compact('tags'));
    }

    public function postTimeline()
    {
        $imgName = trim(str_replace(" ", "", $_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName."_".$imgDate.$imgExtention;

        $_POST['thumbnail'] = $imgFile;
        $_POST['thumbnail_alt'] = "Vignette de la timeline " . $_POST['title'];
        $_POST['user_id'] = 1;



        $timeline = new Timelines($this->getDB());
        $tags = array_pop($_POST);
        $result = $timeline->create($_POST, $tags);

        if ($result) {
            // Image Resize and move tu upload folder 
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(400);
            $image->save("./assets/images/timelines/" . $imgFile);
            return header('Location: /timelines/');
        }
    }

    public function destroyTimeline(int $id)
    {
        $this->isAdmin();

        $timeline = new Timelines($this->getDB());

        $result = $timeline->destroy($id);

        if ($result) {
            return header('Location: /admin/dashboard');
        }
    }

    public function createTags()
    {
        return $this->view('tags.create');
    }

    public function postTags()
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

    
    public function destroyTags(int $id)
    {
        $this->isAdmin();

        $tags = new Tags($this->getDB());

        $result = $tags->destroy($id);

        if ($result) {
            return header('Location: /admin/dashboard');
        }
    }
}