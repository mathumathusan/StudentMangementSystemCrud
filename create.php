<?php

if(count ($_POST)>0){
    $link = new mysqli("localhost","root","","securebackup");
    $username=$_POST['username'];
    $password=$_POST['password'];  
     $result= $link->query("insert into demo (username,password) values ( '$username', '$password' )");
     $link->close();
    
     $_SESSION['msg']='<br><b style="color:green">SAVE SUCCESSFULLY!!!</br>';
     
     header('location:login.php');
}
else{
    header('location:login.php');
}

?>