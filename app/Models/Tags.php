<?php

namespace App\Models;

class Tags extends Model
{
    protected $table = 'tags';

    public function getTimelines()
    {
        return $this->query(
            "SELECT t.* FROM timelines t
            INNER JOIN timeline_tag tt
            ON tt.timeline_id = t.id
            WHERE tt.tag_id = ?",
            [$this->id]);
    }

    public function getButton(): string
    {
        return <<<HTML
            <a class="tagCard__content--link" href="/tags/$this->id" class="btn btn-primary"><span>Voires les Timelines</span></a>
HTML;
    }
}
