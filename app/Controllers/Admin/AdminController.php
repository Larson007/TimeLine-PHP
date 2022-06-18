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

    //* DASHBOARD
    //***************************************************** */
    /**
     * It checks if the user is an admin, then it gets all the timelines and tags from the database and
     * returns the view with the timelines and tags.
     * 
     * @return The view is being returned.
     */
    public function index()
    {
        $this->isAdmin();
        $timelines = (new Timelines($this->getDB()))->all();
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('admin.dashboard', compact('timelines', 'tags'));
    }

    //* TIMELINES
    //***************************************************** */

    /**
     * It gets all the timelines, tags and users from the database and then returns the admin.timelines
     * view with the timelines, tags and users data.
     * 
     * @return The view is being returned.
     */
    public function timelines()
    {
        $this->isAdmin();
        $timelines = (new Timelines($this->getDB()))->all();
        $tags = (new Tags($this->getDB()))->all();
        $users = (new User($this->getDB()))->all();
        return $this->view('admin.timelines', compact('timelines', 'tags', 'users'));
    }


    /**
     * Send data to create Timeline as Admin
     */
    public function createTimeline()
    {
        $this->isAdmin();
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('timelines.create', compact('tags'));
    }

    /**
     * Send data into the database to create a Timeline
     */
    public function postTimeline()
    {
        $this->isAdmin();
        if ($_FILES['thumbnail_file']['error'] === 0) {
            $imgName = trim(str_replace(" ", "", $_POST['title']));
            $imgDate = (new DateTime())->getTimestamp();
            // $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
            $imgFile = $imgName . "_" . $imgDate . ".webp";
            $_POST['thumbnail'] = $imgFile;
            $_POST['thumbnail_alt'] = "Vignette de la timeline " . $_POST['title'];
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            $_POST['thumbnail'] = null;
            $_POST['thumbnail_alt'] = 'Pas de visuel disponible';
        }
        $_POST['user_id'] = $_SESSION['id'];
        $timeline = new Timelines($this->getDB());
        $tags = array_pop($_POST);
        $result = $timeline->create($_POST, $tags);
        if ($result === true && $_FILES['thumbnail_file']['error'] === 0) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(400);
            $image->save("./assets/images/timelines/" . $imgFile);
            return header('Location: /admin/timelines');
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            return header('Location: /admin/timelines');
        } else {
            echo "error";
        }
    }

    /**
     * Calls the destroy method on the Timelines class to delete a timeline by his id
     */
    public function destroyTimeline(int $id)
    {
        $this->isAdmin();
        $timeline = new Timelines($this->getDB());
        $result = $timeline->destroy($id);
        if ($result) {
            return header('Location: /admin/timelines');
        }
    }



    /**
     * Find a timeline by his id to edit it
     */
    public function editTimeline(int $id)
    {
        $this->isAdmin();
        $timeline = (new Timelines($this->getDB()))->findById($id);
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('timelines.edit', compact('timeline', 'tags'));
    }

    /**
     * Send edited data into the database to update a Timeline
     */
    public function updateTimeline(int $id)
    {
        $this->isAdmin();
        if ($_FILES['thumbnail_file']['error'] === 0) {
            $imgName = trim(str_replace(" ", "", $_POST['title']));
            $imgDate = (new DateTime())->getTimestamp();
            $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
            $imgFile = $imgName . "_" . $imgDate . ".webp";

            $_POST['thumbnail'] = $imgFile;
            $_POST['thumbnail_alt'] = "Vignette de la timeline " . $_POST['title'];
        } else if ($_FILES['thumbnail_file']['error'] !== 1) {
            $_POST['thumbnail'] = $_POST['thumbnail'];
            $_POST['thumbnail_alt'] = $_POST['thumbnail_alt'];
        }
        $timeline = new Timelines($this->getDB());
        $tags = array_pop($_POST);
        $result = $timeline->update($id, $_POST, $tags);
        if ($result === true && $_FILES['thumbnail_file']['error'] === 0) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            // $image->resizeToWidth(400);
            $image->save("./assets/images/timelines/" . $imgFile);
            return header('Location: /admin/timelines');
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            return header('Location: /admin/timelines');
        } else {
            echo "error";
        }
    }

    //* TAGS
    //***************************************************** */


    /**
     * It checks if the user is an admin, then it gets all the tags from the database and returns the view.
     */
    public function tags()
    {
        $this->isAdmin();
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('admin.tags', compact('tags'));
    }

    /**
     * Send data to create tag as Admin
     */
    public function createTags()
    {
        return $this->view('tags.create');
    }

    /**
     * Send data into the database to create a tag
     */
    public function postTags()
    {
        $this->isAdmin();
        if ($_FILES['thumbnail_file']['error'] === 0) {
            $imgName = trim(str_replace(" ", "", $_POST['name'], $test));
            $imgDate = (new DateTime())->getTimestamp();
            $imgFile = $imgName . "_" . $imgDate . ".webp";
            $_POST['thumbnail'] = $imgFile;
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            $_POST['thumbnail'] = null;
        }
        $tags = new Tags($this->getDB());
        $result = $tags->create($_POST);
        if ($result === true && $_FILES['thumbnail_file']['error'] === 0) {
            // Image Resize and move tu upload folder 
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(400);
            $image->save("./assets/images/tags/" . $imgFile);
            return header('Location: /admin/tags');
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            return header('Location: /admin/tags');
        } else {
            echo "erreur";
        }
    }

    /**
     * Calls the destroy method on the Tags class to delete a tag by his id
     */
    public function destroyTags(int $id)
    {
        $this->isAdmin();
        $tags = new Tags($this->getDB());
        $result = $tags->destroy($id);
        if ($result) {
            return header('Location: /admin/tags');
        }
    }

    /**
     * Find a tag by his id to edit it
     */
    public function editTag(int $id)
    {
        $this->isAdmin();
        $tags = (new Tags($this->getDB()))->findById($id);
        return $this->view('tags.edit', compact('tags'));
    }

    /**
     * Send edited data into the database to update a tag
     */
    public function updateTag(int $id)
    {
        $this->isAdmin();
        if ($_FILES['thumbnail_file']['error'] === 0) {
            $imgName = trim(str_replace(" ", "", $_POST['name']));
            $imgDate = (new DateTime())->getTimestamp();
            // $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
            $imgFile = $imgName . "_" . $imgDate . ".webp";
            $_POST['thumbnail'] = $imgFile;
        } else if ($_FILES['thumbnail_file']['error'] !== 1) {
            $_POST['thumbnail'] = $_POST['thumbnail'];
        }

        $tags = new Tags($this->getDB());

        $result = $tags->update($id, $_POST);

        if ($result === true && $_FILES['thumbnail_file']['error'] === 0) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(400);
            $image->save("./assets/images/tags/" . $imgFile);

            return header('Location: /admin/tags');
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            return header('Location: /admin/tags');
        } else {
            echo "error";
        }
    }

    //* Events
    //***************************************************** */

    /**
     * Create event for a timeline definied by his id
     */
    public function createEvent($id)
    {
        $this->isAdmin();
        $timeline = (new Timelines($this->getDB()))->findById((int)$id);
        $events = (new Events($this->getDB()))->getTimeline($id);
        return $this->view('events.create', compact('timeline', 'events',));
    }

    /**
     * Send data to create Event as Admin
     */
    public function addEvent()
    {
        $this->isAdmin();
        // Get timeline id to redirect on it when submited
        $timelineId = $_GET['url'];
        $timelineId = trim($timelineId, 'events/create/');
        if ($_FILES['thumbnail_file']['error'] === 0) {
            $imgName = trim(str_replace(" ", "", $_POST['title']));
            $imgDate = (new DateTime())->getTimestamp();
            $imgFile = $imgName . "_" . $imgDate . ".webp";
            $_POST['thumbnail'] = $imgFile;
            $_POST['thumbnail_alt'] = "Vignette de la timeline " . $_POST['title'];
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            $_POST['thumbnail'] = 'placeholder.webp';
            $_POST['thumbnail_alt'] = 'Pas de visuel disponible';
        }
        if (empty($_POST['day'])) {
            $_POST['day'] = null;
        }
        if (empty($_POST['month'])) {
            $_POST['month'] = null;
        }
        $event = new Events($this->getDB());
        $result = $event->create($_POST);
        if ($result === true && $_FILES['thumbnail_file']['error'] === 0) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(800);
            $image->save("./assets/images/events/" . $imgFile);
            return header('Location: /events/create/' . $timelineId);
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            return header('Location: /events/create/' . $timelineId);
        } else {
            echo "error";
        }
    }

    /**
     * Find an event by his id to edit it
     */
    public function editEvent($id)
    {
        $this->isAdmin();
        $event = (new Events($this->getDB()))->findById($id);
        return $this->view('events.edit', compact('event'));
    }

    /**
     * Send edited data into the database to update an event
     */
    public function updateEvent($id)
    {
        $this->isAdmin();
        if ($_FILES['thumbnail_file']['error'] === 0) {
            $imgName = trim(str_replace(" ", "", $_POST['title']));
            $imgDate = (new DateTime())->getTimestamp();
            $imgFile = $imgName . "_" . $imgDate . ".webp";
            $_POST['thumbnail'] = $imgFile;
            $_POST['thumbnail_alt'] = "Vignette de la timeline " . $_POST['title'];
        } else if ($_FILES['thumbnail_file']['error'] !== 1) {
            $_POST['thumbnail'] = $_POST['thumbnail'];
            $_POST['thumbnail_alt'] = $_POST['thumbnail_alt'];
        }
        $event = new Events($this->getDB());
        $result = $event->update($id, $_POST);
        if ($result === true && $_FILES['thumbnail_file']['error'] === 0) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(800);
            $image->save("./assets/images/events/" . $imgFile);
            return header('Location: /events/create/' . $_POST['timeline_id']);
        } else if ($_FILES['thumbnail_file']['error'] === 4) {
            return header('Location: /events/create/' . $_POST['timeline_id']);
        } else {
            echo "error";
        }
    }

        /**
     * Calls the destroy method on the Events class to delete an event by his id
     */
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
