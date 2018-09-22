<?php
include("db.php");
{
$delete=mysql_query("delete from studetails where year=1");
if($delete>0)
{
header('location:timetable.php');
}
}
?>
