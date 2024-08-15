<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <body>
      <section class="bgcolor">
    <nav class="navbar">
        <ul class="nav-links">
          <div class="nav-links-left">
            <li><a href="index.php">Login</a></li>
            <li><a href=""></a></li>
          </div>
          <div class="nav-links-right">
            <li><a href=""></a></li>
            <li><a href="../index.html">Logout</a></li>
            <li><a href="home.html">Home</a></li>
          </div>
        </ul>
        <div class="logo">
        <h1>Admin</h1>
        </div>
      </nav>
<br><br><br>

      <div class="text-center"><h1 class="text-primary fs-2"><b><i>Edit</i></b></h1></div>
     
 <div class="container-fluid"><br>




 <?php
        error_reporting(1);
        include('connection.php');

        $ID = $_GET['id'];
        $val = $con->query("Select * from bed where id=$ID");
        $data = mysqli_fetch_array($val);




            if(isset($_POST['sub'])) {
                $product_name=$_POST['name'];
                $image=$_FILES["image"]["name"];
                $product_price=$_POST['price'];
                
                
                $con->query("update fur set p='$product_name'
    ,price='$product_price' where id=$ID ");
    header('location:bed.php');
                }
      
            ?>

<!--form-->
<br><br>
<div class="container d-flex align-items-center justify-content-center ">
<form method="post" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-dark">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $data['p'] ?>" required >
    <div id="emailHelp" class="form-text">Please Enter the Product Name</div>
  </div>
  <div class="mb-3">
  <label for="image" class="form-control">Please enter furniture photo</label>
  <input type="file" id="image" name="image" required>
    <div id="emailHelp" class="form-text">Must be IMAGE!</div>
  </div>
  <div class="mb-3">
   <label for="pricing">Price</label>
   <input type="number" class="form-control" id="pricing" name="price" value="<?php echo $data['price']?>" required>
  </div>
  
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label underline" for="exampleCheck1">press to change view</label>
  </div>
  
  <button name="sub" type="submit" class="btn btn-primary">Submit</button><br><br>
  <a href="addfur.php"><button class="btn btn-primary text-white">Go Back</button></a>
</form>
</div>

<!--form-->

</div>




</section>
</body>



</html>