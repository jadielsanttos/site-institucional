<?php   

    try {
        require_once 'connection/conexao.php';
        require_once 'classes/banner.php';
        require_once 'classes/depoimentos.php';
        $depoimento = new Depoimento;
        $conn = new Conexao;
        $banner = new Banner;

        $conn->conectarDB();

    } catch (PDOException $err) {
        echo 'Erro inesperado: '.$e;
    }



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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Swipper cdn -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/carrossel.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="first-menu">
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>

            <div class="itens-detals">
                <img src="assets/images/menu.png" alt="" id="menu-opener" onclick="toggleMenu()">
                <ul>
                    <li><i class="fa-solid fa-phone-flip"></i> 17 0000 0000</li>
                    <li><i class="fa-solid fa-location-dot"></i> Rua Floriano Peixoto, 1084 - sala 21</li>
                    <li><i class="fa-solid fa-clock"></i> Segunda a Sexta das 8h às 18h</li>
                </ul>
            </div>
        </div>
        <div class="header">
            <div class="menu">
                <nav id="menu-mobile">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#Especialidades">Especialidades</a></li>
                        <li><a href="#Sobre">Sobre</a></li>
                        <li><a href="#Noticias">Notícias</a></li>
                        <li><a href="#Localizacao">Localização</a></li>
                        <li><a href="#Depoimentos">Depoimentos</a></li>
                        <li><a href="#Contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header><!--fechando header-->

    <main class="banner-content">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
                <?php $banner->listar_banners(); ?>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>
    
    <section>
        <div class="banner-mobile">
            
        </div>
    </section>


    <section id="Especialidades" class="especialidades">
        <div class="content">
            <h5>Especialidades</h5>
            <h2>Áreas de atuação</h2>

            <div class="items">
                <div class="item">
                    <div class="icons-main"><i class="fa-solid fa-hand-holding-medical"></i></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="item">
                    <div class="icons-main"><i class="fa-solid fa-capsules"></i></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="item">
                    <div class="icons-main"><i class="fa-solid fa-heart-pulse"></i></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="item">
                    <div class="icons-main"><i class="fa-solid fa-bong"></i></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="Sobre" class="sobre">
        <div class="content-sobre">
            <div class="sobre-left">
                <img src="assets/images/medica.png" alt="">
            </div>

            <div class="sobre-right">
                <h5>Sobre</h5>
                <h2>Dr Ana Batista De Souza</h2>
                <h4>CRO-SP 00000</h4>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, deserunt ea quia eaque magnam dolores amet voluptate eligendi, excepturi.</p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, deserunt ea quia eaque magnam dolores amet voluptate eligendi, excepturi.</p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, deserunt ea quia eaque magnam dolores amet voluptate eligendi</p>

                <h1>Dr. Ana Batista De Souza</h1>
            </div>
        </div>
    </section>

    <section id="Noticias" class="noticias">
        <div class="content-noticias">
            <h5>Notícias</h5>
            <h2>Fique por dentro</h2>
        </div>  

        <div class="container" id="container">
            <div class="card">
                <img src="assets/images/image1.jpg" alt="">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                </div>
            </div>

            <div class="card">
                <img src="assets/images/image2.jpg" alt="">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                </div>
            </div>

            <div class="card">
                <img src="assets/images/image3.jpg" alt="">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                </div>
            </div>
        </div>
    </section>


    <section id="Localizacao" class="localizacao">
        
    </section>

    
    <section id="Depoimentos" class="depoimentos">

         <!-- Area comentarios -->
        <div class="content-depoimentos">
            <h5>Depoimentos</h5>
            <h2>Pacientes satisfeitos</h2>

            <div class="swiper-comments-content">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">


                    <?php 
                        $depoimento->listarDepoimento();
                    ?>
                               

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
            <!-- / Area comentarios -->
       

        </div>
    </section>


    <section id="Contato" class="contato">
        <div class="content-contato">
            <div class="itens-contato">
                <div class="item">
                    <img src="assets/images/logo.png" alt="">
                </div>

                <div class="item">
                    <ul>
                        <li><i class="fa-solid fa-phone-flip"></i> 17 0000 0000</li>
                        <li id="li-single"><i class="fa-solid fa-location-dot"></i> Rua Floriano Peixoto, 1084<br>sala 21 - Boa Vista São José Do Rio Preto - SP</li>
                        <li><i class="fa-solid fa-clock"></i> Segunda a Sexta das 8h às 18h</li>
                    </ul>
                </div>

                <div class="item-single">
                    <ul class="social-media">
                        <li><a href=""><i class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter-square"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="footer">
        <footer>
            <div class="footer-items">
                <div class="footer-item-left">
                    <p>Logo Saúde - Todos os direitos reservados</p>
                </div>

                <div class="footer-item-right">
                    <p>Criação de sites <strong>W3Mídia</strong></p>
                </div>
            </div>
        </footer>
    </section>

    <i class="fa-solid fa-circle-arrow-up btn-scroll" onclick="scrollToUp()"></i>



<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script src="assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>