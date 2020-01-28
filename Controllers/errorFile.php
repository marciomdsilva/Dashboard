<?php

class ErrorFile extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Isto é um error!<br>';
    }

    function index() {
        $this->view->msg = 'Neste dia de imensurável tristeza, receba as nossas mais sinceras condolências. <br> <br> Encontre força e fé na memória desta pagina ente querida que partiu. Ou nunca Existiu!!';
        $this->view->renderLogin('error/index');
    }
}