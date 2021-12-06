<?php
session_start();

$usuarioCorreto= "andin";
$senhaCorreta= "40028922";

if( isset($_POST["entrar"]) ){
    $login= $_POST["login"];
    $senha= $_POST["senha"];

    if( $login == $usuarioCorreto && $senha == $senhaCorreta){
        $_SESSION["msg"] = "você está logado <3";
        $_SESSION["logado"] = true;
    }else{
        $_SESSION["msg"] = "login ou senha invalida :(";
        $_SESSION["logado"] = false;
    }
}if( isset($_SESSION["logado"])) {
    if( $_SESSION["logado"] ){
        header("location: index.php");
    }else{
        header("location: login.php");
    }
}else{
    header("location: login.php");
}
