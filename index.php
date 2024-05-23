<!Doctype html>
<head>
          <title>Practice page</title>
</head>
<body>
   <div style{ boarder:1px; margin-left:30px;}
    <center>
     <h1>I am doing the famous Restart move</h1></center>

     <?php
   echo "Hello Nepal";//Instead of writing hello world i am breaking steriotype
   //this is single line comment
      #this is single line comment too
       /* this is a multiple line comment
        if i don't give the ending symbol at end , whole code after this will be comment */

        echo "I am animal lover" ; /*cmment in betwen */echo "but i love dogs the most";
        $x = 10;
        $y = 5;
        echo $x + $y;
        echo $x - $y;

        $tx = "they call me Rajiv but you can call me Mine ";
        echo "I got a pickup line : $tx";

   ?>
   <br><br>
   <?php
       $x = $z = 10; //x is an integer
       $y = 12;//y is a string
       echo "The datatype and value of x is: ";
       var_dump($x);
  
       function test(){
    
       global $x, $y;
       $y = $x + $y;
   }
    
   test();
   echo $y;

     function cout(){
        static $a = 1;
        echo $a;
        $a++;

     }
     cout();
     cout();
     cout();


   ?>
   <br><br><br>
   <?php
           
      $b = "Hello This is another layer for practice";
      echo $b;


    Print "<br><center><h2>Lets start a new chapter</h2></center>";
    $txt = "<br> So basically i am showing how print keyword can be used";
    $b = 5;
    print "I can basically show" .$txt. "la garo xa <br>";
    var_dump('$b'); // gives the datatype and value

    //Double and single quotes
echo ("<br><center><h3>This section kis all anout string concatination </h3></center><br>");
  $c = "Hello";
  $d = "Rajiv";
  $z= $c.$d;
  echo $z;
  $z = "<br>".$c." ".$d;
  echo $z;
  $z = "<br> $c $d";
  echo $z;
   
  echo ("<br><center><h3>PHP slicing strings</h3></center><br>");

$x = "Hello its me Rajiv";
echo("<br>");
echo substr($x,8,5);//From index 8 to 5 position forward
echo("<br>");
echo substr($x,5);//From index 6 5 t end
echo substr($x,-5);
echo substr($x,6,-2);

echo("<center> <h1>Let's learn PHP type casting </h1></center>");

   $a=5.4;
   $b=5;
   $c="51";
   $d="true";
   $e= NULL;

   var_dump($a);
   var_dump($b);
   var_dump($c);
   var_dump($d);
   var_dump($e);

   $a = (string)$a;
   $b = (string)$b;
   $c = (float)$c;
   $d = (bool)$d;
   $e = (bool)$e;  


   var_dump($a);
   var_dump($b);
   var_dump($c);
   var_dump($d);
   var_dump($e);

$a = (int)$a;
$b = (int)$b;
$c = (bool)$c;
$d = (array)$d;
$e = (array)$e; 
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo ("<center><h1>Let's learn about PHP Math Function</h1></center>");
echo Pi();
echo("<br>");
$a = 5.55;
$b= -525;
echo("<br>");;
echo abs($a);
echo min(6,12);
echo("br");
echo max(17,25);
echo sqrt(55);
echo Round($b);
echo Rand();
echo Rand(10,1000); 












   ?>
 <center><h1>Lets learn about PHP form Handling</h1>
   <br><br>

   <center><form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
 But $_SERVER["PHP_Self"]) can be exploited
-->   
    Name: <input type="text" name="Full Name">
    <span class="error">* <?php echo $nameErr;?></span><br><br>

    Email: <input type="text" name="Email">
    <span class="error" >* <?php echo $emailErr;?></span> <br><br>
    Comment: <textarea name="comment" rows="3" cols="20"> </textarea>
    <span class="error">* <?php echo $commentErr;?> </span>
    <br>
   Gender:<br>
     <input type="radio" name="gender" value="male">Male <br><br>
     <input type="radio" name="gender" value="female">Female <br><br>
     <input type="radio" name="gender" value="others">Others 
     <span class="error">* <?php echo $GenderErr;?> </span>
     <br><br>


</form></center>
<?php
  //$_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.
  /* In the Javasacript code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr.
   These error variables will hold error messages for the required fields. 
   We have also added an if else statement for each $_POST variable.
   This checks if the $_POST variable is empty (with the PHP empty() function).
   If it is empty, an error message is stored in the different error variables, and if it is not empty,
    it sends the user input data through the test_input() function: */
?>

</body>
<script> 
// define variables and set to empty values
$name = $email = $comment = $gender ="";
$nameErr = $emailErr = $commentErr = $genderErr ="";
if ($_Server["REQUEST_METHOD"]=="POST"){
 
  $if ($_empty($_POST["name"])){
    $nameERR = "Name is rquired";
}
else
{
  $name = (Test_input($_POST["name"]));
}
 if ($_empty($_POST["email"])){
  $emailErr = "Email is required";
 }
 else{
  $emailErr = (Test_input($_POST["email"]));
 }
 if ($_empty($_POST["comment"])){
  $commentErr = "Comment is required";
 }
 else{
  $commentErr = (Test_input($_POST["comment"]));
 }
 if ($_empty($_POST["gender"])){
  $genderErr = "Gender is required";
 }
 else{
  $genderErr = (Test_input($_POST["gender"]));
 }

}

</script>
//PHP to keep the value in Form
//To show the values in the input fields after the user hits the submit button, we add a little PHP script inside the value attribute
//we also need to show which radio button that was checked. For this, we must manipulate the checked attribute (not the value attribute for radio buttons
Name: <input type="text" name="name" value="<?php echo $name; ?>">
Email: <input type="text" name="email" value="<?php echo $email; ?>">
Website: <input type="text" name="website" value="<?php echo $website; ?>">
Comment: <textarea name="comment" rows="5" cols="40" > value="<?php echo $comment; ?>";

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "other";?> value="other">Other

<H5>Advance PHP</H5>
<?php 
echo("Lets start adavance php");
echo("Php Date & Time");
echo("Y m Y l");
var a = date("Y/m/d");
echo a;
echo ("Today is ". date("m/d/Y/l").<br>);
&copy; 2010-<?php echo date("Y");?>
//Get a Time
/*H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)*/

echo "The time is " . date("h:i:sa");
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

//Create date with mktime()
//mktime(hour,munute,second,month,day,year)
//create a date from string using strtotime()

?>

</html>