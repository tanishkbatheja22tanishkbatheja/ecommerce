<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign up</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <br>
        <br>
       <div class="container">
          <div class="row">
            <div class="col-sm-7 col-sm-offset-1">
                <br><br>
                <img src="img/yess.jpg" alt="Sign up" class="image-responsive">
            </div>
            <div class="col-sm-4">
                <br><br>
                <h1>SIGN UP</h1>
                <form method="post" action="sign_up_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" id="password" placeholder="Password" pattern=".{6,}" require>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact" maxlength="10" size="10" require>
                        <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="City" require>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" require>
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                    </div>
                </form>
            </div>
          </div>
       </div>
    </body>
</html>