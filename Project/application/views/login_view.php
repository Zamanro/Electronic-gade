<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GPA</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/index_files/css3menu0/style.css" type="text/css" />
<style type="text/css">
@font-face {
 	 	  font-family: CSPraJad Vera Serif Bold; 
		
	  src: url(<?php echo base_url();?>css/font/CSPraJad.otf) format("truetype");  
	    src: url('<?php echo base_url();?>css/font/CSPraJad.otf?#iefix') format('embedded-opentype'), /* IE6-IE8 */
         url('<?php echo base_url();?>css/font/CSPraJad.otf')  format('truetype');
    }
	*{
		   font-family: CSPraJad Vera Serif Bold; 
	}
	   body{
	margin:25px;
	margin-top:0;
   	background-image:url(<?php echo base_url();?>css/img/bg.jpg);
	background-repeat:repeat;
	background-attachment:fixed;
   }
div#header{
	z-index:1000;
	margin-top:-25px;
  font-family: CSPraJad Vera Serif Bold; 
	width:100%;
	min-width:1100px;
	height:100px;
	max-height:100px;
	font-size:28px;
	float:left;
	display:block;
	border-bottom-left-radius:20px;
	border-bottom-right-radius:20px;
	
	background: #207ce5; /* Old browsers */
background: -moz-linear-gradient(-45deg,  #207ce5 0%, #8dbce8 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#207ce5), color-stop(100%,#8dbce8)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  #207ce5 0%,#8dbce8 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  #207ce5 0%,#8dbce8 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  #207ce5 0%,#8dbce8 100%); /* IE10+ */
background: linear-gradient(135deg,  #207ce5 0%,#8dbce8 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#207ce5', endColorstr='#8dbce8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
box-shadow:0px 0px 2px 2px #2D2D2D

}
#logo{
	z-index:100;
		padding:10px;
		color:#E5E5E5;
		position:relative;
}

.text{
	position:absolute;
	padding-top:4px;
	font-weight:900;
	text-shadow:0px 2px 2px #2D2D2D;
}
.text1 
{ 
border: 2px solid rgb(173, 204, 204); 
height: 31px; 
width: 223px; 
box-shadow: 0px 0px 27px rgb(204, 204, 204) inset; 
transition:500ms all ease; 
padding:3px 3px 3px 3px; 
} 
 
#text1:hover, #text1:focus 
{ 
width:230px; 
transition:500ms all ease; 
background:url(<?php echo base_url();?>img/user.png) no-repeat right; 
background-size:25px 25px; 
background-position:96% 62%; 
padding:3px 32px 3px 3px; 
} 
#text2:hover, #text2:focus 
{ 
width:230px; 
transition:500ms all ease; 
background:url(<?php echo base_url();?>css/img/pass.png) no-repeat right; 
background-size:25px 25px; 
background-position:96% 62%; 
padding:3px 32px 3px 3px; 
} 
#menu{
	position:fixed;
	margin-left:25%;
	margin-right:20%;
	margin-top:200px;
	border-right:10px;
	width:500px;
	height:*;
	
}
#menu table {
	box-shadow:2px 2px 2px #6E6E6E;
}
#menu .loginf th{
	border-radius:5px;
	background: #6db3f2; /* Old browsers */
background: -moz-linear-gradient(top,  #6db3f2 0%, #54a3ee 50%, #3690f0 51%, #1e69de 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6db3f2), color-stop(50%,#54a3ee), color-stop(51%,#3690f0), color-stop(100%,#1e69de)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* IE10+ */
background: linear-gradient(to bottom,  #6db3f2 0%,#54a3ee 50%,#3690f0 51%,#1e69de 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 ); /*
 IE6-9 */
box-shadow:1px 1px 1px #494949;
}
#menu .loginf tbody{
	border-radius:5px;
	background-color:#FFFFFF;
	box-shadow:1px 1px 1px #494949;
}
#content{
	width:80%;
	height:*;
				float:left;
		display: inline;
		text-wrap:none;
		white-space: nowrap;
}
.css_button {
    font-size: 16px;
    font-family:Comic Sans MS;
    font-weight:normal;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    border: 1px solid #3866A3;
    padding: 9px 18px;
    text-shadow:1px 1px 10px #5E5E5E;
    -moz-box-shadow:inset 1px 1px 0px 0px #BEE2F9;
    -webkit-box-shadow:inset 1px 1px 0px 0px #BEE2F9;
    box-shadow:inset 1px 1px 0px 0px #BEE2F9;
    font-weight:normal;
    text-decoration:none;
    cursor: pointer;
    background:-webkit-linear-gradient(90deg, #468ccf 5%, #63b8ee 100%);
    background:-moz-linear-gradient(90deg, #468ccf 5%, #63b8ee 100%);
    background:-ms-linear-gradient(90deg, #468ccf 5%, #63b8ee 100%);
    background:linear-gradient(180deg, #63b8ee 5%, #468ccf 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b8ee', endColorstr='#468ccf');
    /*background-color:#468ccf;*/
    color:#FFFFFF;
    display:inline-block;
}
.css_button:hover {
    background:-webkit-linear-gradient(90deg, #63b8ee 5%, #468ccf 100%);
    background:-moz-linear-gradient(90deg, #63b8ee 5%, #468ccf 100%);
    background:-ms-linear-gradient(90deg, #63b8ee 5%, #468ccf 100%);
    background:linear-gradient(180deg, #468ccf 5%, #63b8ee 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
    /*background-color:#63b8ee;*/
}
.css_button:active {
    position:relative;
    top:1px;
}
	<!-- End css3menu.com HEAD section -->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- เริ่ม ส่วนของ header -->
    <div id="header">
    	<p id="logo">
            <img src="<?php echo base_url();?>css/img/LOGO.png" width="108" height="127"/>
            <a class="text">ระบบส่งผลการเรียนและเช็คผลการเรียนผ่านอินเทอร์เน็ต ของโรงเรียนบ้านปากเหมือง</a>
        </p>
    </div>
	<!-- Start css3menu.com HEAD section -->
	<form action="<?php echo base_url();?>index.php/CheckLogin" method="post">
    <table class="ssssss" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="32%">&nbsp;</td>
      <td width="44%">&nbsp;</td>
      <td width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="center" valign="middle">
      <table class="loginf" width="40%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th height="47" colspan="2" align="center" valign="middle">ลงชื่อเข้าใช้ระบบ</th>
        </tr>
        <tr>
          <td height="59" align="right"><label for="username">ชื่อผู้ใช้:</label></td>
          <td><input type="text" size="30" class="text1" id="text1" name="username"/></td>
        </tr>
        <tr>
          <td height="47" align="right"><label for="password3">รหัสผ่าน:</label></td>
          <td><input type="password" class="text1"  id="text2" size="30" name="password"/></td>
        </tr>
        <tr>
          <td height="51">&nbsp;</td>
          <td><input type="submit"  class="css_button" value="Login"/>&nbsp;&nbsp;&nbsp;<a id="sss" href="<?php echo base_url();?>index.php/CheckLogin/redirects" </td>
        </tr>
      </table>
 </form>
<!-- จบ ส่วนของ header -->
    	

</body>
</html>
                                                                                                                            

