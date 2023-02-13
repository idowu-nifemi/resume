
<?php require_once('utility/db_connection.php');?>

<?php

  $errors = array('fullname' => '' , 'username' => '' , 'email' => '' , 'message' => '' , 'err' => '' );

  $fullname = $username = $email = $telephone_no = $contact_address = $state_of_origin = $date_of_birth = $password ='';

  if(isset($_POST['register'])){

      //checking fullname...
      $fullname = $_POST['fullname'];
      if(!preg_match('/^[a-zA-Z\s]+$/' , $fullname)) {
        $errors['fullname'] = " fullname must be letters and spaces only <br/> ";
      }
      
      //checking Username...
      $username = $_POST['username'];
      if(!preg_match('/^[a-zA-Z\s]+$/' , $username)) {
        $errors['username'] = " username must be letters and spaces only <br/> ";
      }
        
      //checking for emails...
      $email = $_POST['email'];
      if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "invalid email <br/>";
      }
  
      //checking for telephone..
      $telephone = $_POST['telephone_no'];
  
      //checking for contact_address..
      $contact_address = $_POST['contact_address'];
  
      //....
      $state_of_origin = $_POST['state_of_origin'];
  
      //....
      $date_of_birth = $_POST['date_of_birth'];
    
      //checking for passwords...
      $password = $_POST['password'];
        
  
      //getting the email from the database.
      $checkAccount = $conn->query("SELECT * FROM tb_accounts WHERE email ='$email' ");
      
      //fetch the resulting rows as an array.
      $row_account = $checkAccount->fetch_assoc();
  
      if(array_filter($errors)) {
        $errors['err'] =  "Error detected!";
      }else {
        
          //checking if the email has not been used before   
          if ($row_account['email'] == $email) {
            $errors['message'] = "Email exist, try using another Email <br/>";
          }else {
  
            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $email =  mysqli_real_escape_string($conn, $_POST['email']);
            $telephone_no = mysqli_real_escape_string($conn, $_POST['telephone_no']);
            $contact_address = mysqli_real_escape_string($conn, $_POST['contact_address']);
            $state_of_origin = mysqli_real_escape_string($conn, $_POST['state_of_origin']);
            $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $encPassword = md5($password); //encrypted the password
  
            //create sql:              
            $sql = "INSERT INTO tb_accounts (fullname,username,email,telephone_no,contact_address,state_of_origin,date_of_birth,password)VALUES('$fullname','$username','$email','$telephone_no','$contact_address','$state_of_origin','$date_of_birth','$encPassword')";
  
            if($conn->query($sql) === TRUE) { 
              header('location:signin.php');  
            }else {
              echo 'query error'.mysqli_error($conn);
            } 
        }  
          
      }
  }
        
?>
   

<?php include('header.php');?>

  <form class="form shadow" action="" method="post">
    <h1 class="login-title">Registration</h1>
    
    <div class="form-group">
      <label for="fullname" class = "font-weight-bold">Fullname:</label>
      <input type="text" id="fullname" class="form-control login-input" name="fullname" placeholder="Fullname"  value="<?php echo htmlspecialchars($fullname); ?>" autofocus="true" required>
      <div class="text-danger font-weight-bold"><small><?php echo $errors['fullname']; ?></small></div>
    </div>
    
    <div class="form-group">
      <label for="username" class = "font-weight-bold">Username:</label>
      <input type="text"  id="username" class="form-control login-input" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>" autofocus="true" required>
      <div class="text-danger font-weight-bold"><small><?php echo $errors['username']; ?></small></div>
    </div>
   
    <div class="form-group">
      <label for="email" class = "font-weight-bold">Email:</label>
      <input type="email" id="email" class="form-control login-input" name="email" placeholder="Email Adress"  value="<?php echo htmlspecialchars($email); ?>" required>
      <div class="text-danger font-weight-bold"><small><?php echo $errors['email']; ?></small></div>
      <div class="text-danger font-weight-bold"><small><?php echo $errors['message']; ?></small></div>
    </div>

    <div class="form-group">
      <label for="telephone_no" class = "font-weight-bold">Telephone_no:</label>
      <input type="text" id="telephone_no" class="form-control login-input" name="telephone_no" placeholder="Telephone no" value="<?php echo htmlspecialchars($telephone_no); ?>" required>
    </div>
 
    <div class="form-group">
      <label for="address" class ="font-weight-bold">Address:</label>
      <input type="text" id="address" class="form-control login-input" name="contact_address" placeholder="Address"  value="<?php echo htmlspecialchars($contact_address); ?>" required>   
    </div>

    <div class="form-group">
      <label for="state of origin" class ="font-weight-bold">State of origin:</label>
      <input type="text" id="state of origin" class="form-control login-input" name="state_of_origin" placeholder="State of Origin"  value="<?php echo htmlspecialchars($state_of_origin); ?>" required>
    </div>
      
    <div class="form-group">
      <label for="date of birth" class ="font-weight-bold">Date of birth:</label>
      <input type="date" id="date of birth" class="form-control login-input" name="date_of_birth" placeholder="dob"  value="<?php echo htmlspecialchars($date_of_birth); ?>" required>
    </div>

   
    <div class="form-group">
      <label for="password" class ="font-weight-bold">Password:</label>
      <input type="password" id="password" class="form-control login-input" name="password" placeholder="Password"  value="<?php echo htmlspecialchars($password); ?>" required>
    </div>

    <p class="link"> Already got an account?<a href="signin.php">Click Here</a></p>

    <div class="center">
     <input type="submit" name="register" value="Register" class="register-button">
    </div>

  </form>

<?php include('footer.php');?>

<script>
  alert("<?php echo $errors['err']; ?>");
</script>
