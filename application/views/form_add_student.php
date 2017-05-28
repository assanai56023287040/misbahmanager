<!DOCTYPE html>
<html lang="en">
<head>
  <title>เพิ่มข้อมูลนักเรียน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
   echo css_asset('bootstrap.min.css'); 
   echo css_asset('jquery.min.js'); 
   echo css_asset('bootstrap.min.js');
   //echo css_asset('my theme.css'); ?>


</head>

<body >
   
    <div class="container">
<div class="jumbotron text-center">
  <h1>ระบบจัดการงานทะเบียนนักเรียน</h1>
  <p>โรงเรียนมิศบาฮุ้ลอุลูม</p> 
</div>
  <h1 align="text-center">เพิ่มข้อมูลนักเรียน</h1>
  <form class="form-horizontal" action="<?php echo site_url('student_code/add_student'); ?>" method="post" name="form1" >

  <script language="javascript">
function fncSubmit()
{
  if(document.form1.t_id.value == "")
  {
    alert('กรุณากรอกรหัสอาจารย์');
    document.form1.t_id.focus();   
    return false;

  if(document.form1.t_fname.value == "")
  {
    alert('กรุณากรอกชื่อ(ไทย)');
    document.form1.t_fname.focus();   
    return false;

  if(document.form1.t_lname.value == "")
  {
    alert('กรุณากรอกนามสกุล');
    document.form1.t_lname.focus();   
    return false;

  if(document.form1.t_nname.value == "")
  {
    alert('กรุณากรอกชื่ออาหรับ');
    document.form1.t_nname.focus();   
    return false;
  
  if(document.form1.username.value == "")
  {
    alert('กรุณากรอกรหัสตัวเลข');
    document.form1.username.focus();
    return false;
  } 

  if(document.form1.password.value == "")
  {
    alert('กรุณากรอกรหัสผ่าน');
    document.form1.password.focus();   
    return false;
  } 

  if(document.form1.re-password.value == "")
  {
    alert('กรุณากรอกช่องยืนยันรหัสผ่าน');
    document.form1.re-password.focus();    
    return false;
  } 

  if(document.form1.password.value != document.form1.re-password.value)
  {
    alert('รหัสผ่านไม่ตรงกัน  กรุณากรอกใหม่');
    document.form1.re-password.focus();    
    return false;
  } 
  } 

  document.form1.submit();
}
</script>
  
  <div class="form-group">
  <label class="control-label col-sm-2" for="s_id">รหัสนักเรียน : </label>
  <div class="col-sm-10">
  <input type="text"  name="s_id" id="s_id" class="form-control" placeholder="รหัสนักเรียน" maxlength="5" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="student_first_name">ชื่อนักเรียน(ไทย) : </label>
  <div class="col-sm-10">
  <input type="text"  name="s_fname" id="student_first_name" class="form-control" placeholder="ชื่อนักเรียน(ไทย)" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="student_last_name">นามสกุล : </label>
  <div class="col-sm-10">
  <input type="text"  name="s_lname" id="student_last_name" class="form-control" placeholder="นามสกุล" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="student_nick_name">ชื่ออาหรับ : </label>
  <div class="col-sm-10">
  <input type="text"  name="s_nname" id="student_nick_name" class="form-control" placeholder="ชื่ออาหรับ" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="student_address">ที่อยู่ : </label>
  <div class="col-sm-10">
  <textarea class="form-control" name="s_address" id="student_address" rows="5" placeholder="ที่อยู่"></textarea>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="student_telephone">เบอร์โทรศัพท์ : </label>
  <div class="col-sm-10">
  <input type="text"  name="s_tel" id="student_telephone" class="form-control" placeholder="เบอร์โทรศัพท์" maxlength="10" minlength="10" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="st_class">ชั้น : </label>
  <div class="col-sm-10">
  <input type="text"  name="st_class" id="st_class" class="form-control" placeholder="ชั้นปีปัจจุบัน" maxlength="1" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="class_start">ชั้นที่เริ่มเข้าเรียน : </label>
  <div class="col-sm-10">
  <input type="text"  name="class_start" id="class_start" class="form-control" placeholder="ชั้นที่เริ่มเข้าเรียน" maxlength="1" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>

<div class="form-group">
  <label class="control-label col-sm-2" for="year_strat">ปีที่เริ่มเข้าศึกษา : </label>
  <div class="col-sm-10">
  <input type="text"  name="year_strat" id="year_strat" class="form-control" placeholder="ปีการศึกษา" maxlength="4" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>
                                                              
<div class="form-group">
  <label class="control-label col-sm-2" for="teacher_t_id">อาจารย์ประจำชั้น : </label>
  <div class="col-sm-10">
  <input type="text"  name="teacher_t_id" id="teacher_t_id" class="form-control" placeholder="อาจารย์ประจำชั้น" maxlength="3" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>
  
  
  <br /><button type="submit" class="btn btn-default" onclick="fncSubmit();" >เพิ่มข้อมูลนักเรียน</button>
  <button type="reset" class="btn btn-default">ยกเลิก</button>
  
  </form>
    </div>
  </body>
  <footer>
    <br/>
    <br>
  </footer>