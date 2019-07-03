<?php

class Film
{

    const TABLE_NAME =  'film';

    protected $id;
    protected $title;
    protected $type_id;
    protected $author;
    protected $poster;
    protected $release_year;
    protected $movie_duration;
    protected $gif;
    



    /* Setters */ // Faut-il créer des setters pour ID et created_at??
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function setTitle($title)
    {
        // Il faudra faire de validations
        $this->title = $title;
        return $this;
    }

    public function setTypeId($type_id)
    {
        // Il faudra faire de validations
        $this->type_id = $type_id;
        return $this;
    }

    public function setAuthor($author)
    {
        // Il faudra faire de validations
        $this->author = $author;
        return $this;
    }
    
    public function setPoster($poster)
    {
        // Il faudra faire de validations
        $this->poster = $poster;
        return $this;
    }
    public function setReleaseYear($release_year) 
    {
        // Validation
        $aRegex = '/^19[0-9]{2}|(200[0-9]{1}|201[0-9]{1})$/'; //date doit être 19__ ou 200_ ou 201_
        if ( !preg_match($aRegex, $release_year) ) {
        throw new Exception('La date de création saisie n\'est pas valable.');
        }
        $this->release_year = $release_year;
        return $this;
    }
    
    public function setMovieDuration($duration)
    {
        // Il faudra faire de validations
        $this->duration = $duration;
        return $this;
    }
    public function setGif($gif)
    {
        // Il faudra faire de validations
        $this->gif = $gif;
        return $this;
    }


    /* Getters */
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTypeId()
    {
        return $this->type_id;
    }
    
    public function getAuthor()
    {
        return $this->author;
    }

    public function getPoster()
    {
        return $this->poster;
    }


    public function getReleaseYear()
    {
        return $this->release_year;
    }

    public function getMovieDuration()
    {
        return $this->movie_duration;
    }


    public function getGif()
    {
        return $this->gif;
    }


    public function save(){
        $data = [
            'title'             => $this->title,
            'type_id'           => $this->type_id,
            'author'            => $this->author,
            'poster'            => $this->poster,
            'release_year'      => $this->release_year,
            'movie_duration'    => $this->movie_duration,
            'gif'               => $this->gif,
        ];
        
        $id = $this->dbCreate(self::TABLE_NAME, $data);
        
        $this->id = $id;


    }










}
