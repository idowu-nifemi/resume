<?php require_once('utility/db_connection.php');?>

<?php

 //initialize the session.
    if(session_status() != PHP_SESSION_ACTIVE);
    session_start();

    //conditional session destroy
    $userInSession = $_SESSION['userInSession'];
    $fullname = $_SESSION['fullname'];

    if ($userInSession == NULL) {
        header('location:signin.php');
    }

?>

<?php include('header.php');?>

 <div class="bg-white">

 
 </div>

            

<?php include('footer.php');?>