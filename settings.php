<?php
include 'connection.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <br>
        <br>
        <div class="container">
        <div class="row">
            <br>
            <br>
            <div class="col-sm-4 col-sm-offset-4">
                <h3>Change Password</h3>
                <form method="post" action="settings_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="opassword" id="opassword" placeholder="Old Password" pattern=".{6,}" require>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="npassword" id="npassword" placeholder="New Password" pattern=".{6,}" require>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="rnpassword" id="rnpassword" placeholder="Re-type New Password" pattern=".{6,}" require>
                        <?php
                            if(isset($_GET['m2'])){
                             echo $_GET['m2'] ;
                            }
                        ?>
                        <?php
                            if(isset($_GET['m1'])){
                             echo $_GET['m1'] ;
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" value="update submit">Change</button>
                    </div>
                </form>
            </div>
        </div>
        </div>