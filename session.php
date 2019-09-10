<?php
// Iniciando a sessão
session_start();
require_once 'configDB.php';

if (isset($_SESSION['nomeUsuario'])) {
    // echo "usuário logado";
    $usuario = $_SESSION['nomeUsuario'];
    $sql = $conecta->prepare("SELECT * FROM usuario WHERE nomeUsuario = ?");
    $sql->bind_param("s", $usuario);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);

    $nome = $linha['nome'];
    $email = $linha['email'];
    $d = $linha['dataCriacao'];
    $dataCriacao = $d = new DateTime($d);
    $dataCriacao = $d->format('d/m/y H:i:s');

    $imagem =$linha['imagens'];
} else {
    // kick
    header("location: index.php");
}
