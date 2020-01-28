<?php

class ErrorFile extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Isto é um error!<br>';
    }

    function index() {
        $this->view->msg = 'Pedimos desculpa, mas esta pagina não existe!';
        $this->view->render('error/index');
    }
}