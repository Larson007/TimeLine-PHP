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

    public function getCreator(): string
    {

        return $this->query(
            "SELECT username FROM users 
            INNER JOIN timelines 
            WHERE users.id = ?",
            [$this->user_id]);
    }

    // public function getDateStart(): string
    // {
    //     return (new DateTime($this->date_start))->format('d/m/Y');
    // }

    // public function getDateEnd(): string
    // {
    //     return (new DateTime($this->date_end))->format('d/m/Y');
    // }


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

    public function addEvents(): string
    {
        return <<<HTML
            <a href="/events/create/$this->id" class="btn btn-add"><span>Add Events</span></a>
HTML;
    }

    public function create(array $data, ?array $relation = null)
    {
        parent::create($data);

        $id = $this->db->getPDO()->lastInsertId();

        foreach ($relation as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT timeline_tag (timeline_id, tag_id) VALUES (?, ?)");
            $stmt->execute([$id, $tagId]);
        }

        return true;
    }
}
