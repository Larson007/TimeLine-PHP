<?php

namespace App\Models;

use App\Models\Model;

class User extends Model
{
    protected $table = 'users';


/**
 * It returns a user object from the database, based on the username
 * 
 * @param string username The username of the user you want to get.
 * 
 * @return User The user object
 */
    public function getByUsername(string $username) : User
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }



/**
 * It checks if a username exists in the database
 * 
 * @param string username The username to check
 * 
 * @return The result of the query.
 */
    public function checkUsername(string $username): bool
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
