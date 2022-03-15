<?php
    require_once '../connection/conexao.php';
    require_once '../classes/banner.php';
    require_once '../classes/usuarios.php';
    require_once '../classes/depoimentos.php';
    $depoimento = new Depoimento;
    $banner = new Banner;
    $conn = new Conexao;
    $user = new Usuarios;
    $conn->conectarDB();

    if(isset($_SESSION['logado']) && !empty($_SESSION['logado'])) {

    }else {
        header('location: login.php');
        exit;
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@300;400;600;700&family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../assets/css/painel.css">
    <title>Admin</title>
    <style>
        .envioImgfeedback{
            display: none;
        }

    </style>
</head>
<body>
    <header>
        <div class="first-menu">
            <div class="logo">
                <img src="../assets/images/logo.png" alt="">
            </div>
            <div class="menu">
                <img src="../assets/images/menu.png" alt="" id="menu-opener" onclick="toggleMenu()">
                <nav id="menu-mobile">
                    <ul>
                        <li><a href="../index.php">acessar site</a></li>
                        <li><a href="logout.php">sair</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="form-banner">
        <h3>Adicionar banner (500px de altura)</h3>
        <form action="upload/envio.php" method="POST" enctype="multipart/form-data"> 
            <input type="file" class="form-control-file" name="arquivo_imagem" required><br>
            <button type="submit" id="btnEnviarImagem" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Inserir banner</button>
        </form><br>
        <?php $banner->ListarImagensCadastradas(); ?>
    </div>


    <section class="container">
        <div class="title">
            <h3>Inserir Depoimento</h3>
        </div>
        <div class="add-depoimento">
            <form method="post" id="frmDepoimentoTxt">
                <label for="nome">Nome</label><br>
                <input type="text" name="nomeFeedback" placeholder="nome..." required><br><br>

                <label for="comentario">Descrição</label><br>
                <textarea name="descFeedback" id="descricao" cols="30" rows="5" placeholder="feedback" required></textarea><br><br>

                <button type="submit" name="btn_comentario" id="btnEnviarComentario">enviar</button>
            </form>

            <div class="envioImgfeedback" id="divEnvioImgFeedBack">
            <form action="upload/envio.php?feedback=img" method="post" enctype="multipart/form-data">
                <h4><b>Envie uma imagem de perfil</b></h4>
                <input  type="file" name="imagem_usuario" required>
                <br>
                <button class="btn btn-primary" name="Confirmarfeedback" type="submit">Continuar</button>
            </form>
            </div>
            
        </div>
    </section>

    <?php 

        
        if(isset($_POST['btn_comentario'])){
            $nome = $_POST['nomeFeedback'];
            $desc = $_POST['descFeedback'];
           
            $_SESSION['FEEDBACK'] = array($nome,$desc);
            echo "<script>
                    document.getElementById('frmDepoimentoTxt').style = 'display: none';
                    document.getElementById('divEnvioImgFeedBack').style = 'display: block';
                  </script>";
        }


    ?>

        <script>
          $('#btnEnviarImagem').hide();

           $('input[type="file"]').change(function(e) {
                  $('#btnEnviarImagem').fadeIn(100);
            });

            function toggleMenu() {
                let menuMobile = document.getElementById('menu-mobile');

                if(menuMobile.style.display == 'block') {
                    menuMobile.style.display = 'none';
                }else {
                    menuMobile.style.display = 'block';
                }
             }
        </script> 

<script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>