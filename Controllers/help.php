<?php

class Help extends MainController {

    function __construct()
    {
        parent:: __construct();
        echo 'Estámos dentro do help do controllador <br />';
    }

    public function other($arg = false) {
        echo 'Estamos dentro do other <br>';
        echo "Valor Opcional: " . $arg . '<br>';

        require 'Models/help_model.php';
        $model = new Help_Model();
    }
}