
<center><h1>เพิ่มอาจารย์</h1></center>
<form action="<?php echo base_url(); ?>index.php/Teachers/add" method="post">
<center>
<table width="270" border="1">
  <tbody>
    <tr>
      <td width="111" bgcolor="#F3F3F3"><em><strong>ชื่อ</strong></em></td>
      <td width="171" bgcolor="#F3F3F3"><input type="text" name="teacherName" id="teacherName"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>นามสกุล</strong></em></td>
      <td bgcolor="#F3F3F3"><input type="text" name="teacherLname" id="teacherLname"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>ที่อยู่</strong></em></td>
      <td bgcolor="#F3F3F3"><input type="text" name="teacherAddress" id="teacherAddress"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>Email</strong></em></td>
      <td bgcolor="#F3F3F3"><input type="text" name="teacherEmail" id="teacherEmail"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>โทรศัพท์</strong></em></td>
      <td bgcolor="#F3F3F3"><input type="text" name="teacherPhone" id="teacherPhone"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>Username</strong></em></td>
      <td bgcolor="#F3F3F3"><input type="text" name="teacherUser" id="teacherUser"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>Password</strong></em></td>
      <td bgcolor="#F3F3F3"><input type="password" name="teacherPassword" id="teacherPassword"></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><em><strong>สถานะ</strong></em></td>
      <td bgcolor="#F3F3F3"><select name="select" id="select">
        <option value="admin">ฝ่ายทะเบียน</option>
        <option value="student">นักเรียน</option>
        <option value="teacher">อาจารย์</option>
      </select></td>
    </tr> <tr>
      <td bgcolor="#F3F3F3">&nbsp;</td>
      <td bgcolor="#F3F3F3"><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
    
  </tbody>
</table>
</center>
</form>
