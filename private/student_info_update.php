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
   $fathername="";
   $mothername="";
   $roll="";
   $dob_no="";
   $dob="";
   $phone="";
   $email="";
   $class="";
   $careof="";
   $village="";
   $upazila="";
   $district="";
 $gender="";
 $religion="";
   /// validation show variable---//
   $vname="";
   
   $vfathername="";
   $vmothername="";
   $vroll="";
   $vdob_no="";
   $vdob="";
   $vphone="";
   $vemail="";
   $vclass="";
   $vcareof="";
   $vvillage="";
   $vupazila="";
   $vdistrict="";
   $vreligion="";

   // database from data store ----//
   $uname="";
 $ureligion="";
   $ufathername="";
   $umothername="";
   $uroll="";
   $udob_no="";
   $udob="";
   $uphone="";
   $uemail="";
   $uclass="";
   $ucareof="";
   $uvillage="";
   $uupazila="";
   $udistrict="";
   $message="";
   $ugender="";
   $ck=0;
   if(isset($_REQUEST['usi_id'])){
        $id=$_REQUEST['usi_id'];
        $search_sql="SELECT * FROM `student_info` WHERE Student_id=$id";
        $run_query=mysqli_query($connect,$search_sql);
        if($run_query==true){
           foreach($run_query as $myinfo){
            $uname=$myinfo['Name'];
            $udob_no=$myinfo['NID_NO'];
            $uroll=$myinfo['Roll'];
            $uphone=$myinfo['Phone'];
            $ufathername=$myinfo['Father'];
            $umothername=$myinfo['Mother'];
            $udob=$myinfo['Date_of_birth'];
            $uvillage=$myinfo['village'];
            $uupazila=$myinfo['Upazila'];
            $udistrict=$myinfo['District'];
            $uclass=$myinfo['Class'];
            $uemail=$myinfo['Email'];
            $ucareof=$myinfo['Care_of'];
           }
        }
}

  if(isset($_REQUEST['submit'])){
    $name=trim($_REQUEST['name']);
    $dob_no=trim($_REQUEST['birth_no']);
    $roll=trim($_REQUEST['roll']);
    $fathername=trim($_REQUEST['fathername']);
    $mothername=trim($_REQUEST['mothername']);
    $phone=trim($_REQUEST['phone']);
    $gender=$_REQUEST['genders'];
    $dob=$_REQUEST['date'];
    $email=trim($_REQUEST['email']);
    $class=$_REQUEST['class'];
    $careof=trim($_REQUEST['careof']);
    $village=trim($_REQUEST['village']);
    $district=trim($_REQUEST['district']);
    $upazila=trim($_REQUEST['upazila']);

    if($dob_no==""){
        $ck++;
        $vdob_no="Required";
    }if($village==""){
        $ck++;
        $vvillage="Required";
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
    if($name==""){
        $ck++;
        $vname="Required!";
     }if($dob==""){
        $ck++;
        $vdob="Required";
     }if($class=="0"){
        $ck++;
        $vclass="Required";
     }if($careof==""){
        $ck++;
        $vcareof="Required";
     }
     if($fathername==""){
       $ck++;
       $vfathername="Required!";
     }if($mothername==""){
        $ck++;
        $vmothername="Required!";
     }if($roll==""){
       $ck++;
       $vroll="Required!";

     }if($phone==""){
        $ck++;
        $vphone="Required!!";
     }else if($phone!=""){
        if(strlen($phone)!=11){
         $ck++;
         $vphone="Unvalid";
        }
  }


  if($email==""){
    $ck++;
    $vemail="Required";
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
                             <li><a href="student_info_update.php"><i class="fa fa-home"></i>Students Info Update</a></li>
                             <li><a href="teacher_info_update.php"><i class="fa fa-home"></i>Teachers Info Update</a></li>
                         </ul>
                    </section>
                </div>


                <form action ="" method="post" enctype="multipart/form-data" class="xs-12 col-sm-7 col-md-7 col-lg-9" id="student-data-insert">
                    <h3 class="text-primary text-center mt-4">STUDENT'S INFORMATION UPDATE</h3>
                    <div class="row">
                        <div class="xs-12 col-ms-12 col-md-12 col-lg-12">
                              <div class="form-group">
                                  <label for="name">ছাত্র/ ছাত্রীর নাম:</label>  <span class="error"><?php echo $vname;?></span>
                                  <input  class="form-control" type="text" name="name" id="name" value="<?php echo $uname;?>">
                              </div>
                              <div class="form-group">
                                <label for="id">ছাত্র/ ছাত্রীর আইডি নম্বরঃ</label>   <span class="error"></span>
                                <input readonly class="form-control" type="text" name="id" id="id" value="<?php echo $id;?>">
                            </div>

                            <div class="form-group">
                                <label for="id">জন্মসনদ নম্বরঃ</label>   <span class="error"><?php echo $vdob_no;?></span>
                                <input  class="form-control" type="text" name="birth_no" id="id" value="<?php echo $udob_no;?>">
                            </div>

                            <div class="form-group">
                                <label for="roll">রোল নম্বরঃ</label>  <span class="error"><?php echo $vroll;?></span>
                                <input  class="form-control" type="text" name="roll" id="roll" value="<?php echo $uroll;?>">
                            </div>

                            <div class="form-group">
                                <label for="fname">পিতার নামঃ</label>  <span class="error"><?php echo $vfathername;?></span>
                                <input  class="form-control" type="text" name="fathername" id="fname" value="<?php echo $ufathername;?>">
                            </div>

                            <div class="form-group">
                                <label for="mname">মাতার নামঃ</label>  <span class="error" id="err_mname"><?php echo $vmothername;?></span>
                                <input  class="form-control" type="text" name="mothername" id="mname" value="<?php echo $umothername;?>">
                            </div>

                        </div>

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="national">জাতীয়তাঃ</label> <span class="error"></span>
                                <input  class="form-control" type="text" value="Bangladeshi" readonly name="national" id="national">
                            </div>

                            <div class="input-group">
                                <input  class="form-control" type="text"name="phone" value="<?php echo $uphone;?>" placeholder="১১ সংখ্যার ফোন নম্বর লিখুন.." id="phone"><span class="error"><?php echo $vphone;?></span>
                                
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
                                <label for="date">জন্মসনদঃ</label>  <span class="error"><?php echo $vdob;?></span>
                                <input  class="form-control" type="date" name="date" id="date" value="<?php echo $udob;?>">
                            </div>

                            <div class="input-group">
                               <input  class="form-control" type="text" name="email"  value="<?php echo $uemail;?>" placeholder="একটি সঠক জিমেইন প্রদান করুন" id="email">
                              
                               <div class="input-group-prepend">
                                   
                               <span class="error"><span class="input-group-text text-danger" >@gmail.com</span>
                            </div>
                            <span class="error" id="err_email "><?php echo $vemail;?></span>
                            </div>

                            <div class="form-group mt-3">
                                       <label >বর্তমান শ্রেনী নির্ধারণ করুনঃ</label>   <span class="error"><?php echo $vclass;?></span>
                                       <input type="text" class="form-control" name="class" value="<?php echo $uclass;?>">
                            </div>
                        </div>


                        <!---Student address-->

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3 class="text-primary text-center">বর্তমান ঠিকানা প্রদান করুন</h3>
                        </div>

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="careof">মাতা পিতার অবর্তমানে অভিবাক এর নাম লিখুনঃ</label> <span class="error"><?php echo $vcareof;?></span>
                                <input  type="text" name="careof" class="form-control"  value="<?php echo $ucareof;?>" id="careof">
                            </div>

                            <div class="form-group">
                                <label for="village">গ্রাম / শহর / রোড / ফ্লাটঃ</label> <span class="error"><?php echo $vvillage;?></span>
                                <input  type="text" name="village" class="form-control" id="village" value="<?php echo $uvillage;?>">
                            </div>

                          
                        </div>

                        
                        <div class="xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="district">জেলাঃ</label>  <span class="error"><?php echo $vdistrict;?></span>
                                <input  type="text" name="district" class="form-control" id="district" value="<?php echo $udistrict;?>">
                            </div>

                            <div class="form-group">
                                <label for="upazila">উপজেলাঃ</label>  <span class="error"><?php echo $vupazila;?></span>
                                <input  type="text" name="upazila" class="form-control" id="upazila" value="<?php echo $uupazila;?>">
                            </div>
                           
                            
                        </div>

                        <!--Submit section-->

                        <div class="xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                            <div class="form-check">
                                <label>
                                     <input  required class="form-check-input" checked type="checkbox">আমি উপরের সকল তথ্য সঠক প্রদান করেছি।
                                </label><br>
                                <input  class="btn btn-primary" type="submit" value="Submit" name="submit">
                                <span class="text-danger"></span>
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