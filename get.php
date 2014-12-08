<?php
set_time_limit(1);
$value = $_GET['q'];
echo "<form action=\"\">";
echo "<select name=\"Word\" onChange=\"meaning(this.value)\">";
echo "<option>Select the word !</option>";
include ('config.php');
$con = mysql_connect($server,$user,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db, $con);

$result = mysql_query("select * from dictionary where (word LIKE '$value%')");

while($row = mysql_fetch_array($result))
  {
echo "<option value=\"".$row['word']."\">".$row['word']."</option>";

  }

mysql_close($con);

















echo "</select>";
echo "</form>";





?>
