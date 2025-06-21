<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NILACHOL PUBLIC SCHOOL || ADMIN</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php require_once('css_links.php');?>
</head>
<body>
<?php
    require_once('private/db_connect.php');
    if(isset($_REQUEST['hacker'])){
        ?>
          <script>
             alert("আপনি  অনৈতিকভাবে এক্সেস নেওয়ার চেস্টা করেছেন। তাই আপনার সকল তথ্য রেকর্ড করে রাখে হলো।")
          </script>
        <?php
    }
    $recovery_mail="";
    $alert_message="";
    $password="";
if(isset($_REQUEST['submit'])){
   $recovery_mail=trim($_REQUEST["mail"]);
   $sql="SELECT * FROM admin_login WHERE Email='$recovery_mail'";
   $run_query=mysqli_query($connect,$sql);
   
   $row=mysqli_num_rows($run_query);
    if($row>0){
        header('location:reset_code.php?');
    }else{
        ?>
          <script>alert("Email/Username Not Found");</script>
        <?php
    }
    
   }
   




?>

    <section id="admins">
        <div class="container">
            <div class="admin_login" style="background:#12475a;color:#fff">
            <form  action="" method="post">
                <div class="admin_login_data">
                    <img src="dist/images/logo/secrecy-icon.png">
                   <div id="admin_login_title">
                       <p>Password Recovery</p>
                       <span>Please,Enter your Email, I send your Admin Password</span>
                   </div>
                </div>
                <div class="form-group">
                    <label>Enter Email :</label>  <i class="fa fa-user" aria-hidden="true"></i>

                    <input class="form-control"  type="text"  placeholder="Enter username........" name="mail">

                </div>
               
                <input class="btn btn-success"type="submit" value="Access" name="submit">
                  <span class="text-danger"><?php echo $alert_message;?></span>
            </form>
         
        </div>
        </div>

    </section>

<?php require_once('js_links.php');?>



</body>
</html>