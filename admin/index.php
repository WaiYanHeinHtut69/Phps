<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="login.css">
</head>
<body>
    


  
<div class="login-form-bd1">


  <div class="form-wrapper1">
    <div class="form-container1">
      <h1> Please Login</h1>
      <form>
      <?php
error_reporting(1);
if (isset($_GET['sub']))  {
    $eid = $_GET['n'];
    $pass = $_GET['p'];
}    

    if ($eid==''||$pass==''){
        echo "<p style=\" text-align: center;margin-left:-15px\"
        ><b>Please fill Admin's USERNAME AND PASSWORD</b></p>"; }
        else{
            if ($eid=='admin' || $pass=='superuser'){
                header('location:home.html');
            }
              else {
                echo "<p style=\"color: red; text-align: center;margin-left:-15px\"
        ><b>INCORRECT USERNAME AND PASSWORD!!!</b></p><br>
        <p style=\"color: red; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: center;margin-left:-15px\"
        ><b>Please try Again!</b></p>
        ";
            }
        }
    ?>
        <div class="form-control1">
          <input type="text" placeholder="Username" name="n" required>
          
        </div>

        <div class="form-control1">
          <input type="password"  placeholder="Password" name="p" required>
          
        </div>
        <button class="login-btn1" name="sub">Login</button>
        <p class="text">Please type correct username and password to get into <a href="#" READONLY>Admin</a></p>
      </form>
    </div>
  </div>
</div>

<script src="login.js"></script>

</body>
</html>