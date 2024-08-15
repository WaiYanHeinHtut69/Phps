<!DOCTYPE html>
<html lang="en">


<head>
<link rel="stylesheet" href="login.css">
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
<body >
    <nav class="navbar">
        <ul class="nav-links">
          <div class="nav-links-left">
            <li><a href="index.php">Go Back To Login</a></li>
            <li><a href=""></a></li>
          </div>
          <div class="nav-links-right">
           
            <li><a href="../index.html">Logout</a></li>
            <li><a href="subscribe.php">Back</a></li>
          </div>
        </ul>
        <div class="logo">
        <h1>Subscribe List</h1>
        </div>
      </nav>

<br><br><br>
<center>
<h1 class="fs-3">Subscriber's Detail</h1><br><br><br>
<div class="container d-flex align-items-center justify-content-center ">
<form method="post" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-dark">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $_GET['name'] ?>" required readonly>
    
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-dark">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $_GET['email'] ?>" required readonly>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-dark">Tier</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $_GET['tier'] ?>" required readonly>
    
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-dark">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $_GET['phone'] ?>" required readonly>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-dark">Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $_GET['price'] ?>" required  readonly>
    
  </div>
  </center>
</body>


</html>