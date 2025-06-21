<?php
$connect=mysqli_connect("localhost","root","","management");
if($connect==true){
   
}else{
    echo mysqli_error($connect);
}


?>