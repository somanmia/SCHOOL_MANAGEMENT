<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Show</title>
    <?php require_once('css_links.php');?>
</head>
<body>
<?php require_once('header_print.php');?>

  
       <div class="student_info_show_middle mt-0">
            <div class="container_2">
                <div class="row">

                <?php
                 $found=0;
                           require_once('private/db_connect.php');
                           $id="";
                           if(isset($_REQUEST['search_id'])){
                               $id=trim($_REQUEST['search_id']);
                               $sql="SELECT * FROM teachers_info WHERE Phone ='$id'";
                               $run=mysqli_query($connect,$sql);
                               $row=mysqli_num_rows($run);
                               if($row>0){
                                   $found++;
                                  foreach($run as $mydata){
                                        
                                  }
                               }else{
                                   header('location:teacher_info.php?not_found');
                               }
                           }else{
                               header('location:teacher_info.php');
                           }

                ?>
                    <div class="xs-12 col-sm-3 col-md-3 col-lg-3 p-0" >
                            <img src="dist/images/logo/system.jpg" class="mt-4 ml-3">
                    </div>
                   
                    <div class="xs-12 col-sm-9 col-md-9 col-lg-9 " id="student_info_show_ftable">
                          <table>
                              <tr>
                                  <th>Name of Students:</th>
                                  <td><?php echo $mydata['Name'];?></td>
                              </tr>

                              <tr>
                                <th>Father's Name:</th>
                                <td><?php echo $mydata['Fathers_name'];?></td>
                            </tr>

                            <tr>
                                <th>Mother's Name:</th>
                                <td><?php echo $mydata['Mothers_name'];?></td>
                            </tr>

                            <tr>
                                <th>Nationality:</th>
                                <td><?php echo $mydata['Nationality'];?></td>
                            </tr>

                            

                            <tr>
                                <th>Email:</th>
                                <td><?php echo $mydata['Email'];?></td>
                            </tr>

                            <tr>
                                <th>Date Of Birth:</th>
                                <td><?php echo $mydata['Date_of_birth'];?></td>
                            </tr>

                            <tr>
                                <th>Phone Number:</th>
                                <td><?php echo $mydata['Phone'];?></td>
                            </tr>

                            <tr>
                                <th>Marital Status:</th>
                                <td><?php echo $mydata['Marital_status'];?></td>
                            </tr>

                            <tr>
                                <th>Gender:</th>
                                <td><?php echo $mydata['Gender'];?></td>
                            </tr>

                            
                          </table>
                    </div>
                </div>


             
            </div>
          
       </div>


       <!---Address Show-->
       <div class="address_show">
           <div class="container_2">
               <span class="text-primary">Address Information</span>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-1">
                        <table  width="100%" >
                              <tr>
                                  <th colspan="2">Mailing/Present Address</th>
                              </tr>

                             

                              <tr>
                                <td>Village/Town/Road/House/Flat:</td>
                                <td><?php echo $mydata['village'];?></td>
                            </tr>

                            <tr>
                                <td>District</td>
                                <td><?php echo $mydata['District'];?></td>
                            </tr>

                          

                            <tr>
                                <td>Upazila</td>
                                <td><?php echo $mydata['Upazila'];?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-1">
                        <table  width="100%">
                              <tr>
                                  <th colspan="2">Permanent Address</th>
                              </tr>

                            

                              <tr>
                                <td>Village/Town/Road/House/Flat:</td>
                                <td><?php echo $mydata['pvillage'];?></td>
                            </tr>

                            <tr>
                                <td>District</td>
                                <td><?php echo $mydata['pDistrict'];?></td>
                            </tr>

                          

                            <tr>
                                <td>Upazila</td>
                                <td><?php echo $mydata['pUpazila'];?></td>
                            </tr>
                        </table>
                    </div>
               </div>
           </div>
       </div>


       <!----Education Qualification-->
       <section id="education_qualification">
           <div class="container_2">
              <div class="row">
                <p class="mb-2 mt-2 text-danger">Academic Qualifications.</p>
                <table id="teacher_q_table">
                     <tr>
                         <th>Examination</th>
                         <th>Board/Institute</th>
                         <th>Group/Subject/Degree</th>
                         <th>Result</th>
                         
                     </tr>
                               <?php
                                if($found>0){
                                    $sql="SELECT* FROM ssc_info WHERE phone='$id'";
                                    $run=mysqli_query($connect,$sql);
                                    if($run==true){
                                        foreach($run as $my_info){
                                            ?>

                                <tr>
                                   <td><?php echo $my_info['Examination'];?></td>
                                   <td><?php echo $my_info['Board'];?></td>
                                   <td><?php echo $my_info['Group_name'];?></td>
                                   <td><?php echo $my_info['Result'];?></td>
                                </tr>
                                            <?php
                                        }
                                    }

                                  
  //teachers hsc academic information show..............// 
                                    $hsc_sql="SELECT * FROM hsc_info WHERE phone='$id'";
                                    $hsc_run=mysqli_query($connect,$hsc_sql);
                                    $hsc_row=mysqli_num_rows($hsc_run);
                                    if($hsc_row>0){
                                        foreach($hsc_run as $hsc_data){
                                            ?>
                                                <tr>
                                   <td><?php echo $hsc_data['Examination'];?></td>
                                   <td><?php echo $hsc_data['Board'];?></td>
                                   <td><?php echo $hsc_data['Group_name'];?></td>
                                   <td><?php echo $hsc_data['Result'];?></td>
                                </tr>
                                            <?php
                                        }
                                    }


                                    // End teachers ............ hsc ///
    //teachers HONS academic information show..............// 

                                    $hons_sql="SELECT * FROM hons_info WHERE phone='$id'";
                                    $hons_run=mysqli_query($connect,$hons_sql);
                                    $hons_row=mysqli_num_rows($hons_run);
                                    if($hons_row>0){
                                        foreach($hons_run as $hons_data){
                                            ?>
                                                <tr>
                                   <td><?php echo $hons_data['Examination'];?></td>
                                   <td><?php echo $hons_data['Board'];?></td>
                                   <td><?php echo $hons_data['Group_name'];?></td>
                                   <td><?php echo $hons_data['Result'];?></td>
                                </tr>
                                            <?php
                                        }
                                    }

                                    // End Hons............//
                                     

                                    // start masters..........// 
                                    $masters_sql="SELECT * FROM masters_info WHERE phone='$id'";
                                    $masters_run=mysqli_query($connect,$masters_sql);
                                    $masters_row=mysqli_num_rows($masters_run);
                                    if($masters_row>0){
                                        foreach($masters_run as $masters_data){
                                            ?>
                                                <tr>
                                   <td><?php echo $masters_data['Examination'];?></td>
                                   <td><?php echo $masters_data['Board'];?></td>
                                   <td><?php echo $masters_data['Group_name'];?></td>
                                   <td><?php echo $masters_data['Result'];?></td>
                                </tr>
                                            <?php
                                        }
                                    }
                                     

                                }


                       ?>
                 
                   
                </table>
              </div>
           </div>
       </section>

      <div class="mt-4 mb-4">
          <div class="container_2">
              <div class="row">
                   <button class="btn btn-danger">Download</button>
                   <button class="btn btn-primary ml-2">Print</button>
              </div>
          </div>
      </div>
      

    </section>





    <?php require_once('js_links.php');?>
</body>
</html>