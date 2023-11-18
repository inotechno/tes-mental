<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class UserModel extends CI_Model {
		
		function generateId()
		{
			$this->db->select('MAX(id_user) as id_last');
			$get = $this->db->get('data_users')->row();
			return $get->id_last + 1;
		}

		function addUsers($data)
		{
			return $this->db->insert('data_users', $data);
		}

		function showPengguna()
		{
			return $this->db->get('data_users');
		}

		function showJawabanById($id_user, $id_group)
		{
			$this->db->select('data_jawaban.jawaban, bank_soal.soal');
			$this->db->join('bank_soal', 'bank_soal.id_soal = data_jawaban.id_soal', 'left');
			$this->db->where('id_user', $id_user);
			$this->db->where('bank_soal.id_group', $id_group);
			return $this->db->get('data_jawaban');

		}
	
	}
	
	/* End of file UserModel.php */
	/* Location: ./application/models/UserModel.php */
?>