<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Section</title>
    <?php require_once('css.php');?>
</head>
<body>
 

<!--Validation--> 
<?php 
 
   require_once('db_connect.php');
   $name="";
   $id="";
   $roll="";
   $fathername="";
   $mothername="";
   $national="";
   $phone="";
   $gender="";
   $date="";
   $email="";
   $careof="";
   $village="";
   $files=array();
   $district="";
   $upazila="";
   $class="";
   $religion="";
   $birth_no="";
  

  $vbirth_no="";
   $vname="";
   $vid="";
   $vroll="";
   $vfathername="";
   $vmothername="";
   $vnational="";
   $vphone="";
   $vgender="";
   $vdate="";
   $vemail="";
   $vcareof="";
   $vvillage="";
   $vdistrict="";
   $vupazila="";
   $vreligion="";
  
   $vclass="";
   $vfiles="";
   $ck=0;
   $message="";
   if(isset($_REQUEST['submit'])){
       $birth_no=trim($_REQUEST['birth_no']);
       $name=trim($_REQUEST["name"]);
       $fathername=trim($_REQUEST["fathername"]);
       $mothername=trim($_REQUEST["mothername"]);
       $id=trim($_REQUEST["id"]);
       $roll=trim($_REQUEST["roll"]);
       $national=$_REQUEST["national"];
       $phone=trim($_REQUEST["phone"]);
       $gender=$_REQUEST["genders"];
       $date=$_REQUEST["date"];
       $email=trim($_REQUEST["email"]);
       $class=$_REQUEST["class"];
       $careof=trim($_REQUEST["careof"]);
       $village=trim($_REQUEST["village"]);
       $files=$_FILES["files"];
       $district=trim($_REQUEST["district"]);
       $upazila=trim($_REQUEST["upazila"]);
       $religion=trim($_REQUEST["religion"]);
      

       if($name==""){
           $ck++;
           $vname="Required";
       }if($fathername==""){
           $ck++;
           $vfathername="Required";
       }if($mothername==""){
           $ck++;
           $vmothername="Required";
       }if($id==""){
           $ck++;
           $vid="Required";
       }else if($id!=""){
                    $sql="SELECT Student_id FROM student_info where Student_id='$id'";
                    $run=mysqli_query($connect,$sql);
                    $totalrow=mysqli_num_rows($run);
                    if($totalrow>=1){
                    $ck++;
                    $vid="Already Taken!";
                    }
       }
       if($birth_no==""){
           $ck++;
           $vbirth_no="Required";
       }else if($birth_no!=""){
                $sql="SELECT NID_NO FROM student_info where NID_NO='$birth_no'";
                $run=mysqli_query($connect,$sql);
                $totalrow=mysqli_num_rows($run);
                if($totalrow>=1){
                $ck++;
                $vbirth_no="Already Taken!";
                }
       }
       if($roll==""){
           $vroll="Required";
       }if($phone==""){
           $ck++;
           $vphone="Required";
       }else if($phone!=""){
           if(strlen($phone)!=11){
            $ck++;
            $vphone="Unvalid";
           }if(strlen($phone)==11){
               $sql="SELECT Phone FROM student_info where Phone='$phone'";
               $run=mysqli_query($connect,$sql);
                $totalrow=mysqli_num_rows($run);
               if($totalrow>=1){
                $ck++;
                $vphone="Already Taken!";
               }

           }
       }
       if($gender==""){
           $ck++;
           $vgender="Required";
       }if($date==""){
           $ck++;
           $vdate="Required";
       }if($email==""){
           $ck++;
           $vemail="Required";
       }else if($email!=""){
                    $sql="SELECT Email FROM student_info where Email='$email'";
                    $run=mysqli_query($connect,$sql);
                    $totalrow=mysqli_num_rows($run);
                    if($totalrow>=1){
                    $ck++;
                    $vemail="Already Taken!";
                    }
       }
       
       
       if($class=="0"){
           $ck++;
           $vclass="Required";
       }if($careof==""){
           $ck++;
           $vcareof="Required";
       }if($village==""){
           $ck++;
           $vvillage="Required";
       }if($files['name']==""){
           $ck++;
           $vfiles="Required";
       }else if($files['name']!=""){
        $a=explode(".",$files['name']);
        if(is_array($a) && count($a)>1){
            $ext=strtolower($a[count($a)-1]);
            if(!($ext=='jpg' || $ext=='jpeg' || $ext=='png')){
                $ck++;
                $vfiles='<span class="text-success">Image Not Supported!!</span>';
         }else if(($files['size'])<1024){
            $ck++;
            $vfiles='<span class="text-success">Max 1MB</span>';
         }
        }else{
            $ck++;
            $vfiles='<span class="text-success">Invalid Format!!</span>';
        }
      }
       
       
       if($district==""){
           $ck++;
           $vdistrict="Required";
       }if($upazila==""){
           $ck++;
           $vupazila="Required";
       }if($religion==""){
           $ck++;
           $vreligion="Required";
       }


    if($ck==0){
       $sql="INSERT INTO student_info(Name, Student_id, Roll, Father, Mother, Nationality, Date_of_birth, Phone, Email, Gender, Class, Care_of, village, District, Upazila, NID_NO,Image) VALUES (
               '".mysqli_real_escape_string($connect,strip_tags($name))."',
                 '".mysqli_real_escape_string($connect,strip_tags($id))."',
                 '".mysqli_real_escape_string($connect,strip_tags($roll))."',
                 '".mysqli_real_escape_string($connect,strip_tags($fathername))."',
                 '".mysqli_real_escape_string($connect,strip_tags($mothername))."',
                 '".mysqli_real_escape_string($connect,strip_tags($national))."',
                 '".mysqli_real_escape_string($connect,strip_tags($date))."',
                 '".mysqli_real_escape_string($connect,strip_tags($phone))."',
                 '".mysqli_real_escape_string($connect,strip_tags($email))."',
                 '".mysqli_real_escape_string($connect,strip_tags($gender))."',
                 '".mysqli_real_escape_string($connect,strip_tags($class))."',
                 '".mysqli_real_escape_string($connect,strip_tags($careof))."',
                 '".mysqli_real_escape_string($connect,strip_tags($village))."',
                 '".mysqli_real_escape_string($connect,strip_tags($district))."',
                 '".mysqli_real_escape_string($connect,strip_tags($upazila))."',                 
   
                 '".mysqli_real_escape_string($connect,strip_tags($birth_no))."',
                 '".mysqli_real_escape_string($connect,strip_tags($files['name']))."'


       )";
       $run=mysqli_query($connect,$sql);
       if($run==true){
            $sp=$files['tmp_name'];
            $dp="../dist/uploads/student_pic/".mysqli_insert_id($connect)."".$files['name'];
            move_uploaded_file($sp,$dp);
        $message='<span class="text-success">Saved!!</span>';
        $name="";
        $id="";
        $roll="";
        $fathername="";
        $mothername="";
        $national="";
        $phone="";
        $gender="";
        $date="";
        $email="";
        $careof="";
        $village="";
        
        $district="";
        $upazila="";
        $class="";
        $religion="";
        $birth_no="";
       }else{
        $message= '<span class="text-danger">'.mysqli_error($connect).'</span>';
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
                             <li class="active_list"><a href="student.php"><i class="fa fa-home"></i>Students Upload</a></li>
                             <li><a href="teachers.php"><i class="fa fa-home"></i>Teachers Upload</a></li>
                             <li><a href="data_add.php"><i class="fa fa-home"></i>Data Upload</a></li>
                             <li><a href="payment.php"><i class="fa fa-home"></i>Payment Upload</a></li>
                             <li><a href="student_update.php"><i class="fa fa-home"></i>Students Info Update</a></li>
                             <li><a href="teacher_info_update.php"><i class="fa fa-home"></i>Teachers Info Update</a></li>
                         </ul>
                    </section>
                </div>


                <form action ="" method="post" enctype="multipart/form-data" class="xs-12 col-sm-7 col-md-7 col-lg-9" id="student-data-insert">
                    <h3 class="text-primary text-center mt-4">ছাত্র-ছাত্রীদের ইনফরমেশন সাইট এ আপলুড।</h3>
                    <div class="row">
                        <div class="xs-12 col-ms-12 col-md-12 col-lg-12">
                              <div class="form-group">
                                  <label for="name">ছাত্র/ ছাত্রীর নাম:</label>  <span class="error"><?php echo $vname;?></span>
                                  <input  class="form-control" type="text" name="name" id="name" value="<?php echo $name;?>">
                              </div>
                              <div class="form-group">
                                <label for="id">ছাত্র/ ছাত্রীর আইডি নম্বরঃ</label>   <span class="error"><?php echo $vid;?></span>
                                <input  class="form-control" type="text" name="id" id="id" value="<?php echo $id;?>">
                            </div>

                            <div class="form-group">
                                <label for="id">জন্মসনদ নম্বরঃ</label>   <span class="error"><?php echo $vbirth_no;?></span>
                                <input  class="form-control" type="text" name="birth_no" id="id" value="<?php echo $birth_no;?>">
                            </div>

                            <div class="form-group">
                                <label for="roll">রোল নম্বরঃ</label>  <span class="error"><?php echo $vroll;?></span>
                                <input  class="form-control" type="text" name="roll" id="roll" value="<?php echo $roll;?>">
                            </div>

                            <div class="form-group">
                                <label for="fname">পিতার নামঃ</label>  <span class="error"><?php echo $vfathername;?></span>
                                <input  class="form-control" type="text" name="fathername" id="fname" value="<?php echo $fathername;?>">
                            </div>

                            <div class="form-group">
                                <label for="mname">মাতার নামঃ</label>  <span class="error" id="err_mname"> <?php echo $vmothername;?></span>
                                <input  class="form-control" type="text" name="mothername" id="mname" value="<?php echo $mothername;?>">
                            </div>

                        </div>

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="national">জাতীয়তাঃ</label> <span class="error"></span>
                                <input  class="form-control" type="text" value="Bangladeshi" readonly name="national" id="national">
                            </div>

                            <div class="input-group">
                                <input  class="form-control" type="text" value="<?php echo $phone;?>"name="phone" placeholder="১১ সংখ্যার ফোন নম্বর লিখুন.." id="phone"><span class="error"><?php echo $vphone;?></span>
                                
                                <div class="input-group-prepend">
                                    
                                 <span class="input-group-text text-danger"><i class="fa fa-phone"></i></span>
                                 <span class="error" id="err_phone"></span>
                             </div>
                             </div>
     <!--Select Gender-->

                       <div class="form-group mt-2">
                            <h5 class="text-primary mb-2">লিঙ্গ নির্ধারণ করুনঃ
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input  class="form-check-input" type="radio" value="Male" name="genders" selected> Male
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input  class="form-check-input" type="radio" checked value="Female" name="genders">Female
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input  class="form-check-input" type="radio" value="Other's" name="genders"> Others
                                </label>
                            </div>
                       </div>


                        </div>
<!---right area--->
                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="date">জন্মসনদঃ</label>  <span class="error"><?php echo $vdate;?></span>
                                <input  class="form-control" type="date" name="date" id="date">
                            </div>

                            <div class="input-group">
                               <input  class="form-control" type="text" name="email" value="<?php echo $email;?>" placeholder="একটি সঠক জিমেইন প্রদান করুন" id="email">
                              
                               <div class="input-group-prepend">
                                   
                               <span class="error"><?php echo $vemail;?></span>    <span class="input-group-text text-danger">@gmail.com</span>
                            </div>
                            <span class="error" id="err_email "></span>
                            </div>

                            <div class="form-group mt-3">
                                       <label >বর্তমান শ্রেনী নির্ধারণ করুনঃ</label>   <span class="error"><?php echo $vclass;?></span>
                                       <select required class="form-control" id="class" name="class"> 
                                            <option value="0">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>

                                       </select>
                            </div>
                        </div>


                        <!---Student address-->

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3 class="text-primary text-center">বর্তমান ঠিকানা প্রদান করুন</h3>
                        </div>

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="careof">মাতা পিতার অবর্তমানে অভিবাক এর নাম লিখুনঃ</label> <span class="error"><?php echo $vcareof;?></span>
                                <input  type="text" name="careof" class="form-control" id="careof" value="<?php echo $careof;?>">
                            </div>

                            <div class="form-group">
                                <label for="village">গ্রাম / শহর / রোড / ফ্লাটঃ</label> <span class="error"><?php echo $vvillage;?></span>
                                <input  type="text" name="village" class="form-control" id="village" value="<?php echo $village;?>">
                            </div>

                            <div class="form-group">
                                <label for="file">পছন্দের ছবি প্রদান করুন:</label>   <span class="error"><?php echo $vfiles;?></span>
                                <input  type="file" name="files" class="form-control" id="file">
                            </div>
                        </div>

                        
                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="district">জেলাঃ</label>  <span class="error"><?php echo $vdistrict;?></span>
                                <input  type="text" name="district" class="form-control" id="district" value="<?php echo $district;?>">
                            </div>

                            <div class="form-group">
                                <label for="upazila">উপজেলাঃ</label>  <span class="error"><?php echo $vupazila;?></span>
                                <input  type="text" name="upazila" class="form-control" id="upazila" value="<?php echo $upazila;?>">
                            </div>
                            <div class="form-group">
                                <label for="religion">সঠিক ধর্ম প্রদান করুনঃ</label>  <span class="error"><?php echo $vreligion;?></span>
                                <input  type="text" name="religion" class="form-control" id="religion" value="<?php echo $religion;?>">
                            </div>
                            
                        </div>

                        <!--Submit section-->

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                            <div class="form-check">
                                <label>
                                     <input  required class="form-check-input" type="checkbox">আমি উপরের সকল তথ্য সঠক প্রদান করেছি।
                                </label><br>
                                <input  class="btn btn-primary" type="submit" value="Submit" name="submit">
                                <span class="text-danger"><?php echo $message;?></span>
                            </div>
                        </div>
                    </div>
                </form>
                         
             
            </div>
        </div>
    </section>

    <?php require_once('js.php');?>
</body>
</html>