
<div class="content-wrapper container">
	<div class="page-content">
		<!------- breadcrumb --------->
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
				</div>
				<div class="col-12 col-md-6 order-md-2 order-first">
					<nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a
									href="<?php echo site_url('backend/data_pasien'); ?>">Data Pasien</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!------- breadcrumb --------->

		<section id="input-validation">
			<h3><a href="<?php echo site_url('backend/data_pasien'); ?>"><i class="bi bi-chevron-left"></i><i
						class="bi bi-chevron-left"></i></a> Detail Kunjungan</h3>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-md-12">
							<!-- DETAIL PASIEN -->
							<table class="table table-borderless float-start w-50">
								<tr>
									<td class="w-25"><b>Nama Pasien</b></td>
									<td>:</td>
									<td><?php echo $nama_pasien; ?></td>
								</tr>
								<tr>
									<td class="w-25"><b>No. RM</b></td>
									<td>:</td>
									<td><?php echo $no_rm; ?></td>
								</tr>
								<tr>
									<td class="w-25"><b>NIK</b></td>
									<td>:</td>
									<td><?php echo $nik; ?></td>
								</tr>
							</table>
							<table class="table table-borderless float-start w-50">
								<tr>
									<td class="w-25"><b>Tgl Lahir</b></td>
									<td>:</td>
									<td><?php echo $tanggal_lahir; ?></td>
								</tr>
								<tr>
									<td class="w-25"><b>No. BPJS</b></td>
									<td>:</td>
									<td><?php echo $no_bpjs; ?></td>
								</tr>
								<tr>
									<td class="w-25"><b>Alamat</b></td>
									<td>:</td>
									<td><?php echo $alamat; ?></td>
								</tr>
							</table>
							<!-- DETAIL PASIEN -->
							
								


							<!------------------------------------------------------------------------------------->

							<hr>
							<!-- ISI RME -->
		                        <table id="mytable" class="table table-borderless">
								    <thead>
								        <tr>
								            <th class="col-2">Tanggal Kunjungan</th>
								            <th class="col-1">Poli</th>
								            <th class="col-3">Dokter</th>
								            <th class="col-2">Aksi</th>
								        </tr>
								    </thead>
								    <tbody>
								    </tbody>
								</table>

						</div>
					</div>
				</div>
			</div>
		</section>

		<button onclick="topFunction()" class="btn btn-success" id="myBtn" title="Go to top"><i
				class="bi bi-arrow-up-circle-fill"></i> Scroll to Top
		</button>
		<!------- FOOTER --------->
		<?php $this->load->view("backend/_partials/footer.php") ?>
		<!------- FOOTER --------->
		<!------- TOASTIFY JS --------->
		<?php $this->load->view("backend/_partials/toastify.php") ?>
		<!------- TOASTIFY JS --------->
		<script type="application/javascript">
			var table;
			
			var csfrData = {};
			csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
			$this->security->get_csrf_hash(); ?>';
			$.ajaxSetup({
				data: csfrData
			});

			// SCROLL TO TOP
			let mybutton = document.getElementById("myBtn");
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					mybutton.style.display = "block";
				} else {
					mybutton.style.display = "none";
				}
			}

			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}

			// SCROLL TO TOP   
		$(document).ready(function() {
			
		    var id_pasien="<?php echo $id; ?>";
		    table = $('#mytable').DataTable({
	            "processing": true,
	            "serverSide": true,
	            "searching": false,
	            "ajax": {
	                "url": "<?php echo site_url('backend/data_pasien/get_ajax_list_download'); ?>",
	                "type": "POST",
	                "data":{id_pasien:id_pasien},
	            },
	            "columnDefs": [
		            { 
		                "targets": [ 0,1,2,3 ], 
		                "orderable": false, 
		            },
		        ],
	            
	            
	        });

		$('#mytable').on('click','.details',function(){
	        var id = $(this).data('id');
	        var site_url = '<?php echo site_url();?>';
	        window.location.href = site_url+"backend/data_pasien/get_data_pasien_detail/"+id+"";
	    });
		   

		});	

		function reload_table()
		{
		    table.ajax.reload(null,false); //reload datatable ajax 
		}

		</script>

		</body>

		</html>
