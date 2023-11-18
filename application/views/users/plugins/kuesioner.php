<script type="text/javascript">
	$(document).ready(function() {
		$('#hasil-akhir').hide();
		var i = 0;
		allSoal(i);

		function allSoal(i) {
			$('#id_soal').val('');
			$('[name="jawaban"]').prop('checked', false);

			$.ajax({
				url: '<?= base_url("users/Kuesioner/getSoal") ?>',
				type: 'GET',
				dataType: 'JSON',
				success:function (data) {

					var akhir = data.length - 1;
					$('#soal-saat-ini').html(parseInt(i)+1);
					$('#total-soal').html(akhir + 1);

					$('#soal').html(data[i].soal);

					$('#opsi_a').html(data[i].opsi_a);
					$('#opsi_b').html(data[i].opsi_b);
					$('#opsi_c').html(data[i].opsi_c);

					$('#id_soal').val(data[i].id_soal);
					$('#nilai_a').val(data[i].nilai_a);
					$('#nilai_b').val(data[i].nilai_b);
					$('#nilai_c').val(data[i].nilai_c);

					$('#next-soal').attr('data-next', parseInt(i)+1);
					$('#prev-soal').attr('data-prev', parseInt(i)-1);
					// $('#finish-soal').hide();
					
					if (i == 0) {
						$('#next-soal').show();
						$('#prev-soal').hide();
						$('#finish-soal').hide();
					}else{
						$('#next-soal').show();
						$('#prev-soal').show();
						$('#finish-soal').hide();
					}

					if (i == akhir) {
						$('#prev-soal').show();
						$('#finish-soal').show();
						$('#next-soal').hide();
					}

					showJawaban();
				}
			});

			return true;
		}

		$('#next-soal').click(function() {
			var i = $(this).attr('data-next');
			simpanJawaban();
			allSoal(i);
		});

		$('#prev-soal').click(function() {
			var i = $(this).attr('data-prev');
			allSoal(i);
		});
		
		$('#finish-soal').click(function() {
			simpanJawaban();
			finish();
		});

		function simpanJawaban() {
			var id_soal = $('#id_soal').val();
			var jawaban = $('[name="jawaban"]:checked').val();

			$.ajax({
				url: '<?= base_url("users/Kuesioner/simpanJawaban") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id_soal:id_soal, jawaban:jawaban},
				success:function (response) {
					if (response.type == 'success') {
						return true;
					}
				}
			});
		}

		function showJawaban() {
			var id_soal = $('#id_soal').val();
			$.ajax({
				url: '<?= base_url("users/Kuesioner/getJawaban") ?>',
				type: 'GET',
				dataType: 'JSON',
				data:{id_soal:id_soal},
				success:function (data) {
					$('input[name=jawaban][value='+data.jawaban+']').prop('checked', true);
				}
			});
		}

		function finish() {
			$.ajax({
				url: '<?= base_url("users/Kuesioner/hasilAkhir") ?>',
				type: 'POST',
				dataType: 'JSON',
				success:function (data) {
					$('#b_nama_lengkap').html(data.nama_lengkap);
					$('#b_kelas').html(data.kelas);
					$('#b_tgl_lahir').html(data.tgl_lahir);
					$('#b_jenis_kelamin').html(data.jenis_kelamin);
					$('#hasil-akhir').show();
					$('#kuesioner-card').hide();
					$('#skor-akhir').html(data.skorTotal);
					$('#status-skor').html(data.status);
				}
			});
			
			return false;
		}

	});
</script>

</body>

</html>