<?php



$uid=$_POST['U_ID'];//username
$cid=$_POST['C_ID'];//password 


session_start();
$mysqli= new mysqli("localhost","root","","project");
$con=mysqli_connect("localhost","root","","project");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `user` WHERE `U_ID`='$uid' && `C_ID`='$cid'");
$count=mysqli_num_rows($result);

if($count==1){
$sql="INSERT INTO police (C_ID,U_ID,FINES_DUE,ACCIDENTS,INFRACTIONS,COLOUR ) VALUES ('{$mysqli->real_escape_string($_POST['C_ID'])}','{$mysqli->real_escape_string($_POST['U_ID'])}','{$mysqli->real_escape_string($_POST['FINES'])}','{$mysqli->real_escape_string($_POST['ACCIDENTS'])}','{$mysqli->real_escape_string($_POST['INFRACTIONS'])}','{$mysqli->real_escape_string($_POST['COLOUR'])}')";
$insert =$mysqli->query($sql);}

header("refresh:2;url=fines.php");


?>