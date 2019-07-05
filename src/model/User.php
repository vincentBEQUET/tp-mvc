<?php

class User extends Db {

    const TABLE_NAME =  'user';

    protected $id;
    protected $name;
    protected $password;
    protected $email;
    protected $created_at;
    protected $avatar;


    /* Setters */ // Faut-il créer des setters pour ID et created_at??
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    
    public function setName($name)
    {
        // Il faudra faire de validations
        $this->name = $name;
        return $this;
    }

    public function setPassword($password)
    {
        // Il faudra faire de validations
        $this->password = $password;
        return $this;
    }

    public function setEmail($email)
    {
        // Il faudra faire de validations
        $this->email = $email;
        return $this;
    }

    public function setCreatedAt($created_at)
    {
        // Il faudra faire de validations
        $date = DateTime::createFromFormat('Y-m-d', $created_at);
        if (!$date) {
            throw new Exception("La date saisie n'est pas au format correct (YYYY-MM-DD).");
        }
        $this->created_at = $created_at;
        return $this;
    }
    public function setAvatar($avatar)
    {
        // Il faudra faire de validations
        $this->avatar = $avatar;
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


    public function save(){
        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => $this->password,
            'avatar'    => $this->avatar
        ];

        $id = $this->dbCreate(self::TABLE_NAME, $data);

        $this->id = $id;
    }

    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }


    // ...

    public static function user_vue($id){

        // J'utilise getDb de la classe Db qui me donne un pointeur PDO.
        $bdd = Db::getDb();

        // Définition de la requête
        $req = "SELECT *
				FROM `vue`
				INNER JOIN film ON film.id =  vue.film_id
                WHERE vue.user_id = " . $id;

        $res = $bdd->query($req);
        $films = $res->fetchAll(PDO::FETCH_ASSOC);

        return $films;
    }

    public static function findOne(int $id){
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        return $element;
    }

    public function update(){
        if ($this->id > 0) {
            $data = [
                "name"  => $this->name(),
                "email"   => $this->email(),
                "password"   => $this->password()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }
}