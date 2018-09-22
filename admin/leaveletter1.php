<?php
		include("db.php");

		
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php echo @$_SESSION['uname']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  

<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

 


</head>


<div style="background:url(upload/bg-block.gif)">

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
   <section id="Professor" class="services bg-primary"></section> 
    <ul class="nav nav-pills nav-justified">
   <li ><a href="home2.php">Home</a></li>
   <li ><a href="studetails.php">Student Details</a></li>
   <li ><a href="ebook.php">E-Books</a></li>
   <li ><a href="timetable.php">Time Table</a></li>
   <li ><a href="message.php">Message</a></li>
   <li class="active"><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>  
<font size="+2" >
<table width="500" align="center" >
  <tr>
    <td align="left" width="230">No</td>
    <td align="center" width="230">Name</td>
    <td align="right" width="500">Time</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="right" width="230">View</td>
  </tr>

		 <?php

   $select=mysql_query("select * from letter where status=0 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count1+1;
   for($i=0;$i<$view;$i++)
   {
   ?> 
  <div style="background:url(upload/bg-block.gif)">
<font size="+2" >
<table width="500"  align="center">
  <tr>
    <td align="left" width="230"><?php echo mysql_result($select,$i,"no");?></td>
    <td align="center">&nbsp;</td>
    <td align="right">&nbsp;</td><td align="center">&nbsp;</td>
    <td align="center" width="230"><?php echo mysql_result($select,$i,"name");?></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="right" width="500"><?php echo mysql_result($select,$i,"time");?></td>
    <td align="center" width="230"><a style="text-shadow:#0000FF" href="view.php?edit=<?php echo mysql_result($select,$i,"name");?>">View</a>
</td>
  </tr>
</table>


<br/>
<br/>
 </div>
    <?php
	}
	?>
            <div style="position:absolute; top:5.2%; font-size:50px"> 

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo $view;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header1">You Have<?php echo $view;?>Letter </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu1">
   
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="header1"></li>
              <li>
              </div></div>

 <a href="leaveletter1.php">Older Letter</a>
   </div>
   
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
 