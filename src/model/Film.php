<?php

class Type extends Db
{
    const TABLE_NAME = "film";

    protected $id;
    protected $title;
    protected $type_id;
    protected $author;
    protected $poster;
    protected $released_year;
    protected $movie_duration;
    protected $gif;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function settitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function settype_id($type_id)
    {
        $this->type_id = $type_id;
        return $this;
    }

    public function setauthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function setField4($date, $time)
    {
        $dateFormat = DateTime::createFromFormat('Y-m-d', $date);

        if (!$dateFormat) {
            throw new Exception('La date a un format incorrect.');
        }

        $this->field4 = $date . ' ' . $time;
        return $this;
    }

    public function setPhoto($photo)
    {
        if (isset($photo) and $photo['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            if ($photo['size'] <= 10000000) {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($photo['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($photo['tmp_name'],  './public/uploads/' . $photo['name']);

                    $this->photo = $photo['name'];
                    return $this;
                }
            } else {
                throw new Exception('photo trop grande');
            }
        } else {
            throw new Exception('une erreur est survenue à l\'upload du fichier');
        }
    }

    public function gettitle()
    {
        return $this->title;
    }
    public function gettype_id()
    {
        return $this->type_id;
    }
    public function getauthor()
    {
        return $this->author;
    }
    public function getField4()
    {
        return $this->field4;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function save()
    {
        $data = [
            "title"    => $this->gettitle(),
            "type_id"    => $this->gettype_id(),
            "author"    => $this->getauthor(),
            "field4"    => $this->getField4(),
            "photo"     => $this->getPhoto(),
        ];
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}