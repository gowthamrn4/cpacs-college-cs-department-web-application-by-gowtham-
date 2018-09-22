<?php
include("db.php");
$userid=$_SESSION['uname'];
$img=$_SESSION['img'];
$sql=mysql_query("select * from signup where userid='".$userid."' ");
$row=mysql_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
  <title><?php echo @$_SESSION['uname']; ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  

</head>
<?php
if($_GET['del'])
{
$delete=mysql_query("delete from msg where userid='".$_GET['del']."'");
if($delete>0)
{
header('location:chat.php');
}
}
?>
<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="index.php" onclick=$("#menu-close").click();>Index</a>
            </li>
            <li class="sidebar-brand">
<a href="logout.php">Logout</a>
           <li class="sidebar-brand">
          <h><font size="+2"><span style="color:#0066FF"><?php echo $_SESSION['uname']; ?></span></font></h>
          </li>
           <li class="sidebar-brand">
          <img src="<?php echo $row['img']; ?>" width="100" height="100"/></font></h>
          </li>
          <br/>
          <br/>
          <li class="sidebar-brand">
          <h><font size="+2"><span style="color:#0066FF"><?php echo $row['rollno']; ?></span></font></h>
          </li>
           <li class="sidebar-brand">
           <h1><font size="+3"></font></h1>
        </ul>
        <li class="sidebar-brand">
          <h><font size="+3"></font></h>
          </li>
    </nav>
<section id="Professor" class="services bg-primary">
<div style="position:absolute; left:40.7%; top:10.2%; font-size:50px"> 
<h3>Home</h3></div>
<div class="services bg-primary"></div>
  </section>
  <div style="position:absolute; left:5.1%; top:-3.2%; font-size:50px"> 
  <div class="aaa"><font size="+3"><?php echo $_SESSION['uname']; ?></font></div>
 <div class="im">
<img src="<?php 

echo $row['img']; ?>" border="" width="200" height="150" class="img-rounded"/>
</div></div>
   <nav class="navbar navbar-default" role="navigation" >
   <div class="navbar-header" >
      <a class="navbar-brand" href="#"></a>
   </div>
   <div>
 
      <ul class="nav navbar-nav" >
           <li ><a href="home.php">Home</a></li>
         <li><a href="profile.php">My Profile</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             Student Details
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="student1.php">1st Year</a></li>
               <li><a href="student2.php">2nd Year</a></li>
               <li><a href="student3.php">3rd Year</a></li>
              </ul>
            <li ><a href="leaveletter.php">Leave Letter</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             Time Table
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="firtimetable.php">1st Year</a></li>
               <li><a href="secondtimetable.php">2nd Year</a></li>
               <li><a href="thrtimetable.php">3rd Year</a></li>
              </ul>
               <li ><a href="books/index.html/index.php">E-Books</a></li>
               
                <li ><a href="professor.php">Professor Details</a></li>
                 <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            About
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="firtimetable.php">College</a></li>
               <li><a href="secondtimetable.php">Computer Science Department</a></li>
              
              </ul>
               <li class="active" ><a href="message.php">Messages</a></li>   
                 <li ><a href="ebooks.php">Settings</a></li>
                 <li ><a href="event.php">Events</a></li>
         </li>
      </ul>
   </div>
</nav>
<div class="col-lg-3">
<div class="letter">
<div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title"> <center>         <img src="<?php echo $row['img']; ?>" width="70" height="70" class="img-circle"/></font></center></h>
</h3><h4 class="panel-title">Online</h4>
   </div>
   <div class="panel-body">
  
 <?PHP
$select=mysql_query("select * from status where status='online'");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>
<p><img src="img/Christmas Light Blue.ico" width="20" height="20"/><h>&nbsp;</h><h>&nbsp;</h><h>&nbsp;</h><h>&nbsp;</h><h>&nbsp;</h><h>&nbsp;</h><?php echo mysql_result($select,$i,"userid");?><a href="chat.php?edit=<?php echo mysql_result($select,$i,"userid");?>">Chat</a>
 
  <?PHP
  }
  ?>
  
</div></div></div><div class="panel-footer"></div>
</div>
<?php
if($_GET['edit'])
{
   $select=mysql_query("select * from signup where userid='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
   }
?>

<div class="col-lg-6">
<div class="letter">
<div class="panel panel-primary">
   <div class="panel-heading">
      <h3 class="panel-title"> <center>         <img src="<?php echo $view['img']; ?>" width="70" height="70" class="img-circle"/></font></center></h>
</h3><h4 class="panel-title">Online</h4>
   </div>
      <div class="panel-body">

</center>
 
  
  <?php
if($_GET['edit'])
{
   $select=mysql_query("select * from signup where userid='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
   }
?>
  <?PHP
  if($_GET['edit'])
{
$select1=mysql_query("select * from msg where sender='".$_GET['edit']."'");
$view1=mysql_num_rows($select1);
}
 for($i=0;$i<$view1;$i++)

 {
 ?>
 <?php
if($_GET['edit'])
{
   $select3=mysql_query("select * from signup where userid='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
   }
?>

  <img src="<?php echo $view['img']; ?>" width="30" height="30" class="img-circle"/>
 <p align="right"><?php echo mysql_result($select1,$i,"msg");?></p>
 
   <p align="center"> <?php echo mysql_result($select1,$i,"userid");?></p>
    
 
  <?php
  }
  ?>
 
   <?php
	include("db.php");

		  	$time = date("j n   Y, \a\\t g.i a", time());
			if($button)
		  {
		  $insert=mysql_query("insert into msg(no,userid,msg,time,sender)values('$no','$userid','$msg','$time','$sender')");
		  }
            ?>    <div class="col-md-6">

<li class="list-group-item">
  <form id="form5" name="form5" method="post" action="">
  
      <input type="hidden" name="userid" id="userid" value="<?php echo @$_SESSION['uname']; ?>" placeholder="UserID" required  class="form-control"/>
         
    
           <input type="text" name="msg" id="msg" value="" placeholder="Message.........." required  class="form-control"/>

      <input type="hidden" name="time" id="time" value="<?php echo $time;?>" placeholder="UserID" required  class="form-control"/>
     
              <input type="hidden" name="sender" id="sender" value="<?php echo $view['userid']; ?>" placeholder="UserID" required  class="form-control"/>


      <input type="submit" name="button" id="button" value="Submit" class="btn btn.bg-navy" />
    </form>
<?php 
if($insert)
{
echo"Sent........";
}
else
{
echo"Error";
}
?></div>
    <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

   
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
 