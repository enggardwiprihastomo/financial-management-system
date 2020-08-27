<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISTEM INFORMASI KEUANGAN FAKULTAS TEKNIK UNIVERSITAS TADULAKO</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>css/cssutama.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url(); ?>img/untad.png">
</head>

<body>
<div class="logout">	
<a class="btn btn-danger" href="<?php echo base_url('c_siskeufatek/logout')?>" align="middle">
<i class="halflings-icon white lock"></i> Logout
</a>
</div>
<div class="kepala">
<p><img src="<?php echo base_url(); ?>img/untad.png" style="height:60px;width:60px;" alt=""/><br><br>
RKAKL FAKULTAS TEKNIK UNIVERSITAS TADULAKO<br>
TAHUN ANGGARAN <?php echo $this->session->userdata("tahun"); ?><br>
<?php echo 'PROGRAM STUDI ', strtoupper($this->session->userdata("unitkerja")); ?>
</p>
</div>
		<div class="container-fluid-full">
		<div class="row-fluid">	
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span><?php echo $this->session->userdata("nama") .' (Program Studi '. str_replace(array('(',')'),array('[',']'),$this->session->userdata("unitkerja")) .')'; ?></h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th><center>KODE</center></th>
								  <th><center>URAIAN</center></th>
								  <th><center>PAGU</center></th>
								  <th><center>PAGU REVISI</center></th>
								  <th><center>RALISASI</center></th>
							  </tr>
						  </thead>   
						  <tbody>
						     <?php 
							foreach($ddb as $user){  
                            $id = $user['id']; 
							?>
							<input type="hidden" name="id" value="<?php echo $user['id']?>">
							<tr>
								<td><center><?php echo $user['Kode']?></center></td>
								<td class="center"><?php echo $user['Uraian']?></td>
								<td class="center"><center>Rp. <?php echo number_format($user['Pagu'],0,'.',',')?></center></td>
								<td class="center"><center>Rp. <?php echo number_format($user['PaguRevisi'],0,'.',',')?></center></td>
								<td class="center"><center>Rp. <?php echo number_format($user['Realisasi'],0,'.',',')?></center></td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table>  					  
					</div>
				</div>
		</div>
		</div>
		<table style="color:gray;">
		<tr>
		<td width="1100px"></td>
		<td>
		Total PAGU
		</td>
		<td>
		: Rp.
		<?php
		if($ddb==null){
		echo "0";
		}
		else{
		echo number_format($ddb[0]['TotalPagu'],0,'.',',');
		}
		?>
		</td>
		</tr>
		<tr>
		<td></td>
		<td>
		Total PAGU REVISI
		</td>
		<td>
		: Rp. <?php
		if($ddb==null){
		echo "0";
		}
		else{
		echo number_format($ddb[0]['TotalPR'],0,'.',',');
		}
		?>
		</td>
		</tr>
		<tr>
		<td></td>
		<td>
		REALISASI
		</td>
		<td>
		: Rp. <?php
		if($ddb==null){
		echo "0";
		}
		else{
		echo number_format($ddb[0]['TotalRealisasi'],0,'.',',');
		}
		?>
		</td>
		</tr>
		<tr>
		<td></td>
		<td style="border-bottom: 1px solid gray;" colspan="2"></td>
		</tr>
		<tr>
		<td style="padding-bottom:20px"></td>
		</tr>
		<tr>
		<td width="1100px"></td>
		<td><form id="cetakdata" action="<?php echo base_url('c_siskeufatek/cetak')?>" method="post" target="_blank">
		<input type="hidden" name="unitkerja" value="<?php echo $this->session->userdata("unitkerja"); ?>">
		<input type="hidden" name="tahun" value="<?php echo $this->session->userdata("tahun"); ?>">
		</form></td>
		<td>
		<a class="btn btn-tambah" onclick="document.getElementById('cetakdata').submit()">
		<i class="halflings-icon white print"></i> Cetak Data
		</a>
		</td>
		</tr>
		</table>
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
