<?php
                $connection =mysqli_connect("localhost","root","","f-project");
                $id=$_GET['id'];
                $delete="DELETE FROM student WHERE id= $id";
                mysqli_query($connection, $delete);
    header("Location: http://localhost/Form_php/showData.php");

?>