<?php
// Defina a senha que deseja usar
$password = "12345";

// Gera o hash da senha
$hash = password_hash($password, PASSWORD_BCRYPT);

// Exibe o hash gerado
echo "Senha: $password<br>";
echo "Hash gerado: $hash";
?>
