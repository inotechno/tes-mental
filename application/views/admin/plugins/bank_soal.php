<script type="text/javascript">
	$(document).ready(function() {

		showBankSoal();
		function showBankSoal() {
			$.ajax({
				url: '<?= base_url("admin/MasterData/showBankSoal") ?>',
				type: 'GET',
				dataType: 'HTML',
				success:function (data) {
					$('#list-soal').html(data);
				}
			});
			
			return false;
		}

		$('#form-add-soal').submit(function() {
			var formData = new FormData();
                formData.append('soal', $('[name="soal"]').val()); 
                formData.append('opsi_a', $('[name="opsi_a"]').val()); 
                formData.append('opsi_b', $('[name="opsi_b"]').val()); 
                formData.append('opsi_c', $('[name="opsi_c"]').val()); 
                formData.append('nilai_a', $('[name="nilai_a"]').val()); 
                formData.append('nilai_b', $('[name="nilai_b"]').val()); 
                formData.append('nilai_c', $('[name="nilai_c"]').val()); 

			$.ajax({
				url: '<?= base_url("admin/MasterData/addBankSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:formData,
				cache:false,
                processData: false,
                contentType: false,
				success:function (response) {
					if (response.type == 'success') {
						$('#modal-add-soal').modal('hide');
					}
					
					$.notify({
	                    icon: 'ni ni-bell-55',
	                    message:response.message
	                },{
	                    type:response.type,
	                    placement: {
	                      from: "top",
	                      align: "right"
	                },
	                    animate: {
	                      enter: 'animated fadeInDown',
	                      exit: 'animated fadeOutUp'
	                 	}
	                });
                	$('#form-add-soal')[0].reset();

	                showBankSoal();
				}
			});
			
			return false;
		});

		$('#form-update-soal').submit(function() {
			var formData = new FormData();
                formData.append('id', $('[name="id_soal_update"]').val()); 
                formData.append('soal', $('[name="soal_update"]').val());  
                formData.append('opsi_a', $('[name="opsi_a_update"]').val()); 
                formData.append('opsi_b', $('[name="opsi_b_update"]').val()); 
                formData.append('opsi_c', $('[name="opsi_c_update"]').val()); 
                formData.append('nilai_a', $('[name="nilai_a_update"]').val()); 
                formData.append('nilai_b', $('[name="nilai_b_update"]').val()); 
                formData.append('nilai_c', $('[name="nilai_c_update"]').val()); 

			$.ajax({
				url: '<?= base_url("admin/MasterData/updateBankSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:formData,
				cache:false,
                processData: false,
                contentType: false,
				success:function (response) {
					if (response.type == 'success') {
						$('#modal-update-soal').modal('hide');
					}
					
					$.notify({
	                    icon: 'ni ni-bell-55',
	                    
	                    message:response.message
	                },{
	                    type:response.type,
	                    placement: {
	                      from: "top",
	                      align: "right"
	                },
	                    animate: {
	                      enter: 'animated fadeInDown',
	                      exit: 'animated fadeOutUp'
	                 	}
	                });
                	$('#form-update-soal')[0].reset();

	                showBankSoal();
				}
			});
			
			return false;
		});

		$('#btn-delete-soal').click(function() {
			var id = $('[name="id_soal_delete"]').val();
			$.ajax({
				url: '<?= base_url("admin/MasterData/deleteBankSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:{id:id},
				success:function (response) {
					if (response.type == 'success') {
						$('#modal-delete-soal').modal('hide');
					}
					
					$.notify({
	                    icon: 'ni ni-bell-55',
	                    
	                    message:response.message
	                },{
	                    type:response.type,
	                    placement: {
	                      from: "top",
	                      align: "right"
	                },
	                    animate: {
	                      enter: 'animated fadeInDown',
	                      exit: 'animated fadeOutUp'
	                 	}
	                });

					$('#soal-delete').html('');
					$('[name="id_soal_delete"]').val('');

	                showBankSoal();
				}
			});
			
			return false;
		});

		$('#list-soal').on('click', '.btn-update', function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?= base_url("admin/MasterData/getSoalById") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id:id},
				success:function (data) {
					$('[name="id_soal_update"]').val(id);
					$('[name="soal_update"]').val(data.soal);
					$('[name="opsi_a_update"]').val(data.opsi_a);
					$('[name="opsi_b_update"]').val(data.opsi_b);
					$('[name="opsi_c_update"]').val(data.opsi_c);
					$('[name="nilai_a_update"]').val(data.nilai_a);
					$('[name="nilai_b_update"]').val(data.nilai_b);
					$('[name="nilai_c_update"]').val(data.nilai_c);

					$('#modal-update-soal').modal('show');
				}
			});
		});

		$('#list-soal').on('click', '.btn-delete', function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?= base_url("admin/MasterData/getSoalById") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id:id},
				success:function (data) {
					$('#soal-delete').html(data.soal);
					$('[name="id_soal_delete"]').val(id);

					$('#modal-delete-soal').modal('show');
				}
			});
		});

	});
</script>

<script src="<?= site_url('assets/assets/js/argon.js?v=1.1.0') ?>"></script>

</body>
</html>