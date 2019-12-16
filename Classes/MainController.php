<?php

class MainController {

    function __construct()
    {
//        echo 'Main controller<br>';
        $this->view = new MainView();
    }

    public function loadModel($name) {
        $path = 'Models/'. $name . 'Model.php';
        if (file_exists($path)) {
            require $path;

            $modelName = $name . 'Model';
            $this->model = new $modelName;
        }
    }
}