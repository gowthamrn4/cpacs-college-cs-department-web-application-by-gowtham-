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
<li><a href="Pointers.php"class="open">Pointers</a></li>
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
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Arrays.php" style="color:#F0C"><< Previous Page </a></td>
   
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Strings.php" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
       
       
       
       
       
       
       
   <p>Pointers in C are easy and fun to learn. Some C programming tasks are performed more easily with pointers, and other tasks, such as dynamic memory allocation, cannot be performed without using pointers. So it becomes necessary to learn pointers to become a perfect C programmer. Let's start learning them in simple and easy steps.</p>
<p>As you know, every variable is a memory location and every memory location has its address defined which can be accessed using ampersand (&amp;) operator, which denotes an address in memory. Consider the following example, which will print the address of the variables defined:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;

int main ()
{
   int  var1;
   char var2[10];

   printf("Address of var1 variable: %x\n", &amp;var1  );
   printf("Address of var2 variable: %x\n", &amp;var2  );

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result">
Address of var1 variable: bff5a400
Address of var2 variable: bff5a3f6
</pre>
<p>So you understood what is memory address and how to access it, so base of the concept is over. Now let us see what is a pointer.</p>
<h2>What Are Pointers?</h2>
<p>A <b>pointer</b> is a variable whose value is the address of another variable, i.e., direct address of the memory location. Like any variable or constant, you must declare a pointer before you can use it to store any variable address. The general form of a pointer variable declaration is:</p>
<pre class="prettyprint">
type *var-name;
</pre>
<p>Here, <b>type</b> is the pointer's base type; it must be a valid C data type and <b>var-name</b> is the name of the pointer variable. The asterisk * you used to declare a pointer is the same asterisk that you use for multiplication. However, in this statement the asterisk is being used to designate a variable as a pointer. Following are the valid pointer declaration:</p>
<pre class="prettyprint">
int    *ip;    /* pointer to an integer */
double *dp;    /* pointer to a double */
float  *fp;    /* pointer to a float */
char   *ch     /* pointer to a character */
</pre>
<p>The actual data type of the value of all pointers, whether integer, float, character, or otherwise, is the same, a long hexadecimal number that represents a memory address. The only difference between pointers of different data types is the data type of the variable or constant that the pointer points to.</p>
<h2>How to use Pointers?</h2>
<p>There are few important operations, which we will do with the help of pointers very frequently. <b>(a)</b> we define a pointer variable <b>(b)</b> assign the address of a variable to a pointer and <b>(c)</b> finally access the value at the address available in the pointer variable. This is done by using unary operator <b>*</b> that returns the value of the variable located at the address specified by its operand. Following example makes use of these operations:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;

int main ()
{
   int  var = 20;   /* actual variable declaration */
   int  *ip;        /* pointer variable declaration */

   ip = &amp;var;  /* store address of var in pointer variable*/

   printf("Address of var variable: %x\n", &amp;var  );

   /* address stored in pointer variable */
   printf("Address stored in ip variable: %x\n", ip );

   /* access the value using the pointer */
   printf("Value of *ip variable: %d\n", *ip );

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result">
Address of var variable: bffd8b3c
Address stored in ip variable: bffd8b3c
Value of *ip variable: 20
</pre>
<h2>NULL Pointers in C</h2>
<p>It is always a good practice to assign a NULL value to a pointer variable in case you do not have exact address to be assigned. This is done at the time of variable declaration. A pointer that is assigned NULL is called a <b>null</b> pointer.</p>
<p>The NULL pointer is a constant with a value of zero defined in several standard libraries. Consider the following program:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;

int main ()
{
   int  *ptr = NULL;

   printf("The value of ptr is : %x\n", ptr  );
 
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
The value of ptr is 0
</pre>
<p>On most of the operating systems, programs are not permitted to access memory at address 0 because that memory is reserved by the operating system. However, the memory address 0 has special significance; it signals that the pointer is not intended to point to an accessible memory location. But by convention, if a pointer contains the null (zero) value, it is assumed to point to nothing.</p>
<p>To check for a null pointer you can use an if statement as follows:</p>
<pre class="prettyprint">
if(ptr)     /* succeeds if p is not null */
if(!ptr)    /* succeeds if p is null */
</pre>
<h2>C Pointers in Detail:</h2>
<p>Pointers have many but easy concepts and they are very important to C programming. There are following few important pointer concepts which should be clear to a C programmer:</p>
<table class="src">
<tr><th style="width:35%">Concept</th><th>Description</th></tr>
<tr><td> <a href="c_pointer_arithmetic.html" title="C - Pointer Arithmetic">C - Pointer arithmetic</a></td><td>There are four arithmetic operators that can be used on pointers: ++, --, +, -</td> </tr>
<tr><td> <a href="c_array_of_pointers.html" title="C - Array of Pointers">C  - Array of pointers</a></td><td>You can define arrays to hold a number of pointers.</td> </tr>
<tr><td> <a href="c_pointer_to_pointer.html" title="C - Pointer to Pointer Operators">C - Pointer to pointer</a></td><td>C allows you to have pointer on a pointer and so on.</td> </tr>
<tr><td> <a href="c_passing_pointers_to_functions.html" title="Passing pointers to functions in C">Passing pointers to functions in C</a></td><td>Passing an argument by reference or by address both enable the passed argument to be changed in the calling function by the called function.</td> </tr>
<tr><td> <a href="c_return_pointer_from_functions.html" title="Return pointer from functions in C">Return pointer from functions in C</a></td><td>C allows a function to return a pointer to local variable, static variable and dynamically allocated memory as well.</td> </tr>
</table>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Arrays.php" style="color:#F0C"><< Previous Page </a></td>
     <td style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"> <a href="index.php" style="color:#F0C">
     <center> Home Page</center> </a>
     </td> 
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Strings.php" style="color:#F0C">Next Page >></a></td>
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