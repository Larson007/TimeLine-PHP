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
            [$this->id]
        );
    }

    public function getEvents()
    {
        return $this->query(
            "SELECT * FROM events 

            WHERE events.timeline_id = ?",
            [$this->id]
        );
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
            [$this->user_id]
        );
    }

    public function getDateStart()
    {
        if ($this->date_start_bc === 1) {
            return <<<HTML
            <p class="box-date">$this->date_start<span>av. J.-C.</span></p>
HTML;
        } else {
            return <<<HTML
            <p class="box-date">$this->date_start</p>
HTML;
        }

        return $this->date_start;
    }

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

    public function update(int $id, array $data, ?array $relation = null)
    {
        // Suppression des anciens tags
        parent::update($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM timeline_tag WHERE timeline_id = ?");
        $result = $stmt->execute([$id]);

        // Update des nouveaux tags
        foreach ($relation as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT timeline_tag (timeline_id, tag_id) VALUES (?, ?)");
            $stmt->execute([$id, $tagId]);
        }

        if ($result) {
            return true;
        }
    }
}
