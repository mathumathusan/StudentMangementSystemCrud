<?php

if(isset($_GET['id'])){
    require_once('db_conn.php');
    $id= $_GET['id'];
   
    $result= $conn->query("delete from images WHERE id=$id");
    echo "delete successfully";
    
    $conn->close();
    $_SESSION['msg']='<br><b style="color:red">DELETE SUCCESSFULLY!!!</br>';
    header('location:view.php');
}
else{
    header('location:view.php');
}


?>
