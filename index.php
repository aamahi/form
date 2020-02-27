<?php
$name;
$email;
$homedist;
$password;
$cb = '';
if(isset($_POST['cb'])&& $_POST['cb']==1):
  $cb= "checked"; 
endif;

if(isset($_GET['name'])){
  $name = $_GET['name'];
}

if(isset($_GET['email'])){
  $email = $_GET['email'];
}

if(isset($_GET['homedist'])){
  $homedist = $_GET['homedist'];
}

if(isset($_GET['phone'])){
  $phone= $_GET['phone'];
}
if(isset($_GET['password'])){
  $password = $_GET['password'];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Form validation Use PHP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://getbootstrap.com/docs/4.0/examples/checkout/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://seeklogo.com/images/P/PHP-logo-0B2FDC4529-seeklogo.com.png" alt="" width="72" height="72">
        <h2>PHP validation Form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. </p>
      </div>
      <?php
        if(isset($_GET['success'])):
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><?=$_GET['success']?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
       </div>
        <?php endif; ?>
      <div class="row">
        <div class="col-md-6 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your information</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Name</h6>
              </div>
              <span class="text-muted"><?=$name?></span>
			    </li>
			    <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Email</h6>
              </div>
              <span class="text-muted"><?=$email;?></span>
			    </li>
			    <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Home Dist</h6>
              </div>
              <span class="text-muted"><?=$homedist?></span>
			    </li>
		    	<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Phone Number</h6>
              </div>
              <span class="text-muted"><?=$phone?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Password</h6>
              </div>
              <span class="text-muted"><?=$password?></span>
            </li>
          </ul>
        </div>

          <div class="col-md-6 order-md-1">
              <h4 class="mb-3">Student information</h4>
          

          <form class="needs-validation" action ='frm.php' method='post'>
            <div class="mb-3">
              <label for="name">Name</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text"><i class='fa fa-user'></i></span>
                  </div>
                  
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" value="<?=$name ;?>">
              </div>
              <?php 
              if(isset($_GET['nameError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['nameError'];?> </p>
             <?php endif ?>
			      </div>
            <div class="mb-3">
                <label for="email">Email</label>
                  <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class='fa fa-envelope-open'></i></span>
                        </div>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" value="<?=$email?>">
                   </div>
            </div>
            <?php 
              if(isset($_GET['emailError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['emailError'];?> </p>
              <?php 
              endif; 
              
              if(isset($_GET['invalidemailError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['invalidemailError'];?> </p>
              <?php
              
              endif;
             ?>
             

            <div class="mb-3">
                    <label for="homedist">Home District</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class='fa fa-home'></i></span>
                </div>
                <input type="text" class="form-control" id="homedist" name='homedist' placeholder="Enter your Home Dist" value="<?=$homedist?>">
              </div>
            </div>
            <?php 
              if(isset($_GET['homedistError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['homedistError'];?> </p>
             <?php endif ?>
             <div class="mb-3">
                <label for="phone">Phone Number</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fa fa-call'></i></span>
                  </div>
                  <input type="text" class="form-control" id="phone" name='phone' placeholder="Enter your phone" value="<?=$phone?>">
                </div>
              </div>
            <?php 
              if(isset($_GET['phoneError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['phoneError'];?> </p>
            <?php endif ?>
            <?php 
              if(isset($_GET['invalidPhoneError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['invalidPhoneError'];?> </p>
            <?php endif ?>
            <div class="mb-3">
              <label for="password">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fa fa-key'></i></span>
                  </div>
                  <input type="password" class="form-control" id="password" name='password' placeholder="Enter your Password" value="<?=$password?>">
                </div>
            </div>
            <?php 
              if(isset($_GET['passwordError'])):
              ?>
             <p class='text-danger ml-3 mt-1'> <i class='fa fa-exclamation-circle'></i> <?=$_GET['passwordError'];?> </p>
             <?php endif ?>
			      <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="cb" class="custom-control-input" id="save-info" value="1"<?=$cb ?> >
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Add Student information</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
