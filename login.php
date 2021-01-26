<?php


$uname=$_POST['uname'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","project");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `uname`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);


$row = mysqli_fetch_array($result);

$type = $row['CLIENT'];



if($count==1 && $type=="USER" )
{
	echo "Login success";
	$_SESSION['log']=1;
	header("refresh:2;url=home_u.html");

}


else if($count==1 && $type=="POLICE" )
{
	echo "Login success";
	$_SESSION['log']=1;
	header("refresh:2;url=home_p.html");

}


else if($count==1 && $type=="INSURANCE" )
{
	echo "Login success";
	$_SESSION['log']=1;
	header("refresh:2;url=home_i.html");

}

else
{
	echo "please fill proper details";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>