<?php


class doctorModel extends AbstractModel
{
    public $id;
    public $name;
    public $mail;
    protected static $tableName = 'doctors';


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

    public static function getDoctorsByLimit($limit)
    {
        global $con;
        $stmt = $con->prepare("SELECT * FROM doctors ORDER BY RAND() LIMIT 0, ? ");

        $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}