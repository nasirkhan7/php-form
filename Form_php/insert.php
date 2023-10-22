<?php
//mysqli_connect is a function which require 4 parameters hostname,serverusername(xaxpp),password,database
  $connection= mysqli_connect("localhost","root","","f-project") or die("connection failed!!!");
  
  // SUPER GLOBAL VARIABLE // get data from the form
        $name =$_POST["name"];
        $age=$_POST["age"];
        $address =$_POST["add"];
        $email=$_POST["email"];
        // echo $name ;
        // echo $age ;
        // echo $address ;
        // echo $email  ;
        //insert data into the database
        $insert ="INSERT INTO student(name,age,address,email) VALUES ('{$name}',$age,'{$address}','{$email}') ";
        //execute the query
        mysqli_query($connection,$insert);
        header  ("Location: http://localhost/Form_php/index.php");
?>