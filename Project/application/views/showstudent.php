<meta charset="UTF-8">






<form action="<?php echo base_url();?>index.php/students/searchData" method="post">
<input type="text" name="textSearch" id="textSearch"><input type="submit" name="search" value="ค้นหา">
</form>
<table width="79%" height="87" border="1">
  <tbody>
    <tr>
      <td width="5%" height="51" align="center" bgcolor="#15F1E6"><h3><strong>รหัส</strong></h3></td>
      <td width="13%" align="center" bgcolor="#15F1E6"><h3><strong>รหัสนักเรียน</strong></h3></td>
      <td width="21%" align="center" bgcolor="#15F1E6"><h3><strong>ชื่อ</strong></h3></td>
      <td width="25%" align="center" bgcolor="#15F1E6"><strong>นามสกุล</strong></td>
      <td width="23%" align="center" bgcolor="#15F1E6"><strong>ที่อยู่</strong></td>
      <td width="6%" align="center" bgcolor="#15F1E6"><strong>แก้ใข</strong></td>
      <td width="7%" align="center" bgcolor="#15F1E6"><strong>ลบ</strong></td>
  
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
