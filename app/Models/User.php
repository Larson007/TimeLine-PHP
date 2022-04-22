<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    protected $table = 'users';

    public function getByUsername(string $username) : User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);

    }

    public function checkUsername(string $username)
    {
        $stmt = $this->db->getPDO()->prepare("SELECT * FROM {$this->table} WHERE username = ?");
        $stmt->execute([$username]);
        $result = $stmt->fetch();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
