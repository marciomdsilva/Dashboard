<?php

class Index extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do home do controlador <br>';
    }

    function index() {
        $this->view->render('home/index');
    }
}