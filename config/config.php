<?php
try{

   $host = "localhost";
   $dbname = "cleanblog";
   $user = "root";
   $pass = "";

   // Create connection
   $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
   // error handling
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
   //error handling message
   echo "".$e->getMessage();
}
