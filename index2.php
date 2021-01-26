<table>
 <tr>
 <td> U_ID</td>
 <td> FIRST_NAME</td>
 <td> LAST_NAME</td>
 <td> C_ID</td>
 <td> COLOUR</td>
 </tr>
<?php
include 'crud.php';
include 'db_connection.php';

$sql = "SELECT * FROM `user`";

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