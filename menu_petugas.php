<?php
session_start();
if($_SESSION[username]==''){
?>
		<script>alert("Halaman Tidak Tersedia")
		window.location="index.php";
		</script>
		<?php
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>menu petugas</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body>
<table width="980"  border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" valign="top"><img src="header.png"></td>
  </tr>
  <tr>
    <td width="19%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><img src="menu_kiri_r2_c2.png" width="160" height="54"></div></td>
      </tr>
      <tr>
        <td valign="top"><div align="center"><img src="menu_kiri_r3_c2.png" width="160" height="141"></td>
      </tr>
	  <tr>
        <td align="center" valign="middle">
		<?php echo $_SESSION[username] ?>
	      </td>
      </tr>
      <tr>
        <td><div align="center">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="167" height="44">
              <param name="BGCOLOR" value="">
              <param name="movie" value="button1.swf">
              <param name="quality" value="high">
              <embed src="button1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="167" height="44" ></embed>
          </object>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="167" height="44">
              <param name="BGCOLOR" value="">
              <param name="movie" value="button2.swf">
              <param name="quality" value="high">
              <embed src="button2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="167" height="44" ></embed>
          </object>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="167" height="44">
              <param name="BGCOLOR" value="">
              <param name="movie" value="button3.swf">
              <param name="quality" value="high">
              <embed src="button3.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="167" height="44" ></embed>
          </object>
		  </div></td>
      </tr>
    </table></td>
    <td width="762" valign="top">
	  <table width="830" height="532" border="0" cellpadding="0" cellspacing="0" background="latar.png" >
        <tr>
          <td valign="top">&nbsp;
		  <div id="Layer1" style="background-color:#FFFFCC;position:relative; text-align:center; width:180px; height:20px; z-index:1; left: 630px; top: -10px;"><b>Petugas Tata Usaha</b></div>
		  <div id="Layer2" style="position:relative; text-align:center; width:180px; height:20px; z-index:1; left: 630px; top: 5px;"><b>Date : <?php $sekarang = date('d-m-Y'); echo $sekarang ?></b></div>
		  <?php
		  switch ($_GET[id])
		  {
		  	case 1:$proses="form1.php";break;
		  	case 2:$proses="surat.php";break;
		  }
		  if ($proses)
		  {
			 include($proses);
		  }
		  ?>
		  </td>
        </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
