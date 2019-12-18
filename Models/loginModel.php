<?php

class loginModel extends MainModel
{

    public function __construct()
    {
        parent::__construct();
//        echo 'Estamos no loginModel';
//        echo md5('teste');
//        INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, 'marciomds94@hotmail.com', '698dc19d489c4e4db73e28a713eab07b');
    }

    public function run()
    {
        //faz a limpeza da query
        $sth = $this->db->prepare("SELECT id FROM users 
                                        WHERE login = :login
                                        AND password = MD5(:password)");

        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

//        $data = $sth->fetchAll();


        $count =  $sth->rowCount();
        if ($count > 0) {
            //login
            MainSession::init();
            MainSession::set('loggedIn', true);
            header('location: ../index');
        } else {
            header('location: login');
        }

        //Imprime o array encontrado
//        print_r($data);


    }
}