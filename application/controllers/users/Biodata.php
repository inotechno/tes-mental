<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Biodata extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('UserModel');
		}
	
		public function index()
		{
			$data['page_title'] = 'Biodata';

			$this->load->view('users/partials/head', $data);
			$this->load->view('users/biodata');
			$this->load->view('users/partials/footer');
			$this->load->view('users/plugins/biodata');
		}

		public function addUsers()
		{
			$data['id_user'] = $this->UserModel->generateId();
			$data['nama_lengkap'] = $this->input->post('nama_lengkap');
			$data['kelas'] = $this->input->post('kelas');
			$data['tgl_lahir'] = $this->input->post('tgl_lahir');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');

			if ($data['nama_lengkap'] == '' || $data['kelas'] == '' || $data['tgl_lahir'] == '' || $data['jenis_kelamin'] == '') {
				$response = array(
					'type' => 'danger',
					'message' => 'Lengkapi data anda !!!'
				);
			}else{
				
				$act = $this->UserModel->addUsers($data);

				if ($act) {
					$response = array(
						'type' => 'success',
						'message' => 'Terima kasih sudah mendaftar, Selamat mengisi biodata'
					);
					$data['logged_user'] = TRUE; 
					$this->session->set_userdata($data);
				}else{
					$response = array(
						'type' => 'danger',
						'message' => 'Mohon maaf, Pendaftaran gagal'
					);
				}
			}

			echo json_encode($response);
		}

		public function EndSession()
		{
			$destroy = $this->session->sess_destroy();
			if ($destroy) {
				redirect(base_url('users'),'refresh');
			}
		}
	
	}
	
	/* End of file Biodata.php */
	/* Location: ./application/controllers/users/Biodata.php */
?>