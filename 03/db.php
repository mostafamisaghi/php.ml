<?php


class db
{
    public $table;
    const USERNAME = 'username';

    public static $prefix;

    public function all()
    {
        return "Select * from {$this->table}";
    }

    public function find($id, $columns = null)
    {
        $columns = !is_null($columns) ? implode(',', $columns) : '*';
        echo "Select {$columns} from {$this->table} WHERE id={$id}";
    }

    public function delete($id)
    {
        return "Delete from {$this->table} WHERE id={$this->$id}";
    }

    private function sort()
    {
        self::$prefix; //به خود کلاس اشاره میکند
        static::$prefix; //
        self::USERNAME  ;
    }

}
