<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students || Teachers Information Seraching.</title>
    <?php require_once('css_links.php');?>
</head>
<body>
<?php
require_once('admin_file_access.php');
  

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

    <nav>
        <div class="container">
            <ul>
                <li><a href="manage.php">হোম</a></li>
                <li><a href="teacher_info.php">শিক্ষকের তথ্য</a></li>
                <li><a href="student_info.php">ছাত্র-ছাত্রীদের তথ্য</a></li>
                <li><a href="student.php">রেজিস্টার প্যানেল</a></li>
               
            </ul>
       </div>
        </nav>


<!------Overview Show time line.............--------------------->
<section id="overview">  
 
      <table id="overview_table" class="table table-bordered table-hover table-dark">
          <tr>
          <th>Payment Id</th>
          <th>Amount</th>
          <th>Date/Time</th>
          <th>Show</th>
</tr>

<?php
   require_once('private/db_connect.php');
   $sql="SELECT * FROM student_payment";
   $runquery=mysqli_query($connect,$sql);
   if($runquery==true){
       foreach($runquery as $myshowdataoverview){
           ?>
           <tr>
             <td><?php echo $myshowdataoverview['student_id'];?></td>
             <td><?php echo $myshowdataoverview['Amount'];?></td>
             <td><?php echo $myshowdataoverview['Payment_date'];?></td>
             <td><a class="btn btn-primary" href="">Show</a></td>
       </tr>
           <?php 
       }
   }
?>

      </table>

</section>
    <?php require_once('js_links.php');?>
</body>
</html>