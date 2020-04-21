<?php 

class Model_isolasi extends CI_Model {
	public function tampil_data($id_prov){
		$sql = "SELECT * FROM isolasimandiri WHERE id_prov='$id_prov' ";
				return $this->db->query($sql)->result();
	}



		
}