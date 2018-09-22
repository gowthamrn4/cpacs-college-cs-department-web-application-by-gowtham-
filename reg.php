<?php
include("db.php");
if($button)
{
$second="upload/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into signup(userid,name,rollno,password,phone,img,address,sex,bdate,year)values('$userid','$name','$rollno','$password','$phone','$second','$address','$sex','$bdate','$year')");
}
if($insert)
{
$msg="Please Login";
header("location:index.php");
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

    <title>Cs-C.P.A.College</title>
     <script></script>
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
          
        </ul>
    </nav>
<section id="Professor" class="services bg-primary">
<div style="position:absolute; left:40.7%; top:10.2%; font-size:50px"> 
<h3>Register</h3></div>
<div class="services bg-primary"></div>
  </section>
 
	<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.form1.name.value == "" )
   {
     alert( "Please provide your name!" );
     document.form1.name.focus() ;
     return false;
   }
   if( document.form1.userid.value == "" )
   {
     alert( "Please provide your User ID!" );
     document.form1.userid.focus() ;
     return false;
   }
    if( document.form1.password.value == "" )
   {
     alert( "Enter Your Password" );
     document.form1.password.focus() ;
	

     return false;
   }
    if( document.form1.rollno.value == "" )
   {
     alert( "Enter Your Roll No" );
     document.form1.userid.focus() ;
     return false;
   }
    if( document.form1.year.value == "" )
   {
     alert( "Ex:Bsc Cs 1st Year" );
     document.form1.userid.focus() ;
     return false;
   }
    if( document.form1.sex.value == "" )
   {
     alert( "Ex:Male" );
     document.form1.userid.focus() ;
     return false;
   }
   if( document.form1.phone.value == "" ||
           isNaN( document.form1.phone.value ) ||
           document.form1.phone.value.length != 10 )
   {
     alert( "Enter Your Correct 10 Digits Number" );
     document.form1.phone.focus() ;
     return false;
   }
   if( document.form1.bdate.value == "" ||
           isNaN( document.form1.bdate.value ) ||
           document.form1.bdate.value.length = 10 )
   {
     alert( "Ex:21/11/1996" );
     document.form1.bdate.focus() ;
     return false;
   }
   if( document.myForm.Country.value == "-1" )
   {
     alert( "Please provide your country!" );
     return false;
   }
   return( true );
}
//-->
</script>
<center>   
<table width="50%" height="50">
  <tr>
    <td width="20%">Name</td>
    <td width="80%">
    <div class="form-group">
    <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onsubmit="return(validate());">
     <div class="col-sm-6">
      <input type="text" name="name" id="name" class="form-control" placeholder="User ID" />
   </div>
    </td>
  </tr>
  <br/>
  <br/>
  <tr>
    <td>User ID</td>
    <td>
     <div class="col-sm-6">
      <input type="text" name="userid" id="textfield2" class="form-control" placeholder="Name" />
    </div>
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td> <div class="col-sm-6">
      <input type="password" name="password" id="textfield3" class="form-control" placeholder="Password" />
   </div>
    </td>
  </tr>
   
  <tr>
    <td>Phone No</td>
    <td> <div class="col-sm-6">
      <input type="text" name="phone" id="textfield4" class="form-control" placeholder="Phone No" />
   </div>
    </td>
  </tr>
  <tr>
    <td>Roll No</td>
    <td> <div class="col-sm-6">
      <input type="text" name="rollno" id="textfield5" class="form-control"b placeholder="Roll No" />
  </div>
    </td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>
     <div class="col-sm-6">
      <select name="sex" id="select" class="form-control" placeholder=="Sex" >
      <option>Select</option>
      <option>Male</option>
      <option>Female</option>
      </select>
  </div>
    </td>
  </tr>
  <tr>
    <td>Which Year</td>
    <td> <div class="col-sm-6">
      <select name="year" id="select2" class="form-control" placeholder="Bsc CS" >
      <option>Select</option>
      <option>Bsc Cs 1st Year</option>
      <option>Bsc Cs 2nd Year</option>
      <option>Bsc Cs 3rd Year</option>
      <option>Others</option>
      </select>
   </div>
    </td>
  </tr>
  <tr>
    <td>Birth Date</td>
    <td> <div class="col-sm-6">
      <input type="text" name="bdate"  id="textfield6" class="form-control"  placeholder="Date Of Birth" />
   </div>
    </td>
  </tr>
  <tr>
    <td>Upload Photo</td>
    <td> <div class="col-sm-6">
      <input type="file" name="image" id="image" tabindex="3" class="form-control" placeholder="Upload Photo" />
   </div>
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td> <div class="col-sm-6">
      <textarea name="address" id="address" cols="45" rows="5" class="form-control" placeholder="Address" ></textarea>
    </div>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> <div class="col-sm-6">
      <input class="btn btn-primary" type="submit" name="button" id="button" value="Signup" /></div>
    </form></div></div>
    </td>
  </tr>
</table></center>

   
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
 