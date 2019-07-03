<?php

class Type extends Db {

    const TABLE_NAME = "type";

    protected $id;
    protected $name;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setname($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}