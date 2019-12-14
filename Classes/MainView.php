<?php

class MainView {

    function __construct()
    {
        echo 'Estamos na View <br>';
    }

    public function render($name)
    {
        require 'views/' . $name . '.php';
    }
}