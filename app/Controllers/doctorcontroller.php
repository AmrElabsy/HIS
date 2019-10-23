<?php
include "abstractcontroller.php";

class doctor extends abstractcontroller
{

    public function index()
    {
        global $page;
        $page = 'doctors';
        $this->data['doctors'] = doctorModel::getAll();
        $this->view();
    }

    public function schedule()
    {
        $this->view();
    }

    public function dashboard()
    {
        $this->view();
    }

    public function manage()
    {
        $this->view();
    }

    public function edit()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {


        } else {
            $this->view();
        }
    }

}