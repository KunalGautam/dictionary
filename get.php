<?php
set_time_limit(1);
$value = $_GET['q'];
echo "<form action=\"\">";
echo "<select name=\"Word\" onChange=\"meaning(this.value)\">";
echo "<option>Select the word !</option>";

$con = mysql_connect("localhost","root","redhat");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dict", $con);

$result = mysql_query("select * from dict where (word LIKE '$value%')");

while($row = mysql_fetch_array($result))
  {
echo "<option value=\"".$row['word']."\">".$row['word']."</option>";

  }

mysql_close($con);

















echo "</select>";
echo "</form>";





?>
