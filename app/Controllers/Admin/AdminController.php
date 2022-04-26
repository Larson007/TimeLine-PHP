<?php

namespace App\Controllers\Admin;

use DateTime;
use App\Models\Tags;
use App\Models\User;
use App\Models\Events;
use Gumlet\ImageResize;
use App\Models\Timelines;
use App\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        $this->isAdmin();

        $timelines = (new Timelines($this->getDB()))->all();
        $tags = (new Tags($this->getDB()))->all();

        return $this->view('admin.dashboard', compact('timelines', 'tags'));
    }

    //* TIMELINES
    //***************************************************** */

    public function timelines()
    {
        $this->isAdmin();

        $timelines = (new Timelines($this->getDB()))->all();
        $users = (new User($this->getDB()))->all();

        return $this->view('admin.timelines', compact('timelines', 'users'));
    }


    public function createTimeline()
    {
        $this->isAdmin();

        $tags = (new Tags($this->getDB()))->all();

        return $this->view('timelines.create', compact('tags'));
    }

    public function postTimeline()
    {
        $this->isAdmin();

        $imgName = trim(str_replace(" ", "", $_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName . "_" . $imgDate . $imgExtention;

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
            return header('Location: /admin/timelines/');
        }
    }

    public function destroyTimeline(int $id)
    {
        $this->isAdmin();

        $timeline = new Timelines($this->getDB());

        $result = $timeline->destroy($id);

        if ($result) {
            return header('Location: /admin/timelines');
        }
    }



    public function editTimeline(int $id)
    {
        $this->isAdmin();

        $timeline = (new Timelines($this->getDB()))->findById($id);
        $tags = (new Tags($this->getDB()))->all();

        return $this->view('timelines.edit', compact('timeline', 'tags'));
    }


    public function updateTimeline(int $id)
    {
        $this->isAdmin();

        $timeline = new Timelines($this->getDB());

        $tags = array_pop($_POST);

        $result = $timeline->update($id, $_POST, $tags);

        if ($result) {
            return header('Location: /admin/timelines');
        }
    }

    //* TAGS
    //***************************************************** */


    public function tags()
    {
        $this->isAdmin();

        $tags = (new Tags($this->getDB()))->all();

        return $this->view('admin.tags', compact('tags'));
    }


    public function createTags()
    {
        return $this->view('tags.create');
    }


    public function postTags()
    {
        $this->isAdmin();

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

            return header('Location: /admin/tags');
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
            return header('Location: /admin/tags');
        }
    }


    public function editTag(int $id)
    {
        $this->isAdmin();

        $tags = (new Tags($this->getDB()))->findById($id);
        return $this->view('tags.edit', compact('tags'));
    }

    public function updateTag(int $id)
    {
        $this->isAdmin();

        $tags = new Tags($this->getDB());

        $result = $tags->update($id, $_POST);

        if ($result) {
            return header('Location: /admin/tags');
        }
    }

    //* Events
    //***************************************************** */

    public function createEvent($id)
    {
        $this->isAdmin();

        $timeline = (new Timelines($this->getDB()))->findById((int)$id);
        $events = (new Events($this->getDB()))->getTimeline($id);

        return $this->view('events.create', compact('timeline', 'events',));
    }

    public function addEvent()
    {
        $this->isAdmin();

        $imgName = trim(str_replace(" ", "",$_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName."_".$imgDate.$imgExtention;
        $_POST['thumbnail'] = $imgFile;
        $_POST['thumbnail_alt'] = "Image de l'event " . $_POST['title'];
        $event = new Events($this->getDB());

        $result = $event->create($_POST);

        if ($result) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(800);
            $image->save("./assets/images/events/" . $imgFile);

            return header('Location: /admin/timelines/');
        } else {
            echo "erreur";
        }

    }

    public function editEvent($id)
    {
        $this->isAdmin();

        $event = (new Events($this->getDB()))->findById($id);

        return $this->view('events.edit', compact('event'));
    
    }

    public function updateEvent($id)
    {
        $this->isAdmin();

        $imgName = trim(str_replace(" ", "",$_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName."_".$imgDate.$imgExtention;

        $_POST['thumbnail'] = $imgFile;

        $event = new Events($this->getDB());

        $result = $event->update($id,$_POST);

        if ($result) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(800);
            $image->save("./assets/images/events/" . $imgFile);

            return header('Location: /admin/timelines');
        } else {
            echo "erreur";
        }
    }

    public function destroyEvent(int $id)
    {
        $this->isAdmin();

        $event = new Events($this->getDB());

        $result = $event->destroy($id);

        if ($result) {
            return header('Location: /admin/timelines');
        }
    }
}
