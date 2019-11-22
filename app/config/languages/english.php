<?php

function lang($word)
{
    $arr = array(
        # Configuration
        'DBname' => 'engname',

        "KFS_Hos" => "Kafr El-Shiekh Hospital",
        "home_page" => "Home Page",
        "doctors" => "Doctors",
        "appointments" => "Appointments",
        "clinics" => "Clinics",
        'make_appointment' => "Make an Appointment",
        "login" => "Login",
        "lang" => "Language",
        "arabic_lang" => "Arabic",
        "english_lang" => "English",

        "view_profile" => 'View Profile',
        'patients' => 'Patients',


        'important_links' => 'Our Important Links',
        'recent_news' => "Recent News",
        'contact_us' => 'Contact Us',
        'sign_up' => 'Sign Up',
        'user_name' => 'User Name',
        'password' => 'Password'
    );
    return isset($arr[$word]) ? $arr[$word] : $word;

}