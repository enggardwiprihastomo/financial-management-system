<?php 

class c_siskeufatek extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_siskeufatek');

	}

	function index(){
		$this->load->view('login');
	}
	
	function masuk(){
	$this->load->model('m_siskeufatek'); 
	$data['ddb']=$this->m_siskeufatek->aksesdata($this->session->userdata("unitkerja"),$this->session->userdata("tahun"));
	if ($this->session->userdata("unitkerja")=='Pimpinan'||$this->session->userdata("unitkerja")=='Operator'){
	$this->load->view('dataadmin', $data);
	}
	else{
	$this->load->view('dataumum', $data);
	}
	}
	
	function masuksimpan(){
		$this->load->view('save');
	}
	
	function pengguna(){
		$this->load->view('pengguna');
	}
	
	function hapus($id) {
		$this->load->model('m_siskeufatek');
        $call = $this->m_siskeufatek->hapusdata($id);
		echo "<script>alert('Data telah terhapus');</script>";
		redirect('c_siskeufatek/masuk','refresh');
    }
	
	function ubahdata($id) {
        $this->load->model('m_siskeufatek'); 
        $data['ubah']=$this->m_siskeufatek->tampilubah($id);
        $this->load->view('edit', $data);
    }
	
	function cetak() {
		$unitkerja = $this->input->post('unitkerja');
		$tahun = $this->input->post('tahun');
        $this->load->model('m_siskeufatek'); 
        $data['datadb']=$this->m_siskeufatek->cetakdata($unitkerja,$tahun);
		if($unitkerja=='Semua'){
		$this->load->view('cetakadmin', $data);
		}
		else{
		$this->load->view('cetak', $data);
		}
    }
	
	function prosesedit() {
		$id = $this->input->post('id');
		$ubah = array(
            'kode' => $this->input->post('kode'),
            'uraian' => $this->input->post('uraian'),
            'unitkerja' => $this->input->post('prodi'),
            'pagu' => $this->input->post('pagu'),
            'pagurevisi' => $this->input->post('pagurevisi'),
            'realisasi' => $this->input->post('realisasi'),
			'tahun' => $this->input->post('tahun')
        );
		 $this->load->model('m_siskeufatek');
         $call = $this->m_siskeufatek->perbaharuidata($ubah,$id);
		 echo "<script>alert('Data telah diperbaharui');</script>";
		 redirect('c_siskeufatek/masuk','refresh');
    }
	
	function prosessimpan() {
		$simpan = array(
            'kode' => $this->input->post('kode'),
            'uraian' => $this->input->post('uraian'),
            'unitkerja' => $this->input->post('prodi'),
            'pagu' => $this->input->post('pagu'),
            'pagurevisi' => $this->input->post('pagurevisi'),
            'realisasi' => $this->input->post('realisasi'),
			'tahun' => $this->input->post('tahun')
        );
		 $this->load->model('m_siskeufatek');
         $call = $this->m_siskeufatek->simpandata($simpan);
		 echo "<script>alert('Data telah tersimpan');</script>";
		 redirect('c_siskeufatek/masuk','refresh');
    }
	
	function simpanpengguna() {
		$simpan = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'unitkerja' => $this->input->post('unitkerja')
        );
		 $this->load->model('m_siskeufatek');
         $call = $this->m_siskeufatek->simpandatapengguna($simpan);
		 echo "<script>alert('Data telah tersimpan');</script>";
		 redirect('c_siskeufatek/pengguna','refresh');
    }
	
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$unitkerja = $this->input->post('unitkerja');
		$tahun = $this->input->post('tahun');
		$where = array(
			'username' => $username,
			'password' => $password,
			'unitkerja' => $unitkerja
			);
		$cek = $this->m_siskeufatek->cek_login("login",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'unitkerja' => $unitkerja,
				'tahun' => $tahun,
				'status' => "login"
				);
				$this->session->set_userdata($data_session);
				$this->load->model('m_siskeufatek'); 
				$data['ddb']=$this->m_siskeufatek->aksesdata($unitkerja,$tahun);
				if ($unitkerja=='Pimpinan'||$unitkerja=='Operator'){
				$this->load->view('dataadmin', $data);
				}
				else{
				$this->load->view('dataumum', $data);
				}
		}else{
			echo "<script>alert('Username/password/unit kerja yang Anda masukan salah');</script>";
					redirect('c_siskeufatek','refresh');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('c_siskeufatek');
	}
	}
?>