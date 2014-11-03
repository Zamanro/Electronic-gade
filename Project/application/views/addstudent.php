
<center><h1>เพิ่มนักเรียน</h1></center>
<form action="<?php echo base_url(); ?>index.php/user/add" method="post">
<center>
<table width="270" border="1">
  <tbody>
    <tr>
      <td width="111" bgcolor="#0A2AC1"><em><strong>รหัสนักเรียน</strong></em></td>
      <td width="171" bgcolor="#1438E3"><input type="text" name="studentCode" id="studentCode"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>ชื่อ</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="studentName" id="studentName"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>นามสกุล</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="studentLname" id="studentLname"></td>
    </tr>
    <tr>
      <td bgcolor="#0A2AC1"><em><strong>ที่อยู่</strong></em></td>
      <td bgcolor="#1438E3"><input type="text" name="studentAddress" id="studentAddress"></td>
    </tr>
    
    <tr>
     
    </tr> <tr>
      <td bgcolor="#0A2AC1">&nbsp;</td>
      <td bgcolor="#1438E3"><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
    
  </tbody>
</table>
</center>
</form>