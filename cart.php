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
        <title>Cart</title>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <br><br><br><br>
        <div class="container">
        <div class="table-responsive col-sm-4 col-sm-offset-4">
        <table class="table table-hover">
        <thead>
        <tr>
            <th>Item Number</th>
            <th>Price<th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $id=$_SESSION['id'];
        $search="SELECT id,item_id,Price FROM orders WHERE id=$id";
        
        $query_result=mysqli_query($con,$search) or die(mysqli_error($con));
        $no_of_rows=mysqli_num_rows($query_result);
        if($no_of_rows>0){
        while($row=mysqli_fetch_array($query_result)){
        ?> 
        <tr>
        <td><div class="col-sm-2 col-sm-offset-4"><?php echo'#'.$row['item_id']?></div></td>
        <td><div class="col-sm-2" style="float: inline-start;"><?php echo 'Rs. '.$row['Price'];?></div></td>
        </div>
        </tr>
        <?php }}
        else{
        echo "<h4 style='color: red;'>Cart is Empty.<br></h4>";
        echo "<a href='home.php'>Add items.</a>";
        }?>
        </tbody>
        </table>
        </div>
        </div>
    </body>
</html>