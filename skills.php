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
      <div class="row p-5">

        <div class="col-lg-8 col-md-12 ">
            <div class="card text-center">
              <div class="card-header">
                <h4 class="card-title text-success">Skills</h4>
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

        <div class="col-lg-1 col-sm-12"></div>

        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-success">Skills</h4>

                    <form action="" method="post">
                      <div class="form-group">
                          <label for="skill" class = "text-muted font-weight-bold">Skill:</label>
                          <input type="text" id="skill" class="form-control form-control-sm" name="skill_name" placeholder="add a skill" autofocus="true" required>
                      </div>

                      <br>
                      
                      <div class="form-group">
                          <label for="status" class = "text-muted font-weight-bold">status:</label>
                          <select id="status" class="form-control form-control-sm"  name="status" autofocus="true" required>
                            <option> </option>
                            <option  value="1" class = "text-success font-weight-bold">active</option>
                            <option  value="0" class = "text-danger font-weight-bold">inactive</option>
                          </select>
                        </div>

                      <br>

                        <div class="text-center">
                        <input type="submit" name="skill" value="Add New Skill" class="btn btn-sm text-white text-center btn-primary">
                        </div>

                    </form>
                   
                </div>
            </div>
        </div>
      </div>
    </div>
 
 </div>

            

<?php include('footer.php');?>