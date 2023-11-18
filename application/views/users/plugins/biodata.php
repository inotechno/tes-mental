<script type="text/javascript">
	$(document).ready(function() {
		$('#form-users').submit(function() {
			if (validasi_age() > 20) {
				$.notify({
                    icon: 'ni ni-bell-55',
                    message:'Maksimal umur 20 tahun !!!'
                },{
                    type:'danger',
                    placement: {
                      from: "top",
                      align: "right"
                },
                    animate: {
                      enter: 'animated fadeInDown',
                      exit: 'animated fadeOutUp'
                 	}
                });

                return false;
			}else if(validasi_age() < 11){
				$.notify({
                icon: 'ni ni-bell-55',
                message:'Minimal umur 11 tahun !!!'
            },{
                type:'danger',
                placement: {
                  from: "top",
                  align: "right"
            },
                animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
             	}
            });

            return false;
				}else{
				var data = $(this).serialize();
				$.ajax({
					url: '<?= base_url("users/Biodata/addUsers") ?>',
					type: 'POST',
					dataType: 'JSON',
					data:data,
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
	                	$('#form-users')[0].reset();
	                    
	                    window.location.href = '<?= base_url("users/kuesioner") ?>';
					}
				});

			}
			
			return false;
		});

		function validasi_age() {
			var today = new Date();
			var birthday = new Date($('[name="tgl_lahir"]').val());
			var year = 0;
			if (today.getMonth() < birthday.getMonth()) {
				year = 1;
			} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
				year = 1;
			}
			var age = today.getFullYear() - birthday.getFullYear() - year;
	 
			if(age < 0){
				age = 0;
			}

			return age;
		}
	});
</script>

</body>

</html>