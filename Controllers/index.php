<?php

class Index extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do index do controlador <br>';
        $this->view->render('index/index');
    }
}