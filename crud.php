
<?php



function selectdata($sql)
{
  $conn = OpenCon();
  
  $result = $conn->query($sql);
  if($result)
  {
    if($result->num_rows > 0)
    {
      return $result;
    }
    else
    {
      return "zero";
    }
  }
  else
  {
    return $result->error;
  }
}
?>