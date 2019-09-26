<?php

function getTitle()
{
    global $title;
    if (isset($title)) {
        echo $title;
    }
}

function setActive($pageName)
{
    global $page;
    if ($page == $pageName)
    {
        echo "active";
    }
}