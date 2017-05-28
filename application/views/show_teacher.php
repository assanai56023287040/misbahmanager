
<h1>รายชื่ออาจารย์ทั้งหมด</h1>
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
    <thead>
      <tr class="w3-light-grey">
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>สถานะผู้ใช้</th>
        <th></th>
      </tr>
    </thead>    
<?php 
    foreach($teacher as $row){
        ?>
    <tr>
        <td><?php echo 'อาจารย์' .$row->t_name_ar;?></td>
        <td><?php echo $row->t_last_name;?></td>
        
        <td><?php switch ($row->status){
                    case 'admin' : $status_th = "ผู้ดูแลระบบ"; break;
                    case 'teacher_class' : $status_th = "อาจารย์ประจำชั้น";break;
                    default : $status_th = "อาจารย์ประจำวิชา";    break;
                }
        echo $status_th;?></td>
        <td>
            <a href="#" title="ดูรายละเอียด">​<i class="fa fa-user-circle" ></i></a>
            <a href="#">​<i class="fa fa-edit" ></i>แก้ไข</a>
            <a href="#">​<i class="fa fa-close" ></i>ลบข้อมูล</a>
        </td>
    </tr>
    <?php } ?>
</table>
