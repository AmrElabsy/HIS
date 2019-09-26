<?php

include "abstractcontroller.php";

class home extends AbstractController
{
    public function __construct()
    {
        //echo "Fucking Test";
    }

    public function index()
    {
        global $title;
        global $param;
        global $noFooter;
        global $noNav;
        global $page;

        $allowed = array(1, 2, 3, 4, 5);
        $_SESSION['auth'] = array(6, 1);
        if($this->isAuthorized($allowed)) {
            $this->data['doctors'] = doctor::getAll();

            $title = "Index";
            $page = 'home';
            $this->view();
        }
        else {
            header("location: /his/home/index");
            exit();
        }
    }

    public function test()
    {
        global $con;
        global $action;
        $action = 'index';

        $stmt = $con->prepare("INSERT INTO  doctors(name, pass, mail) VALUES(?, ?,?)");
        //$stmt->execute(array("Absy", "123456", '@absy.com'));
        header("location: /his/home/index");
        exit();
    }
}