<?php
include("../db.php");
$name=$_SESSION['name'];
$sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
?>
<?php 
$sql=mysql_query("update show set status='online' where admin where name='".$name."' ");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title><?php echo @$_SESSION['name']; ?></title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<a href="../logout.php">Logout</a>
           <li class="sidebar-brand">
          <h><font size="+2"><span style="color:#0066FF"><?php echo $_SESSION['name']; ?></span></font></h>
          </li>
           <li class="sidebar-brand">
          <img src="<?php echo $row['image']; ?>" width="100" height="100"/></font></h>
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
  <div class="aaa"><font size="+3"><?php echo $_SESSION['name']; ?></font></div>
 <img class="img-circle" src="<?php echo $row['image'];?>" alt="User profile picture" width="100" height="100">
</div></div>
   <section id="Professor" ><center<h></h></center></section>
  <nav class="navbar navbar-default" role="navigation" >
   <div class="navbar-header" >
      <a class="navbar-brand" href="#"></a>
   </div>
   <div>
 <center>
      <ul class="nav navbar-nav" >
   <li class="active"><a href="home2.php">Home</a></li>
   <li><a href="studetails.php">Student Details</a></li>
   <li><a href="ebook.php">E-Books</a></li>
   <li><a href="timetable.php">Time Table</a></li>
   <li><a href="message.php">Message</a></li>
   <li><a href="leaveletter.php">Leave Letter</a></li>
    <li><a href="rank.php">Rank</a></li>
        <li><a href="pro.php">Professor</a></li>

 </ul>
   </div>
</nav>
  <div style="position:absolute; left:25.7%; top:40.2%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <li class="active"><a href="home2.php">Home</a></li>
 <?php
   $select=mysql_query("select * from letter where status=1");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li  class="active"><a style="color:#666666" href="leave1.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FF66" class="badge bg-green"><?php echo $view;?> </span>Leave</a></li>   
   <?php
   $select=mysql_query("select * from letter where status=0");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="oldl.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FF66" class="badge bg-green"><?php echo $view;?> </span>Old Letter</a></li>
   
    <?php
$select=mysql_query("select * from letter where class='Bsc Cs1st Year'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="1sty.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FFCC" class="badge bg-green"><?php echo $view;?> </span>1st Year Leave Letter</a></li>
 
<?php
$select=mysql_query("select * from letter where class='Bsc Cs2nd Year'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="2ndy.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#993300" class="badge bg-green"><?php echo $view;?> </span>2nd Year Leave Letter</a></li>      
   <?php
$select=mysql_query("select * from letter where class='Bsc Cs3rd Year'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?><li class="active"><a style="color:#666666" href="3rdy.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#0066CC" class="badge bg-green"><?php echo $view;?> </span>3rd Year Leave Letter</a></li>
   <li class="active"><a style="color:#666666" href="../logout.php">Logout</a></li>

</ul>
<br/>
<br/>



</div>

    
</div><center>
<div class="col-lg-3">
<li class="list-group-item" style="background:url(../img/bg_noise.png)"">
                  <b>Photo</b> <a class="pull-right"> <img class="img-circle" src="<?php echo $row['image'];?>" alt="User profile picture" width="100" height="100">
</a><br/>
<br/>
<br/>
<br/>
<br/>
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right">  <?php echo $row['name']; ?>
</a>
                </li>
                <li class="list-group-item">
                  <b>Class</b> <a class="pull-right">  <?php echo $row['class']; ?>
</a>
                </li>
                
                </li>
                </li>
                <li class="list-group-item">
</a>
                </li>
                </li>
                <li class="list-group-item">
</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        

             </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
 <?php
		  if($button)
		  {
		  $second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into admin(userid,password,name,class,image)values('$userid','$password','$name','$class','$second')");
}
if($insert)
{
?>              <div class="col-md-3">

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Register Sucessfull.........</p></div></div>
</div>
<?php
}
else
{
?>

<?php
}
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div style="position:absolute" align="left">
            <div class="col-lg-12">
<h><center>ADD ADMIN</center></h>
<li class="list-group-item">
  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
      <input type="text" name="userid" id="textfield" placeholder="User Name" required  class="form-control"/>
         <input type="password" name="password" id="textfield"  placeholder="Password" required  class="form-control"/>
         <input type="name" name="name" id="textfield"  placeholder="Name" required  class="form-control"/>

     <select name="class" id="select">
          <option>Select</option>
<option>Bsc Cs 1st Year</option>
     <option>Bsc Cs 2nd Year</option>
          <option>Bsc Cs 3rd Year</option>

    </select>

         <input type="file" name="image" id="image" tabindex="3" class="form-control" placeholder="Upload Photo" required/>

      <input type="submit" name="button" id="button" value="Submit" class="btn btn.bg-navy" />
    </form>

   </li></div></div>
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
 