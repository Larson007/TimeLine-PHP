<?php

namespace App\Models;

use App\Models\Model;

class Events extends Model
{

    protected $table = 'events';


    public function getEventId()
    {
        return $this->query(
            "SELECT * FROM events 
        INNER JOIN timelines 
        ON timelines.id = events.id 
        WHERE events.id = ?",
            [$this->id]
        );
    }

    public function getTimeline()
    {
        return $this->query(
            "SELECT t.* FROM timelines t 
            INNER JOIN events e
            WHERE t.id = e.timeline_id"
        );
    }
}
