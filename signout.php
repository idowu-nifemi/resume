<?php
  //initialize the session

  if(session_status() != PHP_SESSION_ACTIVE);
    session_start();
 
    session_destroy();

    header('location:signin.php');
    //action session : where by you click the signout yourself.
?>