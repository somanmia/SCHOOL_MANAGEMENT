<?php
 require_once('db_connect.php');
 require_once('css.php');
 require_once('js.php');


 if(isset($_REQUEST['district'])){
   $district=$_GET['district'];
   $run=mysqli_query($connect,"SELECT * FROM district WHERE District='$district'");
   ?><select name="upazila" class="form-control"> 
       <option value="0">Select</option>
       <?php
  foreach($run as $mydata){
     ?>
     <option value="<?php echo $mydata['Upazila'];?>"><?php echo $mydata['Upazila'];?></option>
     <?php  
  }
  ?></select><?php
 }
  //present addrss...........// 
 else if(isset($_REQUEST['pdistrict'])){
   $pdistrict=$_GET['pdistrict'];
   $run=mysqli_query($connect,"SELECT * FROM district WHERE District='$pdistrict'");
   ?><select name="pupazila" class="form-control"> 
       <option value="0">Select</option>
       <?php
  foreach($run as $mydata){
     ?>
     <option value="<?php echo $mydata['Upazila'];?>"><?php echo $mydata['Upazila'];?></option>
     <?php  
  }
  ?></select><?php
 }
 //ssc exam name select show ssc group..........// 
 else if(isset($_REQUEST['ssc_exmd'])){
   $exmname=$_GET['ssc_exmd'];
   $sql=mysqli_query($connect,"SELECT DISTINCT Group_name FROM ssc WHERE Exam_name='$exmname'");
   ?>
     <select name="ssc_group" class="form-control">
     <option value="0">Select</option>
   <?php
     foreach($sql as $mydata){
       ?>
             <option value="<?php echo $mydata['Group_name'];?>"><?php echo $mydata['Group_name'];?></option>
       <?php
     }
     ?><select><?php
 }
 //hsc exam name select show subject name...........// 
 else if(isset($_REQUEST['hsc_exmd'])){
  $exmname=$_GET['hsc_exmd'];
  $sql=mysqli_query($connect,"SELECT DISTINCT Group_name FROM hsc WHERE Exam_name='$exmname'");
  ?>
    <select name="hsc_group" class="form-control">
    <option value="0">Select</option>
  <?php
    foreach($sql as $mydata){
      ?>
            <option value="<?php echo $mydata['Group_name'];?>"><?php echo $mydata['Group_name'];?></option>
      <?php
    }
    ?><select><?php
}
 
//hons ........// 
else if(isset($_REQUEST['hons_exmd'])){
  $exmname=$_GET['hons_exmd'];
  $sql=mysqli_query($connect,"SELECT DISTINCT Subject_name FROM honourse WHERE Exam_name='$exmname'");
  ?>
    <select name="honourse_subject" class="form-control">
    <option value="0">Select</option>
  <?php
    foreach($sql as $mydata){
      ?>
            <option value="<?php echo $mydata['Subject_name'];?>"><?php echo $mydata['Subject_name'];?></option>
      <?php
    }
    ?><select><?php
}
 


 
 else{
     echo "<select>";
     echo "<option>";
     echo "</option>";
     echo "</select>";
 }



//present address district automatic show..........// 




?>