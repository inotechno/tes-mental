<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class LaporanModel extends CI_Model {
	
		private function _get_datatables_query($column_order, $column_search, $order, $table)
		{
			$this->db->select('a.*');
			$this->db->from($table.' as a');
	        $i = 0;
	     	
	        foreach ($column_search as $item) // looping awal
	        {
	            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
	            {
	                 
	                if($i===0) // looping awal
	                {
	                    $this->db->group_start();
	                    $this->db->like($item, $_POST['search']['value']); 
	                }
	                else
	                {
	                    $this->db->or_like($item, $_POST['search']['value']);
	                }
	 
	                if(count($column_search) - 1 == $i) 
	                    $this->db->group_end(); 
	            }
	            $i++;
	        }
	         
	        if(isset($_POST['order'])) { // here order processing
	            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	        }  else if(isset($order)) {
	            $order = $order;
	            $this->db->order_by(key($order), $order[key($order)]);
	        }
		}

	// Datatable users

		function get_users()
		{
			$column_order = array(null, 'a.id_user', 'a.nama_lengkap','a.tgl_lahir','a.kelas', 'a.jenis_kelamin', 'a.created_at'); 
		    $column_search = array('a.id_user', 'a.nama_lengkap','a.tgl_lahir','a.kelas', 'a.jenis_kelamin', 'a.created_at'); //field yang diizin untuk pencarian 
		    $order = array('a.created_at' => 'asc'); // default order 
		    $table = 'data_users';

			$this->_get_datatables_query($column_order, $column_search, $order, $table);
	        if($_POST['length'] != -1)
	        $this->db->limit($_POST['length'], $_POST['start']);

	        $query = $this->db->get();
	        return $query->result();
		}

		function count_filtered_users()
	    {
	    	$column_order = array(null, 'a.id_user', 'a.nama_lengkap','a.tgl_lahir','a.kelas', 'a.jenis_kelamin', 'a.created_at'); 
		    $column_search = array('a.id_user', 'a.nama_lengkap','a.tgl_lahir','a.kelas', 'a.jenis_kelamin', 'a.created_at'); //field yang diizin untuk pencarian 
		    $order = array('a.created_at' => 'asc'); // default order 
		    $table = 'data_users';

	        $this->_get_datatables_query($column_order, $column_search, $order, $table);
	        $query = $this->db->get();
	        return $query->num_rows();
	    }
	 
	    function count_all_users()
	    {
	        $this->db->from('data_users');
	        return $this->db->count_all_results();
	    }
	// Datatable users
	
	}
	
	/* End of file LaporanModel.php */
	/* Location: ./application/models/LaporanModel.php */
?>