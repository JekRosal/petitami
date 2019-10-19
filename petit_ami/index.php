<!DOCTYPE html>
<?php
include 'PHP/dbConnector.php';
?>
<html>
<head>
<title> Petit Ami</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "Front_end/bootstrap/css/bootstrap.min.css" />
<link rel = "stylesheet" type = "text/css" href = "Front_end/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align:center"> Petit Ami </h1>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PHP/products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sales</a>
      </li>
  </ul>
  </div>
</nav>
<br/>


<h3>
<?php
$now = new DateTime();
echo $now->format('F j, Y');    // MySQL datetime format
?>
</h3>


<br/>
<h3 style="text-align:center">
Total Sales for Today:
<br/>
<br/>
Total Sales for this Week:
<br/>
<br/>
Total Sales for this Month:
<br/>
<br/>
Yearly Sales:
</h3>


</body>