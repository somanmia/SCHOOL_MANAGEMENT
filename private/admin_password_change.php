<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Section</title>

    <?php require_once('css.php');?>
</head>
<body>
<!---validation------>
<?php 
  require_once('db_connect.php');
  $admin_name="";
  $password="";
  $vadmin_name="";
  $valid_password="";
  $email="";
  $vemail="";
  $vpassword="";
  $ip="";
  $ck=0;
  $message="";
  if(isset($_REQUEST['submit'])){
      $admin_name=trim($_REQUEST['admin']);
      $password=trim($_REQUEST['password']);
      $email=trim($_REQUEST['email']);
      $valid_password=md5(sha1($password));//password encrypt--//
      $ip=$_SERVER['REMOTE_ADDR'];

      if($admin_name==""){
          $ck++;
          $vadmin_name="Required!!";
      }if($email==""){
        $ck++;
         $vemail="Required!!";
      }if($password==""){
        $ck++;
        $vpassword="Required";
      }

      if($ck==0){
       $clear="TRUNCATE TABLE admin_login";
       $run=mysqli_query($connect,$clear);
       if($clear==true){
            $sql="INSERT INTO admin_login(Email, admin, Password, ip) 
            VALUES 
           (
            
               '".mysqli_real_escape_string($connect,strip_tags($admin_name))."',
                 '".mysqli_real_escape_string($connect,strip_tags($email))."',
               '".mysqli_real_escape_string($connect,strip_tags($valid_password))."',
               '$ip'
               )";

               $run=mysqli_query($connect,$sql);
               if($run==true){
                  
                ?><script>alert("PASSWORD CHANGE SUCCESSFULLY");</script>
                <?php
               }else{
                   $message=mysqli_error($connect);
               }

        }else{
            
        }
      
     
    }


      


  }








?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-ms-10 col-md-10 col-lg-7 password_change">
                    <p>Admin Panel Password Change...</p>
                    <hr style="border:1px solid #12475a"></hr>
                       <form action="" method="post">
                           <table style="margin-left:125px;">
                               <tr>
                                   <td>Admin/Handle: </td>
                                   <td><input  class="reset_admin" type="text" name="admin"></td>
                               </tr>
                               <tr>
                                   <td>Email: </td>
                                   <td><input  class="reset_admin" type="text" name="email"></td>
                               </tr>
                               <tr>
                                <td>New Password:</td>
                                <td><input required type="password" class="reset_pwd" name="password"></td>
                               </tr>
                           
                             

                            <tr>
                                <td></td>
                                <td><input required type="checkbox"><span class="text-primary ">  I Agree Password Change.....</span></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input class="btn btn-danger" type="submit" value="Change" name="submit"></td>
                           <script>alert($message);</script>
                            </tr>
                           </table>
                       </form>
                     
                </div>
            </div>
        </div>
    </section>




    <script src="../dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="../dist/lib/plugin/counterup/jquery.waypoints.min.js"></script>
    <script src="../dist/lib//plugin//counterup/jquery.counterup.min.js"></script>
    <script src="../dist/lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="../dist/lib/bootstrap/js/popper.min.js"></script>
    
    <script src="../dist/js/main.js"></script>
</body>
</html>