<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>CPA College </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<script src="scripts/jquery.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="styles/3_column.css" type="text/css" />
	
</head>
<body id="top">
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <script src="js/modernizr.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="js/modernizr.js"></script>


</head>

<body>

<section id="Professor" class="services bg-primary">
<div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                <a href="books/cprogramming/index.php">
                                    <img class="img-portfolio img-responsive" src="img/cprogramming-icon.png"></a>
                                </a></div>
                            </div>
  <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="left_column">
      <div class="holder">
        <h2 class="title">C Programming Topics</h2>
        
        <ul  id="list-category-team">
<li><a href="index.php"  >Introduction</a></li>         
<li><a href="program_structure.php"> Program structure</a></li>
<li><a href="Data_Type.php">Data Types</a></li>
<li><a href="Variables.php">Variables</a></li>
<li><a href="Constants.php">Constants</a></li>
<li><a href="Storage_Classes.php">Storage Classes</a></li>
<li><a href="Operators.php">Operators</a></li>
<li><a href="Decision_Making.php">Decision_Making</a></li>
<li><a href="Loops.php">Loops</a></li>
<li><a href="Functions.php">Functions</a></li>
<li><a href="Scope_Rules.php">Scope_Rules</a></li>
<li><a href="Arrays.php">Arrays</a></li>
<li><a href="Pointers.php">Pointers</a></li>
<li><a href="Strings.php"class="open">Strings</a></li>
<li><a href="Structures.php">Structures</a></li>
<li><a href="Unions.php">Unions</a></li>
<li><a href="Bit_Fields.php">Bit_Fields</a></li>

<li><a href="Typedef.php">Typedef</a></li>
<li><a href="Input_Output.php">Input_Output</a></li>
<li><a href="File_I/O.php">File_I/O</a></li>
<li><a href="Preprocessors.php">Preprocessors</a></li>
<li><a href="Header_Files.php">Header_Files</a></li>
<li><a href="Type_Casting.php">Type_Casting</a></li>
<li><a href="Error_Handling.php">Error_Handling</a></li>
<li><a href="Recursion.php">Recursion</a></li>
<li><a href="Variable_Aruments.php">Variable_Aruments</a></li>
<li><a href="Memory_Mangement.php">Memory_Mangement</a></li>

        </ul>
      </div>
  
    </div>
    <!-- ############ -->
    <div id="content1">
      <h1 class="title">Contents</h1>
       
       
       
        <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Pointers.php" style="color:#F0C"><< Previous Page </a></td>
      
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Structures.php" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
       
       
       
       
       
       
      
       
       
       
       
       
       <p>The string in C programming language is actually a one-dimensional array of characters which is terminated by a <b>null</b> character '\0'. Thus a null-terminated string contains the characters that comprise the string followed by a <b>null</b>.</p>
<p>The following declaration and initialization create a string consisting of the word "Hello". To hold the null character at the end of the array, the size of the character array containing the string is one more than the number of characters in the word "Hello."</p>
<pre class="prettyprint">
char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
</pre>
<p>If you follow the rule  of array initialization then you can write the above statement as follows: </p>
<pre class="prettyprint">
char greeting[] = "Hello";
</pre>
<p>Following is the memory presentation of above defined string in C/C++:</p>
<img src="../images/string_representation.jpg" alt="String Presentation in C/C++"/>
<p>Actually, you do not place the <i>null</i> character at the end of a string constant. The C compiler automatically places the '\0' at the end of the string when it initializes the array. Let us try to print above mentioned string:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;

int main ()
{
   char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};

   printf("Greeting message: %s\n", greeting );

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result">
Greeting message: Hello
</pre>
<p>C supports a wide range of functions that manipulate null-terminated strings:</p>
<table class="src">
<tr><th style="width:5%">S.N.</th><th>Function &amp; Purpose</th></tr>
<tr><td>1</td><td><b>strcpy(s1, s2);</b><br/>Copies string s2 into string s1.</td></tr>
<tr><td>2</td><td><b>strcat(s1, s2);</b><br/>Concatenates string s2 onto the end of string s1.</td></tr>
<tr><td>3</td><td><b>strlen(s1);</b><br/>Returns the length of string s1.</td></tr>
<tr><td>4</td><td><b>strcmp(s1, s2);</b><br/>Returns 0 if s1 and s2 are the same; less than 0 if s1&lt;s2; greater than 0 if s1&gt;s2.</td></tr>
<tr><td>5</td><td><b>strchr(s1, ch);</b><br/>Returns a pointer to the first occurrence of character ch in string s1.</td></tr>
<tr><td>6</td><td><b>strstr(s1, s2);</b><br/>Returns a pointer to the first occurrence of string s2 in string s1.</td></tr>
</table>
<p>Following example makes use of few of the above-mentioned functions:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int main ()
{
   char str1[12] = "Hello";
   char str2[12] = "World";
   char str3[12];
   int  len ;

   /* copy str1 into str3 */
   strcpy(str3, str1);
   printf("strcpy( str3, str1) :  %s\n", str3 );

   /* concatenates str1 and str2 */
   strcat( str1, str2);
   printf("strcat( str1, str2):   %s\n", str1 );

   /* total lenghth of str1 after concatenation */
   len = strlen(str1);
   printf("strlen(str1) :  %d\n", len );

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result">
strcpy( str3, str1) :  Hello
strcat( str1, str2):   HelloWorld
strlen(str1) :  10
</pre>
<p>You can find a complete list of c string related functions in C Standard Library.</p>
       
       
       
       
       
       
       
       
      <br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Pointers.php" style="color:#F0C"><< Previous Page </a></td>
     <td style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"> <a href="index.php" style="color:#F0C">
     <center> Home Page</center> </a>
     </td> 
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Structures.php" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
    
    </div>
    <!-- ############ -->
    
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>