<?php

namespace App\Models;

use DateTime;

class Timelines extends Model
{

    protected $table = 'timelines';

    public function getTags()
    {
        return $this->query(
            "SELECT * FROM tags 
            INNER JOIN timeline_tag 
            ON timeline_tag.tag_id = tags.id 
            WHERE timeline_tag.timeline_id = ?",
            [$this->id]);
    }

    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/Y');
    }

    public function getDateStart(): string
    {
        return (new DateTime($this->date_start))->format('d/m/Y');
    }

    public function getDateEnd(): string
    {
        return (new DateTime($this->date_end))->format('d/m/Y');
    }


    public function getExcerpt(): string
    {
        return substr($this->description, 0, 150) . ' ...';
    }

    public function getButton(): string
    {
        return <<<HTML
            <a class="style1" href="/timelines/$this->id" class="btn btn-primary"><span>Timeline</span></a>
HTML;
    }

    
}
