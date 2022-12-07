<?php 
    require_once '../connection/conexao.php';
    require_once '../classes/usuarios.php';
    $conn = new Conexao;
    $user = new Usuarios;
    $conn->conectarDB();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@300;400;600;700&family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/painel.css">
    <title> Login - Painel</title>
</head>
<body>
    <header>
        <div class="first-menu">
            <div class="logo">
                <img src="../assets/images/logo.png" alt="">
            </div>
        </div>
    </header>

    <section class="main">
        <div class="title">
            <h1>Área restrita</h1></div>
        <div class="login">
            <form method="post">
                <label for="email">Email</label>
                <input type="email" name="email" autofocus="on" required>

                <label for="senha">Senha</label>
                <input type="password" name="senha" required>

                <button type="submit">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Entrar
                </button>
            </form>
        </div>
    </section>


    <?php 

        if(isset($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if($user->logar($email,$senha) == true) {
                if(isset($_SESSION['logado'])) {
                    header('location: index.php');
                }else {
                    echo "<script>alert('Dados incorretos, verifique e tente novamente!')</script>";
                }
            }else {
                echo "<script>alert('Dados incorretos, verifique e tente novamente!')</script>";
            }
        }
     
    
    ?>
<script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>  
</body>
</html>