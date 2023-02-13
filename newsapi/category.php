<?php

  $categoryName = $_REQUEST['categoryName'];
  require_once('utilities/appServer.php');
  require_once('objects/categoryRESTful.php');

?>

  <?php include('header.php');?>

    <div class="container" style="margin-top:30px">
      <div class="row">
        <div class="col-sm-4">
            <h2 class="lead text-muted font-weight-bold">About Me</h2>
            <p class="text-muted">Hello my name is Nifemi Idowu ,i'm a web developer in the making..
              This project was inspired by my quest to master how to consume Api's, so this project is basically just a freestyle.
            </p>
           
      
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.php">categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href ="#about">About</a>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>

            <hr class="d-sm-none">
        </div>

        <div class="col-sm-8">


          <?php

          //  echo "<pre>" .print_r($data_response_category, true);
            foreach($data_response_category['data'] as $key => $value):
          ?>
            <div class="card" style="width:400px">
               <img class="card-img-top" src="<?php echo $value['imageUrl'] ?>" alt="Card image">
               <div class="card-body">
                <h4 class="card-title"><?php echo $value['title'] ?></h4>
                <p class="font-weight-normal small"><?php echo $value['author'] ?></p>
                <pre class="small">published on <?php echo $value['date'] ?>,<?php echo $value['time'] ?>.</pre>
                <p class="card-text"><?php echo $value['content'] ?></p>
                <a class="btn btn-sm btn-primary stretched-link" role="button" href="<?php echo $value['readMoreUrl'] ?>">read more</a>
               </div>
            </div>
              
              <br>
              <br>
                                       
          <?php endforeach; ?>

         
        </div>
      </div>
    </div>

    <?php include('footer.php');?>