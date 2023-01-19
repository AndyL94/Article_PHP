<?php

// connectioon bdd

    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost; 
                    dbname=post','andy','', 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));

                    $_response = $_bdd->query('SELECT * FROM article ORDER BY date_modification ASC LIMIT 10 ');


?>