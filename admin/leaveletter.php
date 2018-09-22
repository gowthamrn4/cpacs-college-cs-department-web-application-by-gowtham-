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
      <?php
   $select=mysql_query("select * from letter where status=1");
   $view=mysql_num_rows($select);
   $count=$view+$count;
   for($i=0;$i<$count;$i++)
   {}
   ?>
   <section id="Professor" class="services bg-primary">

<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><font size="+2">Letter <?php echo $count;?></font></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header1">You have <?php echo $count;?> Letter</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 
                      
         
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
              </div></section>
<ul class="nav nav-pills nav-justified">
   <li ><a href="home2.php">Home</a></li>
   <li ><a href="studetails.php">Student Details</a></li>
   <li ><a href="ebook.php">E-Books</a></li>
   <li ><a href="timetable.php">Time Table</a></li>
   <li ><a href="message.php">Message</a></li>
   <li class="active" style="background-color:#FFFFFF"><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>
 <?php
	
   $select=mysql_query("select * from letter where status=1");
      $view=mysql_num_rows($select);
if($view)
{
?>
<div style="left:40.7%; top:10.2%; "> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>You Have New  <?php echo $count;?>Letter</p></div>
</div>
    <?php
	}
	
	else
	{
	?>
    <div style="position:absolute; left:40.7%; top:20.2%; "> 

	     <div class=" alert  alert-danger" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>You Have No	New Letter</p></div>
</div>
<?php
	}
	?>
		 <?php
   $select=mysql_query("select * from letter where status=1");
   $view=mysql_num_rows($select);
   $view1=$view+$count;
   for($i=0;$i<$count;$i++)
   {
   ?> 
  <table width="500" align="center" >
  <tr>
    <td align="center">No</td>
    <td align="center">Name</td>
    <td align="center">Time</td>
    <td align="center">View</td>
  </tr>
  <tr>
    <td align="center"><?php echo mysql_result($select,$i,"no");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"name");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"time");?></td>
    <td align="center"><a href="viewletter.php?edit=<?php echo mysql_result($select,$i,"name");?>">View</a>
</td>
  </tr>
</table>


<br/>
<br/>
 
    <?php
	}
	?>
   
 <a href="leaveletter1.php">Older Letter</a>
   
   
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
 