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
<div class="xs-12 col-sm-7 col-md-7 col-lg-9 mt-3 ml-auto">
        <form action="" method="post">
        <h3 class="text-danger text-center mb-3">Students Information Update</h3>
             <hr></hr>
            <div class="form-group">
                            <label for="id">ছাত্র/ ছাত্রীর আইডি নম্বরঃ</label>   <span class="error"></span>

                            <input  class="form-control" type="text" name="update_student_id" id="name">
                        <input type="submit" name="submit1" value="Search" class="btn btn-primary mt-3">
           </div>
        </form> 

                                <table id="update_table">
                                                    <tr>
                                                        <th>S.L</th>
                                                        <th>Student Id</th>
                                                        <th>Name</th>
                                                        <th>Title</th>
                                        <?php

                                    $totalrow=0;
                                    $student_id="";
                                    if(isset($_REQUEST['submit1'])){
                                    $student_id=trim($_REQUEST['update_student_id']);
                                    $sql="SELECT * FROM student_info WHERE Student_id='$student_id'";
                                    $run=mysqli_query($connect,$sql);
                                    $totalrow=mysqli_num_rows($run);
                                        if($totalrow>0){
                                            foreach($run as $mydata){
                                                ?>
                                                <tr><td><?php echo $mydata['id'];?></td>
                                                

                                                <td><?php echo $mydata['Student_id'];?></td>
                                                <td><?php echo $mydata['Name'];?></td>
                                                <td><a class="btn btn-primary" href="student_info_update.php?usi_id=<?php echo $student_id?>">Edit</a> | <a class="btn btn-danger" href="">Delete</a></td>
                                            </tr>
                                                <?php
                            }
                        }
                    }
                        ?>
                                </table>
        <form>
             <h3 class="text-danger text-center mb-3 mt-3">Teachers Information Update</h3>
             <hr></hr>
            <div class="form-group">
                            <label for="id" >শিক্ষকের ইমেইল অথবা আইডি লিখে সার্চ করেন।</label>   <span class="error"></span>

                            <input  class="form-control" type="text" name="update_student_id" id="name">
                        <input type="submit" value="Search" class="btn btn-primary mt-3">
           </div>
        </form> 



      
</div>


<!--Teacher info update for search---> 
        
                         
             
            </div>
        </div>
    </section>

    <?php require_once('js.php');?>
</body>
</html>