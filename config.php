<?php

    //Parametrage de ma base de donnée
        $host = "localhost";
        $username = "root";
        $password = "";
        $dataBase = "Todolist2";

        $dir_fs = $_SERVER['DOCUMENT_ROOT']."/";
        $dir_ws =  "/";


    //Connection a la base de donnée
        $mysqli = @new mysqli($host, $username, $password, $dataBase);



    if ($mysqli->connect_errno) {
        echo "Site en maintenance";
        exit(); //arrete l'execution du programme
    }

?>