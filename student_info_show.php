<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Show</title>
    <?php require_once('css_links.php'); ?>
</head>
<body>
 
<?php require_once('header_print.php');?>
       <div class="student_info_show_middle mt-0 mb-2">
            <div class="container_2">
                <div class="row">
                <?php
                    require_once('private/db_connect.php');
                $id="";
                if(isset($_REQUEST['serach_btn'])){
                    $id=$_REQUEST['search_id'];
                
                $sql="SELECT * FROM student_info WHERE Student_id='$id' OR Phone='$id'";
                $run=mysqli_query($connect,$sql);
                $row=mysqli_num_rows($run);
                if($row>0){
                    foreach($run as $mydata){
                        $imagelink=$mydata['id'].$mydata['Image'];

                        ?>
                     <div class="xs-12 col-sm-3 col-md-3 col-lg-3 p-0" >
                            <img src="dist/uploads/student_pic/<?php echo $imagelink;?>" class="mt-4 ml-3">
                    </div>
                   
                    <div class="xs-12 col-sm-9 col-md-9 col-lg-9 " id="student_info_show_ftable">
                          <table>
                              <tr>
                                  <th>Name of Students:</th>
                                  <td><?php echo $mydata['Name'];?></td>
                              </tr>

                              <tr>
                                <th>Father's Name:</th>
                                <td><?php echo $mydata['Father'];?></td>
                            </tr>

                            <tr>
                                <th>Mother's Name:</th>
                                <td><?php echo $mydata['Mother'];?></td>
                            </tr>

                            <tr>
                                <th>Nationality:</th>
                                <td><?php echo $mydata['Nationality'];?></td>
                            </tr>

                            <tr>
                                <th>NID/DOB NO:</th>
                                <td><?php echo $mydata['NID_NO'];?></td>
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
                                <th>Gender:</th>
                                <td><?php echo $mydata['Gender'];?></td>
                            </tr>

                            <tr>
                                <th>Class:</th>
                                <td><?php echo $mydata['Class'];?></td>
                            </tr>

                            <tr>
                                <th>Roll:</th>
                                <td><?php echo $mydata['Roll'];?></td>
                            </tr>
                          </table>
                    </div>
                </div>


             
            </div>
          
       </div>


       <!---Address Show-->
       <div class="address_show">
           <div class="container_2">
               <span class="text-danger">Address Information</span>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                        <table  width="100%" >
                              <tr>
                                  <th colspan="2">Mailing/Present Address</th>
                              </tr>

                              <tr>
                                  <td width="50%">Care Of</td>
                                  <td><?php echo $mydata['Care_of'];?></td>
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
                        <a class="btn btn-danger mt-2" href="">Print</a>
                    </div>

                  
                

                       <?php
                    }
                }else{
                    header('location:student_info.php?search_msq');
                }
                }else{
                    header('location:student_info.php');
                }

            ?>
                    
               </div>
           </div>
       </div>


      

    </section>





    <?php require_once('css_links.php');?>
</body>
</html>