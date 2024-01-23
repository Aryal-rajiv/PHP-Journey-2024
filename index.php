<!Doctype html>
<head>
          <title>Practice page</title>
</head>
<body>
   <center><h1>I am doing the famous Restart move</h1></center>

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













   ?>

</body>

</html>