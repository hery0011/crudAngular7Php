<?php
    require 'connect.php';
    $id = $_GET['id'];
    
    $sql = "DELETE FROM students WHERE  sId=$id";
    $result = $con->query($sql);

    $sql1 = "DELETE FROM bultin WHERE  sId=$id";
    $result1 = $con->query($sql1);

    $con->close();