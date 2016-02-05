<?php
 	   $servername = "localhost";
       $username = "allproje";
       $password = "n4Wk71v7rE";
       $dbname = "allproje_posdb";

       $conn = mysqli_connect($servername, $username, $password, $dbname);
       if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
       }
       $conn->set_charset("utf8")
?>