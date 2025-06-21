<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Payment Information.</title>
<?php require_once('css_links.php');?>
</head>
<body>
<?php
 require_once('private/db_connect.php');
 require_once('admin_file_access.php');
  $name="";
  $fathername="";
  $mothername="";
  $roll="";
  $class="";
  $cclass="";

  $month="";
  $amount="";
  $date="";
  $student_id="";
 
  $sum=0;
 $ck=0;
$total_admin_amount="";

   
    if(isset($_REQUEST['submit'])){
          $student_id=trim($_REQUEST['id']);
          $class=$_REQUEST['class'];

          $sql="SELECT * FROM student_info WHERE Student_id='$student_id'";
          
          $run=mysqli_query($connect,$sql);
        
          $totalrow=mysqli_num_rows($run);
          if($totalrow>0){
                foreach($run as $mydata){
                    $fathername=$mydata['Father'];
                    $mothername=$mydata['Mother'];
                    $name=$mydata['Name'];
                    $roll=$mydata['Roll'];
                    $cclass=$mydata['Class'];
                    $imagelink=$mydata['id'].$mydata['Image'];

                }
            $sql3="SELECT * FROM student_payment WHERE student_id='$student_id'";
            $run4=mysqli_query($connect,$sql3);

            $sql2="SELECT Total FROM admin_payment WHERE Class='$cclass'";
            $run2=mysqli_query($connect,$sql2);
            foreach($run2 as $my){
               $total_admin_amount=$my['Total'];
            }
               $ck++;
          }else{
                 ?>
                    <script>
                      alert("আপনি ভুল আইডি প্রবেশ করিয়েছেন। তাই আপনার কোন তথ্য পাওয়া যায় নি।");
                    </script>
                 <?php  
          }
    }
?>
    <section id="top_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>I Deal Exercise School</h3>
                </div>
               
            </div>
        </div>
    </section>

    <!--middle section-->
    <section id="main_section">
        <div class="contaier">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 mr-4" id="menu-item-section">
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
                             <li><a href="#"><i class="fa fa-home"></i>Student Info</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Teacher Info</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Fees Paid</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Fees Check</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Library</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Class Routine</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Send Message</a></li>
                             <li><a href="#"><i class="fa fa-home"></i>Send Mail</a></li>
                         </ul>
                    </section>
                   
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9 ml-3">
                       <div class="payment_info_section">
                               <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="student_info_logo" >
                                <img src="dist/uploads/student_pic/<?php echo $imagelink;?>" class="mt-4 ml-3">
                               </div>
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" id="student_info_search">
                                  <table id="search_table">
                                      <form action="" method="post" enctype="multipart/form-data">
                                          <tr>
                                              <td>Student Id:</td>
                                              <td style="margin-top:20px;"><input required type="text" name="id" value="<?php echo $student_id;?>"></td>
                                              
                                          </tr>

                                          <tr>
                                               <td>
                                                   Roll:
                                               </td>
                                               <td><input disabled  type="number" name="roll"></td>
                                          </tr>

                                          <tr>
                                              <td>Class:</td>
                                              <td><select name="class" required>
                                                <option value="0">Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                                <option value="7">Seven</option>
                                                <option value="8">Eight</option>
                                                <option value="9">Nine</option>
                                                <option value="10">Ten</option>
                                            </select></td>
                                          </tr>
                                          <tr>
                                              <td></td>
                                              <td><input  class="btn btn-primary" type="submit" Value="Check" name="submit"> || <a  class="btn btn-danger" href="payment_system.php?pass_id=<?php echo $student_id;?>">Payment</a></td>
                                              
                                          </tr>
                                      </form>
                                  </table>
                               </div>
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                <table id="payment_info_stable">
                                    <tr>
                                        <th>Student Name:</th>
                                        <td><?php echo $name;?></td>
                                    </tr>

                                    <tr>
                                        <th>Father's Name:</th>
                                        <td><?php echo $fathername;?></td>
                                    </tr>

                                    <tr>
                                        <th>Mother's Name:</th>
                                        <td><?php echo $mothername;?></td>
                                    </tr>

                                    <tr>
                                        <th>Class:</th>
                                        <td><?php echo $cclass;?></td>
                                    </tr>

                                    <tr>
                                        <th>Roll:</th>
                                        <td><?php echo $roll;?></td>
                                    </tr>
                                </table>
                       </div>
                               </div>


                     </div>

                <div id="payment_info_show">
                    <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <table>
                                   <tr>
                                    <th>Month Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                   </tr>
                          <?php 
                            if($ck>0){
                                
                              foreach($run4 as $myvalue){
                                  $sum+=$myvalue['Amount'];
                                  ?>
                                     <tr>
                                         <td><?php echo $myvalue['Month'];?></td>
                                         <td><?php echo $myvalue['Amount'];?></td>
                                         <td><?php echo $myvalue['Payment_date'];?></td>
                                         <td><?php echo "Done";?></td>
                                     </tr>

                                  <?php
                              }

                              ?>
                                   <tr>
                                         <td style="height:100px;" colspan="4">আপনার জন্য স্কুল এর পক্ষ থেকে নির্ধারিত মোট টাকাঃ  <?php echo $total_admin_amount;?> </td>
                                         

                                   </tr>

                                   <tr>
                                         <td style="height:100px;" colspan="4">আপনি পরিশোধ করেছেনঃ <?php echo $sum;?></td>
                                         

                                   </tr>
                              <?php
                            }

                          ?>
                                   
                               </table>
                           </div>
                    </div>
                </div>
                           
                       
                         
                </div>
            </div>
        </div>
    </section>




    <?php require_once('js_links.php');?>
</body>
</html>