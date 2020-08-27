<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISTEM INFORMASI KEUANGAN FAKULTAS TEKNIK UNIVERSITAS TADULAKO</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>css/cssumum.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url(); ?>img/untad.png">
		<script type="text/javascript">
		function cekdata(){
		if (document.getElementById('username').value=="" || document.getElementById('username').value==null)
		{
		alert("Username harus diisi");
		document.getElementById("username").focus();
		}
		else if (document.getElementById('password').value=="" || document.getElementById('password').value==null)
		{
		alert("Password harus diisi");
		document.getElementById("password").focus();
		}
		else if (document.getElementById('password').value!=document.getElementById('konfirmasi').value)
		{
		alert("Konfirmasi password tidak cocok");
		document.getElementById("konfirmasi").focus();
		}
		else{
		document.getElementById('pengguna').submit();
		}};
		
		function countChars(countfrom) {
		if(document.getElementById(countfrom).value.length==0){
		document.getElementById('box1').innerHTML = '';
		document.getElementById('box2').innerHTML = '';
		document.getElementById('box3').innerHTML = '';
		}
		else if(document.getElementById(countfrom).value.length<=4){
		document.getElementById('box1').innerHTML = '&nbsp;&nbsp;■■&nbsp;&nbsp;Lemah';
		document.getElementById('box2').innerHTML = '';
		document.getElementById('box3').innerHTML = '';
		}
		else if(document.getElementById(countfrom).value.length>=5 && document.getElementById(countfrom).value.length<10){
		document.getElementById('box1').innerHTML = '&nbsp;&nbsp;■■';
		document.getElementById('box2').innerHTML = '■■&nbsp;&nbsp;Sedang';
		document.getElementById('box3').innerHTML = '';
		}
		else{
		document.getElementById('box1').innerHTML = '&nbsp;&nbsp;■■';
		document.getElementById('box2').innerHTML = '■■';
		document.getElementById('box3').innerHTML = '■■&nbsp;&nbsp;Kuat';
		}};
		
		function pencocokan(cocokan) {
		if(document.getElementById(cocokan).value.length==0){
		document.getElementById('cocok1').innerHTML = '';
		document.getElementById('cocok2').innerHTML = '';
		}
		else if(document.getElementById(cocokan).value.length!=document.getElementById('password').value.length){
		document.getElementById('cocok1').innerHTML = '&nbsp;&nbsp;Panjang karakter tidak sama';
		document.getElementById('cocok2').innerHTML = '';
		}
		else if(document.getElementById(cocokan).value!=document.getElementById('password').value){
		document.getElementById('cocok1').innerHTML = '&nbsp;&nbsp;Password tidak cocok';
		document.getElementById('cocok2').innerHTML = '';
		}
		else{
		document.getElementById('cocok1').innerHTML = '';
		document.getElementById('cocok2').innerHTML = '&nbsp;&nbsp;✔';
		}};
	   </script>
</head>
<body>	
<div class="kepala">
<p>
<img src="<?php echo base_url(); ?>img/untad.png" style="height:60px;width:60px;" alt=""/><br><br>
RKAKL FAKULTAS TEKNIK UNIVERSITAS TADULAKO<br>
TAHUN ANGGARAN <?php echo $this->session->userdata("tahun"); ?><br>
</p>
</div>
<div class="bar"></div>
		<div class="content">
		<form id="pengguna" action="<?php echo base_url('c_siskeufatek/simpanpengguna')?>" method="post">
		<table width="600px">
		<tr>
		<td width="200px">Nama Pengguna</td><td><input name="username" id="username" type="text" style="width:310px;" required=""/></td>
		</tr>
		<tr>
		<td>Password</td><td><input name="password" id="password" type="password" style="width:180px;" required=""
		onkeyup="countChars('password');" onkeydown="countChars('password');"
		onmouseout="countChars('password');"/><span id="box1" style="color:#F3B831;"></span><span id="box2" style="color:#4BB052;"></span><span id="box3" style="color:#838dd2;"></span><strong></td>
		</tr>
		<tr>
		<td>Konfirmasi Password</td><td><input name="konfirmasi" id="konfirmasi" type="password" style="width:180px;" required="" 
		onkeyup="pencocokan('konfirmasi');" onkeydown="pencocokan('konfirmasi');" onmouseout="pencocokan('konfirmasi');"/>
		<span id="cocok1" style="color:#E25A59;"></span><strong><span id="cocok2" style="color:#4BB052;"></span><strong></td>
		</tr>
		<tr style="border-bottom:1px solid silver;">
		<td>Unit Kerja</td>
		<td>
		<select style="width:310px;" name="unitkerja">
		<option value="Pimpinan">Pimpinan</option>
		<option value="Operator">Operator</option>
		<optgroup label="TEKNIK SIPIL">
		<option value="Teknik Sipil (D3)">Prodi Teknik Sipil (D3)</option>
		<option value="Teknik Sipil (S1)">Prodi Teknik Sipil (S1)</option>
		<option value="Teknik Geologi (S1)">Prodi Teknik Geologi (S1)</option>
		</optgroup>
		<optgroup label="TEKNIK ARSITEKTUR">
		<option value="Teknik Arsitektur (S1)">Prodi Teknik Arsitektur (S1)</option>
		<option value="Teknik Perencanaan Wilayah Kota (S1)">Prodi Teknik Perencanaan Wilayah Kota (S1)</option>
		</optgroup>
		<optgroup label="TEKNIK MESIN">
		<option value="Teknik Mesin (D3)">Prodi Teknik Mesin (D3)</option>
		<option value="Teknik Mesin (S1)">Prodi Teknik Mesin (S1)</option>
		</optgroup>
		<optgroup label="TEKNIK ELEKTRO">
		<option value="Teknik Elektro (D3)">Prodi Teknik Listrik (D3)</option>
		<option value="Teknik Elektor (S1)">Prodi Teknik Elekto (S1)</option>
		</optgroup>
		<optgroup label="TEKNOLOGI INFORMASI">
		<option value="Teknik Informatika (S1)">Prodi Teknik Informatika (S1)</option>
		</optgroup>
		</select>
		</td>
		</tr>
		<tr>
		<td></td><td style="padding-bottom:10px;"></td>
		</tr>
		<tr>
		<td></td>
		<center>
		<td style="text-align:right;">
				<a type="submit" class="btn btn-danger" onclick="cekdata()">
				<i class="halflings-icon white inbox"></i> Simpan
				</a>
				<a class="btn btn-info" onclick="document.getElementById('pengguna').reset();
				document.getElementById('box1').innerHTML = '';
				document.getElementById('box2').innerHTML = '';
				document.getElementById('box3').innerHTML = '';
				document.getElementById('cocok1').innerHTML = '';
				document.getElementById('cocok2').innerHTML = '';">
				<i class="halflings-icon white repeat"></i> Reset
				</a>
				<a class="btn btn-tambah" href="<?php echo base_url('c_siskeufatek/masuk')?>">
				<i class="halflings-icon white arrow-left"></i> Kembali
				</a>
		</td>
		</center>
		</tr>
		</table>
		</form>
		</div>
		<div class="footer">&copy Fakultas Teknik | Universitas Tadulako</div>
		<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery-migrate-1.0.0.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>
		<script src="<?php echo base_url(); ?>js/jquery.chosen.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.uniform.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.cleditor.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.elfinder.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>js/counter.js"></script>
		<script src="<?php echo base_url(); ?>js/custom.js"></script>
</body>
</html>
