<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KuesionerModel extends CI_Model {

		function getSoalById()
		{
			return $this->db->get('bank_soal');
		}

		public function getJawaban($id_user, $id_soal)
		{
			$this->db->where('id_user', $id_user);
			$this->db->where('id_soal', $id_soal);
			return $this->db->get('data_jawaban');
		}

		function cekEmpty($id_user, $id_soal)
		{
			$this->db->where('id_user', $id_user);
			$this->db->where('id_soal', $id_soal);
			return $this->db->get('data_jawaban');
		}

		function insertJawaban($id_user, $id_soal, $jawaban)
		{
			$data['id_user'] 	= $id_user;
			$data['id_soal'] 	= $id_soal;
			$data['jawaban'] 	= $jawaban;

			return $this->db->insert('data_jawaban', $data);
		}

		function updateJawaban($id_user, $id_soal, $jawaban)
		{
			// $data['id_user'] 	= $id_user;
			// $data['id_soal'] 	= $id_soal;
			$data['jawaban'] 	= $jawaban;

			return $this->db->update('data_jawaban', $data, array(
				'id_user' => $id_user, 
				'id_soal' => $id_soal
			));
		}

		// function groupSoal()
		// {
		// 	$this->db->select('*');
		// 	$this->db->join('bank_soal', 'group_soal.id_group = bank_soal.id_group', 'left');
		// 	$this->db->group_by('bank_soal.id_group');
		// 	return $this->db->get('group_soal');
		// }

		function getSkor($id)
		{
			$this->db->select('SUM(data_jawaban.jawaban) as skorGroup, data_jawaban.*,  group_soal.nama_group, group_soal.s_normal, group_soal.s_perbatasan, group_soal.s_abnormal');
			$this->db->join('bank_soal', 'bank_soal.id_group = group_soal.id_group', 'left');
			$this->db->join('data_jawaban', 'data_jawaban.id_soal = bank_soal.id_soal', 'left');
			$this->db->where('id_user', $id);
			$this->db->group_by('group_soal.id_group');
			return $this->db->get('group_soal');
		}
	
	}
	
	/* End of file KuesionerModel.php */
	/* Location: ./application/models/KuesionerModel.php */
?>