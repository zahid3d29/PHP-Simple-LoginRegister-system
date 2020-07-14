<?php include("header.php"); ?>


  <!-- Section page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="main-content">
          <h1 class="mt-5">Registration Form</h1>
          <?php
            if(isset($_GET['error'])){
              if($_GET['error'] == 'emptyfields'){
                echo "<p class='error-msg'>Field can't blank!</p>";
              } elseif ($_GET['error'] == 'invaliduid'){
                echo "<p class='error-msg'>User Id is Invalid!</p>";
              } elseif ($_GET['error'] == 'invalidmail'){
                echo "<p class='error-msg'>User Mail Is Invalid!</p>";
              } elseif ($_GET['error'] == 'invaliduidmail'){
                echo "<p class='error-msg'>Invalid Username or UserMail!</p>";
              } elseif ($_GET['error'] == 'passwordcheck'){
                echo "<p class='error-msg'>Invalid Password!</p>";
              } elseif ($_GET['error'] == 'usertaken'){
                echo "<p class='error-msg'>Username or email already taken!</p>";
              }
            }elseif ($_GET['signup'] == 'success'){
              echo "<p class='success-msg'>Signup Succesfully Done!</p>";
            }
          ?>
        </div>
      </div>
    </div><!-- Row End -->
  </div><!-- Container end -->


  <!-- Section page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="inc/signup.inc.php" method="post">

          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password..">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Repeat Password</label>
            <input type="password" name="pwd-repeat" class="form-control" id="exampleInputPassword1" placeholder="Repeat Password..">
          </div>
          <button type="submit" name="signup-submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div> <!-- Row End -->
  </div> <!-- Container End -->

  


<?php include("footer.php"); ?>