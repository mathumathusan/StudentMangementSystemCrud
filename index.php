<?php
if(count($_POST)>0){
$link = new mysqli("localhost","root","","securebackup");
$result= $link->query("select * from demo");

foreach($result as $row){
   if($_POST["username"]==$row['username'] && $_POST["password"]==$row['password']){
   

      include_once "include/header.php";?> 
   </head>
   <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="my_image">
      <input type="submit" name="submit" value="upload">
   </form>
   <body>
       
   </body>
   </html>
   
   
   <?php
   }
   
}
}
else{
   header('location:login.php');
}
?>