<?php

namespace App\Models;

class Tags extends Model
{
    protected $table = 'tags';


/**
 * "Get all timelines that have this tag."
 * 
 * The `query` function is a helper function that runs a query and returns the results
 * 
 * @return array An array of timelines.
 */
    public function getTimelines(): array
    {
        return $this->query(
            "SELECT t.* FROM timelines t
            INNER JOIN timeline_tag tt
            ON tt.timeline_id = t.id
            WHERE tt.tag_id = ?",
            [$this->id]);
    }

/**
 * It returns a string containing a link to the tag's page
 * 
 * @return string A string.
 */
    public function getButton(): string
    {
        return <<<HTML
            <a class="tagCard__content__link--btn" href="/tags/$this->id" class="btn btn-primary"><span>Voir les Timelines</span></a>
HTML;
    }
}
