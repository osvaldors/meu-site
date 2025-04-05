<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); 
    exit;
}


// Verifica se existe uma foto do usuário na sessão
$user_foto = isset($_SESSION['user_foto']) && !empty($_SESSION['user_foto']) 
    ? $_SESSION['user_foto'] // Caminho relativo da foto
    : 'assets/img/usuarios/user.jpg'; // Caminho para uma foto padrão, caso não tenha foto

?>
