<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISTEM INFORMASI KEUANGAN FAKULTAS TEKNIK UNIVERSITAS TADULAKO</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>css/csscetak.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url(); ?>img/untad.png">
</head>
<body>
<div class="kepala">
<p>
<img src="<?php echo base_url(); ?>img/untad.png" style="height:60px;width:60px;" alt=""/><br><br>
RKAKL FAKULTAS TEKNIK UNIVERSITAS TADULAKO<br>
TAHUN ANGGARAN <?php echo $this->session->userdata("tahun"); ?><br>
<?php 
if($datadb!=null){
echo 'PROGRAM STUDI ', strtoupper($datadb[0]['UnitKerja']);
}
else{
echo " ";
}?>
</p>
</div>
	<div class="content">
	<table border="1">
						  <thead>
							  <tr>
								  <th width="100px">KODE</th>
								  <th width="500px">URAIAN</th>
								  <th width="100px">PAGU</th>
								  <th width="150px">PAGU REVISI</th>
								  <th width="150px">RALISASI</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php 
							if($datadb!=null){
							foreach($datadb as $data){
							?>							
							<tr>
								<td><?php echo $data['Kode']?></td>
								<td style="text-align:left;"><?php echo $data['Uraian']?></td>
								<td style="text-align:right;">Rp. <?php echo number_format($data['Pagu'],0,'.',',')?></td>
								<td style="text-align:right;">Rp. <?php echo number_format($data['PaguRevisi'],0,'.',',')?></td>
								<td style="text-align:right;">Rp. <?php echo number_format($data['Realisasi'],0,'.',',')?></td>
							</tr>
							<?php } ?>
							<tr>
							<td colspan="2"><strong>TOTAL</strong></td>
							<td style="text-align:right;"><strong>Rp. <?php echo number_format($data['TotalPagu'],0,'.',',')?></strong></td>
							<td style="text-align:right;"><strong>Rp. <?php echo number_format($data['TotalPR'],0,'.',',')?></strong></td>
							<td style="text-align:right;"><strong>Rp. <?php echo number_format($data['TotalRealisasi'],0,'.',',')?></strong></td>
							</tr>
							<?php
							echo "<script>window.print();</script>";
							}
							else{
							echo "<script>alert('Belum ada data yang akan dicetak');</script>";
							echo "<script>window.close();</script>";
							}?>
						  </tbody>
					  </table>  
	</div>
</body>
</html>
