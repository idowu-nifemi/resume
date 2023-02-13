
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

    <div class="container">
        <div class="row py-5">

            <div class="col-lg-7 col-md-12 px-5">
                <div class="card text-center w-75">
                <div class="card-header">
                    <h4 class="card-title text-success">references</h4>
                </div>    
                <div class="card-body">
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil harum autem 
                        ut asperiores a eligendi blanditiis unde, aspernatur s
                        imilique vero ratione quisquam sunt officia numquam exercitationem? Expedita, accusantium aperiam.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil harum autem 
                        ut asperiores a eligendi blanditiis unde, aspernatur s
                        imilique vero ratione quisquam sunt officia numquam exercitationem? Expedita, accusantium aperiam.
                    </p>
                    
                </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 px-5">
                <div class="card w-75">
                    <div class="card-body">
                        <h4 class="card-title text-success">References</h4>

                        <form action="" method="post">
                          <div class="form-group">
                            <label for="title" class = "text-muted font-weight-bold">Title:</label>
                            <input type="text" id="title" class="form-control login-input" name="title" placeholder="" autofocus="true" required>
                          </div>

                          <div class="form-group">
                            <label for="ref_name" class = "text-muted font-weight-bold">Reference name:</label>
                            <input type="text" id="ref_name" class="form-control login-input" name="ref_name" placeholder="add your reference" autofocus="true" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="occupation" class = "text-muted font-weight-bold">Occupation:</label>
                            <input type="text" id="occupation" class="form-control login-input" name="occupation" placeholder="occupation" autofocus="true" required>
                          </div>

                          <div class="form-group">
                            <label for="details" class = "text-muted font-weight-bold">Details:</label>
                            <input type="text" id="details" class="form-control login-input" name="details" placeholder="add details" autofocus="true" required>
                          </div>

                          <div class="form-group">
                            <label for="email" class = "text-muted font-weight-bold">Email:</label>
                            <input type="text" id="email" class="form-control login-input" name="email" placeholder="add reference email" autofocus="true" required>
                          </div>

                          <div class="form-group">
                            <label for="telephone _no" class = "text-muted font-weight-bold">Telephone no:</label>
                            <input type="text" id="telephone_no" class="form-control login-input" name="telephone_no" placeholder="add reference telephone no" value="<?php echo htmlspecialchars($telephone_no); ?>" required>
                          </div>

                            <br>

                            <div class="center">
                              <input type="submit" name="reference" value="Add Reference" class="btn btn-sm text-white btn-primary">
                            </div>

                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

            
<?php include('footer.php');?>