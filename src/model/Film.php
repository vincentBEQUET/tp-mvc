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
        // if (strlen($poster) < 5) {
        //     throw new Exception("Le nom de l'auteur est trop court.");
        // }
        // if (strlen($poster) > 50) {
        //     throw new Exception("Le nom de l'auteur est trop long.");
        // }
        $this->poster = $poster;
        return $this;
    }
    public function setReleaseYear($release_year) 
    {
        // Validation proposée
        $current_date = date('Y');
        if ($release_year < 1900 || $release_year > $current_date) {
            throw new Exception("La date saisie n'est pâs valable.");
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
        $this->movie_duration = $duration;
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
            //'poster'            => $this->poster,
            'release_year'      => $this->release_year,
            'movie_duration'    => $this->movie_duration,
            'gif'               => $this->gif,
        ];
        $id = $this->dbCreate(self::TABLE_NAME, $data);
        
        $this->id = $id;
        $this->savePoster();
        return $this;


    }



    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }


    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0)
        {
            $element = $element[0];
        }
        else
        {
            return;
        }

        return $element;
    }
    public function update()
    {
        if ($this->id > 0) {
            $data = [
                'title'             => $this->title,
                'type_id'           => $this->type_id,
                'author'            => $this->author,
                'poster'            => $this->poster,
                'release_year'      => $this->release_year,
                'movie_duration'    => $this->movie_duration,
                'gif'               => $this->gif,
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }

    /**
     * ça ne marche pas:
     * d'abord, on peut pas faire $this->getId() sur la class, pour ça j'ai changé
     * $this->getId() par $id, que je passe en parametre.
     * ça ne marche non plus parce que la fonction Db::getDb() est privée, donc on 
     * ne peut l'utiliser que dans la class Db
     */
    public static function film_vue($id)
    {

        // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
        $bdd = Db::getDb();

        // Définition de la requête
        $req = "SELECT *
				FROM `vue`
				INNER JOIN user ON user.id =  vue.user_id
                WHERE vue.film_id = " . $id;

        $res = $bdd->query($req);
        $courses = $res->fetchAll(PDO::FETCH_ASSOC);

        return $courses;
    }

    private function savePoster()
    {
        $poster = $this->getPoster();
        $extension = pathinfo($poster['name'])['extension'];
        $newName = "film_" . $this->getId();
        $newNameWithExtension = $newName . "." . $extension;
        move_uploaded_file($poster['tmp_name'], './public/uploads/'  .  $newNameWithExtension);
        $data = [
            'id' => $this->getId(),
            'poster' => $newNameWithExtension
        ];
        Db::dbUpdate(self::TABLE_NAME, $data);

        return $this;
    }


}
