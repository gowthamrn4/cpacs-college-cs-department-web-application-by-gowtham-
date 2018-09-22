<?PHP
 include("db.php");
if($button)
{
$second="upload/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into news(userid,news,image)values('$userid','$news','$second')");
}
if($insert)
{
echo"Insert ";
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

  

</head>

<body>

 <table width="830" height="219" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="202">Update Your Status</td>
    <td width="628"><form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">
    
    <input type="text" name="userid" id="textfield" />
      <input type="textarea" name="news" id="textfield" />

    </td>
  </tr>
  <tr>
    <td>Image</td>
    <td>
      <input type="file" name="image" id="image" tabindex="3" class="form-control" placeholder="Upload Photo" />
   
    </td>
  </tr>
      <input type="submit" name="button" id="button" value="Submit" />
    </form>
    </td>
  </tr>
</table>
 
 

<script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

   
    

</body>

</html>