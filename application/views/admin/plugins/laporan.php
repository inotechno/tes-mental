
<script type="text/javascript">
	var table;
	$(document).ready(function() {
		
		 // $('#table-petugas').scrollbar();

		table = $('#table-laporan').DataTable({
			"processing": true, 
            "serverSide": true,
            "scrollX": true,
            "dom": '<"html5buttons">Bfrti',
            // "responsive": true,
            "lengthChange": false,
            "order": [],
            "autoWidth" : true,
            "buttons": [
		        'copy', 'excel', 'print', 'pdf'
		    ],
            "ajax": {
                "url": "<?= base_url('admin/Laporan/showPengguna')?>",
                "type": "POST"
            },
		});

		function reload_table() {
			table.ajax.reload();
		}
	});
</script>
<!-- Optional JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/datatables.min.js"></script>
<script src="<?= site_url('assets/assets/js/argon.js?v=1.1.0') ?>"></script>

</body>
</html>