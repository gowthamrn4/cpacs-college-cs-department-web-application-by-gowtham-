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
<div class="wrapper row2">
  <div id="topnav">
    <ul>
    
    </ul>
    <div  class="clear"></div>
  </div>
</div>
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
<li><a href="Arrays.php" class="open">Arrays</a></li>
<li><a href="Pointers.php">Pointers</a></li>
<li><a href="Strings.php">Strings</a></li>
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
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Scope_Rules.php" style="color:#F0C"><< Previous Page </a></td>
     
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Pointers.php" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
       
       
       
       
       
       
   <p>C programming language provides a data structure called <b>the array</b>, which can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<p>Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to represent individual variables. A specific element in an array is accessed by an index. </p>
<p>All arrays consist of contiguous memory locations. The lowest address corresponds to the first element and the highest address to the last element.</p>
<img src="../images/arrays.jpg" alt="Arrays in C" />
<h2>Declaring Arrays</h2>
<p>To declare an array in C, a programmer specifies the type of the elements and the number of elements required by an array as follows:</p>
<pre class="prettyprint">
type arrayName [ arraySize ];
</pre>
<p>This is called a <i>single-dimensional</i> array. The <b>arraySize</b> must be an integer constant greater than zero and <b>type</b> can be any valid C data type. For example, to declare a 10-element array called <b>balance</b> of type double, use this statement:</p>
<pre class="prettyprint">
double balance[10];
</pre>
<p>Now <i>balance</i> is avariable array which is sufficient to hold upto 10 double numbers.</p>
<h2>Initializing Arrays</h2>
<p>You can initialize array in C either one by one or using a single statement as follows:</p>
<pre class="prettyprint">
double balance[5] = {1000.0, 2.0, 3.4, 7.0, 50.0};
</pre>
<p>The number of values between braces { } can not be larger than the number of elements that we declare for the array between square brackets [ ].</p>
<p>If you omit the size of the array, an array just big enough to hold the initialization is created.  Therefore, if you write:</p>
<pre class="prettyprint">
double balance[] = {1000.0, 2.0, 3.4, 7.0, 50.0};
</pre>
<p>You will create exactly the same array as you did in the previous example. Following is an example to assign a single element of the array:</p>
<pre class="prettyprint">
balance[4] = 50.0;
</pre>
<p>The above statement assigns element number 5th in the array with a value of 50.0. All arrays have 0 as the index of their first element which is also called base index and last index of an array will be total size of the array minus 1. Following is the pictorial representation  of the same array we discussed above:</p>
<img src="../images/array_presentation.jpg" alt="Array Presentation" />
<h2>Accessing Array Elements</h2>
<p>An element is accessed by indexing the array name. This is done by placing the index of the element within square brackets after the name of the array. For example:</p>
<pre class="prettyprint">
double salary = balance[9];
</pre>
<p>The above statement will take 10th element from the array and assign the value to salary variable. Following is an example which will use all the above mentioned three concepts viz. declaration, assignment and accessing arrays:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
 
int main ()
{
   int n[ 10 ]; /* n is an array of 10 integers */
   int i,j;
 
   /* initialize elements of array n to 0 */         
   for ( i = 0; i &lt; 10; i++ )
   {
      n[ i ] = i + 100; /* set element at location i to i + 100 */
   }
   
   /* output each array element's value */
   for (j = 0; j &lt; 10; j++ )
   {
      printf("Element[%d] = %d\n", j, n[j] );
   }
 
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
Element[0] = 100
Element[1] = 101
Element[2] = 102
Element[3] = 103
Element[4] = 104
Element[5] = 105
Element[6] = 106
Element[7] = 107
Element[8] = 108
Element[9] = 109
</pre>
<h2>C Arrays in Detail</h2>
<p>Arrays are important to C and should need lots of more details. There are following few important concepts related to array which should be clear to a C programmer:</p>
<table class="src">
<tr><th style="width:30%">Concept</th><th>Description</th></tr>
<tr><td> <a href="c_multi_dimensional_arrays.html" title="Multi-dimensional arrays in C">Multi-dimensional arrays</a></td><td>C supports multidimensional arrays. The simplest form of the multidimensional array is the two-dimensional array.</td> </tr>
<tr><td> <a href="c_passing_arrays_to_functions.html" title="Passing arrays to functions as arguments in C">Passing arrays to functions</a></td><td>You can pass to the function a pointer to an array by specifying the array's name without an index.</td> </tr>
<tr><td> <a href="c_return_arrays_from_function.html" title="Return array from function in C">Return array from a function</a></td><td>C allows a function to return an array.</td> </tr>
<tr><td> <a href="c_pointer_to_an_array.html" title="Pointer to an array in C">Pointer to an array</a></td><td>You can generate a pointer to the first element of an array by simply specifying the array name, without any index.</td> </tr>
</table>
<hr />
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Scope_Rules.php" style="color:#F0C"><< Previous Page </a></td>
     <td style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"> <a href="index.php" style="color:#F0C">
     <center> Home Page</center> </a>
     </td> 
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Pointers.php" style="color:#F0C">Next Page >></a></td>
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