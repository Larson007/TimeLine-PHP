<?php

namespace App\Models;

use DateTime;
use IntlDateFormatter;

class Timelines extends Model
{

    protected $table = 'timelines';



    /**
     * It returns an array of tags associated with the timeline
     * 
     * @return array An array of tags.
     */
    public function getTags(): array
    {
        return $this->query(
            "SELECT * FROM tags 
            INNER JOIN timeline_tag 
            ON timeline_tag.tag_id = tags.id 
            WHERE timeline_tag.timeline_id = ?",
            [$this->id]
        );
    }



    /**
     * It returns an array of events that belong to a timeline.
     * 
     * @return array An array of events.
     */
    public function getEvents(): array
    {
        return $this->query(
            "SELECT * FROM events 
            WHERE events.timeline_id = ?",
            [$this->id]
        );
    }



    /**
     * It takes a date string, converts it to a DateTime object, then formats it as a string in the format
     * `d/m/Y`
     * 
     * @return string A string.
     */
    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/Y');
    }



    /**
     * It returns the username of the user who created the timeline.
     * 
     * @return array An array of the username of the user who created the timeline.
     */
    public function getCreator(): array
    {
        return $this->query(
            "SELECT username FROM users 
            INNER JOIN timelines 
            WHERE users.id = ?",
            [$this->user_id]
        );
    }



    /**
     * It returns a string containing a paragraph with the date of the beginning of the period
     * 
     * @return string A string.
     */
    public function getDateStart(): string
    {
        if ($this->date_start_bc === 1 || $this->date_start_bc === '1') {
            return <<<HTML
            <p>début : </p><p class="date">$this->date_start<span>av. J.-C.</span></p>
HTML;
        } else {
            return <<<HTML
            <p>début : </p><p class="date">$this->date_start</p>
HTML;
        }
    }



    /**
     * It returns a string containing a paragraph with the text "Fin : " and another paragraph with the
     * date and, if the date is BC, the text "av. J.-C."
     * 
     * @return string A string.
     */
    public function getDateEnd(): string
    {
        if ($this->date_end_bc === 1 || $this->date_end_bc === '1') {
            return <<<HTML
            <p class="date--end">Fin : </p><p class="date">$this->date_end<span>av. J.-C.</span></p>
HTML;
        } else {
            return <<<HTML
            <p class="date--end">Fin : </p><p class="date">$this->date_end</p>
HTML;
        }
    }



    /**
     * It takes the first 150 characters of the description and adds an ellipsis to the end.
     * 
     * @return string The first 150 characters of the description property, followed by an ellipsis.
     */
    public function getExcerpt(): string
    {
        return substr($this->description, 0, 140) . '...';
    }



    /**
     * It returns a string of HTML that contains a link to the timeline page for the timeline object
     * 
     * @return string A string.
     */
    public function getButton(): string
    {
        return <<<HTML
            <a class="style1" href="/timelines/$this->id" class="btn btn-primary"><span>Timeline</span></a>
HTML;
    }



    /**
     * It returns a string of HTML that contains a link to add an event on timeline
     * 
     * @return string A string.
     */
    public function addEvents(): string
    {
        return <<<HTML
            <a href="/events/create/$this->id" class="btn btn-add"><span>Add Events</span></a>
HTML;
    }



    /**
     * It creates a new timeline, then creates a new timeline_tag for each tag in the  array
     * 
     * @param array data The data to be inserted into the database.
     * @param relation an array of tag ids
     * 
     * @return bool The return value is a boolean value.
     */
    public function create(array $data, ?array $relation = null): bool
    {
        parent::create($data);
        $id = $this->db->getPDO()->lastInsertId();
        foreach ($relation as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT timeline_tag (timeline_id, tag_id) VALUES (?, ?)");
            $stmt->execute([$id, $tagId]);
        }
        return true;
    }



    /**
     * It deletes all the old tags and then inserts the new ones.
     * 
     * @param int id The id of the timeline you want to update
     * @param array data The data to be updated
     * @param relation array of tag ids
     * 
     * @return bool The return value is a boolean.
     */
    public function update(int $id, array $data, ?array $relation = null): bool
    {
        // delete old tags
        parent::update($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM timeline_tag WHERE timeline_id = ?");
        $result = $stmt->execute([$id]);
        // Update of new tags
        foreach ($relation as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT timeline_tag (timeline_id, tag_id) VALUES (?, ?)");
            $stmt->execute([$id, $tagId]);
        }
        if ($result) {
            return true;
        }
    }



    /**
     * It returns the French name of the month, given the month number
     * 
     * @param month The month to format.
     * 
     * @return string A string.
     */
    public function eventMonth($month): string
    {
        $fmt = new IntlDateFormatter(
            'fr_FR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::FULL,
            'Europe/Paris',
            IntlDateFormatter::GREGORIAN,
            'MMMM'
        );
        return $fmt->format(mktime(0, 0, 0, $month));
    }
}
