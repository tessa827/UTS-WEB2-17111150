<?php 

// Termasuk Ke dalam pilar Inheritance, karena class Koneksi diwarisi oleh class CI_Controller
class Koneksi extends CI_Controller {

	function __construct(){
		parent::__Construct();
		$this->load->database();
		$this->load->model("ModelKoneksi");
	}

	public function index(){
		$data ['title'] = "The Red Hotel | Uts";
		$this->load->view('header',$data);
		$this->load->view('home');
		$this->load->view('footer');
	} 

	public function tambahdata(){
		$data ['title'] = "Booking | Uts";
		$this->load->view('header', $data);
		$this->load->view('booking');
		$this->load->view('footer');
	}

	// public function hapus(){
	// 	$data ['hapus'] = $this->ModelKoneksi->hapus_data();
	// }

	// public function editdata(){

	// }

	public function tampil_data(){
		$data ['title'] = "Jadwal Booking | Uts";
		$data ['tampil'] = $this->ModelKoneksi->tampilkan_data();
		$this->load->view('header', $data);
		$this->load->view('jadwal', $data);
		$this->load->view('footer');
	}

	public function aksi_tambah_data(){
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis_kamar');
		$kamar = $this->input->post('no_kamar');
		$tanggal = $this->input->post('tgl_booking');
		$masuk = $this->input->post('tgl_cekin');
		$keluar = $this->input->post('tgl_cekout');
		$bayar = $this->input->post('bayar_dp');

		$data = array(
			'nama'=> $nama,
			'jenis_kamar'=> $jenis,
			'no_kamar'=> $kamar,
			'tgl_booking'=> $tanggal,
			'tgl_cekin'=> $masuk,
			'tgl_cekout'=> $keluar,
			'bayar_dp'=> $bayar
		);

		$this->ModelKoneksi->tambah_data($data,'booking');		
		redirect('Koneksi/tambahdata');
	}

	function edit($id){
		$where = array('id' => $id);
		$data ['title'] = "Edit Data";
		$data['booking'] = $this->ModelKoneksi->edit_data($where,'booking')->result();	
		$this->load->view('header',$data);
		// $this->load->view('booking');		
		$this->load->view('edit',$data);
		$this->load->view('footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis_kamar');
		$kamar = $this->input->post('no_kamar');
		$tanggal = $this->input->post('tgl_booking');
		$masuk = $this->input->post('tgl_cekin');
		$keluar = $this->input->post('tgl_cekout');
		$bayar = $this->input->post('bayar_dp');

		$data = array( 
			'nama'=> $nama,
			'jenis_kamar'=> $jenis,
			'no_kamar'=> $kamar,
			'tgl_booking'=> $tanggal,
			'tgl_cekin'=> $masuk,
			'tgl_cekout'=> $keluar,
			'bayar_dp'=> $bayar
		);

		$where = array(
			'id' => $id
		);

		$this->ModelKoneksi->update_data($where,$data,'booking');
		redirect('Koneksi/tampil_data');
	}


	function hapus($id){
		$where = array('id' => $id);
		$this->ModelKoneksi->hapus_data($where,'booking');
		redirect('Koneksi/tampil_data');
	}

	//Enkapsulasi merupakan salah satu pilar didalam oop, yang dimana memiliki 3 akses untuk method dan property didalam class. macam aksesnya yaitu private, protected dan public. dan tentunya didalam pilar inheritance itu terdapat pilar encapsulasi.

}
?>
