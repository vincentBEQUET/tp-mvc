<?php

class User {

    const TABLE_NAME =  'user';

    protected $id;
    protected $name;
    protected $password;
    protected $email;
    protected $created_at;
    protected $avatar;


    /* Setters */
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    /* Getters */
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getCreatedAtFormat()
    {
        $timestamp = strtotime($this->created_at);

        return date('d/m/Y', $timestamp);
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

}