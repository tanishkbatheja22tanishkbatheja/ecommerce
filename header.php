<div class="row">
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">E-store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <?php 
                        if(!isset($_SESSION['id'])){
                    ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a  href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <?php
                        }
                    else{
                    ?>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
                    <?php
                    }
                    ?>
                </ul>
                </div>
            </div>
        </nav>
</div>

<div class="modal fade" role="dialog" id="myModal" tabindex="-1">
 <div class="modal-dialog" role="document">

  <div class="modal-content">
    <div class="modal-header">   
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3>LOGIN</h3>
    </div>
    <div class="modal-body">
        Don't have an account? <a href="signup.php" style="text-decoration: none; color: blue;">Register</a>
        <form method="post" action="login_script.php">
        <br>
        <div class="form-group">
            <input type="emai" class="form-control" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" pattern=".{6,}" required>
            <?php
                if(isset($_GET['m1'])){
                echo $_GET['m1'];
            }
            ?>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" value="login_submit">Login</button>
        </div>
        </form>
        
        <a href="forgot.php" style="text-decoration: none; color: blue;">Forgot Password?</a>
    </div>
  </div>
 </div>
</div>