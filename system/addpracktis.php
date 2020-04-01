<?php
    session_start();
    include "../config/conn.php";

    $id_pracktis = $_POST['id_pracktis'];
    $engine_name = $_POST['engine_name'];
    $dimension = $_POST['dimension'];
    $output = $_POST['output'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $row = $dbconnect->query("INSERT INTO pracktis VALUES ('$id_pracktis', '$engine_name', '$dimension', '$output', '$price', '$stock')");

    header("location:../views/admin/pracktis.php?page=1A");
?>