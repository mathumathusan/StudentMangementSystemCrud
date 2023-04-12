<?php include "db_conn.php"; 
include_once "include/header.php" ;?>
</head>
<?php
     
     session_start();
       if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }

    ?>
    <?php echo '<a href="index.php">ADDDETAILS</a>';?>
<body>
     
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
              <table border="1">
                  <tr>
                      <th><?php echo $images["id"];?></th>
                      <td>
             	<img src="uploads/<?=$images['image_url']?>">
             </td>
             <td><a href="delete.php? id=<?php echo $images["id"];?>" onclick="return confirm ('Are you sure you want to delete this..?')">DELETE</a></td>
                  </tr>
              </table>
             
          		
    <?php } }?>
</body>
</html>