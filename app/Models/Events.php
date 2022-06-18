<?php

namespace App\Models;

use App\Models\Model;

class Events extends Model
{
    protected $table = 'events';

    /**
     * This function returns all the events associated with a timeline.
     * 
     * @param id The id of the timeline you want to get the events for.
     * 
     * @return array of objects.
     */
    public function getTimeline($id): array
    {
        return $this->query(
            "SELECT * FROM events 
            WHERE timeline_id = :id",
            [":id" => $id]
        );
    }
}
