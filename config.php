<?php

//URL da home     ----- Sempre que mudar de servidor ou ip do servidor isto tem que ser alterado -----
define( 'HOME_URL', 'http://169.254.152.68/dashboard_mvc/' );

// Tipo de Base de Dados
define( 'DB_TYPE', 'mysql' );
// Nome do host da base de dados
define( 'DB_HOST', 'localhost' );
// Nome da base de dados
define( 'DB_NAME', 'dashboard_mvc' );
// Nome do utilizador da base de dados
define( 'DB_USER', 'root' );
// Senha do utilizador da base de dados
define( 'DB_PASS', 'serverteste123' );

//Carrega o loader
require_once 'init.php';