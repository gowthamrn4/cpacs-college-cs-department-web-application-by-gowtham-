<?php
include("db.php");
$select=mysql_query("select * from studentthi where rollno='".$_GET['edit']."'");
$view=mysql_num_rows($select);
if($button)
{
$second="1st/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("update studentthi set  idno='$idno',rollno='$rollno',regno='$regno',name='$name',class='$class',image='$second',email='$email',sex='$sex',phone='$phone',fathername='$fathername',mothername='$mothername',religion='$religion',address='$address' where rollno='".$_GET['edit']."'");
}
if($insert)
{
echo"Update Successfully";
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

  <title>Admin</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <ul class="nav nav-pills nav-justified">
   <li ><a href="home2.php">Home</a></li>
   <li><a href="studetails.php">Student Details</a></li>
 <li><a href="ebook.php">E-Books</a></li>
   <li><a href="timetable.php">Time Table</a></li>
   <li><a href="message.php">Message</a></li>
   <li><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>

<h><center><font size="+2">Second Years Students Details</font></center></h>
<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="../index.php" onclick=$("#menu-close").click();>Index</a>
            </li>
           <li class="sidebar-brand">
          </li>
           <li class="sidebar-brand">
        </ul>
        <li class="sidebar-brand">
        <div style="position:absolute; top:10.2%; font-size:50px"> 
        <font size="+1"><a href="studetails.php">1st Years Student Details</a></h> </font></font>
        <br/>
        <font size="+1"><a href="secondyear.php">2nd Years Student Details</a></h> </font></font>
        <br/>
        <font size="+1"><a href="thiyear.php">3rd Year Student Details</a></h> </font></font>
        <br/>
          <font size="+3"><a href="../logout.php">Logout</a></h> </font></font>
          </li>
    </nav>

 <center>   
<table width="77%">
  <tr><form id="form1" name="form1" method="post" action="" enctype="multipart/form-data"><h1></h1>
    <td>ID</td>
    <td>
      <input type="text" name="idno" id="idno" class="form-control" placeholder="ID No" value="<?php echo mysql_result($select,0,"idno")?> "  required />
   
    </td>
  </tr>
  <tr>
    <td>Roll No</td>
    <td>
      <input type="text" name="rollno" id="textfield8" class="form-control" placeholder="Roll No" value="<?php echo mysql_result($select,0,"rollno")?> "  required/>
    
    </td>
  </tr>
  <tr>
    <td height="40">Reg No</td>
    <td>
      <input type="text" name="regno" id="textfield7" class="form-control" placeholder="Register No" value="<?php echo mysql_result($select,0,"regno")?> "  required/>
  
    </td>
  </tr>
  <tr>
    <td>Name</td>
    <td>
      <input type="text" name="name" id="textfield6" class="form-control" placeholder="Name" value="<?php echo mysql_result($select,0,"name")?> "  required/>
  
    </td>
  </tr>
  <tr>
    <td>Class</td>
    <td>
      <select name="class" id="select2" class="form-control" placeholder="Class" value="<?php echo mysql_result($select,0,"class")?> "  required>
      <option>Bsc Cs 1st Year</option>
      <option>Bsc Cs 2nd Year</option>
      <option>Bsc Cs 3rd Year</option>
      </select>
  
    </td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>
      <input type="file" name="image" id="image" enctype="multipart/form-data" class="form-control" placeholder="Photo" value="<?php echo mysql_result($select,0,"image")?> "  required/>

    </td>
  </tr>
  <tr>
    <td>Email Id </td>
    <td>
      <input type="text" name="email" id="textfield5" class="form-control" placeholder="Email ID" value="<?php echo mysql_result($select,0,"email")?> "  required/>

    </td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>
      <select name="sex" id="select" class="form-control" placeholder="Sex" value="<?php echo mysql_result($select,0,"sex")?> "  required>
      <option>Male</option>
      <option>Female</option>
      </select>
   
    </td>
  </tr>
  <tr>
    <td>Phone No</td>
    <td>
      <input type="text" name="phone" id="textfield4" class="form-control" placeholder="Phone No" value="<?php echo mysql_result($select,0,"phone")?> "  required/>

    </td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td>
      <input type="text" name="fathername" id="textfield3" class="form-control" placeholder="Father Name" value="<?php echo mysql_result($select,0,"fathername")?> "  required/>
   
    </td>
  </tr>
  <tr>
    <td>Mother Name</td>
    <td>
      <input type="text" name="mothername" id="textfield2" class="form-control" placeholder="Mother Name" value="<?php echo mysql_result($select,0,"mothername")?> "  required/>
  
    </td>
  </tr>
  <tr>
    <td>Religion</td>
    <td>
      <input type="text" name="religion" id="textfield" class="form-control" placeholder="Religion" value="<?php echo mysql_result($select,0,"religion")?> "  required/>
   
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>
      <textarea name="address" id="textarea" cols="45" rows="5"class="form-control" placeholder="Address" value="<?php echo mysql_result($select,0,"address")?> "  required></textarea>
   
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" />
    </form>
    </td>
  </tr>
</table>
</cenetr>
   
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
 