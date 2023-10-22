<?php
    $connection =mysqli_connect("localhost","root","","kfc-data") or die("connection failed");
    $name= $_POST["name"];
    $description=$_POST["desc"];
    $price=$_POST["price"];
    // echo "name";
    // echo"description";
    // echo "price";
    $insert="INSERT INTO menu (name,description,price) VALUES ('{$name}','{$description}',$price) ";
    mysqli_query($connection, $insert); 
    //redirect to the specific page
    header("Location: http://localhost/kfc-form/index.php");

?>