<?php

class Login extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do home do controlador <br>';
        //Serve para nao acessar a pagina de login se tiver sessão iniciada
        MainSession::init();
        $logged = MainSession::get('loggedIn');
        if ($logged == true) {
            header('location: index');
        }
    }

    function index() {
        $this->view->renderLogin('login/index');
    }

    function run() {
        $this->model->run();
    }
}