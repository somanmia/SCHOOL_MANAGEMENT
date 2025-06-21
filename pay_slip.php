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
    $pay_id="";
    $stu_name="";
    $roll="";
    $class="";
    $p_date="";
    $total_payment="";
    $net_bill="";
    if(isset($_REQUEST['pay_id'])){
        $pay_id=$_REQUEST['pay_id'];
       
    }
  
   $sql="SELECT student_info.Name,student_info.Roll,student_info.Class,student_payment.Amount FROM student_payment,student_info where student_payment.student_id AND student_info.Student_id=$pay_id";
   $run=mysqli_query($connect,$sql);
  
if($run==true){

    foreach($run as $myvalue){
       
        $stu_name=$myvalue['Name'];
        $roll=$myvalue['Roll'];
        $class=$myvalue['Class'];
        $total_payment=$myvalue['Amount'];
        $total_payment+=$total_payment;
       
    }
       }
 

?>
<section id="pay_slip">
    <h3 class="mt-3">NIL ACHOL PUBLIC SCHOOL</h3>
    <p class="mt-1">PAYMENT SLIP</p>
    <div class="pay_slip_box mt-2">
        <table id="pay_table">
            <tr><th>ID NO</th><td><?php echo $pay_id;?></td></tr>
            <tr><th>Name</th><td><?php echo $stu_name;?></td></tr>
            <tr><th>Roll No</th><td><?php echo $roll;?></td></tr>
            <tr><th>Class</th><td><?php echo $class;?></td></tr>
            <tr><th>Date</th><td><?php echo date("Y/m/d");?></td></tr>
            <tr><th>Amount</th><td></td></tr>
            <tr><th>Total Payment:</th><td><?php echo $total_payment;?></td></tr>
            <tr><th>NET BILL:</th><td>5000</td></tr>
          <tr><th></th></tr> <tr><th></th></tr> <tr><th></th></tr>
        </table>  
        
        <div>
        <span>Student's Signature</span> 
        <span style="float:right">Admin Section</span> 
</div>
    </div>
    <p>somanmia.cse@gmail.com</p>
</section>
 <section idi="pay_print">
    <a class="btn btn-danger ml-2" href="payment_info.php">Go Back</a>
    <a class="btn btn-danger" href="">PRINT</a>
</section>
    

<?php require_once('js_links.php');?>



</body>
</html>