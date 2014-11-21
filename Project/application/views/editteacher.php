<meta charset="UTF-8">
<center>
  <h1>แก้ใขข้อมูลอาจารย์</h1></center>
<form action="<?php echo base_url(); ?>index.php/teachers/update" method="post">
<center>
 <?php foreach ($showteacher as $SS){?>
 <table width="270" border="1">
 <tbody>
   <tr>
     <td bgcolor="#1BE37C"><table width="270" border="1">
       <tbody>
         <tr>
           <input type="hidden" name="teacherId" required value="<?php echo $SS ['teacherId']?>" >
           <em><strong></strong></em>
           <td width="111" bgcolor="#1BE37C"><h4>ชื่อ</h4></td>
           <td width="171" bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherName" id="teacherName" value = "<?php echo $SS ['teacherName']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>นามสกุล</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherLname" id="teacherLname" value = "<?php echo $SS ['teacherLname']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>ที่อยู่</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherAddress" id="teacherAddress"value = "<?php echo $SS ['teacherAddress']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>Email</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherEmail" id="teacherEmail"value = "<?php echo $SS ['teacherEmail']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>โทรศัพท์</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherPhone" id="teacherPhone"value = "<?php echo $SS ['teacherPhone']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>Username</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherUser" id="teacherUser"value = "<?php echo $SS ['teacherUser']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>Password</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherPassword" id="teacherPassword"value = "<?php echo $SS ['teacherPassword']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4><em><strong>สถานะ</strong></em></h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="text" name="teacherStatus" id="teacherStatus"value = "<?php echo $SS ['teacherStatus']?>">
           </h4></td>
         </tr>
         <tr>
           <td bgcolor="#1BE37C"><h4>&nbsp;</h4></td>
           <td bgcolor="#1BE37C"><h4>
             <input type="submit" name="submit" id="submit" value="ตกลง">
           </h4></td>
         </tr>
       </body>
     </table></td>
   </tr>
 </body>
 </table>
 <?php } ?>
</center

></center>
</form>
