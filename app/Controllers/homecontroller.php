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
        global $page;
        global $title;

        $page = 'home';
        $title = lang('home_page');

        $this->data['countOfClinics'] = clinicModel::getCount();
        $this->data['countOFDoctors'] = doctorModel::getCount();
        $this->data['countOfPatients'] = patientModel::getCount();
        $this->data['doctors'] = doctorModel::getDoctorsByLimit(6);
        $this->data['clinics'] = clinicModel::getClinicsByLimit(6);

        $this->view();

        /*
        global $title;
        global $param;
        global $noFooter;
        global $noNav;
        global $page;

        $allowed = array(1, 2, 3, 4, 5);
        $_SESSION['auth'] = array(6, 1);
        if($this->isAuthorized($allowed)) {
            $this->data['doctors'] = doctorModel::getAll();


            $title = "Index";
            $page = 'home';
            $this->view();
        }
        else {
            header("location: /his/home/index");
            exit();
        }
        */
    }

    public function signup()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view();
        }
    }

    public function signin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            global $title;
            global $page;
            $page = 'login';

            $title = lang('login');

            $this->view();
        }
    }

    public function makeappointment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Insert New Appointment
        } else {
            $this->view();
        }
    }
}