<?php include("header.php"); ?>



  <!-- Section page main -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php

            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {
                echo "Could not validate your request";
            } else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>

        <form action="inc/reset-password.inc.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="hidden" name="selector" value="<?php echo $selector; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username/email">
            <input type="hidden" name="validator" value="<?php echo $validator; ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username/email">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="enter a new password..">
            <input type="password" name="pwd-repeat" class="form-control" id="exampleInputPassword1" placeholder="Repeat new password..">
          </div>
          <button type="submit" name="reset-password-submit" class="btn btn-primary">Reset Password</button>
        </form>

                    <?php
                }
            }
            
        ?>
      </div>
    </div> <!-- Row End -->
  </div> <!-- Container End -->

  


<?php include("footer.php"); ?>