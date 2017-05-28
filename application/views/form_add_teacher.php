<!DOCTYPE html>
<html lang="en">
<head>
  <title>เพิ่มข้อมูลอาจารย์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
   echo css_asset('bootstrap.min.css'); 
   echo css_asset('jquery.min.js'); 
   echo css_asset('bootstrap.min.js'); ?>


</head>

<body>
   
    <div class="container">
<div class="jumbotron text-center">
  <h1>ระบบจัดการงานทะเบียนนักเรียน</h1>
  <p>โรงเรียนมิศบาฮุ้ลอุลูม</p> 
</div>
  <h1 align="text-center">เพิ่มข้อมูลอาจารย์</h1>
  <form class="form-horizontal" action="<?php echo site_url('teacher_code/add_teacher'); ?>" method="post" name="form_teacher" >

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
  <label class="control-label col-sm-2" for="t_name_ar">ชื่ออาจารย์(อาหรับ) : </label>
  <div class="col-sm-10">
  <input type="text"  name="t_name_ar" id="t_name_ar" class="form-control" placeholder="ชื่ออาจารย์(อาหรับ)" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="t_last_name">นามสกุล : </label>
  <div class="col-sm-10">
  <input type="text"  name="t_last_name" id="t_last_name" class="form-control" placeholder="นามสกุล" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="t_name_th">ชื่อ(ไทย) : </label>
  <div class="col-sm-10">
  <input type="text"  name="t_name_th" id="t_name_th" class="form-control" placeholder="ชื่อไทยตามบัตรประชาชน" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="t_address">ที่อยู่ : </label>
  <div class="col-sm-10">
  <textarea class="form-control" name="t_address" id="t_address" rows="5" placeholder="ที่อยู่"></textarea>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="teacher_telephone">เบอร์โทรศัพท์ : </label>
  <div class="col-sm-6">
  <input type="text"  name="t_tel" id="teacher_telephone" class="form-control" placeholder="เบอร์โทรศัพท์" maxlength="10" minlength="10" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>
      
  <div class="form-group">
  <label class="control-label col-sm-2" for="username">รหัสผู้ใช้ : </label>
  <div class="col-sm-10">
  <input type="text" name="username" id="username" class="form-control" placeholder="รหัสผู้ใช้"/>
  </div></div>
      
  <div class="form-group">
  <label class="control-label col-sm-2" for="password">รหัสผ่าน : </label>
  <div class="col-sm-10">
  <input type="password" name="password" id="password" class="form-control" placeholder="รหัสผ่าน"/>
  </div></div>
      
  <div class="form-group">
  <label class="control-label col-sm-2" for="repassword">ยืนยันรหัสผ่าน : </label>
  <div class="col-sm-10">
  <input type="password" name="re-password" id="repassword" class="form-control"  placeholder="ยืนยันรหัสผ่าน"/>
  </div></div>

    <div class="form-group">
  <label class="control-label col-sm-2" for="t_status">เลือกประเภทผู้ใช้ : </label>
  <div class="col-sm-2">
      <input class="w3-radio" type="radio" name="t_status" id="t_status" value="3" checked onclick="if(form_teacher.t_status.checked==true){form_teacher.class_teach.disabled=true;}">
      <label class="control-label" for="t_status">อาจารย์ประจำวิชา</label></div></div>
      
      <div class="form-group">
    <label class="control-label col-sm-2" for="t_status2"></label>
  <div class="col-sm-2">     
      <input class="w3-radio" type="radio" name="t_status" id="t_status2" value="2" onClick="if(form_teacher.t_status2.checked==false){form_teacher.class_teach.disabled=true;}else{form_teacher.class_teach.disabled=false;}">
      <label class="control-label" for="t_status2">อาจารย์ประจำชั้น</label>
  </div>
     <label class="control-label col-sm-2" for="class_teach">ประจำชั้น ปี : </label>
         <div class="col-sm-2">
             <select class="form-control" name="class_teach" id="class_teach" disabled="">
                     <option value="" selected="selected">--เลือกชั้นปี--</option>
                     <option value="0">เตรียม</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>              
             </select>         
     </div>     
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="admin_box"></label>
    <div class="col-sm-2">
<input class="w3-check" type="checkbox" name="admin_box" id="admin_box" >
<label>ผู้ดูแลระบบ</label>
    </div>
    </div>

  <br /><button type="submit" class="btn btn-default" onclick="fncSubmit();" >เพิ่มข้อมูลอาจารย์</button>
  <button type="reset" class="btn btn-default">ยกเลิก</button>
  
  </form>
    </div>
  </body>
  <footer>
    <br/>
    <br>
  </footer>