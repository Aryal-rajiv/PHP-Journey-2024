<!Doctype html>
<head>
          <title>Practice page</title>
</head>
<body>
   <h1>I am doing the famous Restart move</h1>

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

   echo "Raskhya and dikshya";

   ?>

</body>

</html>