<?php

class ErrorFile extends Controller {

    function __construct()
    {
        parent:: __construct();
        echo 'This is an error!<br>';

        $this->view->msg = 'Esta pagina não existe';
        $this->view->render('error/index');
    }
}