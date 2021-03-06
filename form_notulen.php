<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="datepicker/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="timepicker/jquery.timepicker.min.css" />
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="combo_bertingkat/jquery.js"></script>
<script src="datepicker/jquery-ui.js"></script>
<script type="text/javascript" src="timepicker/jquery.timepicker.min.js"></script>
<script src='lib/ckeditor/ckeditor.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#haritgl').datepicker({
			dateFormat : "dd/mm/yy",
			changeMonth : true,
			changeYear : true
			});
		$('#waktu_rapat').timepicker({ timeFormat: 'HH:mm', interval: 15 });
		$("#penanggungjawab").change(function(){
		var penanggungjawab = $("#penanggungjawab").val();
		$.ajax({
		url: "combo_bertingkat/ambilnotulen.php",
		data: "penanggungjawab="+penanggungjawab,
		cache: false,
		success: function(msg){
		$("#notulen").html(msg);
		}
		});
		});
		$("#notulen").change(function(){
		var penanggungjawab = $("#penanggungjawab").val();
		var notulen = $("#notulen").val();
		$.ajax({
		url: "combo_bertingkat/ambilpeserta.php",
		data: {penanggungjawab,notulen},
		cache: false,
		success: function(msg){
		$("#psrapat").html(msg);
		}
		});
		});
		});
  
  <script type="text/javascript">
    <!-- 
        function validator()
        {
        // Check whether the value of the element 
        // text_name from the form named text_form is null
        if (!form1.pimpinrapat.value)
        {
          // If it is display and alert box
           alert("Isi Pimpinan Rapat");
          // Place the cursor on the field for revision
           form1.pimpinrapat.focus();
          // return false to stop further processing
           return (false);
        }
        // If text_name is not null continue processing
        return (true);
        }
        -->
</script>
  <style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-size: 18px}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
-->
  </style>
</head>
<body>

<style type="text/css">
  input[type="text"] {
    border: 0;
	padding-left: 10px;
	font:Arial, Helvetica, sans-serif;
	font-size:20px;
	background-color: rgba(255, 255, 255, 0.5);
  }
  select:invalid { color: #6B7373; }
</style>
<br><br/>
<form name="form1" id="form1" method="post" action="" onsubmit="return validator()">
<table width="100%" >
  <tr>
  	<td width="30"><table width="100%" >
    </table></td>
    <td width="700"><table width="100%" >
      <tr>
        <td>
          <input name="pimpinrapat" type="text" placeholder="Pimpinan Rapat" size="30"  oninvalid="this.setCustomValidity('Isikan Pimpinan Rapat')" oninput="setCustomValidity('')" required /><br 	/>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="haritgl" type="text" placeholder="Hari, Tanggal" size="30" oninvalid="this.setCustomValidity('Isikan Tanggaal Rapat')" oninput="setCustomValidity('')" required  />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="tempatrapat" type="text" placeholder="Tempat Rapat" size="30" id="haritgl" oninvalid="this.setCustomValidity('Isikan Temapat Rapat')" oninput="setCustomValidity('')" required  />
        </td>
      </tr>
    </table></td>
    <td width="605"><table width="100%" >
      <tr>
        <td>
          <input name="wakturapat" type="text" placeholder="Waktu Rapat" size="30" oninvalid="this.setCustomValidity('Isikan Waktu Rapat')" oninput="setCustomValidity('')" required  />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="penanggungjawab" type="text" placeholder="Penanggung Jawab" size="30" oninvalid="this.setCustomValidity('Isikan Penanggung Jawaba Rapat')" oninput="setCustomValidity('')" required  />
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <input name="hadirpeserta" type="text" placeholder="Kehadiran Peserta" size="30" oninvalid="this.setCustomValidity('Isikan Kehadiran Peserta')" oninput="setCustomValidity('')" required  />
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<br><br />
<table width="100%" >
  <tr>
  <td width="24" valign="top"></td>
    <td width="256" valign="top"><div align="right" class="style1 style2" >
      <div align="left">Pembahasan Rapat </div>
    </div></td>
	<td width="35" valign="top"><div align="right" class="style1 style2" >
	  <div align="center">:</div>
	</div></td>
    <td width="979" valign="top"><textarea id="bahas_rapat" name="bahas_rapat"></textarea></td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td width="256" valign="top"><div align="right" class="style1 style2" >
      <div align="left">Kesimpulan</div>
    </div></td>
	<td width="35" valign="top"><div align="right" class="style1 style2" >
	  <div align="center">:</div>
	</div></td>
    <td width="979" valign="top"><textarea id="kesimpulan" name="kesimpulan"></textarea></td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td width="24" valign="top"></td>
    <td width="256" valign="top"><div align="right" class="style1 style2" >
      <div align="left">Rekomendasi</div>
    </div></td>
	<td width="35" valign="top"><div align="right" class="style1 style2" >
	  <div align="center">:</div>
	</div></td>
    <td width="979" valign="top"><textarea id="rekomendasi" name="rekomendasi"></textarea></td>
  </tr>
</table>
<br><br />
<table width="100%" >
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" >
      <tr>
        <td width="33%"><div align="right">
          <input type="checkbox" name="checkbox" value="checkbox" />
        </div></td>
        <td width="67%"><span class="style4">Saya menyetujui sesuai dengan isi rapat di atas </span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="right">
      <input type="submit" name="Submit" value="Submit" />
</div></td>
  </tr>
</table>
</form>
<script>
	CKEDITOR.replace( 'bahas_rapat' );
	CKEDITOR.replace( 'kesimpulan' );
	CKEDITOR.replace( 'rekomendasi' ); 
</script>
</body>
</html>