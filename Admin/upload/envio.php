<?php

        require_once '../../connection/conexao.php';
        require_once '../../classes/banner.php';
        require_once '../../classes/AddDepoimento.php';
        $conn = new Conexao;
        $banner = new Banner;
        $dep = new Depoimento;

        $conn->conectarDB();

        if(isset($_GET['feedback'])){

            $nome_arquivo = $_FILES['imagem_usuario']['name'];
            $caminhoAtual = $_FILES['imagem_usuario']['tmp_name'];
            $novo_nome = rand(0000000000000,9999999999999).".jpg";
            $caminhoSalvar = '../data_images/'."IMG_USR_".$novo_nome;
            $DiretorioFinal = "Admin/data_images/"."IMG_USR_".$novo_nome;
            
            if(move_uploaded_file($caminhoAtual,$caminhoSalvar)){
                $dep->addDepoimento($_SESSION['FEEDBACK'][0],$_SESSION['FEEDBACK'][1],$DiretorioFinal);
            }else{
                echo "<script> alert('Erro ao enviar imagem') </script>";
            }

        }else if(!$_GET){
            $nome_arquivo = $_FILES['arquivo_imagem']['name'];
            $caminhoAtual = $_FILES['arquivo_imagem']['tmp_name'];
            $novo_nome = rand(0000000000000,9999999999999).".jpg";
            $caminhoSalvar = '../data_images/'."BANNER_".$novo_nome;
            $DiretorioFinal = "Admin/data_images/"."BANNER_".$novo_nome;
            
            if(move_uploaded_file($caminhoAtual,$caminhoSalvar)){
                $banner->InserirImagem($DiretorioFinal);
            }else{
                echo "<script> alert('Erro ao enviar imagem') </script>";
            }
        }

    
        
    

?>