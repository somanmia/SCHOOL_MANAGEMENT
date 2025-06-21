<?php
   require_once('private/db_connect.php');
  $name="";
 if(isset($_COOKIE['active_current_user:'])){
 

  $active_current_user=$_COOKIE['active_current_user:'];
 $sql="SELECT * FROM admin_login WHERE  password='$active_current_user'";
 $run=mysqli_query($connect,$sql);
 $row=mysqli_num_rows($run);
 if($row>0){
     
 }else{
     header('location:index.php?hacker');
 }
  
 }else{
     header('location:index.php');
 }

?>