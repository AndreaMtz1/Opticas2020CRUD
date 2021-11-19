<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM Clientes WHERE Id = '$id'";
$query = mysqli_query($con, $sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
