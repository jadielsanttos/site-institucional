<?php

    require_once '../classes/banner.php';
    require_once '../connection/conexao.php';
    $banner = new Banner;

    $conn = new Conexao;
    $conn->conectarDB();

 
    $banner->ExcluirImagem($_GET['img']);
        

?>