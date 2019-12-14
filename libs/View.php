<?php

class View {

    function __construct()
    {
        echo 'Estamos na View <br>';
    }

    public function render($name)
    {
        require 'views/' . $name . '.php';
    }
}