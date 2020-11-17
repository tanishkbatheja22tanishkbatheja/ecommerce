
<?php
include 'connection.php';
?>

<?php
function check_in_cart($item_id){
    $con=mysqli_connect("localhost","root","","store")
or die(mysqli_error($con));
    $id=$_SESSION['id'];
    $search="SELECT * FROM orders WHERE id=$id AND item_id=$item_id";
    
    $query_result=mysqli_query($con,$search) or die(mysqli_error($con));
    $no_of_rows=mysqli_num_rows($query_result);
    if($no_of_rows>0){
        return false;
    }
    else{
        return true;
    }
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
                        #1
                    </div>
                    <div class="panel-body">
                    <img src="img/realme.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:50px;">
                    <br>Realme 6(64GB,6 GB Ram)<br>
                    64MP+8MP+2MP+2MP | 16MP Front  Rs. 17,999
                    <?php if(check_in_cart(1)){?>
                    <a href="cart_add.php?price=17,999&id=1" class="btn btn-primary" role="button" style="width: 100%;">Add to cart</a>
                    <?php }
                    else{?>
                        <a href="#" class="btn btn-primary btn-block disabled" role="button" style="width: 100%;">Added to cart</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #2
                    </div>
                    <div class="panel-body">
                    <img src="img/app.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:80px;">
                    <br>
                    iPhone 11<br>
                    64MP+8MP | 32MP Front Rs. 1,10,000
                    <?php if(check_in_cart(2)){?>
                    <a href="cart_add.php?price=1,10,000&id=2" class="btn btn-primary" role="button" style="width: 100%;">Add to cart</a>
                    <?php }
                    else{?>
                        <a href="#" class="btn btn-primary btn-block disabled" role="button" style="width: 100%;">Added to cart</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #3
                    </div>
                    <div class="panel-body">
                    <img src="img/oneplus.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:100px;">
                    <br>Oneplus ZA(64GB,8 GB Ram)<br>
                    48MP+16MP+4MP| 32MP Front  Rs. 39,999
                    <?php if(check_in_cart(3)){?>
                    <a href="cart_add.php?price=39,999&id=3" class="btn btn-primary" role="button" style="width: 100%;">Add to cart</a>
                    <?php }
                    else{?>
                        <a href="#" class="btn btn-primary btn-block disabled" role="button" style="width: 100%;">Added to cart</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #4
                    </div>
                    <div class="panel-body">
                    <img src="img/onepl.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:70px;">
                    <br>Oneplus 3(64GB,6 GB Ram)<br>
                    64MP+8MP+2MP | 32MP Front  Rs. 34,999
                    <?php if(check_in_cart(4)){?>
                    <a href="cart_add.php?price=34,999&id=4" class="btn btn-primary" role="button" style="width: 100%;">Add to cart</a>
                    <?php }
                    else{?>
                        <a href="#" class="btn btn-primary btn-block disabled" role="button" style="width: 100%;">Added to cart</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #5
                    </div>
                    <div class="panel-body">
                    <img src="img/rog.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:140px;">
                    <br>Asus Rog Phone 3(256GB,12 GB Ram)<br>
                    The Gaming Beast Rs. 2,00,000
                    <?php if(check_in_cart(5)){?>
                    <a href="cart_add.php?price=2,00,000&id=5" class="btn btn-primary" role="button" style="width: 100%;">Add to cart</a>
                    <?php }
                    else{?>
                        <a href="#" class="btn btn-primary btn-block disabled" role="button" style="width: 100%;">Added to cart</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        #6
                    </div>
                    <div class="panel-body">
                    <img src="img/vivo.jpg" alt="Realme 6" class="img-responsive img-phone" style="margin-left:90px;">
                    <br>Vivo V11(32GB,4 GB Ram)<br>
                    32MP+8MP+2MP | 16MP Front  Rs. 13,999
                    <?php if(check_in_cart(6)){?>
                    <a href="cart_add.php?price=13,999&id=6" class="btn btn-primary" role="button" style="width: 100%;">Add to cart</a>
                    <?php }
                    else{?>
                        <a href="#" class="btn btn-primary btn-block disabled" role="button" style="width: 100%;">Added to cart</a>
                    <?php }
                    ?>
                </div>
                </div>
            </div>
        </div>
       
        </div>
       
    </body>
</html>