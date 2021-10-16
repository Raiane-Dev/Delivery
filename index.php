<?php
    session_start();
    include('MySql.php');
    include('config.php');
    require('deliveryController.php');
    require('deliveryModel.php');

    $deliveryController = new deliveryController();
    
    include('views/modelos/header.php');

    $deliveryController->index();

    include('views/modelos/footer.php');
?>