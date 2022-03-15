<?php 

    class Banner{
        public $pdo;

        public function listar_banners(){
            global $pdo;

            $sql = $pdo->prepare("SELECT * FROM `imagens` ORDER BY ID_IMAGEM DESC LIMIT 6");
            $sql->execute();
            $info = $sql->fetchAll();

            foreach ($info as $key => $value) { 
                
                if($key > 0){  ?>
                    <div class="carousel-item backImg " >
                        <img class="d-block w-100 h-800" src="<?php print_r($value['DIRETORIO_IMG']); ?>" >
                    </div>
                <?php

                }else{ ?>

                    <div class="carousel-item backImg active" >
                        <img class="d-block w-100" src="<?php  print_r($value['DIRETORIO_IMG']); ?>" >
                    </div>

                <?php
                }
                
                ?>

            <?php

            }

        }

        public function InserirImagem($DiretorioFinal){
            global $pdo;
            
            $query = $pdo->prepare("INSERT INTO `imagens` VALUES (null,'$DiretorioFinal') ");
           
            try {
                if($query->execute()){
                    echo "<script> alert('Imagem adicionada com sucesso!') </script>";
                    echo "<script>window.location.href = '../index.php'</script>";
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            
        }

        public function ListarImagensCadastradas(){
            global $pdo;
    
            $sql = $pdo->prepare("SELECT  * FROM `imagens` ORDER BY ID_IMAGEM DESC");
            $sql->execute();
            $info = $sql->fetchAll();
    
            foreach ($info as $key => $value) { ?>

                <p>
                    <span>Imagem <?php echo $key; ?> <a href="excluir.php?img=<?php print_r($value['ID_IMAGEM']); ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">excluir</a></span>
                </p>
                <?php

                
            }
               
            
        }

        public function ExcluirImagem($idImagem){
            global $pdo;
    
            $this->ExcluirArquivoImagem($idImagem);
            $query = $pdo->prepare("DELETE FROM `imagens` WHERE ID_IMAGEM = $idImagem");
            $query->execute();
            echo $idImagem;
    
        }

        public function ExcluirArquivoImagem($idImagem){
            global $pdo;
    
            $sql = $pdo->prepare("SELECT * FROM `imagens` WHERE ID_IMAGEM =  $idImagem");
            $sql->execute();
            $info = $sql->fetch();
            $valor = $info['DIRETORIO_IMG'];
           
            unlink("../".$valor);
            echo "<script> alert('Imagem excluida com sucesso!') </script>";
            echo "<script> window.location.href = 'index.php'; </script>";
    
        }


    }

?>