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
            <li><a href="home.html">Back</a></li>
          </div>
        </ul>
        <div class="logo">
        <h1>Subscribe List</h1>
        </div>
      </nav>
<br><br><br><br>
      <table class="table table-sm table-responsive">
  <thead class="table-dark">
  <tr>
    <th>No</th>
    <th>Name</th>
    <td>Email</td>
    <th>Tier</th>
    <th>Price</th>
    <th>Phone</th>
    
    <th>Duration<th>
<th>Cancel Membership</th>
<th>View Details</th>
  </tr>
  </thead>
  <tbody>
  <?php
error_reporting(1);
include('connection.php');
$data = "SELECT * FROM subscribe ORDER BY id DESC";
$val = $con->query($data);
$i = 1;
if ($val->num_rows > 0) {
    while (list($id, $name, $email, $tier,$price,$phone) = mysqli_fetch_array($val)) {
        echo "<tr>";
        echo "<td class='table-success'>".$i++."</td>";  // Added missing semicolon here
        echo "<td class='table-success'>".$name."</td>";
        echo "<td class='table-success'>".$email."</td>";
        echo "<td class='table-dark'>".$tier."</td>";
        echo "<td class='table-dark'>".$price."</td>";
        echo "<td class='table-success'>".$phone."</td>";
        echo "<td class='table-success'>1 month</td>";
        echo "<td></td>";
        echo "<td class='table-success'><button class='btn btn-danger'><a class='text-white' href='deletefur.php?id=$id&img=$img'>Cancel</a></button></td>";
        echo "<td class='table-success'><button class='btn btn-primary'><a href='viewmembership.php?name=$name&email=$email&tier=$tier&price=$price&phone=$phone' class='text-white'>View</a></button></td>";
    }
} else {
    echo "<tr><td colspan='8' class='text-center'><b>No data available</b></td></tr>";
}
?>

  </tbody>
</table>
    
 
</body>


</html>