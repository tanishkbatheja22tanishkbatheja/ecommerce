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
        <title>Forgot Password</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <br><br><br><br><br><br>
        <div class="container">
        <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">
            <div class="panel-body">
            <br>
                <p style="text-align: center;">A new reset Password should be send to the Entered email.</p>
                <hr>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                <br>
                <a href="index.php" type="submit" class="btn btn-primary" role="button">Submit</a>
            <br>
            </div>
            </div>
            <br>
        </div>
        </div>
        </div>