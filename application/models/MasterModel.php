<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MasterModel extends CI_Model {
	
	// Bank Soal Model	
		function showBankSoal()
		{
			return $this->db->get('bank_soal');
		}

		function showBankSoalNoGroup()
		{
			$this->db->where('id_group', NULL);
			return $this->showBankSoal();
		}

		function showBankSoalGroup($id)
		{
			$this->db->where('id_group', $id);
			return $this->showBankSoal();
		}

		function getSoalById($id)
		{
			return $this->db->get_where('bank_soal', array('id_soal' => $id));
		}

		function addBankSoal($data)
		{
			return $this->db->insert('bank_soal', $data);
		}

		function updateBankSoal($id, $data)
		{
			return $this->db->update('bank_soal', $data, array('id_soal' => $id));
		}

		function deleteBankSoal($id)
		{
			return $this->db->delete('bank_soal', array('id_soal' => $id));
		}
	// Bank Soal Model

	// Group Soal Model	
		function showGroupSoal()
		{
			return $this->db->get('group_soal');
		}

		function getGroupSoalById($id)
		{
			return $this->db->get_where('group_soal', array('id_group' => $id));
		}

		function addGroupSoal($data)
		{
			return $this->db->insert('group_soal', $data);
		}

		function updateGroupSoal($id, $data)
		{
			return $this->db->update('group_soal', $data, array('id_group' => $id));
		}

		function deleteGroupSoal($id)
		{
			$delGroup = $this->db->delete('group_soal', array('id_group' => $id));
			$data['id_group'] = NULL;
			if ($delGroup) {
				$this->db->update('bank_soal', $data, array('id_group' => $id));
			}

			return true;
		}
	// Group Soal Model	


	}
	
	/* End of file MasterModel.php */
	/* Location: ./application/models/MasterModel.php */
?>