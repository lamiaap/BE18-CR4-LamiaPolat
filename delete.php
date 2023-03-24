<?php
    require_once "connect.php"; 
    $id = $_GET["id"]; 
    $sql = "DELETE FROM products WHERE ISBN = $id"; 
    if(mysqli_query($connect,$sql)){
        header("Location: index.php"); 
    }