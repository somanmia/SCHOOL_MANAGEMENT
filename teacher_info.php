<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students || Teachers Information Seraching.</title>
    
<link rel="stylesheet" type="text/css" href="dist/lib/bootstrap/css/bootstrap.min.css">
<link type="text/css" href="dist/lib/bootstrap/css/flexboxgrid.min.css">
<link rel="stylesheet" href="dist/lib/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/custom.css">
</head>
<body>
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
                <li><a href="teacher_info.html">শিক্ষকের তথ্য</a></li>
                <li><a href="student_info.html">ছাত্র-ছাত্রীদের তথ্য</a></li>
                <li><a href="">রেজিস্টার প্যানেল</a></li>
               
            </ul>
       </div>
        </nav>

     <section id="search_box">
         <div class="container">
            <form action="teacher_info_show.php" method="post">
                <img src="dist/images/load.gif">
                <div class="form-group">
                    <label>শিক্ষকের ফোন নাম্বার লিখুন</label>
                    <input class="form-control" required type="text" name="search_id">
                </div>
                <div class="form-group">
                    <label>নির্বাচন করুন।</label>
                    <select class="form-control" name="select_occuption">
                        <option value="0">Select</option>
                        <option value="1">ছাত্র-ছাত্রী</option>
                        
                    </select>
                  <input class="btn btn-danger mt-2" type="submit" value="Search" name="serach_btn"> 
                   </div>
            </form>
         </div>
     </section>   
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
<script src="dist/lib/plugin/counterup/jquery.waypoints.min.js"></script>
<script src="dist/lib//plugin//counterup/jquery.counterup.min.js"></script>
<script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
 <script src="dist/lib/bootstrap/js/popper.min.js"></script>

<script src="dist/js/main.js"></script>
</body>
</html>