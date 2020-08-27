<!DOCTYPE html>
<html>
<head>
<title>SISTEM INFORMASI KEUANGAN FAKULTAS TEKNIK UNIVERSITAS TADULAKO</title>
	<link rel="icon" href="<?php echo base_url(); ?>img/untad.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>css/log_in.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default',       
				width: 'auto',
				fit: true
			});
		});
		function validate(evt){
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
		}};
	   </script>
</head>
<body>
	<div class="main">
		<center><div class="judul">SISTEM INFORMASI KEUANGAN FAKULTAS TEKNIK</div></center>
		<div class="login-form">
			<div class="login-left">
				<div class="logo">
					<img src="<?php echo base_url(); ?>img/logo.png" alt=""/>
					<br>
					<h2>SELAMAT DATANG </h2>
					<p>Fakultas Teknik Universitas Tadulako</p>
					<hr>
				</div>
			</div>
			<div class="login-right">
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
							<div class="clear"> </div>
						</ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="login-top">
									<form action="<?php echo base_url('c_siskeufatek/login')?>" method="post">
										<input type="text" class="username" name="username" placeholder="Username" required=""/>
										<input type="password" class="password" name="password" placeholder="Password" required=""/>
										<select name="unitkerja" class="unitkerja" required="">
										<option value="Pimpinan">Pimpinan</option>
										<option value="Operator">Operator</option>
										<option value="" disabled selected hidden>Unit Kerja</option>
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
										<option value="Teknik Elektor (S1)">Prodi Teknik Elektro (S1)</option>
										</optgroup>
										<optgroup label="TEKNOLOGI INFORMASI">
										<option value="Teknik Informatika (S1)">Prodi Teknik Informatika (S1)</option>
										</optgroup>
										</select>
										<input type="text" class="tahun" name="tahun" placeholder="Tahun" onkeypress="validate(event)" required=""/>
										<div class="login-bottom login-bottom1">
										<div class="submit">
										<input type="submit" name="login" value="LOGIN"/>
										</div>
										</form>
										<div class="clear"></div>
									</div>	
								</div>
							</div>
						</div>							
					</div>	
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<div class="footer">&copy Fakultas Teknik | Universitas Tadulako</div>
</body>
</html>