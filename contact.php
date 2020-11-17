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
        <title>Contact Us</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <br>
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
                <H2>LIVE SUPPORT</H2>
                <div style="font-size: 20px;">24 hours | 7 days a week | 365 days a year Live Technical Support</div>
                <br>
                <p style="text-align: justify;">It is a long established fact that a reader will be distracted by a readable content of a page when looking at its layout.The point 
                    of using Loren Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available
                    ,but the majority have suffered alteration in some form, by injected humour or randomised words which don't even slightly belivable.If you are going 
                    to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrasing hidden in the middle of text.</p>
            </div>
            <div class="col-sm-3">
            <br>
            <img src="img/contact.png" alt="" class="img-responsive">
            </div>
          </div>
          <div class="row">
              <div class="col-sm-8">
              <h2>CONTACT US</h2><br>
              <form method="post" action="contact_us_script.php">
                        <div class="form-group">
                            <label for="email" > Name </label>
                            <input type="text" class="form-control" id="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <label for="last_name" > Email </label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="Message" > Message </label>
                            <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                        <br>
                        <?php
                            if(isset($_GET['m1'])){
                             echo $_GET['m1'] ;
                        }
                        ?>
                    </div>
                        <button type="submit" class="btn btn-primary" value="registration_submit">Submit</button>
                        </div>
                        </form>
              <div class="col-sm-4">
                    <h2>Company Information:</h2>
                    <br>
                    <p>
                        500 Lorem Ipsum Dolor Sit,<br><br>
                        22-56-2-9 Sit Amet,Lorem,<br><br>
                        USA<br><br>
                        Phone:(00)222 666 444<br><br>
                        Fax :(000)007 89 34 3<br><br>
                        Email : info@mycompany.com<br><br>
                        Follow on : Facebook, Instagram, Twitter
                    </p>
              </div>
          </div>
        </div>
        <br>
        <br>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
