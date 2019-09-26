<?php

class AbstractController
{
    protected $data = array();

    public function notfound()
    {
        $this->view();
    }

    public function view()
    {
        global $controller;
        global $action;
        global $notFound;

        $view = APP_PATH . 'views/' . $controller . "/" . $action . ".view.php";

        if (file_exists($view)) {
            include TEMP_PATH . "header.temp.php";
            include TEMP_PATH . "nav.temp.php";
            include APP_PATH . 'views/' . $controller . "/" . $action . ".view.php";
            include TEMP_PATH . "footer.temp.php";
        } else {
            $controller = $notFound;
            $action = $notFound;
            $this->view();
        }
    }

    public function isAuthorized(array $alloweds)
    {
        if (isset($_SESSION['auth'])) {
            $auths = $_SESSION['auth'];
        }
        else {
            $auths = array();
        }
        foreach ($auths as $auth)
        {
            foreach ($alloweds as $allowed)
            {
                if ($auth == $allowed)
                {
                    return true;
                }
            }
        }
        return false;
    }
}