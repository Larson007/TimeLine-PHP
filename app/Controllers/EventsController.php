<?php

namespace App\Controllers;

use DateTime;
use Gumlet\ImageResize;
use App\Models\Events;
use App\Models\Timelines;

class EventsController extends Controller
{

    /**
     * It returns the view of to create an Event.
     */
    public function createEvent($idTimeline)
    {
        $this->isAdmin();
        $timeline = (new Timelines($this->getDB()))->findById($idTimeline);
        $events = (new Events($this->getDB()))->all();
        return $this->view('events.create', compact('timeline', 'events',));
    }

    /**
     * Send the request to create an Event & rezise the file image
     */
    public function addEvent()
    {
        $this->isAdmin();
        $imgName = trim(str_replace(" ", "", $_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName . "_" . $imgDate . $imgExtention;
        $_POST['thumbnail'] = $imgFile;
        $event = new Events($this->getDB());
        $result = $event->create($_POST);
        if ($result) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(800);
            $image->save("./assets/images/events/" . $imgFile);
            return header('Location: /events/create');
        } else {
            echo "erreur";
        }
    }


    /**
     * It returns the view of the edit event.
     */
    public function editEvent()
    {
        $this->isAdmin();
        $timelines = (new Timelines($this->getDB()))->all();
        $events = (new Events($this->getDB()))->all();
        $idEvent = str_replace("events/edit/", "",  $_GET['url']);
        $idEvent = intval($idEvent);
        foreach ($timelines as $timeline) {
            return $this->view('events.edit', compact('timeline', 'events', 'event', 'idEvent'));
        }
    }

    /**
     * Send the request to Edit an Event & rezise the file image
     */
    public function updateEvent()
    {
        $this->isAdmin();

        $imgName = trim(str_replace(" ", "", $_POST['title']));
        $imgDate = (new DateTime())->getTimestamp();
        $imgExtention = str_replace("image/", ".", $_FILES['thumbnail_file']['type']);
        $imgFile = $imgName . "_" . $imgDate . $imgExtention;
        $_POST['thumbnail'] = $imgFile;
        $event = new Events($this->getDB());
        $result = $event->create($_POST);
        if ($result) {
            $image = new ImageResize($_FILES['thumbnail_file']['tmp_name']);
            $image->resizeToWidth(800);
            $image->save("./assets/images/events/" . $imgFile);
            return header('Location: /events/create');
        } else {
            echo "erreur";
        }
    }
}
