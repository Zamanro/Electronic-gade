<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GPA</title>
<style type="text/css">
@font-face {
 	 	  font-family: CSPraJad Vera Serif Bold; 
		
	  src: url(<?php echo base_url()?>font/CSPraJad.otf) format("truetype");  
	    src: url('<?php echo base_url()?>font/CSPraJad.otf?#iefix') format('embedded-opentype'), /* IE6-IE8 */
         url('<?php echo base_url()?>font/CSPraJad.otf')  format('truetype');
    }
	*{
		   font-family: CSPraJad Vera Serif Bold; 
	}
	body{
		background-image:url(<?php echo base_url()?>img/bg.jpg);
		background-attachment:fixed;
		background-size:contain;
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
#contentBody{
	width:90%;
	min-width:1000px;
	margin-left:5%;
	margin-right:5%;
	margin-top:20px;
	height:500px;
	background-image:url(<?php echo base_url()?>img/bgcontant.png);
	background-repeat:repeat;
	box-shadow: 0px 0px 5px 1px #3A3A3A;
	border-radius:5px;
	margin-bottom:40px;
}
#menu{
	width:20%;
	height:*;
			float:left;
		display: inline;
		text-wrap:none;
		white-space: nowrap;
}
#menu .me th{
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
#menu .me tbody{
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
	<!-- End css3menu.com HEAD section -->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- เริ่ม ส่วนของ header -->
    <div id="header">
    	<p id="logo">
            <img src="<?php echo base_url()?>img/LOGO.png" width="108" height="127"/>
            <a class="text">ระบบส่งผลคะแนนและเช็คผลการเรียนผ่านอินเทอร์เน๊ต ของโรงเรียนบ้านปากเหมือง</a>
        </p>
    </div>
    </style>
	<!-- Start css3menu.com HEAD section -->

	<link rel="stylesheet" href="<?php echo base_url()?>css/index_files/css3menu0/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
    <ul id="css3menu0" class="topmenu">

<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	<li class="topfirst"><a href="<?php echo base_url();?>index.php/User/addview" class="link" style="height:32px;line-height:32px;"><img src="<?php echo base_url()?>img/menu/1.png" alt=""/>ข้อมูลนักเรียน</a></li>

	<li class="topmenu"><a href="#" class="link" style="height:32px;line-height:32px;"><img src="<?php echo base_url()?>img/menu/2.png" alt=""/>ข้อมูลอาจารย์</a></li>

	<li class="topmenu"><a href="#" class="link" style="height:32px;line-height:32px;"><img src="<?php echo base_url()?>img/menu/3.png" alt=""/>ข้อมูลรายวิชา</a></li>

	<li class="topmenu"><a href="#" class="link" style="height:32px;line-height:32px;"><img src="<?php echo base_url()?>img/menu/4.png" alt=""/>ข้อมูลผลการเรียน</a></li>

	<li class="toplast"><a href="#" class="link" style="height:32px;line-height:32px;"><img src="<?php echo base_url()?>img/menu/5.png" alt=""/>รายงาน</a></li>

</ul>
<!-- จบ ส่วนของ header -->
    <div id="contentBody">
   	  <div id="menu"> </div>
       	 <table width="546" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" align="center"><h2><strong>ยินดีตอนรับฝ่ายทะเบียน</strong></h2></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><h2><strong><a class="fancyboxMini" href="<?php echo base_url();?>index.php/User/addview">เพิ่มข้อมูลอาจารย์</a></strong></h2></td>
            </tr>
            
              <tr>
              <td colspan="2" align="center"><h2><strong><a class="fancyboxMini" href="<?php echo base_url();?>index.php/User/show">ดูข้อมูลอาจารย์</a></strong></h2></td>
            </tr>
            
            
              <tr>
              <td colspan="2" align="center"><h2><strong><a class="fancyboxMini" href="<?php echo base_url();?>index.php/User1/addview">เพิ่มข้อมูลนักเรียน</a></strong></h2></td>
            </tr>
            
            
            <tr>
              <td align="center"><h3><strong>status</strong></h3></td>
              <td><h3><strong><?php echo $loginData['teacherStatus'];	?></strong></h3></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><h3><a href="<?php echo base_url();?>index.php/home/logout">Logout</a></h3></td>
            </tr>
          </tbody>
</table>
       
        <div id="content">
        </div>
    </div>
</body>
</html>
                                                                                                                                                                 <!-- Start css3menu.com BODY section -->



