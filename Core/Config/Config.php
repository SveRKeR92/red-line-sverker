<?php

$dbconfig = [
    "host" => "mysql:host=localhost:3306;dbname=red-line",
    "login" => "root",
    "pass" => "",
    "options" => array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ),
];
