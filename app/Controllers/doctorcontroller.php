<?php
include "abstractcontroller.php";

class doctor extends abstractcontroller
{

    public function index()
    {
            if(isset($_GET["action"]))
            {
                $action = $_GET["action"];
            }

            else
            {
                $action = '';
            }
        
            if($action == "getall")
            {
                global $page;
                $page = 'doctors';
                $this->data['doctors'] = doctorModel::getall();
                $this->view();
            }
        
            elseif($action == "doctorsclinic")
            {
                $clinicid =isset($_GET['clinicid']) && is_numeric($_GET['clinicid']) ? intval($_GET['clinicid']) : 0;
                global $page;
                $page = 'doctors';
                $this->data['doctors'] = doctorModel::docclinc($clinicid);
                $this->view();
            }
        
            else
            {
                $this->data['doctors'] = "no data";
                    $this->view();
            }
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
