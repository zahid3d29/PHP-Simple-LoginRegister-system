<?php include("header.php"); ?>


  <!-- Section page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="main-content">
          <h1 class="mt-5">Have an account? Login Now</h1>
          <?php
            if(isset($_GET['error'])){
              if($_GET['error'] == 'emptyfields'){
                echo "<p class='error-msg'>Field can't blank!</p>";
              } elseif ($_GET['error'] == 'wrongpass'){
                echo "<p class='error-msg'>Wrong Password!</p>";
              } elseif ($_GET['error'] == 'nouser'){
                echo "<p class='error-msg'>No user registered!</p>";
              } 
            }elseif ($_GET['login'] == 'success'){
              echo "<p class='success-msg'>Logged in Succesfully!</p>";
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
        <form action="inc/login.inc.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="mailuid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username/email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password..">
          </div>
          <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
        </form>

        <?php
            if(isset($_GET['error'])){
              if($_GET['error'] == 'emptyfields'){
                echo "<p class='success-msg'>Logged in Succesfully!</p>";
              }
            }
        ?>
        <a href="reset-password.php"><p>Forgot your password?</p></a>
      </div>
    </div> <!-- Row End -->
  </div> <!-- Container End -->

  


<?php include("footer.php"); ?>