

<form action="/index.php/user/searchdata/" method="post" >
ค้นหา
<input type="text" name="xxx" id="xxx">
<input type="submit" name="button" id="button" value="ค้นหา">
</form>

<table width="100%" height="87" border="1">
  <tbody>
    <tr>
      <td height="51" bgcolor="#15F1E6"><strong>รหัส</strong></td>
      <td bgcolor="#15F1E6"><strong>ชื่อ</strong></td>
      <td bgcolor="#15F1E6"><strong>นามสกุล</strong></td>
      <td bgcolor="#15F1E6"><strong>ที่อยู่</strong></td>
      <td bgcolor="#15F1E6"><strong>Email</strong></td>
      <td bgcolor="#15F1E6"><strong>โทรศัพท์</strong></td>
      <td bgcolor="#15F1E6"><strong>Username</strong></td>
      <td bgcolor="#15F1E6"><strong>Password</strong></td>
      <td bgcolor="#15F1E6"><strong>สถานะ</strong></td>
      <td bgcolor="#15F1E6"><strong>ลบ</strong></td>
      <td bgcolor="#15F1E6"><strong>แก้ใข</strong></td>
    </tr>
    <?php foreach ($showteacher as $SS){?>
    <tr>
	
      <td><?php echo $SS["teacherId"]?></td>
      <td><?php echo $SS["teacherName"]?></td>
      <td><?php echo $SS["teacherLname"]?></td>
      <td><?php echo $SS["teacherAddress"]?></td>
      <td><?php echo $SS["teacherEmail"]?></td>
      <td><?php echo $SS["teacherPhone"]?></td>
      <td><?php echo $SS["teacherUser"]?></td>
      <td><?php echo $SS["teacherPassword"]?></td>
      <td><?php echo $SS["teacherStatus"]?></td>
      <td><a href="<?php echo base_url()."index.php/Teachers/getpkdata/".$SS["teacherId"]?>">แก้ใข</a></td>
      <td><a href="<?php echo base_url()."index.php/Teachers/deletedata/".$SS["teacherId"]?>">ลบ</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

