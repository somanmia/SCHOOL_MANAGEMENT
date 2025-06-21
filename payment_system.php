
<?php 
require_once('admin_file_access.php');
$pass_id="";
if(isset($_REQUEST['pass_id'])){
    $pass_id=$_REQUEST['pass_id'];
 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>I Deal Exercise School.</title>
    <?php require_once('css_links.php');?>
</head>
<body>

<!---validation---> 
<?php 
  require_once('private/db_connect.php');
  $student_id="";
  $date="";
  $amount="";
     $month="";
     $vmonth="";
     $ck=0;
     $message="";
     if(isset($_REQUEST['submit'])){
         $student_id=trim($_REQUEST['student_id']);
         $date=$_REQUEST['date'];
         $month=$_REQUEST['month'];
         $amount=trim($_REQUEST['amount']);
         if($month=="0"){
             $ck++;?>
             <script>
                 alert("Please , Select this Month");
             </script>
             <?php
         }if($student_id==""){
             $ck++;
             ?>
               <script>
                      alert("ছাত্র-ছাত্রীদের আইডি প্রবেশ করান");
               </script>
             <?php
         }if($student_id!=""){
             $sql="SELECT * FROM student_info where Student_id=$student_id";
             $run=mysqli_query($connect,$sql);
             $row=mysqli_num_rows($run);
             if($row>0){
                 
             }else{
              ?>
              <script>
                     alert("ছাত্র-ছাত্রীদের আইডি প্রবেশ করান");
              </script>
            <?php
              $ck++;
             }
         }
  
  
         if($ck==0){
            $sql="INSERT INTO student_payment(student_id, Amount, Month, Payment_date) VALUES 
            ('".mysqli_real_escape_string($connect,strip_tags($student_id))."',
            '".mysqli_real_escape_string($connect,strip_tags($amount))."',
            '".mysqli_real_escape_string($connect,strip_tags($month))."',
            '".mysqli_real_escape_string($connect,strip_tags($date))."'
           )";
           $run=mysqli_query($connect,$sql);
           if($run==true){
               ?>
  
                 <script>
                       alert("আপনার বেতন পরিশোধ হয়েছে।");
                     </script>
                <?php
                $message='<span class="text-danger">বেতন পরিশোধ হয়েছে।</span>';
                header("location:pay_slip.php?pay_id=".$student_id);
                
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
                         <img src="dist/images/logo/system.jpg">
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
                             <li><a href="admin.html"><i class="fa fa-home"></i>Admin Panel</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Overview</a></li>
                             <li><a href="student_info.php"><i class="fa fa-home"></i>Student Info</a></li>
                             <li><a href="teacher_info.php"><i class="fa fa-home"></i>Teacher Info</a></li>
                             <li><a href="result.php"><i class="fa fa-home"></i>Result</a></li>
                             <li><a href="admin.php"><i class="fa fa-home"></i>Fees Paid</a></li>
                             <li><a href="payment_info.php"><i class="fa fa-home"></i>Fees Check</a></li>
                             <li><a href="library.php"><i class="fa fa-home"></i>Library</a></li>
                             <li><a href="class_routine.php"><i class="fa fa-home"></i>Class Routine</a></li>
                             <li><a href="sendmessage.php"><i class="fa fa-home"></i>Send Message</a></li>
                             <li><a href="sendmail.php"><i class="fa fa-home"></i>Send Mail</a></li>
                         </ul>
                    </section>
                </div>


                <div class="xs-12 col-sm-6 col-md-7 col-lg-6" style="margin:100px auto; border:2px solid #56a79a;height:340px;">
                    <p class="text-danger mt-2">Student Payment System.........</p>
                    <hr style="border:2px solid #12475a"></hr>
                    <form action="" method="post">
                        <table class="payment_system_form">
                             <tr>
                                 <th>Student Id:</th>
                                 <td><input required type="text" name="student_id" value="<?php echo $pass_id;?>"></td>
                             </tr>

                             <tr>
                                <th>Payment Date</th>
                                <td><input required type="date" name="date" value="<?php echo $date;?>"></td>
                            </tr>

                            <tr>
                                <th>Payment Month:</th>
                                <td>
                                    <select name="month">
                                        <option value="0">Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="Julay">Julay</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                   
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th>Amount/Tk:</th>
                                <td><input required type="number" name="amount"  value="<?php echo $amount;?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="btn btn-primary" type="submit" value="Submit" name="submit"> <?php echo $message;?></td>
                            </tr>
                        </table>
                    </form>
                </div>
              
            </div>
        </div>
    </section>



    <?php require_once('js_links.php');?>
</body>
</html>