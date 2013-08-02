<?php
set_time_limit(1);
$value = $_GET['q'];

$con = mysql_connect("localhost","root","redhat");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dict", $con);

$result = mysql_query("select * from dict where word='$value'");

while($row = mysql_fetch_array($result))
  {
echo $row['definition'];

  }

mysql_close($con);





















?>
