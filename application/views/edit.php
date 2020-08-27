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
		function validate(evt){
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
		}};
		function cekdata(){
		if (document.getElementById('kode').value=="" || document.getElementById('kode').value==null)
		{
		alert("Belum ada data yang akan diubah");
		document.getElementById("kode").focus();
		}
		else{
		document.getElementById('edit').submit();
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
		<form id="edit" action="<?php echo base_url('c_siskeufatek/prosesedit')?>" method="post">
		<table width="600px">
		<tr>
		<input name="id" type="hidden" value="<?php echo $ubah[0]['id']?>"/>
		<td width="200px">Kode</td><td><input name="kode" type="text" style="width:150px;" value="<?php echo $ubah[0]['Kode']?>"/></td>
		</tr>
		<tr>
		<td>Uraian</td><td><textarea rows="4" name="uraian"><?php echo $ubah[0]['Uraian']?></textarea></td>
		</tr>
		<tr>
		<td>Program Studi</td>
		<td>
		<select style="width:310px;" name="prodi">
		<optgroup label="TEKNIK SIPIL">
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Sipil (D3)"): ?> selected="selected"<?php endif; ?> value="Teknik Sipil (D3)">Teknik Sipil (D3)</option>
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Sipil (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Sipil (S1)">Teknik Sipil (S1)</option>
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Geologi (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Geologi (S1)">Teknik Geologi (S1)</option>
		</optgroup>
		<optgroup label="TEKNIK ARSITEKTUR">
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Arsitektur (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Arsitektur (S1)">Teknik Arsitektur (S1)</option>
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Perencanaan Wilayah Kota (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Perencanaan Wilayah Kota (S1)">Teknik Perencanaan Wilayah Kota (S1)</option>
		</optgroup>
		<optgroup label="TEKNIK MESIN">
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Mesin (D3)"): ?> selected="selected"<?php endif; ?> value="Teknik Mesin (D3)">Teknik Mesin (D3)</option>
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Mesin (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Mesin (S1)">Teknik Mesin (S1)</option>
		</optgroup>
		<optgroup label="TEKNIK ELEKTRO">
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Elektro (D3)"): ?> selected="selected"<?php endif; ?> value="Teknik Elektro (D3)">Teknik Listrik (D3)</option>
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Elektor (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Elektor (S1)">Teknik Elekto (S1)</option>
		</optgroup>
		<optgroup label="TEKNOLOGI INFORMASI">
		<option <?php if ($ubah[0]['UnitKerja'] == "Teknik Informatika (S1)"): ?> selected="selected"<?php endif; ?> value="Teknik Informatika (S1)">Teknik Informatika (S1)</option>
		</optgroup>
		</select>
		</td>
		</tr>
		<tr>
		<td>PAGU (Rp.)</td><td><input type="text" name="pagu" style="width:200px;" onkeypress="validate(event)" value="<?php echo $ubah[0]['Pagu']?>"/></td>
		</tr>
		<tr>
		<td>PAGU Revisi (Rp.)</td><td><input type="text" name="pagurevisi" style="width:200px;" onkeypress="validate(event)" value="<?php echo $ubah[0]['PaguRevisi']?>"/></td>
		</tr>
		<tr>
		<td>Realisasi (Rp.)</td><td style="padding-bottom:10px;"><input type="text" name="realisasi" style="width:200px;" onkeypress="validate(event)" value="<?php echo $ubah[0]['Realisasi']?>"/></td>
		</tr>
		<tr style="border-bottom:1px solid silver;">
		<td>Tahun</td><td style="padding-bottom:10px;"><input type="text" name="tahun" style="width:50px;" onkeypress="validate(event)" value="<?php echo $ubah[0]['Tahun']?>"/></td>
		</tr>
		<tr>
		<td></td><td style="padding-bottom:10px;"></td>
		</tr>
		<tr>
		<td></td>
		<center>
		<td style="text-align:right;">
				<a type="submit" class="btn btn-danger" onclick="document.getElementById('edit').submit()">
				<i class="halflings-icon white edit"></i> Ubah
				</a>
				<a class="btn btn-info" onclick="document.getElementById('edit').reset()">
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
