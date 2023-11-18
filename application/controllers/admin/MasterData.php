<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MasterData extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('MasterModel');
			if ($this->session->userdata('logged') == false) {
				redirect('Auth','refresh');
			}
		}
	
	// Bank Soal
		public function bank_soal()
		{
			$def['title'] = 'Bank Soal';
			$def['breadcrumb'] = 'Bank Soal';

			$this->load->view('partials/head', $def);
			$this->load->view('partials/navbar');
			$this->load->view('partials/breadcrumb', $def);
			$this->load->view('admin/bank_soal');
			$this->load->view('partials/footer');
			$this->load->view('admin/plugins/bank_soal');
		}

		public function showBankSoal()
		{
			$html = '';

			$act = $this->MasterModel->showBankSoal();
			if ($act->num_rows() > 0) {
				$no = 1;
				foreach ($act->result() as $dt) {

					$html .= '<tr>
								<th scope="row" class="text-center">'.$no++.'
								<td>'.substr($dt->soal, 0, 300).'</td>
								<td class="text-center">
									<button class="btn btn-info btn-sm ni ni-settings-gear-65 btn-update" data-id="'.$dt->id_soal.'"></button>
									<button class="btn btn-danger btn-sm ni ni-fat-remove btn-delete" data-id="'.$dt->id_soal.'"></button>
								</td>
							</tr>';
				}
			}else{
				$html .= '<tr>
							<td colspan="3" class="text-center">Tidak Ada Soal</td>
						</tr>';
			}

			echo $html;
		}

		public function getSoalById()
		{
			$id = $this->input->get('id');
			$data = $this->MasterModel->getSoalById($id)->row();

			echo json_encode($data);
		}

		public function addBankSoal()
		{
			$data['soal'] = $this->input->post('soal');
			$data['opsi_a'] = $this->input->post('opsi_a');
			$data['opsi_b'] = $this->input->post('opsi_b');
			$data['opsi_c'] = $this->input->post('opsi_c');
			$data['nilai_a'] = $this->input->post('nilai_a');
			$data['nilai_b'] = $this->input->post('nilai_b');
			$data['nilai_c'] = $this->input->post('nilai_c');
			$data['created_by'] = $this->session->userdata('id');

			$act = $this->MasterModel->addBankSoal($data);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Soal berhasil ditambah'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Soal yang anda kirim gagal'
				);
			}

			echo json_encode($response);
		}

		public function updateBankSoal()
		{
			$id = $this->input->post('id');
			$data['soal'] = $this->input->post('soal');
			$data['opsi_a'] = $this->input->post('opsi_a');
			$data['opsi_b'] = $this->input->post('opsi_b');
			$data['opsi_c'] = $this->input->post('opsi_c');
			$data['nilai_a'] = $this->input->post('nilai_a');
			$data['nilai_b'] = $this->input->post('nilai_b');
			$data['nilai_c'] = $this->input->post('nilai_c');
			$data['created_by'] = $this->session->userdata('id');

			$act = $this->MasterModel->updateBankSoal($id, $data);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Soal berhasil diubah'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Soal yang anda kirim gagal'
				);
			}

			echo json_encode($response);
		}

		public function deleteBankSoal()
		{
			$id = $this->input->post('id');
			$act = $this->MasterModel->deleteBankSoal($id);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Soal berhasil dihapus'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Soal gagal dihapus'
				);
			}

			echo json_encode($response);
		}

	// Bank Soal

	// Group Soal
		public function group_soal()
		{
			$def['title'] = 'Group Soal';
			$def['breadcrumb'] = 'Group Soal';

			$this->load->view('partials/head', $def);
			$this->load->view('partials/navbar');
			$this->load->view('partials/breadcrumb', $def);
			$this->load->view('admin/group_soal');
			$this->load->view('partials/footer');
			$this->load->view('admin/plugins/group_soal');
		}

		public function showGroupSoal()
		{
			$html = '';
			$act = $this->MasterModel->showGroupSoal();
			if ($act->num_rows() > 0) {
				$no = 1;
				foreach ($act->result() as $dt) {
					$html .= '<tr>
								<th scope="row" class="text-center">'.$no++.'
								<td>'.$dt->nama_group.'</td>
								<td class="text-center">'.$dt->s_normal.'</td>
								<td class="text-center">'.$dt->s_perbatasan.'</td>
								<td class="text-center">'.$dt->s_abnormal.'</td>
								
								<td class="text-center btn-group">
									<button class="btn btn-warning btn-sm fas fa-eye btn-view-soal" data-id="'.$dt->id_group.'"></button>
									<button class="btn btn-info btn-sm ni ni-settings-gear-65 btn-update" data-id="'.$dt->id_group.'"></button>
									<button class="btn btn-danger btn-sm ni ni-fat-remove btn-delete" data-id="'.$dt->id_group.'"></button>
								</td>
							</tr>';
				}
			}else{
				$html .= '<tr>
							<td colspan="4" class="text-center">Tidak Ada Soal</td>
						</tr>';
			}

			echo $html;
		}

		public function getGroupSoalById()
		{
			$id = $this->input->get('id');
			$data = $this->MasterModel->getGroupSoalById($id)->row();

			echo json_encode($data);
		}

		public function addGroupSoal()
		{
			$data['nama_group'] 	= $this->input->post('nama_group');
			$data['s_normal'] 		= $this->input->post('s_normal');
			$data['s_perbatasan'] 	= $this->input->post('s_perbatasan');
			$data['s_abnormal'] 	= $this->input->post('s_abnormal');
			$act = $this->MasterModel->addGroupSoal($data);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Group soal berhasil ditambah'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Group soal yang anda kirim gagal'
				);
			}

			echo json_encode($response);
		}

		public function updateGroupSoal()
		{
			$id = $this->input->post('id_group_update');
			$data['nama_group'] = $this->input->post('nama_group_update');
			$data['s_normal'] 		= $this->input->post('s_normal_update');
			$data['s_perbatasan'] 	= $this->input->post('s_perbatasan_update');
			$data['s_abnormal'] 	= $this->input->post('s_abnormal_update');

			$act = $this->MasterModel->updateGroupSoal($id, $data);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Group soal berhasil diubah'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Group soal yang anda kirim gagal'
				);
			}

			echo json_encode($response);
		}

		public function deleteGroupSoal()
		{
			$id = $this->input->post('id');
			$act = $this->MasterModel->deleteGroupSoal($id);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Group Soal berhasil dihapus'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Group Soal gagal dihapus'
				);
			}

			echo json_encode($response);
		}

		public function showSoalNoGroup()
		{
			$html = '';

			$act = $this->MasterModel->showBankSoalNoGroup();
			if ($act->num_rows() > 0) {
				$no = 1;
				foreach ($act->result() as $dt) {

					$html .= '<tr class="p-1" data-id="'.$dt->id_soal.'" style="cursor:pointer;">
								<td><p>'.$dt->soal.'</p></td>
							</tr>';
				}
			}else{
				$html .= '<tr>
							<td class="text-center">Tidak Ada Soal</td>
						</tr>';
			}

			echo $html;
		}

		public function showSoalGroup()
		{
			$html = '';
			$id = $this->input->get('id');

			$act = $this->MasterModel->showBankSoalGroup($id);
			if ($act->num_rows() > 0) {
				$no = 1;
				foreach ($act->result() as $dt) {

					$html .= '<tr class="p-1" data-id="'.$dt->id_soal.'" style="cursor:pointer;">
								<td><p>'.$dt->soal.'</p></td>
							</tr>';
				}
			}else{
				$html .= '<tr>
							<td class="text-center">Tidak Ada Soal</td>
						</tr>';
			}

			echo $html;
		}

		public function sendSoalToGroup()
		{
			$id_soal = $this->input->post('id_soal');
			$data['id_group'] = $this->input->post('id_group');

			$act = $this->MasterModel->updateBankSoal($id_soal, $data);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Data soal berhasil dikirim'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Data soal gagal dikirim'
				);
			}

			echo json_encode($response);
		}

		public function deleteGroupInSoal()
		{
			$data['id_group'] = NULL;
			$id_soal = $this->input->post('id_soal');

			$act = $this->MasterModel->updateBankSoal($id_soal, $data);

			if ($act) {
				$response = array(
					'type' => 'success',
					'message' => 'Data soal berhasil dihapus'
				);
			}else{
				$response = array(
					'type' => 'danger',
					'message' => 'Data soal gagal dihapus'
				);
			}

			echo json_encode($response);
		}

	// Group Soal
	}
	
	/* End of file MasterData.php */
	/* Location: ./application/controllers/admin/MasterData.php */
?>