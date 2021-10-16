<section class="inicio">
    <div class="inicio">
        <div class="pesquisa">
            <h3>Comida rápida<br /> e deliciosa</h3>
            <div>
                <input type="text" placeholder="Pesquisar..." />
                <button><i data-feather="filter"></i></button>
            </div>
        </div><!--pesquisa-->

        <div class="comidas">
            <div class="filtro">
                <ul>
                    <li class="ativo">Categoria um</li>
                    <li>Categoria dois</li>
                    <li>Categoria tres</li>
                    <li>Categoria quatro</li>
                    <li>Categoria cinco</li>
                    <li>Categoria seis</li>
                    <li>Categoria sete</li>
                </ul>
            </div><!--filtro-->

            <div class="grade">
                <div class="grade-boxes">
                    <?php
                        $alimento = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.delivery`");
                        $alimento->execute();
                        $alimento = $alimento->fetchAll();
                        foreach($alimento as $key => $value){
                    ?>
                    <div class="grade-single"><a href="<?php echo INCLUDE_PATH ?>alimento?id=<?php echo $value['id'] ?>">
                        <div class="imagem">
                            <img src="<?php echo $value['imagem'] ?>" />
                        </a></div><!--imagem-->
                        <div class="descricao">
                            <h6><?php echo $value['nome'] ?></h6>
                            <p><?php echo $value['ingredientes'] ?></p>
                        </div><!--descricao-->
                        <div class="comprar">
                            <div><h4><?php echo $value['preco'] ?></h4></div>
                            <div><a href="<?php echo INCLUDE_PATH ?>?addCart=<?php echo $value['id'] ?>"><i data-feather="shopping-bag"></i></a></div>
                        </div><!--comprar-->
                    </div><!--grade-single-->
                    <?php } ?>
                </div><!--grade-boxes-->
            </div><!--grade-->
        </div><!--comidas-->
    </div><!--inicio-->
</section>