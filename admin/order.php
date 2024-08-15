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
<nav class="navbar">
        <ul class="nav-links">
          <div class="nav-links-left">
            <li><a href="index.php">Go Back To Login</a></li>
            <li><a href=""></a></li>
          </div>
          <div class="nav-links-right">
            <li><a href="subscribe.php">subscribeLists</a></li>
            <li><a href="../index.html">Logout</a></li>
            <li><a href="home.html">Back</a></li>
          </div>
        </ul>
        <div class="logo">
        <h1>Order</h1>
        </div>
      </nav>


      <section>

      <br><br><br>
  <center><h1 class="text-dark">Customer Orders</h1></center>
  <div class="container-fluid">
<table class="table table-sm table-hover table-bordered border-danger">

  <thead class="table-dark">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Product</th>
        <th>Price</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Note</th>
        <th>Status</th>
    </tr>
  </thead>
  <tbody class="table-primary">
  
  <?php
error_reporting(1);
include('connection.php');
$data="SELECT * FROM `order` ORDER BY id DESC";
$val=$con->query($data);
$i = 1;
if ($val->num_rows > 0) {
while(list($id,$name,$email,$product_name,$product_price,$phone,$address,$note) = mysqli_fetch_array($val)){
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$name."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$product_name."</td>";
    echo "<td>".$product_price."</td>";
    echo "<td>".$phone."</td>";
    echo "<td>".$address."</td>";
    echo "<td>".$note."</td>";
    echo "<td><button class='btn btn-outline-danger'><a class='text-dark' href='deletefur.php?id=$id&img=$img'>Deliever</a></button></td>";
    
}}else{
    echo "<tr><td colspan='8' class='text-center'>
   <b> No data available</b></td></tr>";
}

?>
  </tbody>
</table>
</div>
</section>

  

</body>

</html>