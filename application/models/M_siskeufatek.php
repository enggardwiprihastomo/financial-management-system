<?php 

class m_siskeufatek extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	function aksesdata($unitkerja,$tahun){
        $this->load->database();
		if ($unitkerja=='Pimpinan'||$unitkerja=='Operator'){
			$sql = $this->db->query("SELECT  *,(select sum(pagu) from utama WHERE tahun='$tahun') as TotalPagu,(select sum(pagurevisi) from utama WHERE tahun='$tahun') as TotalPR,(select sum(realisasi) from utama WHERE tahun='$tahun') as TotalRealisasi FROM utama WHERE tahun='$tahun'");
		}
		else{
			$sql = $this->db->query("SELECT  *,(select sum(pagu) from utama WHERE tahun='$tahun' AND unitkerja='$unitkerja') as TotalPagu,(select sum(pagurevisi) from utama WHERE tahun='$tahun' AND unitkerja='$unitkerja') as TotalPR,(select sum(realisasi) from utama WHERE tahun='$tahun' AND unitkerja='$unitkerja') as TotalRealisasi FROM utama WHERE tahun='$tahun' AND unitkerja='$unitkerja'");
		}
		$res = $sql->result_array();
		return $res;
    }	
	
	function tampilubah($id){
        $this->load->database();
		$sql = $this->db->where('id',$id)->get('utama');
		$res = $sql->result_array();
		return $res;
    }
	
	function perbaharuidata($ubah,$id){
        $this->db->where('id',$id);
        $this->db->update('utama', $ubah);
    }

	function simpandata($simpan) {
        $this->db->insert('utama', $simpan);
    }	
	
	function simpandatapengguna($simpan) {
        $this->db->insert('login', $simpan);
    }	
	
	function hapusdata($id) {
        $this->db->where('id',$id);
        $this->db->delete('utama');
    }
	
	function cetakdata($unitkerja,$tahun){
    $this->load->database();
	if($unitkerja=='Semua'){
	$sql = $this->db->query("SELECT  *,(select sum(pagu) from utama WHERE tahun='$tahun') as TotalPagu,(select sum(pagurevisi) from utama WHERE tahun='$tahun') as TotalPR,(select sum(realisasi) from utama WHERE tahun='$tahun') as TotalRealisasi FROM utama WHERE tahun='$tahun' ORDER BY unitkerja");
	$res = $sql->result_array();
	return $res;
	}
	else{
	$sql = $this->db->query("SELECT  *,(select sum(pagu) from utama WHERE tahun='$tahun' AND unitkerja='$unitkerja') as TotalPagu,(select sum(pagurevisi) from utama WHERE tahun='$tahun' AND unitkerja='$unitkerja') as TotalPR,(select sum(realisasi) from utama WHERE tahun='$tahun' AND unitkerja='$unitkerja') as TotalRealisasi FROM utama WHERE tahun='$tahun' AND unitkerja='$unitkerja'");
	$res = $sql->result_array();
	return $res;
    }}	
}
?>