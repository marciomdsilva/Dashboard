<?php

class Index extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do home do controlador <br>';
        //Serve para que se a sessão não tiver iniciada redirecione o utilizador a pagina de login
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

    function logout() {
        MainSession::destroy();
        header('location: ../login');
        exit;
    }
}