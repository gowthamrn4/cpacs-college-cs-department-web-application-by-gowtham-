<?php
	session_start();
	if(isset($_SESSION['userid']))
	{
		$userid=$_GET['userid'];
		include("db.php");
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title><?php echo @$_SESSION['userid']; ?></title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <ul class="nav nav-pills nav-justified">
   <li ><a href="home2.php">Home</a></li>
   <li ><a href="studetails.php">Student Details</a></li>
   <li ><a href="ebook.php">E-Books</a></li>
   <li ><a href="timetable.php">Time Table</a></li>
   <li class="active"><a href="message.php">Message</a></li>
   <li><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>


</head>
<?php
session_start();
include("db.php");
	 $userid=$_SESSION['userid'];
$sql=mysql_query(" select * from user where Userid='".$userid."' ");
$row=mysql_fetch_array($sql);

?>
<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="../index.php" onclick=$("#menu-close").click();>Index</a>
            </li>
           <li class="sidebar-brand">
          <h><font size="+3"><?php echo $_SESSION['userid']; ?></font></h>
          </li>
           <li class="sidebar-brand">
           <h1><font size="+3"><?php echo $row['rollno']?></font></h1>
        </ul>
        <li class="sidebar-brand">
        <div style="position:absolute; top:10.2%; font-size:50px"> 
          <font size="+3"><a href="../logout.php">Logout</a></h> </font></font>
          </li>
    </nav>

    


   
    <script src="../js/jquery.js"></script>

  
    <script src="../js/bootstrap.min.js"></script>

   
    <script>

    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
   
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    
    </script>

</body>

</html>
 