<?php
include("conn.php");
$result = mysqli_query($data,"SELECT image FROM viewimage WHERE entrycode = '{$_GET['entrycode']}' LIMIT 1") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>/>" . mysql_error());
$row = mysqli_fetch_array($result);
header("Content-type:image/jpeg");
echo $row['image'];
mysql_close($data);
?>