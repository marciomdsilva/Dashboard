<?php

class MainController {

    function __construct()
    {
//        echo 'Main controller<br>';
        $this->view = new MainView();
    }
}