<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบจัดการทะเบียน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
   echo css_asset('my theme.css');
   echo css_asset('bootstrap.min.css'); 
   echo css_asset('jquery.min.js'); 
   echo css_asset('bootstrap.min.js'); ?>
</head>
<body class="real">
    
<div class="jumbotron text-center">
  <h1>ระบบจัดการงานทะเบียนนักเรียน</h1>
  <p> مدرسة مصباح العلوم || โรงเรียนมิศบาฮุ้ลอุลูม</p> 
</div>
    
  <div class="container">
<div class="inset">
  <div class="login-head">
      <h1>ลงชื่อเข้าใช้</h1>
  </div>
    <form action="<?php echo site_url('Teacher_code/login'); ?>" method="post">
      <li>
          <input type="text" class="text" placeholder="รหัสผู้ใช้" name="username" />
      </li>
      
      <div class="clear"  ></div>
      <li>
          <input name="password" type="password" name="password" placeholder="รหัสผ่าน" />
      </li>
        <div class="clear"> </div>

      <div class="submit">
        <input type="submit"  value="เข้าสู่ระบบ" >
        <h4><a href="#">Lost your Password ?</a></h4>
              <div class="clear">  </div> 
      </div>
        
    </form>
    </div>          
  </div>
  <div class="clear"> </div>

  <h2><a href="<?php echo site_url('/welcome/addteacher');?>">เพิ่มอาจารย์</a></h2>
  <h2><a href="<?php echo site_url('/welcome/addsubject');?>">เพิ่มวิชา</a></h2>
  <h2><a href="<?php echo site_url('/welcome/addstudent');?>">เพิ่มนักเรียน</a></h2>

</body>
</html>
