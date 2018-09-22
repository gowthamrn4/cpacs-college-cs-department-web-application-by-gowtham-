<?php
include("db.php");
$userid=$_SESSION['uname'];
$sql=mysql_query(" select * from signup where userid='".$userid."' ");
$row=mysql_fetch_array($sql);
?>
<?php
session_start();
unset($_SESSION['userid']);
mysql_query("update status set status='Offline' where userid='$userid'");

header('location:index.php');
?>