<?php

class Login extends MainController {

    function __construct()
    {
        parent:: __construct();
//        echo 'Estamos dentro do home do controlador <br>';
    }

    function index() {
        $this->view->renderLogin('login/index');
    }

    function run() {
        $this->model->run();
    }
}