<?php

class Vue extends Db {

    const TABLE_NAME = "vue";

    protected $id;
    protected $user_id;
    protected $film_id;
    protected $date_vue;
    protected $time_pause;
    protected $nombre_vue;

    /** Setters */

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setUserId($user_id)
    {
        //Validation...

        $this->user_id = $user_id;
        return $this;
    }

    public function setFilmId($film_id)
    {
        //Validation...

        $this->film_id = $film_id;
        return $this;
    }

    public function setDateVue($date_vue)
    {

        $this->date_vue = $date_vue;
        return $this;
    }

    public function setTimePause($time_pause)
    {
        //Validation...

        $this->time_pause = $time_pause;
        return $this;
    }

    public function setNombreVue($nombre_vue)
    {
        //Validation...

        $this->nombre_vue = $nombre_vue;
        return $this;
    }
    /** Getters */
    public function getId(){
        return $this->id;
    }
    public function getTimePause()
    {
        return $this->time_pause;
    }
    public function getFilmId()
    {
        return $this->film_id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getNombreVue()
    {
        return $this->nombre_vue;
    }

    //fonction à appeler lorsque le vue finit
    public function addVue()
    {
        $new_nombre_vues = $this->nombre_vue + 1;
        $this->setNombreVue($new_nombre_vues);
        return $new_nombre_vues;
        
    }


}