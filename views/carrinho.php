<?php
    if(!isset($_SESSION['carrinho'])){
        die('Seu carrinho está vázio');
    }
?>
<section class="carrinho">
    <div class="carrinho">
        <div class="carrinho-boxes">
            <?php
                $carrinhoItems = $_SESSION['carrinho'];
                foreach($carrinhoItems as $key => $value){
                    $idItem = $value;
                    $item = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.delivery` WHERE  id = $idItem");
                    $item->execute();
                    $item = $item->fetch();
            ?>
            <div class="carrinho-single">
                <div class="imagem-carrinho">
                    <img src="<?php echo $item['imagem'] ?>" />
                </div><!--imagem-carrinho-->
                <div class="info-carrinho">
                    <h6><?php echo $item['nome']; ?></h6>
                    <p><?php echo $item['ingredientes'] ?></p>
                    <h4><?php ?></h4>
                </div><!--info-carrinho-->
                <div class="excluir">
                    <span><i data-feather="x"></i></span>
                </div><!--excluir-->
            </div><!--carrinho-single-->
            <?php } ?>
        </div><!--carrinho-boxes-->
    </div><!--carrinho-->
</section><!--carrinho-->