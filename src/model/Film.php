<?php

class Film extends Db
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
        // Validations proposées
        if (strlen($author) < 5) {
            throw new Exception("Le nom de l'auteur est trop court.");
        }
        if (strlen($author) > 50) {
            throw new Exception("Le nom de l'auteur est trop long.");
        }
        $this->author = $author;
        return $this;
    }
    
    public function setPoster($poster)
    {
        // Validations proposées
        if (strlen($poster) < 5) {
            throw new Exception("Le nom de l'auteur est trop court.");
        }
        if (strlen($poster) > 50) {
            throw new Exception("Le nom de l'auteur est trop long.");
        }
        $this->poster = $poster;
        return $this;
    }
    public function setReleaseYear($release_year) 
    {
        // Validation proposée
        $current_date = date('Y');
        if ($release_year < 1900 || $release_year > $current_date) {
            throw new Exception("La date saisie n'est pâs valable");
        }
        $this->release_year = $release_year;
        return $this;
    }
    
    public function setMovieDuration($duration)
    {
        // Validation proposée
        if ($duration < 1800) {
            throw new Exception("La durée d'un film doit être superieur à 30 min, donc 1800 secondes.");
        }
        if ($duration > 14400) {
            throw new Exception( "La durée d'un film doit être inferieur à 4 heures, donc 14400 seconds.");
        }
        $this->duration = $duration;
        return $this;
    }
    public function setGif($gif)
    {
        if (strlen($gif) < 5) {
            throw new Exception("Le nom du GIF est trop court.");
        }
        if (strlen($gif) < 255) {
            throw new Exception("Le nom du GIF est trop long.");
        }
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
