<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Section</title>
    <?php require_once('css.php');?>
</head>
<body>
 <?php
  require_once('db_connect.php');
  //ssc uploded and validation///////////
 $ssc_exam_name="";
 $ssc_board_name="";
 $ssc_group_name="";
 $ssc_ck=0;
 $vssc_exam_name="";
 $vssc_board_name="";
 $vssc_group_name="";
 $ssc_msq="";
 if(isset($_REQUEST['ssc_submit'])){
   $ssc_exam_name=$_REQUEST['ssc_exm_name'];
   $ssc_board_name=$_REQUEST['ssc_board_name'];
   $ssc_group_name=$_REQUEST['ssc_group_name'];
   if($ssc_group_name==""){
     $ssc_ck++;
     $vssc_group_name="<span class='text-danger'>Required!!</span>";
   } if($ssc_board_name==""){
    $ssc_ck++;
    $vssc_board_name="<span class='text-danger'>Required!!</span>";
  } if($ssc_exam_name==""){
    $ssc_ck++;
    $vssc_exam_name="<span class='text-danger'>Required!!</span>";
  }
  if($ssc_ck==0){
    $sql="INSERT INTO ssc(Exam_name, Board_name, Group_name) 
    VALUES 
    ('".mysqli_real_escape_string($connect,strip_tags($ssc_exam_name))."',
    '".mysqli_real_escape_string($connect,strip_tags($ssc_board_name))."',
    '".mysqli_real_escape_string($connect,strip_tags($ssc_group_name))."')";
   $run=mysqli_query($connect,$sql);
   if($run==true){
      $ssc_msq="<span class='text-danger'>Data Saved!!</span>";
   }else{
    $ssc_msq="<span class='text-danger'>".mysqli_error($connect)."</span>";
   }
  }
 }



 //hsc upload and valdation........// 
 $hsc_exam_name="";
 $hsc_board_name="";
 $hsc_group_name="";
 $hsc_ck=0;
 $vhsc_exam_name="";
 $vhsc_board_name="";
 $vhsc_group_name="";
 $hsc_msq="";
 if(isset($_REQUEST['hsc_submit'])){
   $hsc_exam_name=$_REQUEST['hsc_exm_name'];
   $hsc_board_name=$_REQUEST['hsc_board_name'];
   $hsc_group_name=$_REQUEST['hsc_group_name'];
   if($hsc_group_name==""){
     $hsc_ck++;
     $vhsc_group_name="<span class='text-dark'>Required!!</span>";
   } if($hsc_board_name==""){
    $hsc_ck++;
    $vhsc_board_name="<span class='text-dark'>Required!!</span>";
  } if($hsc_exam_name==""){
    $hsc_ck++;
    $vhsc_exam_name="<span class='text-dark'>Required!!</span>";
  }
  if($hsc_ck==0){
    $sql="INSERT INTO hsc(Exam_name, Board_name, Group_name) 
    VALUES 
    ('".mysqli_real_escape_string($connect,strip_tags($hsc_exam_name))."',
    '".mysqli_real_escape_string($connect,strip_tags($hsc_board_name))."',
    '".mysqli_real_escape_string($connect,strip_tags($hsc_group_name))."')";
   $run=mysqli_query($connect,$sql);
   if($run==true){
      $hsc_msq="<span class='text-dark'>Data Saved!!</span>";
   }else{
    $hsc_msq="<span class='text-dark'>".mysqli_error($connect)."</span>";
   }
  }
 }
//hons validation-----------------// 
$hons_exm="";
$hons_subject="";
$hons_uni="";
$vhons_exm="";
$hons_msq="";
$hons_ck=0;
if(isset($_REQUEST['hons_submit'])){
    $hons_exm=$_REQUEST['hons_exm_name'];
    $hons_subject=$_REQUEST['hons_subject_name'];
    $hons_uni=$_REQUEST['hons_uni_name'];
    if($hons_exm==""){
      $hons_ck++;
      $vhons_exm="<span class='text-danger'>Required!!</span>";
    }

    if($hons_ck==0){
      $sql="INSERT INTO honourse(Exam_name, Subject_name, university) 
      VALUES 
      ('".mysqli_real_escape_string($connect,strip_tags($hons_exm))."',
      '".mysqli_real_escape_string($connect,strip_tags($hons_subject))."',
      '".mysqli_real_escape_string($connect,strip_tags($hons_uni))."')";
     $run=mysqli_query($connect,$sql);
     if($run==true){
        $hons_msq="<span class='text-dark'>Data Saved!!</span>";
     }else{
      $hons_msq="<span class='text-dark'>".mysqli_error($connect)."</span>";
     }
    }
}


//university ..........//
$university="";
$vuniversity="";
$uck=0;
$umsq="";
if(isset($_REQUEST['usubmit'])){
    $university=trim($_REQUEST['university']);
    if($university==""){
      $uck++;
      $vuniversity='<span class="text-dagner">Required!!</span>';
    }
    if($uck==0){
       $sql=mysqli_query($connect,"INSERT INTO university(university) VALUES ('".mysqli_real_escape_string($connect,strip_tags($university))."')");
       if($sql==true){
         $umsq='<span class="text-danger">Saved!!</span>';
       }else{
        $umsq="<span class='text-danger'>".mysqli_error($connect)."</span>";
       }
    }
}

//subject ..........//
$subject="";
$vsubject="";
$sck=0;
$usmsq="";
if(isset($_REQUEST['ussubmit'])){
    $subject=trim($_REQUEST['usubject']);
    if($subject==""){
      $sck++;
      $vsubject='<span class="text-dagner">Required!!</span>';
    }
    if($sck==0){
       $sql=mysqli_query($connect,"INSERT INTO subject(subject) VALUES ('".mysqli_real_escape_string($connect,strip_tags($subject))."')");
       if($sql==true){
         $usmsq='<span class="text-danger">Saved!!</span>';
       }else{
        $usmsq="<span class='text-danger'>".mysqli_error($connect)."</span>";
       }
    }
}
//District uploded databse...........//
$district="";
$upazila="";
$vdistrict="";
$vupazila="";
$msqdistrict="";
$ckdistrict=0;
if(isset($_REQUEST['submitdistrict'])){
    $district=trim($_REQUEST['district']);
    $upazila=trim($_REQUEST['upazila']);
    if($district==""){
        $ckdistrict++;
        $vdistrict='<span class="text-danger">Required!!</span>';
    }if($upazila==""){
        $ckdistrict++;
        $vupazila='<span class="text-danger">Required!!</span>';
    }

    if($ckdistrict==0){
        $sql= $sql="INSERT INTO district(District,Upazila) VALUES ('".mysqli_real_escape_string($connect,strip_tags($district))."',
        '".mysqli_real_escape_string($connect,strip_tags($upazila))."')";

        $run=mysqli_query($connect,$sql);
        if($run==true){
            $msqdistrict='<span class="text-danger">Saved</span>';
        }else{
            $msqdistrict=mysqli_error($connect);
        }
    }
}

?>
    <section id="top_section">
        <div class="contaier">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>I Deal Exercise School</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="top_social">
                             <i class="fa fa-facebook"></i>
                             <i class="fa fa-envelope"></i>
                             <i class="fa fa-facebook"></i>
                             <i class="fa fa-twitter"></i>
                </div>
            </div>
        </div>
    </section>

  <!--middle section-->
  <section id="main_section">
    <div class="contaier">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2" id="menu-item-section">
                <div class="system_logo">
                     <img src="../dist/images/logo/system.jpg">
                     <span>Welcome System<br>@admin</span>
                     
                </div>

                <section id="left_sidebar">
                     <div class="sidebar_icon">
                          <i class="fa fa-envelope"></i>
                          <i class="fa fa-envelope"></i>
                          <i class="fa fa-envelope"></i>
                          <i class="fa fa-envelope"></i>
                     </div>
                     <ul>
                             <li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
                             <li><a href="admin_password_change.php"><i class="fa fa-home"></i>Password Change</a></li>
                             <li><a href="student.php"><i class="fa fa-home"></i>Students Upload</a></li>
                             <li><a href="teachers.php"><i class="fa fa-home"></i>Teachers Upload</a></li>
                             <li><a href="data_add.php"><i class="fa fa-home"></i>Data Upload</a></li>
                             <li><a href="payment.php"><i class="fa fa-home"></i>Payment Upload</a></li>
                             <li><a href="student_update.php"><i class="fa fa-home"></i>Students Info Update</a></li>
                             <li><a href="teachers_update.php"><i class="fa fa-home"></i>Teachers Info Update</a></li>
                         </ul>
                </section>
            </div>


            <div class="xs-12 col-sm-7 col-md-7 col-lg-9 ml-auto p-4">
              <div class="row">
                <div class="xs-12 col-sm-12 col-md-12 col-lg-6 bg-primary">
                        <form method="post"  action="">
                           <h4 class="mb-4 text-center pt-2">এসএসসি তথ্য আপলুড।</h4>
                            <div class="form-group">
                              <label>EXAMINATION NAME:</label>
                              <input type="text" name="ssc_exm_name" class="form-control" value="<?php echo $ssc_exam_name;?>">
                              <?php echo $vssc_exam_name;?>
                            </div>

                            <div class="form-group">
                              <label>SSC BOARD NAME</label>
                              <input type="text" name="ssc_board_name" class="form-control" value="<?php echo $ssc_board_name;?>">
                              <?php echo $vssc_board_name;?>
                            </div>

                            <div class="form-group">
                              <label>SSC GROUP NAME</label>
                              <input type="text" name="ssc_group_name" class="form-control" value="<?php echo $ssc_group_name;?>">
                              <?php echo $vssc_group_name;?>
                            </div>
                            <input class="btn btn-danger mb-3" type="submit" value="Submit" name="ssc_submit">
                            <?php echo $ssc_msq;?>
                      </form>
                
                </div>
         

                <div class="xs-12 col-sm-12 col-md-12 col-lg-6 bg-danger" style="color:#fff;">
         
               <form method="post"  action="">
                           <h4 class="mb-4 text-center pt-2">এইচএসসি তথ্য আপলুড</h4>
                            <div class="form-group">
                              <label>EXAMINATION NAME:</label>
                              <input type="text" name="hsc_exm_name" class="form-control"  value="<?php echo $hsc_exam_name;?>">
                              <?php echo $vhsc_exam_name;?>
                        </div>

                            <div class="form-group">
                              <label>HSC BOARD NAME</label>
                              <input type="text" name="hsc_board_name" class="form-control"  value="<?php echo $hsc_board_name;?>">
                             <?php echo $vhsc_board_name;?>
                            </div>

                            <div class="form-group">
                              <label>HSC GROUP NAME</label>
                              <input type="text" name="hsc_group_name" class="form-control"  value="<?php echo $hsc_group_name;?>">
                             <?php echo $vhsc_group_name;?>
                             </div>
                           
                           
                            <input class="btn btn-primary mb-4" type="submit" value="Submit" name="hsc_submit">
                               <?php echo $hsc_msq;?>
                      </form>
               
             </div>
 
             <div class="xs-12 col-sm-12 col-md-12 col-lg-6 bg-success mt-4">
             <form method="post"  action="">
                           <h4 class="mb-4 text-center pt-2">অনার্স তথ্য আপলুড।</h4>
                            <div class="form-group">
                              <label>EXAMINATION NAME:</label> <?php echo $vhons_exm;?>
                              <input type="text" name="hons_exm_name" class="form-control">
                            </div>

                            <div class="form-group">
                              <label>SUBJECT NAME</label>
                              <input type="text" name="hons_subject_name" class="form-control">
                            </div>

                            <div class="form-group">
                              <label> UNIVERSITY NAME</label>
                              <input type="text" name="hons_uni_name" class="form-control">
                            </div>
                            <input class="btn btn-primary mb-4" type="submit" value="Submit" name="hons_submit"><?php echo $hons_msq;?>
                            
                      </form>
              </div>
               
              <div class="xs-12 col-sm-12 col-md-12 col-lg-6 bg-primary mt-4">
             <form method="post"  action="">
                   <h3 class="text-center mt-2" style="color:#fff;">ইউনিভার্সিটি/ বিষয়</h3> <br>       
                     <div class="form-group">
                        <label style="color:#fff;">University Name:</label> <?php echo $vuniversity;?>
                        <input class="form-control" type="text" value="<?php echo $university;?>" name="university" placeholder="Enter University....">
                     </div>
                     <input class="btn btn-danger" type="submit" value="Submit" name="usubmit">
                     <?php echo $umsq;?>
  <hr>
                     <div class="form-group">
                        <label style="color:#fff;">Subject Name:</label> <?php echo $vsubject;?>
                        <input class="form-control" type="text"  value="<?php echo $subject;?>"  placeholder="Enter Subject...." name="usubject">
                     </div>
                     <input class="btn btn-success" type="submit" value="Submit" name="ussubmit">
                      <?php echo $usmsq;?>
                      </form>
              </div>

                <!----Distric add------> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-6 bg-dark mt-4">
                 <form action="" method="post">
                     <h4 class="text-danger text-center pt-2 mb-3">জেলা এবং উপজেলা আপলুড</h4>
                 <label class="text-primary">District</label>  <php echo $vdistrict;?>
                 <div class="form-group">
                     <input class="form-control" value="<?php echo $district;?>" type="text" placeholder="District Name" name="district">
                 </div>
               
                 <div class="form-group">
                     <label class="text-primary">Upazila</label>  <?php echo $vupazila;?>
                     <input class="form-control" type="text"  placeholder="Upazila Name" name="upazila">
                 </div>

                 <input class="btn btn-danger mb-4" type="submit" value="Submit" name="submitdistrict">
                <span class="text-danger">  <?php echo $msqdistrict;?></span>
                </form>
           </div>
            </div>
            </div>
         </div>
         </div>
         </section>

   
    <script src="../dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="../dist/lib/plugin/counterup/jquery.waypoints.min.js"></script>
    <script src="../dist/lib//plugin//counterup/jquery.counterup.min.js"></script>
    <script src="../dist/lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="../dist/lib/bootstrap/js/popper.min.js"></script>
    
    <script src="../dist/js/main.js"></script>
</body>
</html>