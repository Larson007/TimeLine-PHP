<?php

namespace App\Models;

use PDO;
use Database\DBConnection;

abstract class Model
{

    protected $db;
    protected $table;


    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }


    /**
     * It takes a SQL query, an optional array of parameters, and an optional boolean, and returns the
     * result of the query.
     * 
     * The first thing it does is check if the query is a `SELECT` query. If it is, it sets the ``
     * variable to `query`. If it isn't, it sets the `` variable to `prepare`.
     * 
     * The next thing it does is check if the query is a `DELETE`, `UPDATE`, or `INSERT` query. If it is,
     * it sets the `` variable to `fetchAll`. If it isn't, it sets the `` variable to `fetch`.
     * 
     * The next thing it does is set the `` variable to the result of the `` function.
     * 
     * The next thing it does is set the fetch mode of the `
     * 
     * @param string sql The SQL query to be executed.
     * @param array param The parameters to be passed to the query.
     * @param bool single if true, it will return a single row, if false, it will return all rows.
     */
    public function query(string $sql, array $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';
        if (strpos($sql, 'DELETE') === 0 || strpos($sql, 'UPDATE') === 0 || strpos($sql, 'INSERT') === 0) {
            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($param);
        }
        $fetch = is_null($single) ? 'fetchAll' : 'fetch';
        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }


    /**
     * This function returns an array of all the rows in the table.
     * 
     * @return array An array of all the rows in the table.
     */
    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY id DESC");
    }


    /**
     * > This function returns a single row from the database table
     * 
     * @param int id The id of the record you want to find.
     * 
     * @return Model The query method is being called with the following parameters:
     */
    public function findById(int $id): Model
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }


    /**
     * It takes an array of data and creates a query string based on the keys and values of the array
     * 
     * @param array data array of data to be inserted
     * @param relation an array of the table name and the foreign key
     */
    public function create(array $data, ?array $relation = null)
    {
        $firstParenthesis = "";
        $secondParenthesis = "";
        $i = 1;
        foreach ($data as $key => $value) {
            $comma = $i === count($data) ? "" : ", ";
            $firstParenthesis .= "{$key}{$comma}";
            $secondParenthesis .= ":{$key}{$comma}";
            $i++;
        }
        return $this->query("INSERT INTO {$this->table} ($firstParenthesis) VALUES ($secondParenthesis)", $data);
    }


/**
 * It takes an array of data, and updates the database with it
 * 
 * @param int id The id of the row you want to update
 * @param array data array of data to update
 * @param relation an array of the relations you want to update.
 */
    public function update(int $id, array $data, ?array $relation = null)
    {
        $sqlRequestPart = "";
        $i = 1;
        foreach ($data as $key => $value) {
            $comma = $i === count($data) ? "" : ", ";
            $sqlRequestPart .= "{$key} = :{$key}{$comma}";
            $i++;
        }
        $data['id'] = $id;
        return $this->query("UPDATE {$this->table} SET {$sqlRequestPart}  WHERE id = :id", $data);
    }


/**
 * > Delete a record from the database
 * 
 * @param int id The id of the record to delete.
 * 
 * @return bool A boolean value.
 */
    public function destroy(int $id): bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }
}
