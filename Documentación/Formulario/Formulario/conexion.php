<?php



if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }



//se conecta al servidor, en  el caso de que no se conecte te salta una alerta de error
if (!mysql_connect("localhost", "root", "")) {
    die('Connection problem ! --> ' . mysql_error());
}
//se conecta a la base de datos, y en el caso de que no se conecte, te sale una alerta de error
if (!mysql_select_db("Formularios")) {
    die('Database selection problem ! --> ' . mysql_error());
}