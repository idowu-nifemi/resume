<?php require_once('utility/db_connection.php');?>

<?php

  //initialize the session
  if(session_status() != PHP_SESSION_ACTIVE);
  session_start();
  
  $errors = array('email' => '' ,'message1' => '' , 'message2' => '' , 'err' => '');

  $email = $password = '';
  
  if(isset($_POST['login'])){

    //checking for emails...
    $email = $_POST['email'];
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
      $errors['email'] = "invalid email <br/>";
    }
     
    //checking for passwords...
    $password = md5($_POST['password']);
    

    $checkAccount = $conn->query("SELECT * FROM tb_accounts WHERE email='$email'");

    //fetch the resulting rows as an array.
    $row_account = $checkAccount->fetch_assoc();

    if ($row_account['email'] == $email) {
      if ($row_account['password'] != $password) {
        $errors['message2'] = "Wrong password, try again <br/>";
      }
    } else {
      $errors['message1'] = "This email does not exist,check well.<br/>";
    }

      //echo var_dump($row_account);
      if(array_filter($errors)) {
        $errors['err']  = "Error detected!";
      } else {
        $_SESSION['userInSession'] = $row_account['id'];
        $_SESSION['fullname'] = $row_account['fullname'];

        header('location:dashboard.php');
      }

  }
?>

<?php include('header.php');?>

  <form class="form shadow" method="post" action="">
        <h1 class="login-title">Log In</h1>     
        
        <div class="form-group">
          <label for="email" class = "font-weight-bold">Email:</label>
          <input type="email" id="email" class="form-control login-input" name="email" placeholder="Email Address" autofocus="true" required>
          <div class="text-danger font-weight-bold"><small><?php echo $errors['email']; ?></small></div>
          <small class = "text-danger font-weight-bold"><?php echo $errors['message1']; ?></small>
        </div>
        
       <div class="form-group">
        <label for="password" class = "font-weight-bold">Password:</label>
        <input type="password" id="password" class="form-control login-input" name="password" placeholder="Password" required>
        <small class = "text-danger font-weight-bold"><?php echo $errors['message2']; ?></small>
       </div>
        
        <div class="center small font-italic text-center">
          <p class="link">New Here ? <a href="signup.php">Create an Account?</a></p>
        </div>

        <div class="center">
          <input type="submit" value="Login" name="login" class="login-button"> 
        </div>

        <p class="link"><a class="" href="#"> Forgot password ?</a></p>  
  </form>

<?php include('footer.php');?>

<script>
  alert("<?php echo $errors['err']; ?>");
</script>


