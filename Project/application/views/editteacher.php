<meta charset="UTF-8">
<center><h1>แก้ใข</h1></center>
<form action="<?php echo base_url(); ?>index.php/user/update" method="post">
<center>
 <?php foreach ($showall as $SS){?>
<table width="270" border="1">
  <tbody>
    <tr>
      
      <input type="hidden" name="teacherId" required value="<?php echo $SS ['teacherId']?>" ></td>
      <td width="111" bgcolor="#0A2AC1"><em><strong>ชื่อ</strong></em></td>
      <td width="171" bgcolor="#1438E3"><input type="text" name="teacherName" id="teacherName" value = "<?php echo $SS ['teacherName']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>นามสกุล</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherLname" id="teacherLname" value = "<?php echo $SS ['teacherLname']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>ที่อยู่</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherAddress" id="teacherAddress"value = "<?php echo $SS ['teacherAddress']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>Email</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherEmail" id="teacherEmail"value = "<?php echo $SS ['teacherEmail']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>โทรศัพท์</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherPhone" id="teacherPhone"value = "<?php echo $SS ['teacherPhone']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>Username</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherUser" id="teacherUser"value = "<?php echo $SS ['teacherUser']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>Password</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherPassword" id="teacherPassword"value = "<?php echo $SS ['teacherPassword']?>"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>สถานะ</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="teacherStatus" id="teacherStatus"value = "<?php echo $SS ['teacherStatus']?>"></td>
    </tr> <tr>
      <td bgcolor="#0A2AC1">&nbsp;</td>
      <td bgcolor="#1438E3"><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
    
  </tbody>
</table>
<?php } ?>
</center

></center>
</form>
