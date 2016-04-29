<?php

   $conn = mysqli_connect("localhost","root","12345","hireme") or die("unable to connect to server");
    
   if($conn) {
     
     $sql = "SELECT * FROM user";
     $db = mysqli_query($conn,$sql);
    
     while($row = mysqli_fetch_assoc($db)) {
     	  echo $row['name']." - ".$row['number']." - ".$row['email']."<br>";
     }  

   }



?>