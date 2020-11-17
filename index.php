<?php
include 'connection.php';
if(isset($_SESSION['id']))
{
    header("location:home.php");
}
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
        <title>Shop now</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <br><br><br><br>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 1
                    </div>
                    <div class="panel-body">
                    <img src="img/realme.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:50px;">
                    <br>Realme 6(64GB,6 GB Ram)<br>
                    64MP+8MP+2MP+2MP | 16MP Front  Rs. 17,999
                    <a href="signup.php" class="btn btn-primary" role="button" style="width: 100%;">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 2
                    </div>
                    <div class="panel-body">
                    <img src="img/app.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:80px;">
                    <br>
                    iPhone 11<br>
                    64MP+8MP | 32MP Front Rs. 1,10,000
                    <a href="signup.php" class="btn btn-primary" role="button" style="width: 100%;">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 3
                    </div>
                    <div class="panel-body">
                    <img src="img/oneplus.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:100px;">
                    <br>Oneplus ZA(64GB,8 GB Ram)<br>
                    48MP+16MP+4MP| 32MP Front  Rs. 39,999
                    <a href="signup.php" class="btn btn-primary" role="button" style="width: 100%;">Order Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 4
                    </div>
                    <div class="panel-body">
                    <img src="img/onepl.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:70px;">
                    <br>Oneplus 3(64GB,6 GB Ram)<br>
                    64MP+8MP+2MP | 32MP Front  Rs. 34,999
                    <a href="signup.php" class="btn btn-primary" role="button" style="width: 100%;">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 5
                    </div>
                    <div class="panel-body">
                    <img src="img/rog.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:140px;">
                    <br>Asus Rog Phone 3(256GB,12 GB Ram)<br>
                    The Gaming Beast Rs. 2,00,000
                    <a href="signup.php" class="btn btn-primary" role="button" style="width: 100%;">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 6
                    </div>
                    <div class="panel-body">
                    <img src="img/vivo.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:90px;">
                    <br>Vivo V11(32GB,4 GB Ram)<br>
                    32MP+8MP+2MP | 16MP Front  Rs. 13,999
                    <a href="signup.php" class="btn btn-primary" role="button" style="width: 100%;">Order Now!</a>
                    </div>
                </div>
            </div>
        </div>
       
        </div>
        <br>
        <?php
            include 'footer.php';
        ?>
        </div>
    </body>
</html>