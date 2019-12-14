<?php

class Index extends Controller {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do index do controlador <br>';
        $this->view->render('index/index');
    }
}