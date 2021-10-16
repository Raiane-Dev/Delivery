<?php
    if(!isset($_SESSION['tipo_pagamento'])){
        die('Você não fechou o pedido');
    }
?>
<section class="historico">
    <div class="historico">
        <div class="historico-boxes">
            <?php
                $carrinhoItems = $_SESSION['carrinho'];
                foreach($carrinhoItems as $key => $value){
                    $idItem = $value;
                    $item = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.delivery` WHERE id = $idItem");
                    $item->execute();
                    $item = $item->fetch();
            ?>
            <div class="historico-single">
                <div class="imagem-historico">
                    <img src="<?php echo $item['imagem'] ?>" />
                </div><!--imagem-historico-->
                <div class="info-historico">
                    <h6><?php echo $item['nome']; ?></h6>
                    <p>Tempo: <?php echo $item['tempo']?></p>
                    <h4><?php echo $item['preco'] ?></h4>
                </div><!--info-historico-->
                <div class="excluir">
                    <?php
                        if($_SESSION['tipo_pagamento'] == 'cartao credito'){
                            echo '<i data-feather="credit-card"></i>';
                        }else if($_SESSION['tipo_pagamento'] == 'cartao debito'){
                            echo '<i data-feather="credit-card"></i>';
                        }else if($_SESSION['tipo_pagamento'] == 'dinheiro'){
                            echo '<i data-feather="dollar-sign"></i>';
                        }
                    ?>
                </div><!--excluir-->
            </div><!--historico-single-->
            <?php } ?>
        </div><!--historico-boxes-->
        <a href="<?php echo INCLUDE_PATH ?>historico?resetar">Pedido Entregue!</a>
        <?php
            if(isset($_GET['resetar'])){
                session_destroy();
                header('Location: '.INCLUDE_PATH);
            }
        ?>
    </div><!--historico-->
</section><!--historico-->