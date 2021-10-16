<?php
    if(!isset($_SESSION['carrinho'])){
        die('Seu carrinho está vázio');
    }
    $carrinhoItems = $_SESSION['carrinho'];
    $total = 0;
    foreach($carrinhoItems as $key => $value){
        $idItem = $value;
        $item = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.delivery` WHERE id = $idItem");
        $item->execute();
        $item = $item->fetch();
        @$valor = $value * $item['preco']; 
        $total+=$valor;
    }
?>
<section class="finalizar">
    <div class="finalizar">
        <div class="finalizar-header">
            <button>Finalizar Pedido</button>
        </div><!--finalizar-header-->
        <div class="formulario-finalizar">
            <form method="post">

                <label>Endereço</label>
                <input type="text"/>

                <label>Completo</label>
                <input type="text"/>

                <label>Método de Pagamento</label>
                <select name="opcao_pagamento">
                    <option value="cartao credito">Cartão de Crédito</option>
                    <option value="cartao debito">Cartão de Débito</option>
                    <option value="dinheiro">Dinheiro</option>
                </select>

                <label class="troco">Troco para Quanto?</label>
                <input name="troco" class="troco" type="number"/>

                <div class="form-grupo">
                <div><p>Preço total</p><span> <?php echo number_format($total, 2, ',', ' '); ?> </span></div>
                <div><input type="submit" name="acao" value="Comprar"/></div>
                </div><!--form-grupo-->
            </form>
        </div><!--formulario-finalizar-->
    </div><!--finalizar-->
</section><!--finalizar-->
<?php
    if(isset($_POST['acao'])){
        if(!isset($_SESSION['carrinho'])){
            die('Você não tem nada no carrinho');
        }

        $metodoPagamento = $_POST['opcao_pagamento'];
        $_SESSION['tipo_pagamento'] = $metodoPagamento;
        $_SESSION['total'] = $total;
        if($metodoPagamento == 'dinheiro'){
            if($_POST['troco'] != ''){
                $valorTroco = $_POST['troco'] - $total;
                if($valorTroco >= -0){
                $_SESSION['valor_troco'] = $valorTroco;
                }else{
                    die('Você não especificou o valor do troco');
                    echo '<script>location.href="'.INCLUDE_PATH.'";</script>';
                }
            }else{
                die('<script> alert("Você precisa preencher o campo de troco."); </script>');
            }
        }
        echo('<script> alert("Seu pedido foi efetuado com sucesso, por favor aguarde."); </script>');
        echo('<script>location.href="'.INCLUDE_PATH.'historico";</script>');
    }
?>