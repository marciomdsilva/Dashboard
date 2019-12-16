<?php

class MainView {

    function __construct()
    {
//        echo 'Estamos na View <br>';
    }

    public function render($name)
    {
        require 'Views/_includes/header.php';
        require 'Views/' . $name . '.php';
        require 'Views/_includes/footer.php';
    }

    public function renderLogin($name)
    {
        require 'Views/_includes/login-header.php';
        require 'Views/' . $name . '.php';
        require 'Views/_includes/footer.php';
    }
}