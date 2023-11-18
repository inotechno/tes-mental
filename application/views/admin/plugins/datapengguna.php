<script type="text/javascript">
	$(document).ready(function() {

		showPengguna();
		function showPengguna() {
			$.ajax({
				url: '<?= base_url("admin/DataPengguna/showPengguna") ?>',
				type: 'GET',
				dataType: 'HTML',
				success:function (data) {
					$('#list-pengguna').html(data);
				}
			});
			
			return false;
		}

		function showSkor(id) {
			$.ajax({
				url: '<?= base_url("admin/DataPengguna/showSkor") ?>',
				type: 'POST',
				dataType: 'JSON',
				data:{id_user:id},
				success:function (data) {
					$('#skor').html(data.skorTotal);
					$('#status').html(data.status);
				}
			});
		}

		$('#list-pengguna').on('click', '.btn-view-jawaban', function() {
			var id = $(this).attr('data-id');
			var nama = $(this).attr('data-nama');
			var kelas = $(this).attr('data-kelas');
			var tgl_lahir = $(this).attr('data-tgl_lahir');
			var jenis_kelamin = $(this).attr('data-jenis_kelamin');

			$.ajax({
				url: '<?= base_url("admin/DataPengguna/showJawabanById") ?>',
				type: 'POST',
				dataType: 'HTML',
				data:{id_user:id},
				success:function (data) {
					$('#nama_lengkap').html(nama);
					$('#kelas').html(kelas);
					$('#tgl_lahir').html(tgl_lahir);
					$('#jenis_kelamin').html(jenis_kelamin);
					showSkor(id);
					$('#list-jawaban-user').html(data);

					$('#modal-jawaban').modal('show');
				}
			});
		});

	});
</script>

<script src="<?= site_url('assets/assets/js/argon.js?v=1.1.0') ?>"></script>

</body>
</html>