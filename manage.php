
<?php
require_once('admin_file_access.php');
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>I Deal Exercise School.</title>

<?php require_once('css_links.php');?>
<script src="dist/js/graph.js"></script>
</head>
<body>
    

        <!---Header Area-->
  <header>
        <div class="header-top">
            <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-top-left">
                        <ul>
                               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-top-right">
                        <a href="tel:017 72 45 90 73"><span class="lnr lnr-phone-handset"></span> <span class="text">+88017 72 459 073</span></a>
                        <a href="mailto:support@ideal.com"><span class="lnr lnr-envelope"></span> <span class="text">somanmia.cse@gmail.com</span></a>		
                     </div>
                 </div>
            </div>
        </div>
  </header>

    <header>
        <div class="header-top" style="border-top:2px solid red">
            <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-top-left">
                        <a class="navbar-brand" href="index.php"><img src="logo.png"></a>

                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-top-right">
                       <h3 style="color:#fff">NILACHOL PUBLIC SCHOOL</h3>
                     </div>
                 </div>
            </div>
        </div>
  </header>

    <!--middle section-->
    <section id="main_section">
        <div class="contaier">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2" id="menu-item-section">
                   

                    <section id="left_sidebar">
                         
                         <ul>
                             <li><a href="private/student.php"><i class="fa fa-tachometer" aria-hidden="true"></i>
Dashboard</a></li>
                             <li><a href="overview.php"><i class="fa fa-line-chart" aria-hidden="true"></i>
Overview</a></li>
                             <li><a href="student_info.php"><i class="fa fa-question" aria-hidden="true"></i>
 Student Info</a></li>
                             <li><a href="teacher_info.php"><i class="fa fa-home"></i>Teacher Info</a></li>
                             <li><a href="result.php"><i class="fa fa-home"></i>Result</a></li>
                             <li class="active_list"><a href="payment_system.php"><i class="fa fa-money" aria-hidden="true"></i>
Fees Paid</a></li>
                             <li><a href="payment_info.php"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
 Fees Check</a></li>
                             <li><a href="library.php"><i class="fa fa-archive" aria-hidden="true"></i>
 Library</a></li>
                             <li><a href="class_routine.php"><i class="fa fa-home"></i>Class Routine</a></li>
                             <li><a href="sendmessage.php"><i class="fa fa-comments-o" aria-hidden="true"></i>
 Send Message</a></li>
                             <li><a href="sendmail.php"><i class="fa fa-envelope-o" aria-hidden="true"></i>
Send Mail</a></li>
                         </ul>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                         <div class="middle_section">
                               
                          <div class="row " id="box-content-box">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4">
                                <div class="box-content box-1 bg-danger">
                                <i class="fa fa-male" aria-hidden="true"></i>
                                    <h2 class="counter-2">0352</h2>
                                    <p style="color:#fff;">সর্বোমোট ছাত্রী</p>
                                    
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4" >
                                <div class="box-content box-2 bg-primary">
                                    <i class="fa fa-female" aria-hidden="true"></i>
                                    <h2 class="counter-3">323100</h2>
                                    <p style="color:#fff;">সর্বোমোট ছাত্র</p>
                                    
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4">
                                <div class="box-content box-3 bg-success">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <h2 class="counter-4">323100</h2>
                                    <p style="color:#fff;">সর্বোমোট শিক্ষক-শিক্ষিকা</p>
                                    
                                </div>

                                
                            </div>
                            <!--Graph-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 mt-4">
                                    
                            </div>
              <!---graph end-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4">
                                <div class="box-content box-4 bg-danger">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                                    <h2><span class="counter">10000</counter></h2>
                                    <p style="color:#fff;" >সর্বোমোট ছাত্র-ছাত্রী</p>
                                    
                                </div>

                                <div class="box-content box-5 bg-primary mt-4">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <h2><span class="counter-5">2501</counter></h2>
                                    <p style="color:#fff;">সর্বোমোট শিক্ষক-শিক্ষিকা</p>
                                    
                                </div>

                               
                                
                            </div>
                       
                            
                          </div>
                          
                         </div>    
                       
                         
                </div>

                <div class="col-xs-12 col-sm-2 col-md-12 col-lg-12" id="footer">
                    <p>@Copyright 2022 || I Deal Exercise School</p>
             </div>
            </div>
        </div>
    </section>
<script>

//Counter UP----//




  
 <script src="dist/lib/plugin/canvasjs.min.js"></script>
 <?php require_once('js_links.php');?>
</body>
</html>