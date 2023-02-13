    <?php

    // connect to database
    $conn = new mysqli('localhost','vivi_project','project','vivi_project');

    //checking the conection..
    if(!$conn){
       echo 'connection error '.mysqli_connect_error();
    }
   
    ?>