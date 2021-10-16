<?php
    $id = $_GET['id'];
    $alimento = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.delivery` WHERE id = '$id'");
    $alimento->execute();
    $alimento = $alimento->fetch();
?>
<section class="alimento">
    <div class="alimento">

        <div class="imagem-alimento">
            <img src="<?php echo $alimento['imagem'] ?>" />
        </div><!--imagem-alimento-->
        <div class="info-alimento">
            <div class="lista-informacoes">
                <ul>
                    <li><i data-feather="sun"></i> <p> 130 cal</p></li>
                    <li><i data-feather="clock"></i> <p> <?php echo $alimento['tempo'] ?></p></li>
                    <li><i data-feather="star"></i> <p> 4.9 votos</p></li>
                    <li><i data-feather="pie-chart"></i> <p> <?php echo $alimento['peso'] ?></p></li>
                </ul>
            </div><!--lista-informacoes-->
            <div class="descricao-alimento">
                <h6>Descrição</h6>
                <p><?php echo $alimento['descricao'] ?></p>
            </div><!--descricao-alimento-->
        </div><!--info-alimento-->

        <div class="comprar-alimento">
            <div>
                <h6>R$<?php echo $alimento['preco'] ?></h6>
            </div>
            <div>
                <a href="<?php echo INCLUDE_PATH ?>alimento?id=<?php echo $alimento['id']; ?>?addCart=<?php echo $alimento['id'] ?>">Comprar Agora</a>
            </div>
        </div><!--comprar-alimento-->
    </div><!--alimento-->
</section><!--alimento-->