<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NILACHOL PUBLIC SCHOOL || ADMIN</title>
   
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
    
   




?>

    <section id="admins">
        <div class="container">
            <div class="admin_login" style="background:#12475a;color:#fff">
            <form  action="" method="post">
                <div class="admin_login_data">
                    <img src="dist/images/logo/secrecy-icon.png">
                   <div id="admin_login_title">
                       <p>Password Recovery</p>
                       <span>Please,Check your Email </span>
                   </div>
                </div>
                <div class="form-group">
                    <label>Enter Code:</label>  <i class="fa fa-user" aria-hidden="true"></i>

                    <input class="form-control"  type="text"  placeholder="Enter username........" name="code">

                </div>
               
                <input class="btn btn-success"type="submit" value="Access" name="submit">
                  <span class="text-danger"></span>
            </form>
         
        </div>
        </div>

    </section>

<?php require_once('js_links.php');?>



</body>
</html>