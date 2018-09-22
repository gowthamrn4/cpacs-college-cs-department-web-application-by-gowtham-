<?php
include("db.php");
$userid=$_SESSION['uname'];
$sql=mysql_query("select * from signup where userid='".$userid."' ");
$row=mysql_fetch_array($sql);
$status=1;
	$time = date("j n   Y, \a\\t g.i a", time());
	?>
    <?php
	if($_GET['edit'])
{
$insert=mysql_query("update letter set status=1 where name='".$_GET['edit']."'");
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
<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
  <title><?php echo @$_SESSION['uname']; ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  

</head>

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
<h3>Leave Letter</h3></div>
<div class="services bg-primary"></div>
  </section>
  <div style="position:absolute; left:5.1%; top:5.2%; font-size:50px"> 
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
            <li class="active"><a href="leaveletter.php">Leave Letter</a></li>
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
               <li ><a href="message.php">Messages</a></li>   
                 <li ><a href="ebooks.php">Settings</a></li>
                 <li ><a href="event.php">Events</a></li>
         </li>
      </ul>
   </div>
</nav>
<br/>
<div style="position:absolute; left:30.7%; top:38.7%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <?php
$select=mysql_query("select * from letter where userid='".$userid."' ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="view.php"><span data-toggle="tooltip" title="3 New Messages" style="background-color:#0099FF" class="badge bg-green"><?php echo $view;?> </span>View Letters</a></li>
         <li ><a style="color:#666666" href="Message1.php">Message</a></li>

   <li><a style="color:#666666" href="notification.php">Older Message</a></li>
  
      <ul class="dropdown-menu">
         <li><a style="color:#CCCCCC" href="#">Swing</a></li>
         <li><a href="#">jMeter</a></li>
         <li><a href="#">EJB</a></li>
         <li class="divider"></li>
         <li><a href="#">Separated link</a></li>
      </ul>
   </li>
   <li><a style="color:#666666" href="logout.php">Logout</a></li>
</ul>
<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
<font size="+2" >
 <center>
<h><?php echo $view['time'];?></h>Sender(<h><?php echo $view['userid'];?>)</h>
<p>&nbsp;</p>
<center>
<div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">Letter</h3>
   </div>
   <div class="panel-body">
<div class="form-group">
<div class="letter">
<table width="500" height="500" >
  <tr>
    <td width="77">Form</td>
    <td width="418">&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td><font size="+1"><?php echo $view['name'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1"><?php echo $view['class'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1"><?php echo $view['rollno'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">C.P.A.College</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Bodinayakanur</font></td>
  </tr>
  <tr>
    <td>To</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Head.Of.The.Department</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Computer Science</font></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><font size="+1">C.P.A.College</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Bodinayakanur</font></td>
  </tr>
  <tr>
    <td>Sir/Madam</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Sub</td>
    <td><font size="+1"><?php echo $view['sub'];?></font></td>
  </tr>
  <tr>
    <td height="83">&nbsp;</td>
    <td><font size="+1"><?php echo $view['reason'];?></font></td>
  </tr>
  <tr>
    <td height="57">&nbsp;</td>
    <td align="center"><font size="+1">Thanking You</font></td>
  </tr>
  <tr>
    <td height="51">&nbsp;</td>
    
  </tr>
</table></center>
</div>


<br/>
<br/>
 
    
   

    
</div>
<br/>
<br/>

<div class="panel-footer"></div>


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
 