<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Kuesioner extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('KuesionerModel');
			if ($this->session->userdata('logged_user') != TRUE) {
				redirect(base_url('users'),'refresh');
			}
		}
	
		public function index()
		{
			$data['page_title'] = 'Kuesioner';

			$this->load->view('users/partials/head', $data);
			$this->load->view('users/kuesioner');
			$this->load->view('users/partials/footer');
			$this->load->view('users/plugins/kuesioner');
		}

		public function getSoal()
		{
			$data = $this->KuesionerModel->getSoalById()->result();
			echo json_encode($data);
		}

		public function getJawaban()
		{
			$data = array();
			$id_user = $this->session->userdata('id_user');
			$id_soal = $this->input->get('id_soal');
			$act = $this->KuesionerModel->getJawaban($id_user, $id_soal);
			if ($act->num_rows() > 0) {
				$data = $act->row();
			}
			echo json_encode($data);
		}

		public function simpanJawaban()
		{
			$id_user = $this->session->userdata('id_user');
			$id_soal = $this->input->get('id_soal');
			$jawaban = $this->input->get('jawaban');

			$cekEmpty = $this->KuesionerModel->cekEmpty($id_user, $id_soal);

			if ($cekEmpty->num_rows() > 0) {
				$updateJawaban = $this->KuesionerModel->updateJawaban($id_user, $id_soal, $jawaban);
				if ($updateJawaban) {
					$response = array(
						'type' => 'success'
					);
				}else{
					$response = array(
						'type' => 'danger',
					);
				}

				echo $this->db->last_query($updateJawaban);
			}else{
				$insertJawaban = $this->KuesionerModel->insertJawaban($id_user, $id_soal, $jawaban);
				if ($insertJawaban) {
					$response = array(
						'type' => 'success'
					);
				}else{
					$response = array(
						'type' => 'danger',
					);
				}
			}

			echo json_encode($response);
		}

		public function hasilAkhir()
		{
			$skorTotal = 0;
			$totalNormal = 15;
			$totalPerbatasan = 19;
			$totalAbnormal = 40;
			$data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
			$data['kelas'] = $this->session->userdata('kelas');
			$data['tgl_lahir'] = $this->session->userdata('tgl_lahir');
			$data['jenis_kelamin'] = $this->session->userdata('jenis_kelamin');
			$data['status'] = '';
			$id = $this->session->userdata('id_user');
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
	
	/* End of file Kuesioner.php */
	/* Location: ./application/controllers/users/Kuesioner.php */
?>