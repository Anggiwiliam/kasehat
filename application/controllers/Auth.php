<?php 
class Auth extends CI_Controller{
	public function index(){
		// $data['content']='v_dashboard/index';
		$this->load->view('templates/header');
		$this->load->view('form_login');
		$this->load->view('templates/footer');
	}
	public function login(){
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('templates/header');
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		} else {
			$auth = $this->Model_auth->cek_login();
			if ($auth == FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<p>email atau Password anda salah</p>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			} else { 
				$this->session->set_userdata('email',$auth->email);
				$this->session->set_userdata('name',$auth->name);
				$this->session->set_userdata('role_id',$auth->role_id);
				$this->session->set_userdata('id_prov',$auth->id_prov);
				switch ($auth->role_id){
					case 0: redirect('dashboard');
					break;
					case 1: redirect('admin/dashboard_admin');
					break;

					default:break;
				}
		}
	}
}
public function logout(){
	$this->session->sess_destroy();
	redirect('auth/login');
 }
 
}



