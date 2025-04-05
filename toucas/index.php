<?php
session_start();
require 'db_connection.php'; // Arquivo com a conexão ao banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Consulta o banco de dados para verificar o usuário
    $stmt = $conn->prepare("SELECT id, nome, senha_hash, foto FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();


       

        // Verifica a senha usando password_verify
        // if (password_verify($password, $user['senha_hash'])) {

        if ($password === $user['senha_hash']) {
            // Configura a sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nome'];
            $_SESSION['user_foto'] = $user['foto'];
            
            header("Location: adulto.php");
            exit;
        } else {
            $error = "Usuário ou senha incorretos.";
        }
    } else {
        $error = "Usuário ou senha incorretos.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt_BR" class="no-js">


<head>
    <title>Agitação - Natação | Gestão de toucas</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gestão de toucas - Agitação Natação">
    <meta name="description" content="Gestão de toucas - Agitação Natação">

    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parkinsans:wght@300..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="./assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="./assets/css/theme.css">

    <style>
    body {
        font-family: "Parkinsans", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }

    .btn-primary {
        color: #fff;
        background-color: #474396;
        border-color: #474396;
    }

    /* Estilo geral para navegadores modernos */
    * {
        scrollbar-width: thin;
        /* Largura fina para Firefox */
        scrollbar-color: #797aae #ffffff;
        /* Thumb e track (Firefox) */
    }
    </style>
</head>

<body>
    <main class="container-fluid w-100" role="main">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
                <a class="u-login-form py-3 mb-auto" href="index.html">
                    <img class="img-fluid" src="./assets/img/logo-agitacao.webp" width="500"
                        alt="Agitação Esportes">
                </a>

                <div class="u-login-form">
                    <form class="mb-3" method="POST" action="">
                        <div class="mb-3">
                            <h1 class="h2">Gestão de Toucas</h1>
                            <p class="small">
                                Organize e acompanhe facilmente o cadastro de alunos, o controle de estoque e a
                                distribuição de toucas. 🌊
                            </p>
                        </div>

                        <!-- Exibe mensagem de erro se houver -->
                        <?php if (isset($error)): ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($error) ?>
                        </div>
                        <?php endif; ?>

                        <div class="form-group mb-4">
                            <label for="username">Usuário</label>
                            <input id="username" class="form-control" name="username" type="text"
                                placeholder="Seu usuário" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Senha</label>
                            <input id="password" class="form-control" name="password" type="password"
                                placeholder="Sua senha" required>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                    </form>
                </div>

                <div class="u-login-form text-muted py-3 mt-auto">

                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                <img class="img-fluid position-relative u-z-index-3 mx-5" src="./assets/img/img-login.png"
                    alt="Image description">

                <figure class="u-shape u-shape--top-right u-shape--position-5">
                    <img src="./assets/svg/shapes/shape-1.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-left u-shape--position-6">
                    <img src="./assets/svg/shapes/shape-2.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--center-right u-shape--position-7">
                    <img src="./assets/svg/shapes/shape-3.svg" alt="Image description">
                </figure>
                <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                    <img src="./assets/svg/shapes/shape-4.svg" alt="Image description">
                </figure>
            </div>
        </div>
    </main>
</body>

</html>