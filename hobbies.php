<?php require_once('utility/db_connection.php'); ?>

<?php

//initialize the session.
if (session_status() != PHP_SESSION_ACTIVE);
session_start();

//conditional session destroy
$userInSession = $_SESSION['userInSession'];
$fullname = $_SESSION['fullname'];
$hobbyId = $_REQUEST['id'];

if ($userInSession == NULL) {
  header('location:signin.php');
}

//write query for all hobbies
//$sql = $conn->query("SELECT * FROM tb_hobbies WHERE account_id = $userInSession");

//fetch the resulting rows as an array.
//$tb_hobbies = $sql->fetch_all();

$sql = "SELECT * FROM tb_hobbies WHERE account_id = $userInSession";
$result = $conn->query($sql);
$hobbies = $result->fetch_all(MYSQLI_ASSOC);

if($hobbyId !=""){
  $sql2 = "SELECT * FROM tb_hobbies WHERE id = $hobbyId";
  $result2 = $conn->query($sql2);
  $hobb = $result2->fetch_assoc();
}


/*
$sql = "SELECT * FROM tb_hobbies WHERE account_id = $userInSession";
$result = $conn->query($sql);

if ($result === false) {
    // The query failed, you can use mysqli_error to get more information
    echo "Error: " . $conn->error;
} elseif ($result->num_rows == 0) {
  // The query returned no results
    echo "No hobbies found";
} else {
    $hobbies = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($hobbies as $hobby) {
        // do something with each hobby
    }
}
*/

// $errors = array('err' => '');

$hobby = $status = '';


if (isset($_POST['hobby'])) {

  $hobbyId = $_POST['hobbyId'];
  $hobby_name = $_POST['hobby_name'];

  $status = $_POST['status'];

    $hobby_name = mysqli_real_escape_string($conn, $_POST['hobby_name']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

  if($hobbyId == ""){
  	//create sql:
    $insert_hobby = "INSERT INTO tb_hobbies (hobby_name,status,account_id) VALUES ('$hobby_name','$status','$userInSession')";

    if ($conn->query($insert_hobby) === TRUE) {
      header('location:hobbies.php');
    } else {
      echo 'query error' . mysqli_error($conn);
    }
  }else{
  	//Update sql:
    $update_hobby = "UPDATE tb_hobbies SET hobby_name = '$hobby_name', status ='$status'  WHERE id = '$hobbyId';";

    if ($conn->query($update_hobby) === TRUE) {
      header('location:hobbies.php?id='.$hobbyId);
    } else {
      echo 'query error' . mysqli_error($conn);
    }
  }
    
  // }
}

?>

<?php include('header.php'); ?>

<div class="bg-white">
  <div class="container">
    <div class="row p-5">

      <div class="col-lg-8 col-sm-12">
        <div class="card text-center">
          <div class="card-header">
            <h4 class="card-title text-primary">Hobbies</h4>
          </div>
          <div class="card-body table-responsive"> 
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Status</th>
                  <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($hobbies as $hobby) { ?>
                <tr>
                  <th scope="row"><?php echo $hobby['hobby_name']; ?></th>
                  
                  <?php 
                       echo  $hobby['status'] == 1 ? "<td>Active</td>" : "<td>Inactive</td>"; 
                  ?>
                  
                  <td><a class="btn btn-info" href="hobbies.php?id=<?php echo $hobby['id']; ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="hobbies.php?delete=<?php echo $hobby['id']; ?>">Delete</a></td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>

      <div class="col-lg-1 col-sm-12  mt-5"></div>

      <div class="col-lg-3 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-primary">Hobbies</h4>

            <form action="" method="post">
              <input type="hidden"  name="hobbyId" value="<?php echo $hobb['id'] ?>">
              <div class="form-group">
                <label for="hobby" class="text-muted font-weight-bold">Hobby:</label>
                <input type="text" id="hobby" class="form-control form-control-sm" name="hobby_name" placeholder="add a hobby" autofocus="true" value="<?php echo $hobb['hobby_name'] ?>" required>
              </div>

              <br>

              <div class="form-group">
                <label for="status" class="text-muted font-weight-bold">status:</label>
                <select id="status" class="form-control form-control-sm" name="status" autofocus="true" required>
                  <option> </option>
                  <option <?php echo  $hobb['status'] == 1 ? "selected" : ""; ?> value="1" class="text-success font-weight-bold">active</option>
                  <option <?php echo  $hobb['status'] == 0 ? "selected" : ""; ?> value="0" class="text-danger font-weight-bold">inactive</option>
                </select>
              </div>

              <br>
				<?php if($hobbyId ==""){ ?>
                  <div class="text-center">
                    <input type="submit" name="hobby" value="Add Hobby" class="btn btn-sm text-white text-center btn-primary">
                  </div>
				<?php } else{ ?>
              		<div class="text-center">
                    	<input type="submit" name="hobby" value="Update Hobby" class="btn btn-sm text-white text-center btn-primary">
                    	<a href="hobbies.php" class="btn btn-sm text-white text-center btn-info">New</a>
                  	</div>
				<?php }  ?>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
