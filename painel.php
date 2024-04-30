<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<?php 
//Inicia a sessão para recuperar os dados
session_start();

//Verifica se fez login, se não fez redireciona para o login.html
if(!isset($_SESSION['nome'])){
    header("Location: login.html");
    exit();
}
?>
<body>
    <div class="login-dark">
        <form method="post" action="inc/login.php">
            <small>
                <a href="inc/sair.php?destroy_session=true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 40 40">
                        <path fill="currentColor" d="M15.269 28.146a.498.498 0 0 1-.36-.153L7.55 20.362a.498.498 0 0 1 0-.693l7.391-7.662a.5.5 0 1 1 .72.693l-7.056 7.315l7.024 7.284a.5.5 0 0 1-.36.847"/>
                        <path fill="currentColor" d="M32.09 20.516H7.91a.5.5 0 0 1 0-1h24.18a.5.5 0 0 1 0 1"/>
                    </svg>
                    Sair
                </a>
            </small>
            <h2 class="text-center mb-4">Painel</h2>
            <?php if(isset($_SESSION)): ?>
                <p class="text-center">Bem vindo (a), <strong><?php echo $_SESSION['nome']; ?></strong></p>
            <?php endif; ?>
            <div class="illustration">
                <i class="icon ion-ios-person-outline"></i>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>