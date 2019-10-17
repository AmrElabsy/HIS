<?php

include 'abstractcontroller.php';

class patient extends AbstractController
{
    public function index()
    {
        $this->view();
    }

    public function profile()
    {

    }

    public function examination()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function scan()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function diagnosis()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function analysis()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function prescription()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

}