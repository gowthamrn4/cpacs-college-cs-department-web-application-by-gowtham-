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

  <ul class="nav nav-pills nav-justified">
   <li ><a href="home2.php">Home</a></li>
   <li ><a href="studetails.php">Student Details</a></li>
   <li ><a href="ebook.php">E-Books</a></li>
   <li ><a href="timetable.php">Time Table</a></li>
   <li ><a href="message.php">Message</a></li>
   <li class="active"><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>


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
   $select=mysql_query("select * from letter where status=0");
   $view=mysql_fetch_array($select);
?>
<font size="+2" >
<?php echo $view['no'];?>
  <?php echo $view['name'];?>
  <?php echo $view['userid'];?></font>
 <p>gowtham</p>
<table width="520" border="3" cellspacing="2" cellpadding="2">
  <tr>
    <td width="192" align="center">No</td>
    <td width="304"align="center"><?php echo $view['no'];?></td>
  </tr>
  <tr>
    <td align="center">Name</td>
    <td align="center"><?php echo $view['name'];?></td>
  </tr>
  <tr>
    <td align="center">User ID</td>
    <td align="center">  <?php echo $view['userid'];?></td>
  </tr>
  <tr>
    <td align="center">Class</td>
    <td align="center">  <?php echo $view['class'];?></td>
  </tr>
  <tr>
    <td align="center">Time</td>
    <td align="center">  <?php echo $view['time'];?></td>
  </tr>
  <tr>
    <td align="center">Sub</td>
    <td align="center">  <?php echo $view['sub'];?></td>
  </tr>
  <tr>
    <td height="117" align="center">Reason</td>
    <td align="center">  <?php echo $view['reason'];?></td>
  </tr>
  <tr>
   
  </tr>
</table>
    
   
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
 