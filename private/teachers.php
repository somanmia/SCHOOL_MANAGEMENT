<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Section</title>

  <?php require_once('css.php');?>
</head>
<body>
<!---PHP DATA UPLOAD AND VALIDATION----------> 
 <?php
   require_once('db_connect.php');
   $name="";
   $fname="";
   $mname="";
   $email="";
   $phone="";
   $national="";
   $date="";
   $marital="";
   $gender="";
   $village="";
   $district="";
   $upazila="";
   $pvillage="";
   $pdistrict="";
   $pupazila="";
   $ssc_exam="";
   $ssc_group="";
   $ssc_board="";
   $ssc_gpa="";
   $hsc_exam="";
   $hsc_group="";
   $hsc_board="";
   $hsc_gpa="";
   $honurs_exam="";
   $masters_exam="";
   $vmasters_exam="";
   $honourse_subject="";
   $honourse_board="";
   $hons_gpa="";
   $masters_subject="";
   $masters_board="";
   $masters_gpa="";
   $image=array();
  
//validation variable------//
    $vname="";
    $vfname="";
    $vmname="";
    $vemail="";
    $vphone="";
    $vnational="";
    $vdate="";
    $vvillage="";
   $vdistrict="";
   $vupazila="";
   $vpvillage="";
   $vpdistrict="";
   $vpupazila="";
  $vssc_gpa="";
  $vhsc_gpa="";
  $vhons_gpa="";
  $vmasters_gpa="";
  $vimage="";
    $message="";
    $ck=0;
    if(isset($_REQUEST['finalsubmit'])){
        $name=$_REQUEST['name'];
        $fname=$_REQUEST['fname'];
        $mname=$_REQUEST['mname'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $date=$_REQUEST['date'];
        $national=$_REQUEST['national'];
        $image=$_FILES['image'];
        $marital=$_REQUEST['marital'];
        $gender=$_REQUEST['gender'];
        $village=$_REQUEST['village'];
        $district=$_REQUEST['district'];
        $upazila=$_REQUEST['upazila'];
        $pvillage=$_REQUEST['pvillage'];
        $pdistrict=$_REQUEST['pdistrict'];
        $pupazila=$_REQUEST['pupazila'];

        $ssc_exam=$_REQUEST['ssc_exam'];
        $ssc_group=$_REQUEST['ssc_group'];
        $ssc_board=$_REQUEST['ssc_board'];
        $ssc_gpa=$_REQUEST['ssc_gpa'];

        $hsc_exam=$_REQUEST['hsc_exam'];
        $hsc_group=$_REQUEST['hsc_group'];
        $hsc_board=$_REQUEST['hsc_board'];
        $hsc_gpa=$_REQUEST['hsc_gpa'];
        
        $honurs_exam=$_REQUEST['honurs_exam'];
        $honourse_board=$_REQUEST['honourse_board'];
        $honourse_subject=$_REQUEST['honourse_subject'];
        $hons_gpa=$_REQUEST['hons_gpa'];
        
        $masters_exam=$_REQUEST['masters_exam'];
        $masters_subject=$_REQUEST['masters_subject'];
        $masters_board=$_REQUEST['masters_board'];
        $masters_gpa=$_REQUEST['masters_gpa'];
      if($date==""){
          $ck++;
          $vdate='<span class="text-danger">Required!!</span>';
      }
      if($image['name']==""){
          $ck++;
          $vimage='<span class="text-danger">Fields is Empty!!</span>';
      }else{
        $a=explode(".",$image['name']);
        if(is_array($a) && count($a)>1){
            $ext=strtolower($a[count($a)-1]);
            if(!($ext=='jpg' || $ext=='jpeg' || $ext=='png')){
                $ck++;
                $vimage='<span class="text-success">Image Not Supported!!</span>';
         }else if(($image['size'])<1024){
            $ck++;
            $vimage='<span class="text-success">Max 1MB</span>';
         }
        }else{
            $ck++;
            $vimage='<span class="text-success">Invalid Format!!</span>';
        }
      }
        if($name==""){
            $ck++;
            $vname='<span class="text-danger">Required!!</span>';
        }
        if($fname==""){
            $ck++;
            $vfname='<span class="text-danger">Required!!</span>';
        }  
          if($mname==""){
            $ck++;
            $vmname='<span class="text-danger">Required!!</span>';
        }  
          if($email==""){
            $ck++;
            $vemail='<span class="text-danger">Required!!</span>';
        }else if($email!=""){
            $sql="SELECT Email FROM  teachers_info where Email='$email'";
            $run=mysqli_query($connect,$sql);
            $totalrow=mysqli_num_rows($run);
            if($totalrow>=1){
            $ck++;
            $vemail='<span class="text-danger">Already Taken!!</span>';
            }
        } 
           if($phone==""){
            $ck++;
            $vphone='<span class="text-danger">Required!!</span>';
        }else if(strlen($phone)!=11){
            $ck++;
            $vphone='<span class="text-danger">Unvalid!!</span>';
        }else if(strlen($phone)==11){
            $sql="SELECT Phone FROM  teachers_info where Phone='$phone'";
            $run=mysqli_query($connect,$sql);
            $totalrow=mysqli_num_rows($run);
            if($totalrow>=1){
            $ck++;
            $vphone='<span class="text-danger">Already Taken!!</span>';
            }
        }
      
        if($village==""){
            $ck++;
            $vvillage='<span class="text-danger">Required!!</span>';
        }if($district=="0"){
            $ck++;
            $vdistrict='<span class="text-danger">Required!!</span>';
        }if($upazila=="0"){
            $ck++;
            $vupazila='<span class="text-danger">Required!!</span>';
        }if($pvillage==""){
            $ck++;
            $vpvillage='<span class="text-danger">Required!!</span>';
        }if($pupazila=="0"){
            $ck++;
            $vpupazila='<span class="text-danger">Required!!</span>';
        }if($pdistrict=="0"){
            $ck++;
            $vpdistrict='<span class="text-danger">Required!!</span>';
        }if($ssc_gpa>5 || $ssc_gpa<0){
            $ck++;
           $vssc_gpa='<span class="text-danger">Unvalid GPA!!</span>';
        }if($hsc_gpa>5 || $hsc_gpa<0){
            $ck++;
           $vhsc_gpa='<span class="text-danger">Unvalid GPA!!</span>';
        }if($hons_gpa>4 || $hons_gpa<0){
            $ck++;
           $vhons_gpa='<span class="text-danger">Unvalid GPA!!</span>';
        }if($masters_gpa>4 || $masters_gpa<0){
            $ck++;
           $vmasters_gpa='<span class="text-danger">Unvalid GPA!!</span>';
        }


        if($ck==0){
             $sql="INSERT INTO teachers_info(Name, Fathers_name, Mothers_name, Email, Phone, Nationality, Date_of_birth, Marital_status, Gender, village, District, Upazila, pvillage, pDistrict, pUpazila,image) VALUES 
             (
                 '".mysqli_real_escape_string($connect,strip_tags($name))."',
                 '".mysqli_real_escape_string($connect,strip_tags($fname))."',
                 '".mysqli_real_escape_string($connect,strip_tags($mname))."',
                 '".mysqli_real_escape_string($connect,strip_tags($email))."',
                 '".mysqli_real_escape_string($connect,strip_tags($phone))."',
                 '".mysqli_real_escape_string($connect,strip_tags($national))."',
                 '".mysqli_real_escape_string($connect,strip_tags($date))."',
                 '".mysqli_real_escape_string($connect,strip_tags($marital))."',
                 '".mysqli_real_escape_string($connect,strip_tags($gender))."',
                 '".mysqli_real_escape_string($connect,strip_tags($village))."',
                 '".mysqli_real_escape_string($connect,strip_tags($district))."',
                 '".mysqli_real_escape_string($connect,strip_tags($upazila))."',
                 '".mysqli_real_escape_string($connect,strip_tags($pvillage))."',
                 '".mysqli_real_escape_string($connect,strip_tags($pdistrict))."',
                 '".mysqli_real_escape_string($connect,strip_tags($pupazila))."',                 
                 '".mysqli_real_escape_string($connect,strip_tags($image['name']))."'
                
             )";

            $ssc_sql="INSERT INTO ssc_info(phone, Email, Examination, Group_name, Board, Result) VALUES 
            (
                '".mysqli_real_escape_string($connect,strip_tags($phone))."',
                 '".mysqli_real_escape_string($connect,strip_tags($email))."',
                 '".mysqli_real_escape_string($connect,strip_tags($ssc_exam))."',
                 '".mysqli_real_escape_string($connect,strip_tags($ssc_group))."',
                 '".mysqli_real_escape_string($connect,strip_tags($ssc_board))."',
                 '".mysqli_real_escape_string($connect,strip_tags($ssc_gpa))."'
                

            )";

$hsc_sql="INSERT INTO hsc_info(phone, Email, Examination, Group_name, Board, Result) VALUES 
(
    '".mysqli_real_escape_string($connect,strip_tags($phone))."',
     '".mysqli_real_escape_string($connect,strip_tags($email))."',
     '".mysqli_real_escape_string($connect,strip_tags($hsc_exam))."',
     '".mysqli_real_escape_string($connect,strip_tags($hsc_group))."',
     '".mysqli_real_escape_string($connect,strip_tags($hsc_board))."',
     '".mysqli_real_escape_string($connect,strip_tags($hsc_gpa))."'
    

)";

$hons_sql="INSERT INTO hons_info(phone, Email, Examination, Group_name, Board, Result) VALUES 
(
    '".mysqli_real_escape_string($connect,strip_tags($phone))."',
     '".mysqli_real_escape_string($connect,strip_tags($email))."',
     '".mysqli_real_escape_string($connect,strip_tags($honurs_exam))."',
     '".mysqli_real_escape_string($connect,strip_tags($honourse_subject))."',
     '".mysqli_real_escape_string($connect,strip_tags($honourse_board))."',
     '".mysqli_real_escape_string($connect,strip_tags($hons_gpa))."'
    

)";
//masters data upload databse for query........//
$masters_sql="INSERT INTO masters_info(phone, Email, Examination, Group_name, Board, Result) VALUES 
(
    '".mysqli_real_escape_string($connect,strip_tags($phone))."',
     '".mysqli_real_escape_string($connect,strip_tags($email))."',
     '".mysqli_real_escape_string($connect,strip_tags($masters_exam))."',
     '".mysqli_real_escape_string($connect,strip_tags($masters_subject))."',
     '".mysqli_real_escape_string($connect,strip_tags($masters_board))."',
     '".mysqli_real_escape_string($connect,strip_tags($masters_gpa))."'
    

)";
         
     
            $run=mysqli_query($connect,$sql);
            $ssc_run=mysqli_query($connect,$ssc_sql);
            $hsc_run=mysqli_query($connect,$hsc_sql);
            $hons_run=mysqli_query($connect,$hons_sql);
            $masters_run=mysqli_query($connect,$masters_sql);
            if($run && $ssc_run && $hsc_run && $hons_run && $masters_run==true){
                $sp=$image['tmp_name'];
                $dp="../dist/uploads/student_pic/".mysqli_insert_id($connect)."".$image['name'];
                move_uploaded_file($sp,$dp);
             $message='<span class="text-success">Saved!!</span>';
                $message='<span class="text-success">Saved!!</span>';
            }else{
                $message= '<span class="text-danger">'.mysqli_error($connect).'</span>';
            }
        }
    }


  
?>

<section id="top_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 class="text-center">I Deal Exercise School</h3>
                     
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
                             <li class="active_list"><a href="teachers.php"><i class="fa fa-home"></i>Teachers Upload</a></li>
                             <li><a href="data_add.php"><i class="fa fa-home"></i>Data Upload</a></li>
                             <li><a href="payment.php"><i class="fa fa-home"></i>Payment Upload</a></li>
                             <li><a href="student_update.php"><i class="fa fa-home"></i>Students Info Update</a></li>
                             <li><a href="teachers_update.php"><i class="fa fa-home"></i>Teachers Info Update</a></li>
                         </ul>
                    </section>
                </div>
             
             <!----Teaher information insert-->
  
      
             <div class="col-xs-12 col-sm-7 col-mg-7 col-lg-9 ml-4  mb-4">
          
            
                      <h3 class="text-primary text-center mt-4 mb-4">শিক্ষকদের ইনফরমেশন সাইট এ আপলুড</h3>
                      <form action ="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name:</label> <span class="text-danger">*</span> <?php echo $vname;?>
                                <input class="form-control" type="text" placeholder="Enter Your Name" name="name" id="name" value="<?php echo $name;?>">
                            </div>
                            <div class="form-group">
                                <label for="fname">Father's Name:</label>  <span class="text-danger">*</span> <?php echo $vfname;?>
                                <input class="form-control" type="text" placeholder="Enter Your Father's Name." name="fname" id="fname" value="<?php echo $fname;?>">
                            </div>
                            <div class="form-group">
                                <label for="mname">Mother's Name:</label>  <span class="text-danger">*</span> <?php echo $vmname;?>
                                <input class="form-control" type="text" placeholder="Enter Your Mother's Name." name="mname" id="mname" value="<?php echo $mname;?>">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>  <span class="text-danger">*</span> <?php echo $vemail;?>
                                <input class="form-control" type="text" placeholder="Enter Your Email" name="email" id="email" value="<?php echo $email;?>">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone:</label>  <span class="text-danger">*</span> <?php echo $vphone;?>
                                <input class="form-control" type="text" placeholder="Enter Your Phone" name="phone" id="phone" value="<?php echo $phone;?>">
                            </div>

                            <!---nationality-- date of birth----> 
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0 pl-3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pl-0">
                                         <div class="form-group">
                                             <label for="national">Nationality</label>  <span class="text-danger"></span> 
                                             <input class="form-control" readonly type="text" value="Bangladeshi"  name="national">
                                            </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pl-2">
                                        <div class="form-group">
                                            <label for="date">Date of Birth:</label>  <span class="text-danger">*</span> <?php echo $vdate;?>
                                            <input class="form-control p-3" type="date"  name="date" id="date">
                                           </div>
                                   </div>

                                </div>
                              </div>


                              <!----Gender and marital status-->
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0 pl-3">
                                  <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  p-0">
                                        <div class="form-group">
                                            <label>Marital Status</label>  <span class="text-danger"></span>
                                            <select class="form-control" name="marital">
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                
                                            </select>
                                           </div>
                                   </div>

                                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pl-2" >
                                       <div class="form-group">
                                           <label for="gender">Gender</label>  <span class="text-danger"></span>
                                           <select class="form-control" name="gender">
                                               <option value="Male">Male</option>
                                               <option value="Female">Female</option>
                                               <option value="Others">Others</option>
                                           </select>
                                          </div>
                                  </div>
                                  </div>
                              </div>


                              <!--Address..............--> 
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  p-0 pl-3">
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                                          <h5 class="bg-secondary mt-4 mb-2 p-2" style="color:white;">Permanent Address</h5>
                                          <div class="form-group">
                                              <label>Village/Flat/Town</label>  <span class="text-danger">*</span> <?php echo $vvillage;?>
                                              <input class="form-control" type="text"name="village" value="<?php echo $village;?>">
                                          </div>

                                          <div class="form-group">
                                            <label>District</label>  <span class="text-danger">*</span> <?php echo $vdistrict;?>
                                            <select name="district" id="districtdd" class="form-control" onChange="change_district()"> 
                                                <option value="0">Select</option>
                                                <?php
                                                      $run=mysqli_query($connect,"SELECT DISTINCT District from district");
                                                      foreach($run as $mydata){
                                                          ?>
                                                             <option value="<?php echo $mydata['District'];?> "><?php echo $mydata['District'];?></option>
                                                          <?php
                                                      }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Upazila</label>  <span class="text-danger">*</span> <?php echo $vupazila;?>
                                            <div id="state">
                                            <select name="upazila" class="form-control"> 
                                                <option value="0">Select</option>
                                                
                                            </select>
                                                    </div>
                                        </div>
                                      </div>

                                      <!---Present Address-->
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pl-2">
                                        <h5 class="bg-primary mt-4 mb-2 p-2" style="color:white;">Mailing Address</h5>
                                        <div class="form-group">
                                            <label>Village/Flat/Town</label>  <span class="text-danger">*</span> <?php echo $vpvillage;?>
                                            <input class="form-control" type="text"name="pvillage">
                                        </div>

                                        <div class="form-group">
                                          <label>District</label>  <span class="text-danger">*</span> <?php echo $vpdistrict;?>
                                          <select name="pdistrict" class="form-control" id="pdistrictdd" onChange="pchange_district()"> 
                                              <option value="0">Select</option>
                                              <?php
                                                      $run=mysqli_query($connect,"SELECT DISTINCT District from district");
                                                      foreach($run as $mydata){
                                                          ?>
                                                             <option value="<?php echo $mydata['District'];?> "><?php echo $mydata['District'];?></option>
                                                          <?php
                                                      }
                                                ?>
                                          </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Upazila</label>  <span class="text-danger">*</span>  <?php echo $vpupazila;?>
                                          <div id="state2">
                                          <select name="pupazila" class="form-control"> 
                                              <option value="0">Select</option>
                                              
                                          </select>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>

                            <div>
                                <h3 class="text-center text-danger">Education Qualification</h3>
                            </div>

                          <div class="xs-12 col-sm-12 col-md-12 col-lg-12 p-0 pl-3">
                              <div class="row">
                                <div class="xs-12 col-sm-12 col-md-6 col-lg-6 p-0">
                                    <h5 class="bg-danger mt-4 mb-2 p-2" style="color:white;">SSC Examination <input type="checkbox" name="ssc_check"></h5>
                              
                                    <div class="form-group">
                                        <label>Examination Name</label>  <span class="text-danger"></span>
                                        <select class="form-control"  name="ssc_exam" id="ssc" onChange="ssc_exm_show()">
                                            <option value="0">Select</option>
                                            <?php 
                                                $sql="SELECT DISTINCT Exam_name FROM ssc";
                                                $run=mysqli_query($connect,$sql);
                                                if($run==true){
                                                  foreach($run as $mydata){
                                                    ?>
                                                    <option value="<?php echo $mydata['Exam_name'];?>"><?php echo $mydata['Exam_name'];?></option>
                                                    <?php
                                                  }
                                                }
                                            ?>
                                        </select>
    
                                    </div>
    <!--group-->
    <div class="form-group">
        <label>Group:</label>  <span class="text-danger"></span>
        <div id="ssc_data">
        <select class="form-control" name="ssc_group">
            <option value="0">Select</option>
          
            
        </select>
 </div>
    </div>

                                    <div class="form-group">
                                        <label>Board:</label>  <span class="text-danger"></span>
                                       
                                        <select class="form-control" name="ssc_board">
                                            <option value="0">Select</option>
                                             <?php
                                              $sql=mysqli_query($connect,"SELECT DISTINCT Board_name FROM ssc");
                                              if($sql==true){
                                                  foreach($sql as $mydata){
                                                      ?>
                                                       <option value="<?php echo $mydata['Board_name'];?>"><?php echo $mydata['Board_name'];?></option>
                                                      <?php
                                                  }
                                              }
                                             
                                             ?>
                                        </select>
                               
                                    </div>
    
                                  
    
                                    <div class="form-group">
                                        <label>Result:</label>  <span class="text-danger"></span> <?php echo $vssc_gpa;?>
                                        <input  class="form-control" type="text" name="ssc_gpa" id="ssc_gpa" value="<?php echo $ssc_gpa;?>">
    
                                    </div>
    
                                   
    
                                    
                                </div>
<!--HSC-->

                                <div class="xs-12 col-sm-12 col-md-6 col-lg-6  pl-3">
                                    <h5 class="bg-primary mt-4 mb-2 p-2" style="color:white;">HSC Examination <input type="checkbox" name="hsc_check"></h5>
                                    <div class="form-group">
                                        <label>Examination Name</label> 
                                        <select class="form-control"  name="hsc_exam" id="hsc" onChange="hsc_exam_show()">
                                            <option value="0">Select</option>
                                            <?php 
                                            $sql=mysqli_query($connect,"SELECT DISTINCT Exam_name FROM hsc");
                                            if($sql==true){
                                                foreach($sql as $mydata){
                                                    ?>
                                                         <option value="<?php echo $mydata['Exam_name'];?>"><?php echo $mydata['Exam_name']?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
    
                                    </div>
    
                                          <!--group-->
    <div class="form-group">
        <label>Group:</label>  <span class="text-danger">*</span>
        <div id="hsc_data">
        
        <select class="form-control" name="hsc_group" >
            <option value="0">Select</option>
          
            
        </select>
</div>
    </div> 
                                    <div class="form-group">
                                        <label>Board:</label>  
                                        <select class="form-control" name="hsc_board" >
                                            <option value="0">Select</option>
                                            <?php
                                              $sql=mysqli_query($connect,"SELECT DISTINCT Board_name FROM hsc");
                                              if($sql==true){
                                                  foreach($sql as $mydata){
                                                      ?>
                                                       <option value="<?php echo $mydata['Board_name'];?>"><?php echo $mydata['Board_name'];?></option>
                                                      <?php
                                                  }
                                              }
                                             
                                             ?>
                                            
                                        </select>
    
                                    </div>
    
                                  
    
                                    <div class="form-group">
                                        <label>Result:</label>  <?php echo $vhsc_gpa;?>
                                        <input  class="form-control" type="text" name="hsc_gpa" value="<?php echo $hsc_gpa;?>">
    
                                    </div>
    
                                   
    
                                    
                                </div>
    

                                <!---Honours-->
                                
                                <div class="xs-12 col-sm-12 col-md-6 col-lg-6  p-0 ">
                                    <h5 class="bg-primary mt-4 mb-2 p-2" style="color:white;">Honours / B.A / B.S.C Examination  <input type="checkbox" name="honourse_check"></h5>
                                    <div class="form-group">
                                        <label>Examination Name</label> 
                                        <select class=" form-control"  name="honurs_exam" id="hons" onChange="hons_exm_show()">
                                            <option value="0">Select</option>
                                            <?php
                                              $sql=mysqli_query($connect,"SELECT  DISTINCT Exam_name FROM honourse");
                                              if($sql==true){
                                                  foreach($sql as $mydata){
                                                      ?>
                                                      <option value="<?php echo $mydata['Exam_name'];?>"><?php echo $mydata['Exam_name'];?></option>
                                                      <?php
                                                  }
                                              }


                                            ?>
                                        </select>
    
                                    </div>
    
                                    <div class="form-group">
                                        <label>Subject Name:</label>  
                                        <div id="hons_data">
                                        <select class="form-control" name="honourse_subject" >
                                            <option value="0">Select</option>
                                            
                                           
                                            
                                        </select>
                                   </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label>Univesity:</label>  
                                        <select class="form-control" name="honourse_board" >
                                            <option value="0">Select</option>
                                            <?php
                                              $sql=mysqli_query($connect,"SELECT DISTINCT  university FROM honourse");
                                              if($sql==true){
                                                  foreach($sql as $mydata){
                                                      ?>
                                                      <option value="<?php echo $mydata['university'];?>"><?php echo $mydata['university'];?></option>
                                                      <?php
                                                  }
                                              }


                                             ?>
                                            
                                        </select>
    
                                    </div>
    
                                  
    
                                    <div class="form-group">
                                        <label>Result:</label>   <?php echo $vhons_gpa;?>
                                        <input  class="form-control" type="text" name="hons_gpa" value="<?php echo $hons_gpa;?>">
    
                                    </div>
    
                                   
    
                                    
                                </div>
    <!---Masters -->
    <div class="xs-12 col-sm-12 col-md-6 col-lg-6  pl-3">
        <h5 class="bg-danger mt-4 mb-2 p-2" style="color:white;">Master's  <input type="checkbox" name="masters_check"></h5>
        <div class="form-group">
                                        <label>Examination Name</label> <?php echo $vmasters_exam;?>
                                        <select class=" form-control"  name="masters_exam">
                                            <option value="0">Select</option>
                                            <option value="Masters">Masters</option>


                                        
                                        </select>
    
                                    </div>
        <div class="form-group">
            <label>Subject Name</label>  
            <select class=" form-control"  name="masters_subject">
                <option value="0">Select</option>
                <?php
                    $sql=mysqli_query($connect,"SELECT  DISTINCT subject FROM subject");
                    if($sql==true){
                        foreach($sql as $mydata){
                            ?>
                            <option value="<?php echo $mydata['subject']?>"><?php echo $mydata['subject'];?></option>
                            <?php
                        }
                    }
                    

               ?>
            </select>

        </div>

        <div class="form-group">
            <label>Univesity:</label>  
            <select class="form-control" name="masters_board" >
            <option value="0">Select</option>
            <?php
                    $sql=mysqli_query($connect,"SELECT  DISTINCT university FROM university");
                    if($sql==true){
                        foreach($sql as $mydata){
                            ?>
                            <option value="<?php echo $mydata['university']?>"><?php echo $mydata['university'];?></option>
                            <?php
                        }
                    }
                    

               ?>
               
                
            </select>

        </div>

      

                        <div class="form-group">
                            <label>Result:</label>   <?php echo $vmasters_gpa;?>
                            <input  class="form-control" type="text" name="masters_gpa" value="<?php echo $masters_gpa;?>">

                        </div>

                    

                        
                    </div>
                                            </div>
                          </div>  
                <!--Image Uploded-->
                <div class="form-group  p-0">
                    <label for="image">Profile Photo upload</label> <span class="text-danger">*</span> <?php echo $vimage;?>
                    <input class="form-control" type="file" name="image" id="image">
                </div>

                <!--terms and condition-->
                <input class="btn btn-danger" type="submit" value="submit" name="finalsubmit">
                  <?php echo $message;?>    
     </form> <!---Main Form End-----> 
            </div>
        </div>
    </section>
<!---Javascript for District-------------> 
    <script>
         function change_district(){
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","ajax.php?district="+document.getElementById("districtdd").value,false);
              xmlhttp.send(null);
              
              document.getElementById("state").innerHTML=xmlhttp.responseText;
         }

         function pchange_district(){
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","ajax.php?pdistrict="+document.getElementById("pdistrictdd").value,false);
              xmlhttp.send(null);
              
              document.getElementById("state2").innerHTML=xmlhttp.responseText;
         }

         //SSC GROUP FOUND.........// 
         function ssc_exm_show(){
            var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","ajax.php?ssc_exmd="+document.getElementById("ssc").value,false);
             
              xmlhttp.send(null);
             
              document.getElementById("ssc_data").innerHTML=xmlhttp.responseText;
         }
         //ssc board name found.........// 

         //HSC GROUP FOUND--------//
         function hsc_exam_show(){
           
            var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","ajax.php?hsc_exmd="+document.getElementById("hsc").value,false);
            
              xmlhttp.send(null);
             
              document.getElementById("hsc_data").innerHTML=xmlhttp.responseText;
         }
       //hons...........//
       function hons_exm_show(){
        var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","ajax.php?hons_exmd="+document.getElementById("hons").value,false);
            
              xmlhttp.send(null);
             
              document.getElementById("hons_data").innerHTML=xmlhttp.responseText;
       }
  
    </script>
   
   <?php require_once('js.php');?>

</body>
</html>