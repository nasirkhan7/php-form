<?php
        $connection =mysqli_connect("localhost","root","","f-project");
    $id=$_POST['id'];
    $name=$_POST['name'] ;   
    $age=$_POST['age'] ;   
    $address=$_POST['address'] ;   
    $email=$_POST['email'] ;   
    $update= "UPDATE student set name='{$name}',age=$age,address='{$address}',email='{$email}' WHERE id =$id";
    mysqli_query($connection,$update) ;
    header("Location: http://localhost/Form_php/showData.php");
?> 