<?php

include "abstractcontroller.php";

class clinic extends AbstractController
{
    public function index()
    {
        global $title;

        $title = lang('clinics');
        $this->view();
    }

}