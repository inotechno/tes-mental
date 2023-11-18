<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Laporan extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('LaporanModel');
			$this->load->model('KuesionerModel');
		}
	
		public function index()
		{
			$def['title'] = ' Laporan';
			$def['breadcrumb'] = 'Laporan';

			$this->load->view('partials/head', $def);
			$this->load->view('partials/navbar');
			$this->load->view('partials/breadcrumb', $def);
			$this->load->view('admin/laporan');
			$this->load->view('partials/footer');
			$this->load->view('admin/plugins/laporan');			
		}

		public function showPengguna()
		{
			$list = $this->LaporanModel->get_users();

			$data = array();
			$no = $_POST['start'];
			$jenis_kelamin;
			$skor;
			foreach ($list as $ls) {

				if ($ls->jenis_kelamin == 'L') {
						$jenis_kelamin = 'Laki-Laki';
				}else{
					$jenis_kelamin = 'Perempuan';
				}

				if ($this->showSkor($ls->id_user)['skorTotal'] > 0) {
					$skor = $this->showSkor($ls->id_user)['skorTotal'].' | '.$this->showSkor($ls->id_user)['status'];
				}else{
					$skor = 'Tidak Ada';
				}

				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $ls->nama_lengkap;
				$row[] = $ls->tgl_lahir;
				$row[] = $ls->kelas;
				$row[] = $ls->jenis_kelamin;
				$row[] = $skor;
				$row[] = date('d-m-Y', strtotime($ls->created_at));

				$data[] = $row;
			}

			$output = array(
				"draw" => $_POST['draw'],
	            "recordsTotal" => $this->LaporanModel->count_all_users(),
	            "recordsFiltered" => $this->LaporanModel->count_filtered_users(),
	            "data" => $data
			);

			echo json_encode($output);
		}

		public function showSkor($id)
		{
			$skorTotal = 0;
			$totalNormal = 15;
			$totalPerbatasan = 19;
			$totalAbnormal = 40;

			$data['status'] = '';
			$skor = $this->KuesionerModel->getSkor($id)->result();

			foreach ($skor as $sk) {

				$skorTotal += $sk->skorGroup;
				if ($skorTotal <= $totalNormal) {
					$data['status'] = 'Normal';
				}if ($skorTotal > $totalNormal && $skorTotal <= $totalAbnormal) {
					$data['status'] = 'Perbatasan';
				}if ($skorTotal > $totalPerbatasan && $skorTotal <= $totalAbnormal) {
					$data['status'] = 'Abnormal';
				}
			}

			$data['skorTotal'] = $skorTotal;
			return $data;
		}
	
	}
	
	/* End of file Laporan.php */
	/* Location: ./application/controllers/admin/Laporan.php */
?>