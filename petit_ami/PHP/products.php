<!DOCTYPE html>
<?php
include 'dbConnector.php';
?>
<html>
<head>
<title> Petit Ami</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet"
   type = "text/css"
   href = "Front_end/bootstrap/css/bootstrap.min.css" />
  <link rel = "stylesheet"
   type = "text/css"
   href = "Front_end/bootstrap/css/bootstrap.css" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align:center"> Petit Ami </h1>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sales</a>
      </li>
  </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-white">
      <li class="nav-item">
        <a class="nav-link text-white"  href="#">Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="products.php">Add Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Add New Category</a>
      </li>
  </ul>
  </div>
</nav>
<br/>
<h4 style="text-align:center">
Items
</h4>
<?php
$con=mysqli_connect("localhost","root","","petitami");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * from inventory";
$result= mysqli_query($con, $sql);

echo "<table class='table'>
<thead class='thead-dark'>
<tr>
      <th scope='col'>No.</th>
      <th scope='col'>Item</th>
      <th scope='col'>Price</th>
      <th scope='col'>Quantity</th>
      <th scope='col'>Type</th>
    </tr>
  </thead>";

while($row = mysqli_fetch_array($result)){

  echo "<tr>";
  echo "<td>" . $row['item_id'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . "Php " .$row['item_price'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['item_type'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<br/>