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
        <h1>Bed</h1>
        </div>
      </nav>
<br><br><br>
      <div class="text-center"><h1 class="text-dark fs-2"><b><i>Bed Lists</i></b></h1></div>
 <div class="container-fluid"><br><br>
<a href="addbeddata.php"><button class="btn btn-primary ms-5 text-white">Add Furnitures</button></a><br>
</div>
<table class="table table-sm table-responsive">
  <thead class="table-dark">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Image</th>
    <th>Price<th>
<th>Delete</th>
<th>Edit</th>
  </tr>
  </thead>
  <tbody>
  <?php
error_reporting(1);
include('connection.php');
$data = "SELECT * FROM bed ORDER BY id DESC";
$val = $con->query($data);
$i = 1;
if ($val->num_rows > 0) {
    while (list($id, $name, $img, $price) = mysqli_fetch_array($val)) {
        echo "<tr>";
        echo "<td class='table-success'>".$i++."</td>";  // Added missing semicolon here
        echo "<td class='table-primary'>".$name."</td>";
        echo "<td class='table-primary'><img src='./images/$img' height='100' width='100' style='border-radius:20px;' /></td>";
        echo "<td class='table-dark'>".$price."</td>";
        echo "<td></td>";
        echo "<td><button class='btn btn-danger'><a class='text-white' href='deletefur.php?id=$id&img=$img'>Delete</a></button></td>";
        echo "<td><button class='btn btn-primary'><a class='text-white' href='editfbed.php?id=$id&img=$img'>Edit</a></button></td>";
    }
} else {
    echo "<tr><td colspan='8' class='text-center'><b>No data available</b></td></tr>";
}
?>

  </tbody>
</table>




<!--form-->


<!--form-->

</div>




</section>
</body>



</html>