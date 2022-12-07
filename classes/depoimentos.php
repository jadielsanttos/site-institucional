<?php 

    class Depoimento {
        public $pdo;

        public function addDepoimento($nome,$descricao,$img) {
            global $pdo;

            $sql = $pdo->prepare("SELECT * FROM depoimentos WHERE nome = :nome");
            $sql->bindValue(':nome', $nome);
            $sql->execute();

            if($sql->rowCount() > 0) {
                echo "<script>alert('Você ja inseriu um depoimento...')</script>";
            }else {
                $sql = $pdo->prepare("INSERT INTO depoimentos VALUES (null,?,?,?)");
                $sql->execute(array($nome,$descricao,$img));
                echo "<script>alert('Seu feedback foi enviado!')</script>";
                echo "<script>window.location.href = '../index.php'</script>";
            }
        }

        public function listarDepoimento() {
            global $pdo;

            $sql = $pdo->prepare("SELECT * FROM depoimentos ORDER BY ID DESC ");
            $sql->execute();
            $info = $sql->fetchAll();

            foreach ($info as $key => $value) { ?>
                

                <div class="swiper-slide">
                    <div class="wrapper-box-comment">
                    <div class="area-img-client">
                        <img src="<?php print_r($value['diretorio']); ?>" alt="">
                    </div>

                    <div class="area-depoimento">
                        <p><i class="fa-solid fa-quote-left"></i> 
                        <?php print_r($value['descricao']); ?>
                        <i class="fa-solid fa-quote-right"></i></p>
                        <h4><?php print_r($value['nome']); ?></h4>
                    </div>

                    </div>
                </div>

            <?php
            }
            
        }



    }

   

?>