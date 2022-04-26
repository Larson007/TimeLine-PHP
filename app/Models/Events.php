<?php

namespace App\Models;

use App\Models\Model;

class Events extends Model
{

    protected $table = 'events';


    // public function getEventId()
    // {
    //     return $this->query(
    //         "SELECT * FROM events 
    //     INNER JOIN timelines 
    //     ON timelines.id = events.id 
    //     WHERE events.id = ?",
    //         [$this->id]
    //     );
    // }

    public function getTimeline($id)
    {
        return $this->query(
            "SELECT * FROM events 
            WHERE timeline_id = :id",
            [":id" => $id]
            // ,
            // [$this->timeline_id]

        );
    }

    // public function getTimeline()
    // {
    //     return $this->query(
    //         "SELECT * FROM events 
    //         INNER JOIN timelines
    //         ON timelines.id = events.timeline_id
    //         WHERE timelines.id = ?",
    //         [$this->timeline_id]
    //     );
    // }
}
