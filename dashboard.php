<?php require_once('utility/db_connection.php'); ?>

<?php

//initialize the session.
if (session_status() != PHP_SESSION_ACTIVE);
session_start();

//conditional session destroy
$userInSession = $_SESSION['userInSession'];
$fullname = $_SESSION['fullname'];

if ($userInSession == NULL) {
    header('location:signin.php');
}

?>


<?php include('header.php'); ?>

<div class="bg-white">
    <div class="row p-4 mt-3">
        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-success">Hobbies</h4>
                    <p class="card-text text-muted small">Here you can -> update & delete your hobbies</p>

                    <div class=" m-4 p-2">
                        <a href="hobbies.php" class="text-white btn btn-sm btn-secondary">Manage Hobbies</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Skills</h4>
                    <p class="card-text text-muted small">Here you can -> update & delete your skills</p>
                    <div class=" m-4 p-2">
                        <a href="skills.php" class="text-white btn btn-sm btn-danger">Manage Skills</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Academics & Qualifications</h4>
                    <p class="card-text text-muted small">Here you can -> update & delete your academics & qualifications</p>
                    <div class=" m-4 p-2">
                        <a href="academics & qualification.php" class="text-white btn btn-sm btn-primary">Manage A & Q's</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="row p-4 mt-2 mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-secondary">Experiences</h4>
                    <p class="card-text text-muted small">Here you can -> update & delete your experiences</p>
                    <div class=" m-4 p-2">
                        <a href="experiences.php" class="text-white btn btn-sm btn-success">Manage Experiences</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-muted">References</h4>
                    <p class="card-text text-muted small">Here you can -> update & delete your references</p>
                    <div class=" m-4 p-2">
                        <a href="references.php" class="text-white btn btn-sm btn-warning">Manage References</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mb-2">

        </div>
    </div>

</div>

<?php include('footer.php'); ?>