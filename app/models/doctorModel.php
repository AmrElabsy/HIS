<?php

class doctorModel
{
    public $id;
    public $name;
    public $mail;

    public function __construct($id)
    {
        global $con;
        $this->id = $id;
        $stmt = $con->prepare("SELECT * FROM doctors WHERE id = ?");
        $stmt->execute(array($this->id));
        $doc = $stmt->fetch();

        $this->name = $doc['name'];
        $this->mail = $doc['mail'];

    }

    public function SignUp(array $data)
    {

    }

    public function SignIn(array $data)
    {

    }

    public function getData()
    {
        echo "Name: " . $this->name . ", E-mail: " . $this->mail;
    }

    public static function getAll()
    {
        global $con;
        $stmt = $con->prepare("SELECT * FROM doctors");
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }
}