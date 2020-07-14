<?php include("header.php"); ?>


  <!-- Section page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="main-content">
          <h1 class="mt-5">Welcome to My Website</h1>
        </div>
      </div>
    </div><!-- Row End -->
  </div><!-- Container end -->


  <!-- Section page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="main-content">
        <?php
          if(isset($_SESSION['userId'])){
            echo '<h1 class="mt-5">Welcome!! You are a Registered User</h1>';
          }else{
            echo '<h1 class="mt-5">If you are a member please, <a href="login-form.php">Login</a> or Please!  <a href="signup-form.php">Register</a> to be a Member.</h1>';
          }
        ?>
        </div>
      </div>
    </div> <!-- Row End -->
  </div> <!-- Container End -->

  


<?php include("footer.php"); ?>