<?php

    class deliveryModel{
        public static $items = array();

        public static function addToCart($idProduto){
            if(!isset($_SESSION['carrinho'])){
                $_SESSION['carrinho'] = array();
            }
            $_SESSION['carrinho'][] = $idProduto;
        }

        public static function getItemsCart(){
            return $_SESSION['carrinho'];
        }
        public static function getItem($id){
            return self::$items[$id];
        }

        public static function getTotalPedido(){
            $valor = 0;
            foreach($_SESSION['carrinho'] as $key => $value){
                $itemPreco = self::getItem($value['preco']);
                $valor+=$itemPreco;
            }
            return $valor;
        }
    }
?>