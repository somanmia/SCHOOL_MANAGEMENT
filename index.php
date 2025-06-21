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
    $name="";
    $password="";
    $vname="";
    $vpassword="";
    $ck=0;
    $message="";
    if(isset($_REQUEST['access'])){
        $name=trim($_REQUEST['admin']);
        $password=trim($_REQUEST['adminpassword']);
        if($name==""){
            $ck++;
            $vname='<span class="text-danger">Required</span>';
        }if($password==""){
            $ck++;
            $vpassword='<span class="text-danger">Required</span>';
        }
        if($ck==0){
            $sql="SELECT * FROM admin_login WHERE username='$name' AND password='$password'";
            $run=mysqli_query($connect,$sql);
            $row=mysqli_num_rows($run);
            if($row>0){
                setcookie("active_current_user:",$password,time()+(36000*3));
               
                                 header("location:manage.php?msq=$name");

            }else{
                ?>
                <script>
                   swal("Wrong Password", "Please, Enter correct Password", "error");

                  </script>
              <?php
               $message='<span class="text-danger">Access is Denied</span>';
            }
             
        }
    }




?>

    <section id="admin">
        <div class="container">
            <div class="admin_login">
            <form  action="" method="post">
                <div class="admin_login_data">
                    <img src="dist/images/logo/secrecy-icon.png">
                   <div id="admin_login_title">
                       <p>Login to User</p>
                       <span>Welcome To our school management system</span>
                   </div>
                </div>
                <div class="form-group">
                    <label>Username:</label>  <i class="fa fa-user" aria-hidden="true"></i>

                    <input class="form-control"  type="text"  placeholder="Enter username........" name="admin">

                </div>
                <div class="form-group">
                    <label>Password:</label>  <i class="fa fa-unlock" aria-hidden="true"></i>

                    <input class="form-control" type="password"  placeholder="Enter username........" name="adminpassword">
                    
                </div>
                <input class="btn btn-success"type="submit" value="Access" name="access">
                    <?php echo $message;?>
            </form>
            <hr>
            <a href="reset_password.php">PASSWORD RESET</a>
        </div>
        </div>

    </section>

<?php require_once('js_links.php');?>



</body>
</html>