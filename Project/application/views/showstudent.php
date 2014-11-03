<meta charset="UTF-8">






<form action="<?php echo base_url();?>index.php/students/searchData" method="post">
<input type="text" name="textSearch" id="textSearch"><input type="submit" name="search" value="ค้นหา">
</form>
<table width="100%" height="87" border="1">
  <tbody>
    <tr>
      <td height="51" bgcolor="#15F1E6"><strong>รหัส</strong></td>
      <td bgcolor="#15F1E6"><strong>รหัสนักเรียน</strong></td>
      <td bgcolor="#15F1E6"><strong>ชื่อ</strong></td>
      <td bgcolor="#15F1E6"><strong>นามสกุล</strong></td>
      <td bgcolor="#15F1E6"><strong>ที่อยู่</strong></td>
      <td bgcolor="#15F1E6"><strong>แก้ใข</strong></td>
      <td bgcolor="#15F1E6"><strong>ลบ</strong></td>
  
    </tr>
    <?php foreach ($showstudent as $SS){?>
    <tr>
	
      <td><?php echo $SS["studentId"]?></td>
      <td><?php echo $SS["studentCode"]?></td>
      <td><?php echo $SS["studentName"]?></td>
      <td><?php echo $SS["studentLname"]?></td>
      <td><?php echo $SS["studentAddress"]?></td>
      
      <td><a href="<?php echo base_url()."index.php/Students/getpkdata/".$SS["studentId"]?>">แก้ใข</a></td>
      <td><a href="<?php echo base_url()."index.php/Students/deletedata/".$SS["studentId"]?>">ลบ</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
