<?php
session_start();

function ErrorMessage()
{
    if (isset($_SESSION['ErrorMessage'])) {
        $output = "<div class='alert alert-danger'>" .
            htmlentities($_SESSION['ErrorMessage']) .
            "</div>";

        //error message resetelése
        $_SESSION['ErrorMessage'] = null;
        return $output;
    }
}

function SuccessMessage()
{
    if (isset($_SESSION['SuccessMessage'])) {
        $output = "<div class='alert alert-success'>" .
            htmlentities($_SESSION['SuccessMessage']) .
            "</div>";

        //error message resetelése
        $_SESSION['SuccessMessage'] = null;
        return $output;
    }
}




