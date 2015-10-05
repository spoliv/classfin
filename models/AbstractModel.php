<?php

class ModelException extends Exception {}

abstract class AbstractModel
{
    static protected $table;
    static protected $columns;

    static public function findAll()
    {
        $sql = 'SELECT * FROM' . ' ' . static::$table;
        $res = new DBConnection;
        return $res->query($sql, 0, 0);
    }

    static public function findByPk($id)
    {
        $sql = 'SELECT * FROM' . ' ' . static::$table/*static::getTableName()*/ . ' ' .  'WHERE id = :id';
        $res = new DBConnection;
        return $res->query($sql, $id, 0);
    }

    public function save()
    {
        $tokens = [];
        $values = [];
        foreach (static::$columns as $column) {

            $tokens[] = ':' . $column;
            $values[':' . $column] = $this->$column;
        }
        /*if (!isset($this->id)) {*/

        $sql = 'INSERT INTO' . ' ' . static::$table . '
            (' . implode(',', static::$columns) . ')
            VALUE(' . implode(',', $tokens) . ')';
        $res = new DBConnection;
        $res->query($sql, 0, $values);
    }
    /*else{

        $columns = [];
        foreach(static::$columns as $column){

            $columns[] = $column . '=:' . $column;
        }
        $sql = 'UPDATE TABLE SET' . ' ' . implode(',', $columns) . ' ' .
                'WHERE id=:id';
        echo $sql;
        $res = new DBConnection();
        $res->query($sql, $this->id, $values);
    }*/

    public function update($id)
    {
        $values = [];
        $columns = [];
        foreach (static::$columns as $column) {
            $values[':' . $column] = $this->$column;
            $columns[] = $column . '=:' . $column;
        }
        $sql = 'UPDATE' . ' ' . static::$table . ' ' . 'SET' . ' ' . implode(',', $columns) . ' ' .
            'WHERE id=:id';
        echo $sql;
        $res = new DBConnection;
        $res->query($sql, $id, $values);
    }
}