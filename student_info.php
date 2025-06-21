<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students || Teachers Information Seraching.</title>
<?php require_once('css_links.php');?>
</head>
<body>
    <?php require_once('header.php');
     
    
    ?>

    <nav>
        <div class="container">
            <ul>
                <li><a href="manage.php">হোম</a></li>
                <li><a href="teacher_info.php">শিক্ষকের তথ্য</a></li>
                <li><a href="student_info.php">ছাত্র-ছাত্রীদের তথ্য</a></li>
                <li><a href="">রেজিস্টার প্যানেল</a></li>
               
            </ul>
       </div>
        </nav>

     <section id="search_box">
         <div class="container">
            <form  action="student_info_show.php" method="post">
                <img src="dist/images/load.gif">
                <div class="form-group">
                    <label>ছাত্র-ছাত্রীদের আইডি নাম্বার</label>
                    <input class="form-control" required type="text" name="search_id" >
                </div>
                <div class="form-group">
                    <label>নির্বাচন করুন।</label>
                    <select class="form-control" name="select_occuption">
                        <option value="0">Select</option>
                        <option value="1" selected>ছাত্র-ছাত্রী</option>
                        
                    </select>
                  <input class="btn btn-danger mt-2" type="submit" value="Search" name="serach_btn"> 
                   </div>
            </form>
         </div>
     </section>   

<?php

if(isset($_REQUEST['search_msq'])){
    ?>
    <script>
         alert("আপনি ভুল আইডি প্রবেশ করিয়েছেন। পুনরায় সঠিক আইডি প্রবেশ করান")
    </script>
    <?php
}
?>
   
<?php require_once('js_links.php');?>


</body>
</html>