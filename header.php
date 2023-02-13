<!DOCTYPE html>
<html lang="en">

<head>
    <title>XResume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
     <!-- Load Require CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <!-- Header -->
  <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
      <div class="container d-flex justify-content-between align-items-center">
          <a class="navbar-brand h1" href="index.php">
              <i class='bx bx-buildings bx-sm text-dark'></i>
              <span class="text-danger h2">X</span> <span class="text-primary h3">Resume</span>
          </a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="align-self-right collapse navbar-collapse  d-lg-flex justify-content-lg-end" id="navbar-toggler-success">       
            <div class="navbar align-self-right">
              <ul class="nav navbar-nav d-flex justify-content-end mx-xl-5 text-dark">
                
                  <?php if ($userInSession == NULL) { ?>
                  
                    <li class="nav-item">
                      <a class="nav-link btn-outline-primary rounded-pill" href="signup.php"> <i class="bx bx-user-plus bx-sm text-primary"></i> Sign up</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill" href="signin.php"> <i class='bx bx-user-circle bx-sm text-primary'> </i> My Account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill" href="index.php"> <i class='bx bx-home bx-sm text-primary'></i> Home</a>
                    </li>
                    
                  <?php } else {?>

                    <li class="nav-item">
                      <a class="nav-link btn-outline-primary rounded-pill" href="index.php"> <i class='fas fa-home bx-sm bx-tada-hover text-muted'></i> Home</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link btn-outline-primary rounded-pill" href="dashboard.php"> <i class='fas fa-user-injured bx-sm text-success'></i> Dashboard</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="signout.php"><span class="text-muted">Welcome! <?php echo ucwords($fullname)?> <i class="fas fa-user-tie bx-sm bx-tada-hover text-primary"></i> </span><span class="text-danger"> |  Sign Out <i class="fas fa-trash bx-sm bx-tada-hover text-secondary"></i></span> </a>
                    </li>
                  <?php } ?>

              </ul>  
            </div>      
          </div>
      </div>
  </nav>
  <!-- Close Header -->
