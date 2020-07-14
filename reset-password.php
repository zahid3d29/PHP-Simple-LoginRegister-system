<?php include("header.php"); ?>


  <!-- Section page main -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1> reset Your Password</h1>
        <p>An e0mail willl send to your email account about how to reset password</p>
        <form action="inc/reset-request.inc.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
          </div>
          <button type="submit" name="reset-request-submit" class="btn btn-primary">Receive new password by email</button>
        </form>
        <?php
            if(isset($_GET["reset"])){
                if($_GET["reset"] == "success"){
                    echo "<p class='success-msg'>please check your mail</p>";
                }
            }
          ?>
      </div>
    </div> <!-- Row End -->
  </div> <!-- Container End -->


<?php include("footer.php"); ?>
