<?php

    // connect to the database...
    $conn = new mysqli('localhost','proj_resume','redeemed4','proj_resume');

    //checking the conection..
    if(!$conn){
       echo 'connection failure '.mysqli_connect_error();
    }
   
?>