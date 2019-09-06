<?php
//Inicializando a sessão
session_start();

//É necessário fazer a conexão com o Banco de Dados
require_once "configDB.php";

function verificar_entrada($entrada)
{
    $saida = trim($entrada); //Remova espaços antes e depois
    $saida = stripslashes($saida); //remove as barras
    $saida = htmlspecialchars($saida);
    return $saida;
}

if (
    isset($_POST['action']) &&
    $_POST['action'] == 'login'
) {
    //Verificação e Login do usúario
    $nomeUsuario = verificar_entrada($_POST['nomeUsuario']);
    $senhaUsuario = verificar_entrada($_POST['senhaUsuario']);
    $senha = sha1($senhaUsuario);
    //Para teste
    //echo "<br>Usuário: $nomeUsuario <br> senha: $senha";
    $sql = $conecta->prepare("SELECT * FROM usuario WHERE nomeUsuario = ? AND senha = ?");
    $sql->bind_param("ss", $nomeUsuario, $senha);
    $sql->execute();

    $busca = $sql->fetch();

    if ($busca != null) {
        //Colocando o nome do usuário na Sessão
        $_SESSION['nomeUsuario'] = $nomeUsuario;
        echo "ok";
    } else {
        echo "usuário e senha não conferem!";
    }
} else if (
    isset($_POST['action']) &&
    $_POST['action'] == 'cadastro'
) {
    //Cadastro de um novo usuário
    //pegar os campos do formulários
    $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
    $nomeUsuario = verificar_entrada($_POST['nomeUsuário']);
    $emailUsuario = verificar_entrada($_POST['emailUsuário']);
    $senhaUsuario = verificar_entrada($_POST['senhaUsuário']);
    $senhaConfirma = verificar_entrada($_POST['senhaConfirma']);
    $imagens = verificar_entrada($_POST['imagens']);
    $concordar = $_POST['concordar'];
    $dataCriacao = date ("Y-m-d H:i:s");


    $senha = sha1($senhaUsuario);
    $senhaC = sha1($senhaConfirma);

    if ($senha != $senhaC) {
        echo "<h1>As senhas não conferem</h1>";
        exit();
    } else {
        //echo "<h5> senha codificada: $senha</h5>";
        //Verificar se o usuário já existe no banco de dados
        $sql = $conecta->prepare("SELECT nomeUsuario, email FROM usuario WHERE nomeUsuario = ? OR email = ?");
        //Substitui cada ? por uma string abaixo
        $sql->bind_param("ss", $nomeUsuario, $emailUsuario);
        $sql->execute();
        $resultado = $sql->get_result();
        $linha = $resultado->fetch_array(MYSQLI_ASSOC);
        if ($linha['nomeUsuario'] == $nomeUsuario) {
            echo "<p>Nome de usuário indisponível, tente outro</p>";
        } elseif ($linha['email'] == $emailUsuario) {
            echo "<p>E-mail já em uso, tente outro</p>";
        } else {
            $sql = $conecta->prepare("INSERT into usuario (nome, nomeUsuario, email, senha, dataCriacao, imagens) values(?, ?, ?, ?, ?, ?)");
            $sql->bind_param("ssssss", $nomeCompleto, $nomeUsuario, $emailUsuario, $senha, $dataCriacao, $imagens);
            if ($sql->execute()) {
                echo "<p>Registrado com sucesso</p>";
            } else {
                echo "<p>Algo deu errado. tente outra vez.</p>";
            }
        }
    }
} else {
    echo "<h1 'style = color: red'> Está página não pode ser acessado diretamente</h1>";
}
