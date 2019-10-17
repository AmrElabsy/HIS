<?php

include 'abstractcontroller.php';

class receptionist extends AbstractController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function newappointment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

}