<?php

class language
{
    public function arabic()
    {
        $_SESSION['lang'] = "arabic";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function english()
    {
        $_SESSION['lang'] = "english";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}