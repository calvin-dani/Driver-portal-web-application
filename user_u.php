

<!DOCTYPE html>
<html lang="en">
<title>Car DB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-stop-circle-o {font-size:200px}




table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #f44336;
  color: white;
}
}
</style>
<body>

<!-- Navbar -->

 <div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home_u.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="user_u.php" class="w3-bar-item w3-button w3-padding-large w3-white">User</a>
    <a href="car_u.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Car</a>
     <a href="market_u.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Market</a>
    <a href="specification_u.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Specification</a>
  
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">User</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Car</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Market</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Specification</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Fines</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Insurance</a>
  </div>
</div>


<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">UNIVERSAL CAR DATABASE</h1>
  <!--<p class="w3-xlarge"></p>-->
  <!--<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>-->
</header>

<!-- First Grid -->

<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">


      <table>
 <tr>
 <th> U_ID</td>
 <th> FIRST_NAME</th>
 <th> LAST_NAME</th>
 <th> C_ID</th>
 <th> COLOUR</th>
 </tr>
<?php
include 'crud.php';
include 'db_connection.php';

$sql = "SELECT * FROM `user";

$result = selectdata($sql);

if($result != "zero")
{
 
 while($row = $result->fetch_assoc())
 {
 echo "<tr>";
 echo "<td>" . $row['U_ID']."</td>";
 echo "<td>" . $row['FIRST_NAME']. "</td>"; 
 echo "<td>" . $row['LAST_NAME']. "</td>"; 
  echo "<td>" . $row['C_ID']. "</td>"; 
 echo "<td>" . $row['COLOUR']. "</td>"; 
 echo "</tr>";

 }
 
 
}
else
{
 echo $result;
}
?>
 </table>

  </div>
</div>

</body>
</html>