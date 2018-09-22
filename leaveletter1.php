<?php
include("db.php");
$userid=$_SESSION['uname'];
$sql=mysql_query(" select * from signup where userid='".$userid."' ");
$row=mysql_fetch_array($sql);
	$userid=$_SESSION['uname'];
	$status=1;
	$time = date("j n   Y, \a\\t g.i a", time());
	
		if($button)
		{
		$insert=mysql_query("insert into letter(no,name,userid,rollno,image,class,sub,reason,time,status)values('$no','$name','$userid','$rollno','$image','$class','$sub','$reason','$time','$status')");
		
		}
		if($insert)
		{
		echo"Sent Sucessfully";
		}
		else
		{
		echo"error";
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

  <title><?php echo @$_SESSION['uname']; ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<section id="Professor" class="services bg-primary">
<div style="position:absolute; left:40.7%; top:10.2%; font-size:50px"> 
<h3>Home</h3></div>
<div class="services bg-primary"></div>
  </section>
  <div style="position:absolute; left:5.1%; top:-3.2%; font-size:50px"> 
  <div class="aaa"><font size="+3"><?php echo $_SESSION['uname']; ?></font></div>
 <div class="imgph">

</div></div>
  <ul class="nav nav-pills nav-justified">
   <li ><a href="home.php">Home</a></li>
   <li ><a href="studetails.php">Student Details</a></li>
   <li ><a href="ebook.php">E-Books</a></li>
   <li ><a href="timetable.php">Time Table</a></li>
   <li ><a href="message.php">Message</a></li>
   <li class="active"><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>


</head>
<?php
include("db.php");
$userid=$_SESSION['uname'];
$img=$_SESSION['img'];

$sql=mysql_query(" select * from signup where userid='".$userid."' ");
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
          <h><font size="+3"><?php echo $_SESSION['uname']; ?></font></h>
          </li>
           <li class="sidebar-brand">Name
             <h1><font size="+3"><?php echo $row['rollno']?></font></h1>
        </ul>
      <li class="sidebar-brand">
        <div style="position:absolute; top:10.2%; font-size:50px"> 
          <font size="+3"><a href="logout.php">Logout</a></h> </font></font>
          </li>
    </nav>
    <div style="position:absolute; left:5.1%; top:5.2%; font-size:50px"> 
  <div class="aaa"><font size="+3"></font></div>
 <div class="imgph">
<img src="<?php 

echo $row['img']; ?>" border="" width="200" height="150" />
</div></div>
    

                <div class="form-group">
             <div class="col-sm-6">
             <table align="center">
               <tr> <form name="form1" method="post" action="" enctype="multipart/form-data">
  <td> <input type="hidden" name="userid" id="textfield"  placeholder="Userid" required  class="form-control" value="<?php echo $_SESSION['uname']; ?>"></td>
   </div></tr>
   <tr>
   <td>&nbsp;</td>
   </tr>
                <div class="col-sm-2">
      <tr>          
    <td> Name: </td><td><input type="text" name="name" id="textfield"  placeholder="Name" required  class="form-control">
   </div></td>
 </tr>
    <div class="col-sm-2">
    <tr>
    <td> Roll No </td><td><input type="text" name="rollno" id="textfield2"  placeholder="Roll No" required  class="form-control"></td>
    </tr>
  </div>
  
  <div class="col-sm-2">
     <tr>
    <td>&nbsp;</td><td> <input type="hidden" name="image" id="image" tabindex="3" class="form-control" value="<?php echo $row['img']; ?>" enctype="multipart/form-data"    required/></td></tr>
   </div>
   
    <div class="col-sm-2">
    <tr><td>&nbsp;</td>
    <td><select name="class">
    <option>Bsc.Cs.1st.Year</option>
    <option>Bsc.Cs.2nd.Year</option>
    <option>Bsc.Cs.3rd.Year</option>
    <option>Others</option>
    </select></td>
    </tr>
    </div>
    <div class="col-sm-2">
      <tr>
      <td>Sub:</td><td><input type="text" name="sub" id="textfield3"  placeholder="Sub" required  class="form-control"></td>
      </tr>
   </div>
   
   <div class="col-sm-2">
     <tr><td> Reason:</td><td><textarea name="reason" id="textarea" cols="45" rows="5"  placeholder="Reason.........................." required  class="form-control"></textarea>
 </td></tr> </div>
   <div class="col-sm-2">
  <tr>
  <td> <input type="hidden" name="time" id="textfield3"  placeholder="Sub" required  class="form-control" onClick="date()">
   </td></tr></div>
  
      <tr>
      <td><input type="submit" name="button" id="button" value="Submit" ></td>
      </tr>
    </form>
    </table>
    </div>
  
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
 