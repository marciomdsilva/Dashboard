<?php

class DashboardDB extends PDO {

    public function __construct()
    {
        parent:: __construct('mysql:host=localhost;dbname=dashboard_mvc','root','serverteste123');

    }
}