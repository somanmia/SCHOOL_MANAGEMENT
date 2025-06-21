<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>I Deal Exercise School.</title>

    <?php require_once('css.php');?>
</head>
<body>

<!----Validation-------------> 
<?php 
  require_once('db_connect.php');
 $class="";
 $admission_fee="";
 $session_fee="";
 $montly_fee="";
 $coaching_fee="";

 $vclass="";
 $vadmission_fee="";
 $vsession_fee="";
 $vmontly_fee="";
 $vcoaching_fee="";
 $ck=0;
 $message="";
if(isset($_REQUEST['submit'])){
    $class=$_REQUEST['class'];
    $admission_fee=$_REQUEST['admission_fee'];
    $session_fee=$_REQUEST['session_fee'];
    $montly_fee=$_REQUEST['monthly_amount'];
    $coaching_fee=$_REQUEST['coaching_fee'];

    if($class=="0"){
        $ck++;
        $vclass='<span class="text-danger">Required</span>';
    }else if($class!="0"){
       
        $sql="SELECT Class FROM admin_payment where Class='$class'";
        $run=mysqli_query($connect,$sql);
        $row=mysqli_num_rows($run);
        if($row>=1){
            $ck++;
            $vclass='<span class="text-success">Already Taken</span>';
        }

    }
    if($admission_fee==""){
        $ck++;
        $vadmission_fee='<span class="text-danger">Required</span>';
    }
    if($session_fee==""){
        $ck++;
        $vsession_fee='<span class="text-danger">Required</span>';
    }
    if($montly_fee==""){
        $ck++;
        $vmontly_fee='<span class="text-danger">Required</span>';
    }
    if($coaching_fee==""){
        $ck++;
        $vcoaching_fee='<span class="text-danger">Required</span>';
    }

    if($ck==0){
        
        $sql="INSERT INTO admin_payment(Class, Admission_fee, Session_fee, Montly_fee, Coaching_fee, Total)
         VALUES
          (
           '".mysqli_real_escape_string($connect,strip_tags($class))."',
           '".mysqli_real_escape_string($connect,strip_tags($admission_fee))."',
           '".mysqli_real_escape_string($connect,strip_tags($session_fee))."',
           '".mysqli_real_escape_string($connect,strip_tags($montly_fee))."',
           '".mysqli_real_escape_string($connect,strip_tags($coaching_fee))."',
           '".mysqli_real_escape_string($connect,strip_tags($coaching_fee+$admission_fee+$session_fee+$montly_fee))."'
          )";
          $run=mysqli_query($connect,$sql);
          if($run==true){
              $message='<span class="text-danger">Saved Sucessfully</span>';
          }else{
              $message='<span class="text-danger">'.mysqli_error($connect).'</span>';
          }
    }

}
//update adminpayment system.........// 
$uclass="";
 $uadmission_fee="";
 $usession_fee="";
 $umontly_fee="";
 $ucoaching_fee="";

 $uvclass="";
 $uvadmission_fee="";
 $uvsession_fee="";
 $uvmontly_fee="";
 $uvcoaching_fee="";

$uck=0;
$umessage="";

 if(isset($_REQUEST['usubmit'])){
    $uclass=$_REQUEST['uclass'];
    $uadmission_fee=$_REQUEST['uadmission_fee'];
    $usession_fee=$_REQUEST['usession_fee'];
    $umontly_fee=$_REQUEST['umonthly_amount'];
    $ucoaching_fee=$_REQUEST['ucoaching_fee'];

    
    if($uclass=="0"){
        $uck++;
        $uvclass='<span class="text-danger">Required</span>';
    }

   
    if($uadmission_fee==""){
        $uck++;
        $uvadmission_fee='<span class="text-danger">Required</span>';
    }
    if($usession_fee==""){
        $uck++;
        $uvsession_fee='<span class="text-danger">Required</span>';
    }
    if($umontly_fee==""){
        $uck++;
        $uvmontly_fee='<span class="text-danger">Required</span>';
    }
    if($ucoaching_fee==""){
        $uck++;
        $uvcoaching_fee='<span class="text-danger">Required</span>';
    }

    if($uck==0){
        $sql="SELECT Class FROM admin_payment where Class='$uclass'";
        $run=mysqli_query($connect,$sql);
        $urow=mysqli_num_rows($run);
      
        if($urow>=1){
                    $update_sql="UPDATE admin_payment SET 
                    Class='".mysqli_real_escape_string($connect,strip_tags($uclass))."',
                    Admission_fee='".mysqli_real_escape_string($connect,strip_tags($uadmission_fee))."',
                    Session_fee='".mysqli_real_escape_string($connect,strip_tags($usession_fee))."',
                    Montly_fee='".mysqli_real_escape_string($connect,strip_tags($umontly_fee))."',
                    Coaching_fee='".mysqli_real_escape_string($connect,strip_tags($ucoaching_fee))."',
                    Total='".mysqli_real_escape_string($connect,strip_tags($uclass+$uadmission_fee+$usession_fee+$umontly_fee+$ucoaching_fee))."'
                    WHERE Class='$uclass'";
                    $run2=mysqli_query($connect,$update_sql);
                    if($run2==true){
                        $umessage='<span class="text-success">Updated Successfully</span>';  
                    }else{
                        $umessage='<span class="text-danger">'.mysqli_error($connect).'</span>';  
                    }

                   


        }else{
            $umessage='<span class="text-danger">Not Found</span>';  
        }
       
    }
}




?>
    <section id="top_section">
        <div class="contaier">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 class="text-center">I Deal Exercise School</h3>
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
                             <li class="active_list"><a href="payment.php"><i class="fa fa-home"></i>Payment Upload</a></li>
                             <li><a href="student_update.php"><i class="fa fa-home"></i>Students Info Update</a></li>
                             <li><a href="teachers_update.php"><i class="fa fa-home"></i>Teachers Info Update</a></li>
                         </ul>
                    </section>

              </div>
              <!--Payment-->
              <div class="xs-12 col-sm-6 col-md-6 col-lg-9 ml-4" style="margin-top:30px;">
               <h3 class="text-center text-danger mb-4">ছাত্র-ছাত্রীদের একাডেমিক খরচ</h3>
              <form style="background:#12475a;padding:25px; color:#fff" method="post" action="">
                 <div class="row">
                   
                     <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2 form-group">
                          <label>ক্লাস নির্বাচন করুন</label> <?php echo $vclass;?>
                          <select class="form-control" name="class">
                          <option value="0">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          </select>
                         
                    </div>

                    <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                         <label>ভর্তি ফিঃ</label> <?php echo $vadmission_fee;?>
                         <input class="form-control" type="text" name="admission_fee" value="<?php echo $admission_fee;?>">
                     </div>

                         <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                         <label>সেশন ফিঃ</label> <?php echo $vsession_fee;?>
                         <input class="form-control" type="text" name="session_fee" value="<?php echo $session_fee;?>">
                         </div>

                         <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                         <label>মাসিক বেতন:</label> <?php echo $vmontly_fee;?>
                         <input class="form-control" type="text" name="monthly_amount" value="<?php echo $montly_fee;?>">
                         </div>
                         <div class="xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                         <label>কোচিং ফিঃ</label> <?php echo $vcoaching_fee;?>
                         <input class="form-control" type="text" name="coaching_fee" value="<?php  echo $coaching_fee;?>">
                         <input type="submit" value="Submit" name="submit" class="btn btn-success mt-4">
                         <?php echo $message;?>
                         </div>
 
                 </div>
                 </form>

 
            <!--payment update-------> 
            <h3 class="text-center text-success mb-4" style="margin-top:80px;">ছাত্র-ছাত্রীদের একাডেমিক খরচ পরিবর্তনঃ</h3>
                 <form style="background:#12475a;padding:25px ; margin-bottom:30px;  color:#fff" method="post" action="">
                 <div class="row">
                   
                     <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2 form-group">
                          <label>ক্লাস নির্বাচন করুন</label> <?php echo $uvclass;?>
                          <select class="form-control" name="uclass">
                          <option value="0">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          </select>
                         
                    </div>

                    <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                         <label>ভর্তি ফিঃ</label> <?php echo $uvadmission_fee;?>
                         <input class="form-control" type="text" name="uadmission_fee" value="<?php echo $uadmission_fee;?>">
                     </div>

                         <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                         <label>সেশন ফিঃ</label> <?php echo $uvsession_fee;?>
                         <input class="form-control" type="text" name="usession_fee" value="<?php echo $usession_fee;?>">
                         </div>

                         <div class="xs-12 col-sm-12 col-md-12 col-lg-6 mt-2">
                         <label>মাসিক বেতন:</label> <?php echo $uvmontly_fee;?>
                         <input class="form-control" type="text" name="umonthly_amount" value="<?php echo $umontly_fee;?>">
                         </div>
                         <div class="xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                         <label>কোচিং ফিঃ</label> <?php echo $uvcoaching_fee;?>
                         <input class="form-control" type="text" name="ucoaching_fee" value="<?php echo $ucoaching_fee;?>">
                         <input type="submit" value="Submit" name="usubmit" class="btn btn-danger mt-4">
                          <?php echo $umessage;?>
                         </div>
 
                 </div>
                 </form>
              </div>

        

              
            </div>
        </div>
    </section>




    <?php require_once('js.php');?>
</body>
</html>