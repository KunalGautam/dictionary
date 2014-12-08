<?php
set_time_limit(1);
$value = $_GET['q'];
include ('config.php');
$con = mysql_connect($server,$user,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db, $con);

$result = mysql_query("select * from dictionary where word='$value'");

while($row = mysql_fetch_array($result))
  {
echo $row['definition'];

  }

mysql_close($con);





















?>
