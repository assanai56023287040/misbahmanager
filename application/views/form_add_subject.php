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

<body >
   
    <div class="container">
<div class="jumbotron text-center">
  <h1>ระบบจัดการงานทะเบียนนักเรียน</h1>
  <p>โรงเรียนมิศบาฮุ้ลอุลูม</p> 
</div>
  <h1 align="text-center">เพิ่มข้อมูวิชาเรียน</h1>
  <form class="form-horizontal" action="<?php echo site_url('subject_code/add_subject'); ?>" method="post" name="form1" >

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
  <label class="control-label col-sm-2" for="sub_id"><h4>รหัสวิชา : </h4></label>
  <div class="col-sm-10">
  <input type="text"  name="sub_id" id="sub_id" class="form-control" placeholder="รหัสวิชา" maxlength="3"  onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="sub_name">ชื่อวิชา (ภาษาไทย) : </label>
  <div class="col-sm-10">
  <input type="text"  name="sub_name" id="sub_name" class="form-control" placeholder="ชื่อวิชา (ภาษาไทย)" />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="sub_name_ar">ชื่อวิชา (ภาษาอาหรับ) : </label>
  <div class="col-sm-10">
  <input type="text"  name="sub_name_ar" id="sub_name_ar" class="form-control" placeholder="ชื่อวิชา (ภาษาอาหรับ) " />
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="sub_class">ชั้น : </label>
  <div class="col-sm-10">
  <input type="text"  name="sub_class" id="sub_class" class="form-control" placeholder="ชั้นปีที่สอน" maxlength="1" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="year_edu">ปีการศึกษา : </label>
  <div class="col-sm-10">
  <input type="text"  name="year_edu" id="year_edu" class="form-control" placeholder="ปีการศึกษา" maxlength="4" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/>
  </div></div>
      

  <div class="form-group">
  <label class="control-label col-sm-2" for="status">อาจารย์ผู้สอน คนที่ 1 : </label>
  <div class="col-sm-10">
      <select class="form-control" name="teacher_1" id="teacher_1" onclick="loadTeacher1()" onchange="loadTeacher2(this.value)">
          <option value='' selected="selected">--เลือกอาจารย์ประจำวิชาคนที่ 1--</option>
      $t1 = this.value;
      </select>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="status">อาจารย์ผู้สอน คนที่ 2 : </label>
  <div class="col-sm-10">
      <select class="form-control" name="teacher_2" id="teacher_2" onchange="loadTeacher3($t1,this.value)" disabled>
          <option value='' selected="selected">--เลือกอาจารย์ประจำวิชาคนที่ 2--</option>
      </select>
  </div></div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="status" >อาจารย์ผู้สอน คนที่ 3 : </label>
  <div class="col-sm-10">
      <select class="form-control" name="teacher_3" id="teacher_3" disabled>
          <option value='' selected="selected">--เลือกอาจารย์ประจำวิชาคนที่ 3--</option>
      </select>
  </div></div>
  
  
  
  <br /><button type="submit" class="btn btn-default" onclick="fncSubmit();" disabled>เพิ่มข้อมูลรายวิชา</button>
  <button type="reset" class="btn btn-default">ยกเลิก</button>
  
  </form>
    </div>
<script type='text/javascript'>
    /* URL */
    var ajaxURL = 'ajax_service.php?source=option_list';

    /* Load Templates */
    var tplTeacher = '{list}<option value="{t_id}">{t_name}</option>{/list}';
   
    /*-------- loadData ----------*/
    function loadTeacher1(){
        $.ajax({
            dataType: "json",
            url: ajaxURL,
            data: 'action=load_teacher_1',
            success: function(return_data){
                $('#teacher_1').html(parseHtml(tplTeacher, return_data));
            }
        });
    }
    function loadTeacher2(t_id1){
        $.ajax({
            dataType: "json",
            url: ajaxURL,
            data: 'action=load_teacher_2&t_id=' + t_id1,
            success: function(return_data){
                $('#teacher_2').html(parseHtml(tplTeacher, return_data));
            }
        });
    }
        
    function loadTeacher2(t1,t_id2){
        $.ajax({
            dataType: "json",
            url: ajaxURL,
            data: 'action=load_teacher_2&t1=' + t1 + ',t_id=' + t_id2,
            success: function(return_data){
                $('#teacher_3').html(parseHtml(tplTeacher, return_data));
            }
        });
    }
   
   
    $(function(){
        $("#teacher_1").click(function(){ // เมื่อคลิกที่ checkbox id=i_accept
         if($(this).attr("selected")=="selected"){ // ถ้าเลือก
             $("#teacher_2").removeAttr("disabled"); // ให้ปุ่ม id=continue_bt ทำงาน สามารถคลิกได้
         }else{ // ยกเลิกไม่ทำการเลือก
             $("#teacher_2").attr("disabled","disabled");  // ให้ปุ่ม id=continue_bt ไม่ทำงาน
         }
     });
});
    $(function(){
        $("#teacher_2").click(function(){ // เมื่อคลิกที่ checkbox id=i_accept
         if($(this).attr("selected")=="selected"){ // ถ้าเลือก
             $("#teacher_3").removeAttr("disabled"); // ให้ปุ่ม id=continue_bt ทำงาน สามารถคลิกได้
         }else{ // ยกเลิกไม่ทำการเลือก
             $("#teacher_3").attr("disabled","disabled");  // ให้ปุ่ม id=continue_bt ไม่ทำงาน
         }
     });
});
</script>
  </body>
  <footer>
    <br/>
    <br>
  </footer>