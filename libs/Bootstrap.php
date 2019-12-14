<?php

class Bootstrap
{

    function __construct()
    {
        //Retira a variavel que está a ser inserida no url pelo metodo get, e insere num array
        //Se a variavel estiver vazia retorna null
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        //Retorna uma string com espaço em branco ou com os caracteres inseridos no final da string até ao simbolo "/"
        $url = rtrim($url, '/');
        //Divide o array sempre que exista o simbolo "/"
        $url = explode('/', $url);
//        print_r($url);
//        echo '<br>';

        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            //Retorna falso para nao executar o codigo que está por baixo
            return false;
        }

        $file = 'controllers/' . $url[0] . '.php';
        //Verifica se o ficheiro existe
        if (file_exists($file)) {
            //Acede ao index que está dentro do controlador e cria um novo objeto ex: index
            require $file;
        } else {
            require 'controllers/errorFile.php';
            $controller = new ErrorFile();
            return false;
        }


        //Acede ao index que está dentro do controlador e cria um novo objeto ex: index
        $controller = new $url[0];

        //Verifica primeiro se a variavel foi declarada e se é diferente de null
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }
}