<?php

class Index extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do home do controlador <br>';
        $this->view->render('home/index');
    }
}