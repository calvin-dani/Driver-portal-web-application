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



form {
      border: 5px solid #f1f1f1;
      }
      input[type=text] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #f44336;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }









body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-stop-circle-o {font-size:200px}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}
.button3:hover {
  background-color: #f44336;
  color: white;
}

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
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
   <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home_p.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="user_p.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">User</a>
    <a href="car_p.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Car</a>
     <a href="market_p.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Market</a>
    <a href="specification_p.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Specification</a>
    <a href="fines.php" class="w3-bar-item w3-button w3-padding-large w3-white">Fines</a>
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
  
    <div id="first" class="w3-twothird">


      <table>
 <tr>
 <th>U_ID</td>
 <th>C_ID</th>
 <th>FINES_DUE</th>
 <th>ACCIDENTS</th>
 <th>INFRACTIONS </th>
 <th>COLOUR</th>
 
 </tr>
<?php
include 'crud.php';
include 'db_connection.php';

$sql = "SELECT * FROM `police`";

$result = selectdata($sql);

if($result != "zero")
{
 
 while($row = $result->fetch_assoc())
 {
 echo "<tr>";
 echo "<td>" . $row['U_ID']."</td>";
 echo "<td>" . $row['C_ID']. "</td>"; 
 echo "<td>" . $row['FINES_DUE']. "</td>"; 
  echo "<td>" . $row['ACCIDENTS']. "</td>"; 
   echo "<td>" . $row['INFRACTIONS']. "</td>"; 
   echo "<td>" . $row['COLOUR']. "</td>"; 
 echo "</tr>";

 }
 
 
}
else
{
 echo "Empty database";;
}
?>
 </table>
<center>
 <button type="button" onclick="change()" class="button button3" >ADD INFRACTIONS</button> 
  </div>
</center>

</div>
<div id="second" style="display: none;">
<center>
<form method="post" action="insert_fine.php">
            <h1>Login Form</h1>
            <div class="formcontainer">
            <hr/>
            <div class="container">
              <label for="uname"><strong>U_ID</strong></label>
              <input type="text" placeholder="Enter U_ID" name="U_ID" required>
              <label for="psw"><strong>C_ID</strong></label>
              <input type="text" placeholder="Enter C_ID" name="C_ID" required>
              <label for="uname"><strong>Fines</strong></label>
              <input type="text" placeholder="Enter FINES" name="FINES" required>
              <label for="psw"><strong>ACCIDENTS</strong></label>
              <input type="text" placeholder="Enter ACCIDENTS" name="ACCIDENTS" required>
              <label for="uname"><strong>INFRACTIONS</strong></label>
              <input type="text" placeholder="Enter INFRACTIONS" name="INFRACTIONS" required>
              <label for="psw"><strong>COLOUR</strong></label>
              <input type="text" placeholder="Enter COLOUR" name="COLOUR" required>
            </div>
            <button type="submit" onclick="change3()">ADD INFRACTIONS</button>
            
             
     <!--   <button type="button" onclick="change3()" class="button button3">ADD INFRACTIONS</button>-->
</center>
      </div>
<script>
  function change(){
    document.getElementById("first").style.display="none";
document.getElementById("second").style.display="block";
  }

  function change3(){
    document.getElementById("first").style.display="block";
document.getElementById("second").style.display="none";
  }
  </script>

</body>


</html>