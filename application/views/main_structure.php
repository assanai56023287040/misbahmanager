<?php
$session_user = $this->session->userdata('user'); 
?>
<html lang="en">
    <head>
    <title>ระบบจัดการทะเบียน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
   //echo css_asset('my theme.css');
   echo css_asset('bootstrap.min.css'); 
   echo css_asset('jquery.min.js'); 
   echo css_asset('bootstrap.min.js');
   echo css_asset('w3.css');
   echo css_asset('font-awesome.min.css');
   echo css_asset('font-awesome.css');
   ?>
   
</head>
<body class="real">
    
<div class="jumbotron text-center">
  <h1>ระบบจัดการงานทะเบียนนักเรียน</h1>
  <p> مدرسة مصباح العلوم || โรงเรียนมิศบาฮุ้ลอุลูม</p> 
</div>
     
    <div class="well well-lg text-center"><h1>ยินดีต้อนรับ</h1>
        <h3><?php 
        echo ' อาจารย์  '.$session_user['fname'].'  '.$session_user['lname'].'      ||       สถานะ :  '.$session_user['status_th'];
        ?></h3>
        <a href="<?php echo site_url('Teacher_code/logout'); ?>" style="font-size: 24">ออกจากระบบ</a>
    </div>
    
    <div id="body">
        <?php
            echo $content;
            ?>
    </div
    </body>
</html>
