<?php

class Index extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do home do controlador <br>';
        MainSession::init();
        $logged = MainSession::get('loggedIn');
        if ($logged == false) {
            MainSession::destroy();
            header('location: login');
            exit;
        }
    }

    function index() {
        $this->view->render('home/index');
    }
}