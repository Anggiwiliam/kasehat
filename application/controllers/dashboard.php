<?php
class Dashboard extends CI_Controller{

	public function index ()
	{
		// $data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/dashboard');
		$this->load->view('templates/footer');
}

	// public function search(){
	// 			$keyword = $this->input->post('keyword');
	// 			$data['barang']= $this->model_barang->get_keyword($keyword);
	// 			$this->load->view('templates/header');
	// 			$this->load->view('templates/sidebar');
	// 			$this->load->view('dashboard',$data);
	// 			$this->load->view('templates/footer');
				
	// 		}


// public function tambah_keranjang($id){
// 		$barang = $this->model_barang->find($id);
// 		$data = array(
// 			'id' 	=>$barang->id_brg,
// 			'qty' 	=>1,
// 			'price' =>$barang->harga,
// 			'name' 	=>$barang->nama_brg,);
// 		$this->cart->insert($data);
// 		redirect('dashboard');
// }
// public function detail_keranjang(){
// 		$this->load->view('templates/header');
// 		$this->load->view('templates/sidebar');
// 		$this->load->view('keranjang');
// 		$this->load->view('templates/footer');
// }
// public function hapus_keranjang(){
// 	$this->cart->destroy();
// 	redirect('dashboard/index');
// }
// public function pembayaran(){
// 		$this->load->view('templates/header');
// 		$this->load->view('templates/sidebar');
// 		$this->load->view('pembayaran');
// 		$this->load->view('templates/footer');
// }
// public function proses_pesanan(){
// 		$this->load->view('templates/header');
// 		$this->load->view('templates/sidebar');
// 		$this->load->view('proses_pesanan');
// 		$this->load->view('templates/footer');
// }
	
// 	public function detail($id_brg){
// 		$data['barang'] = $this->model_barang->detail_brg($id_brg);
// 		$this->load->view('templates/header');
// 		$this->load->view('templates/sidebar');
// 		$this->load->view('detail_barang',$data);
// 		$this->load->view('templates/footer');
// }

}