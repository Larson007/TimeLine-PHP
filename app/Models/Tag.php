<?php

namespace App\Models;


class Tag extends Model
{

    protected $table = 'tags';


    public function getPost()
    {
        return $this->query("
        SELECT p.* FROM posts p
        INNER JOIN post_tag pt ON pt.post_id = p.id
        WHERE pt.tag_id = ?
        ", [$this->id]);
    }
}
