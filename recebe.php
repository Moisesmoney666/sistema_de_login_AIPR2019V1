<?php
//É necessario fazer a conexão com o banco de dados
require_once "configDB.php";


function verificar_entrada($entrada){
$saída = trim($entrada); //Remove espaços antes e depois
$saída = stripcslashes($saída); //Remove as barras
$saída = htmlspecialchars($saída); //Remove HTML
return $saída;
}

if (isset($_POST['action'])
&& $_POST['action'] == 'cadastro'){
    $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
    $nomeUsuario  =  verificar_entrada($_POST['nomeUsuário']);
    $emailUsuario = verificar_entrada($_POST['emailUsuário']);
    $senhaUsuario = verificar_entrada($_POST['senhaUsuário']);
    $senhaConfirma = verificar_entrada($_POST['senhaConfirma']);
    $concordar = $_POST['concordar'];
    $dataCriacao = date("Y-m-d H:i:s");
    $senha = sha1($senhaUsuario);
    $senhaC = sha1($senhaConfirmar);



    echo "<h5>Nome completo:    $nomeCompleto</h5>";
    echo "<h5>Nome Usuário:     $nomeUsuario</h5>";
    echo "<h5>E-mail Usuário:   $nomeCompleto</h5>";
    echo "<h5>Senha Usuário:    $senhaUsuario</h5>";
    echo "<h5>Senha Confirma:   $senhaConfirma</h5>";
    echo "<h5>concordar:        $concordar</h5>";
    echo "<h5>dataCriacao:      $dataCriacao</h5>";

    if($senha != $senhaC){
        echo "<h1>As senhas não conferem</h1>"
    
    }else {
        echo "<h5> senha codificada: $senha</h5>";
    }



}else {
    echo "<h1 'style= color: red'>Está página não pode ser accessada diretamente</h1>";

        }





