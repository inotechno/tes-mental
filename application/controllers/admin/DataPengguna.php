<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class DataPengguna extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('UserModel');
			$this->load->model('MasterModel');
			$this->load->model('KuesionerModel');
			if ($this->session->userdata('logged') == false) {
				redirect('Auth','refresh');
			}
		}
	
		public function index()
		{
			$def['title'] = ' Data Pengguna';
			$def['breadcrumb'] = 'Data Pengguna';

			$this->load->view('partials/head', $def);
			$this->load->view('partials/navbar');
			$this->load->view('partials/breadcrumb', $def);
			$this->load->view('admin/datapengguna');
			$this->load->view('partials/footer');
			$this->load->view('admin/plugins/datapengguna');
		}

		public function showPengguna()
		{
			$html = '';
			$act = $this->UserModel->showPengguna();
			if ($act->num_rows() > 0) {
				$no = 1;
				$jenis_kelamin;
				foreach ($act->result() as $dt) {

					if ($dt->jenis_kelamin == 'L') {
						$jenis_kelamin = 'Laki-Laki';
					}else{
						$jenis_kelamin = 'Perempuan';
					}
					$html .= '<tr>
								<th scope="row" class="text-center">'.$no++.'
								<td>'.$dt->nama_lengkap.'</td>
								<td>'.$dt->tgl_lahir.'</td>
								<td>'.$dt->kelas.'</td>
								<td>'.$jenis_kelamin.'</td>
								<td class="text-center">
									<button class="btn btn-info btn-sm fas fa-eye btn-view-jawaban" data-id="'.$dt->id_user.'" data-nama="'.$dt->nama_lengkap.'" data-tgl_lahir="'.$dt->tgl_lahir.'" data-kelas="'.$dt->kelas.'" data-jenis_kelamin="'.$dt->jenis_kelamin.'"></button>
								</td>
							</tr>';
				}
			}else{
				$html .= '<tr>
							<td colspan="6" class="text-center">Tidak Ada Soal</td>
						</tr>';
			}

			echo $html;
		}

		public function showJawabanById()
		{
			$html = '';
			$id_user = $this->input->post('id_user');
			$total = array();
			$totalSkor = 0;
			$group = $this->MasterModel->showGroupSoal();
			foreach ($group->result() as $g => $gr) {
				$html .= '
						<table class="table table-flush">
							<thead class="bg-red text-white">
								<th width="5">No</th>
								<th>'.$gr->nama_group.'</th>
								<th>Nilai</th>
							</thead>
							<tbody>
				';
				$act = $this->UserModel->showJawabanById($id_user, $gr->id_group);
				$no = 1;
				foreach ($act->result() as $d => $dt) {
					$html .= '
							<tr>
								<th scope="row" class="text-center">'.$no++.'
								<td>'.$dt->soal.'</td>
								<td class="text-center">'.$dt->jawaban.'</td>
							</tr>
							';

					$total[$d] = $dt->jawaban;
				}
				$totalSkor = array_sum($total);
				$html .= '
						</tbody>
						<tfoot>
							<tr class="font-weight-bold">
								<td class="text-right" colspan="2">Jumlah</td>
								<td>'.$totalSkor.'</td>
							</tr>
						</tfoot>
					</table>
							';
			}
			
			// echo $this->db->last_query($act);
			echo $html;
		}

		public function showSkor()
		{
			$skorTotal = 0;
			$totalNormal = 15;
			$totalPerbatasan = 19;
			$totalAbnormal = 40;

			$data['status'] = '';
			$id = $this->input->post('id_user');
			$skor = $this->KuesionerModel->getSkor($id)->result();

			foreach ($skor as $sk) {

				$skorTotal += $sk->skorGroup;
				if ($skorTotal <= $totalNormal ) {
					$data['status'] = 'Normal';
				}if ($skorTotal > $totalNormal && $skorTotal <= $totalAbnormal) {
					$data['status'] = 'Perbatasan';
				}if ($skorTotal > $totalPerbatasan && $skorTotal <= $totalAbnormal) {
					$data['status'] = 'Abnormal';
				}
			}

			$data['skorTotal'] = $skorTotal;
			echo json_encode($data);
		}
	
	}
	
	/* End of file DataPengguna.php */
	/* Location: ./application/controllers/admin/DataPengguna.php */
?>