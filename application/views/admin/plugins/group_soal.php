<script type="text/javascript">
	$(document).ready(function() {
		
		showGroupSoal();
		function showGroupSoal() {
			$.ajax({
				url: '<?= base_url("admin/MasterData/showGroupSoal") ?>',
				type: 'GET',
				dataType: 'HTML',
				success:function (data) {
					$('#list-group-soal').html(data);
				}
			});
			
			return false;
		}

		function showSoalNoGroup() {
			$.ajax({
				url: '<?= base_url("admin/MasterData/showSoalNoGroup") ?>',
				type: 'GET',
				dataType: 'HTML',
				success:function (data) {
					$('#list-soal').html(data);
				}
			});
			
			return false;
		}

		function showSoalGroup(id) {
			$.ajax({
				url: '<?= base_url("admin/MasterData/showSoalGroup") ?>',
				type: 'GET',
				dataType: 'HTML',
				data:{id:id},
				success:function (data) {
					$('#list-soal-group').html(data);
				}
			});
			
			return false;
		}

		$('#form-add-group-soal').submit(function() {
			var data = $(this).serialize();

			$.ajax({
				url: '<?= base_url("admin/MasterData/addGroupSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:data,
				success:function (response) {
					if (response.type == 'success') {
                		$('#form-add-group-soal')[0].reset();
						$('#modal-add-group-soal').modal('hide');
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

	                showGroupSoal();
				}
			});
			
			return false;
		});

		$('#form-update-group-soal').submit(function() {
			var data = $(this).serialize();
			
			$.ajax({
				url: '<?= base_url("admin/MasterData/updateGroupSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:data,
				success:function (response) {
					if (response.type == 'success') {
                		$('#form-update-group-soal')[0].reset();
						$('#modal-update-group-soal').modal('hide');
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

	                showGroupSoal();
				}
			});
			
			return false;
		});

		$('#btn-delete-group-soal').click(function() {
			var id = $('[name="id_group_delete"]').val();
			$.ajax({
				url: '<?= base_url("admin/MasterData/deleteGroupSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:{id:id},
				success:function (response) {
					if (response.type == 'success') {
						$('#modal-delete-group-soal').modal('hide');
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

					$('#group-soal-delete').html('');
					$('[name="id_group_delete"]').val('');

	                showGroupSoal();
				}
			});
			
			return false;
		});

		$('#list-group-soal').on('click', '.btn-update', function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?= base_url("admin/MasterData/getGroupSoalById") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id:id},
				success:function (data) {
					$('[name="id_group_update"]').val(id);
					$('[name="nama_group_update"]').val(data.nama_group);
					$('[name="s_normal_update"]').val(data.s_normal);
					$('[name="s_perbatasan_update"]').val(data.s_perbatasan);
					$('[name="s_abnormal_update"]').val(data.s_abnormal);

					$('#modal-update-group-soal').modal('show');
				}
			});
		});

		$('#list-group-soal').on('click', '.btn-delete', function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?= base_url("admin/MasterData/getGroupSoalById") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id:id},
				success:function (data) {
					$('#group-soal-delete').html(data.nama_group);
					$('[name="id_group_delete"]').val(id);

					$('#modal-delete-group-soal').modal('show');
				}
			});
		});

		$('#list-group-soal').on('click', '.btn-view-soal', function() {
			var id = $(this).attr('data-id');
			$.ajax({
				url: '<?= base_url("admin/MasterData/getGroupSoalById") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id:id},
				success:function (data) {
					$('#id_group').val(data.id_group);
					$('#list_nama_group').html(data.nama_group);
					$('#list_s_normal').html(data.s_normal);
					$('#list_s_perbatasan').html(data.s_perbatasan);
					$('#list_s_abnormal').html(data.s_abnormal);

					$('#modal-group-list-soal').modal('show');
					showSoalNoGroup();
					showSoalGroup(id);
				}
			});
		});

		$('#list-soal').on('click', 'tr', function() {
			var id_soal = $(this).attr('data-id');
			var id_group = $('#id_group').val();
			$.ajax({
				url: '<?= base_url("admin/MasterData/sendSoalToGroup") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:{id_soal:id_soal, id_group:id_group},
				success:function (response) {
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

					showSoalNoGroup(id_soal);
					showSoalGroup(id_group);
				}
			});
		});

		$('#list-soal-group').on('click', 'tr', function() {
			var id_soal = $(this).attr('data-id');
			var id_group = $('#id_group').val();
			
			$.ajax({
				url: '<?= base_url("admin/MasterData/deleteGroupInSoal") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:{id_soal:id_soal},
				success:function (response) {
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

					showSoalNoGroup(id_soal);
					showSoalGroup(id_group);
				}
			});
		});
	});
</script>
<script src="<?= site_url('assets/assets/vendor/quill/dist/quill.min.js') ?>"></script>
<script src="<?= site_url('assets/assets/js/argon.js?v=1.1.0') ?>"></script>

</body>
</html>