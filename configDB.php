<?php
//config.php

//Dados para escolher do DataBase (DB)
$dbhost = "localhost";
$dbuser = "root"; // Usuário raíz (Rute)
$dbpass = "";
$dbname = "sistemaDeLogin";


//cpnexão com o banco de dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conecta->connect_error){
    die("Não foi possível conectar ao Banco de Dados: " . $conecta->connect_error);
}else {
      //  echo"<h1>conectou no BD Manoowwwww! 42  </h1>";
    
};
