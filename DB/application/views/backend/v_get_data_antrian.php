<style type="text/css">
	.custom-icon:hover .bi {
		color: white !important;
	}


	.menurme {
		width: 600px;
	}

	@media (max-width: 760px) {
		.menurme {
			width: 480px;
		}
	}

	@media (max-width: 680px) {
		.menurme {
			width: 400px;
		}
	}

	@media (max-width: 420px) {
		.menurme {
			width: 200px;
		}
	}
</style>
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
									href="<?php echo site_url('backend/antrian'); ?>">Antrian</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!------- breadcrumb --------->

		<section id="input-validation">
			<h3><a href="<?php echo site_url('backend/antrian'); ?>"><i class="bi bi-chevron-left"></i><i
						class="bi bi-chevron-left"></i></a> <?php echo $title; ?></h3>
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
									<td class="w-25"><b>Penjamin</b></td>
									<td>:</td>
									<td><?php echo $penjamin_name; ?></td>
								</tr>
							</table>
							<table class="table table-borderless float-start w-50">
								<tr>
									<td class="w-25"><b>Tgl Kunjungan</b></td>
									<td>:</td>
									<td><?php echo $tgl_admit; ?></td>
								</tr>
								<tr>
									<td class="w-25"><b>Dokter</b></td>
									<td>:</td>
									<td><?php echo $nama_dokter; ?></td>
								</tr>
								<tr>
									<td class="w-25"><b>Poliklinik</b></td>
									<td>:</td>
									<td><?php echo $nama_poli; ?></td>
								</tr>
							</table>
							<!-- DETAIL PASIEN -->
							<div class="col-12 col-md-12">
								<!-- MENU RME -->

								<table id="mytablemenu" class="table table-borderless mb-0 text-sm">
									<thead>
									<tr>
										<th class="col-12"></th>
									</tr>
									</thead>
									<tbody class="list-group" id="myTab" role="tablist">

									</tbody>


								</table>


							</div>
							<!-- MENU RME -->


							<!------------------------------------------------------------------------------------->

							<!-- MENU RME -->
							<hr>
							<!-- ISI RME -->
							<div class="tab-content" id="myTabContent">
								<div class="fade" id="home2" role="tabpanel" aria-labelledby="home2">
									<h3 class="nametable"></h3>
									<div id="namabuton"></div>
									<br/><br/>

									<table id="tableBerkas"
										   class="table table-borderless mb-0 text-sm col-12 col-xl-12">
										<thead>
										<tr>
											<th class="col-2">Waktu Admit</th>
											<th class="col-2">Kode Berkas</th>
											<th class="col-2">Nama Berkas</th>
											<th class="col-1">Aksi</th>
										</tr>
										</thead>

									</table>
								</div>
								<input type="hidden" id="id_kunjungan" value="<?= $id_kunjungan; ?>">
							</div>
							<!-- ISI RME -->

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
			var tableBerkas;
			let listBerkas = [];
			var table2;
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

			$(document).ready(function () {
				//TABLE MENU
				table2 = $('#mytablemenu').DataTable({
					"processing": false,
					"serverSide": false,
					"lengthChange": false,
					"info": false,
					"order": [],
					"ajax": {
						"url": "<?php echo site_url('backend/antrian/get_ajax_list_menu') ?>",
						"type": "POST",
						"data": function (data) {
							data.id_kunjungan = $('#id_kunjungan').val();

						}
					},
					"columnDefs": [{
						"targets": [0],
						"orderable": false,
					},],
				});

				tableBerkas = $('#tableBerkas').DataTable({
					data: listBerkas,
					columns: [
						{
							data: 'waktu_admit'
						},
						{
							data: 'kode_berkas',
							searchable: false
						},
						{
							data: 'nama_berkas',
							searchable: false
						},
						{
							data: 'aksi',
							searchable: false
						}
					],
				})

			});

			function click_menu(nama_berkas) {
				const id_kunjungan = "<?=$id_kunjungan;?>"
				const id_pasien = "<?=$id_pasien;?>"

				$.ajax({
					url: `<?= site_url('backend/antrian/ajax_get_menu') ?>`,
					type: "GET",
					dataType: "JSON",
					data: {
						nama_berkas,
						id_kunjungan,
						id_pasien
					},
					success: function (
						{
							menu: {
								isi
							}, selected_data
						}) {
						listBerkas = []

						let canAdd = true
						if (selected_data) {
							canAdd = false
							const urlEdit = `<?= site_url('backend/antrian/edit'); ?>/${selected_data.id}`
							const urlView = `<?= site_url('backend/antrian/lihat'); ?>/${selected_data.id}`

							const deleteParam = {
								id: selected_data.id,
								nama_berkas
							}

							listBerkas.push({
								waktu_admit: "<?=$tgl_admit;?>",
								kode_berkas: nama_berkas,
								nama_berkas: isi,
								aksi: '<div class="d-flex flex-row gap-3">' +
									`<button class="btn btn-outline-primary custom-icon"><a href="${urlView}" class="text-primary custom-icon"><span class="bi bi-eye"></span></a></button>` +
									`<button class="btn btn-outline-warning custom-icon"><a href="${urlEdit}" class="text-warning custom-icon"><span class="bi bi-pen"></span></a></button>` +
									`<button onclick='deleteAPI(${JSON.stringify(deleteParam)})' class="btn btn-outline-danger"><span class="bi bi-trash"></span></button></div>`,
							})
						}

						console.log(listBerkas, "LIST BERKAS")
						onAPISuccess(isi, nama_berkas, canAdd)
					},
					error: function (jqXHR, textStatus, errorThrown) {
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'Data Form belum di buat!',
							confirmButtonText: 'OK'
						});

					}
				});
			}

			function reloadTableBerkas() {
				tableBerkas.clear().rows.add(listBerkas).draw();
			}

			function reloadTable2() {
				table2.ajax.reload(null, false);
			}


			function deleteAPI(data) {
				const {
					id,
					nama_berkas
				} = data
				if (!id) {
					console.log("id empty")
					return
				}
				$.ajax({
					url: `<?= site_url('backend/antrian/delete') ?>`,
					type: "POST",
					dataType: "JSON",
					data: {
						id
					},
					success: () => {
						reloadTable2()
						click_menu(nama_berkas)
					},
					error: (err) => {
						const {
							statusText,
							status
						} = err
						console.log(`${statusText} ${status}`)
					}
				});
			}

			function onAPISuccess(isi, link, canAdd) {
				reloadTableBerkas()

				const id_kunjungan = '<?= $id_kunjungan; ?>';

				$('.nametable').html(isi);

				if (canAdd) {
					$("#namabuton").show()
					$("#namabuton").html('<a class="btn icon btn-sm btn-success float-end" id="add-form" href="javascript:void()" value1=' + link + ' value2=' + id_kunjungan + '><i class="bi bi-plus"></i></a>');
					console.log("NO DATA")
					return
				}
				$("#namabuton").hide()
			}

			$(document).ready(function () {
				$(document).on("click", "#add-form", function (e) {
					e.preventDefault();

					var link = $(this).attr("value1");
					var id_kunjungan = $(this).attr("value2");
					var site_url = '<?php echo site_url(); ?>';
					window.location.href = site_url + "backend/antrian/tambah/" + link + "/" + id_kunjungan + "";

				});
			});

			$(document).on("click", "#del", function (e) {
				e.preventDefault();
				var id_berkas = $(this).attr("value");
				Swal.fire({
					title: "Apakah kamu yakin ingin menghapus Berkasi ini?",
					text: "Pastikan data berkas yang ingin di hapus sudah benar!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							type: "post",
							url: "<?php echo site_url('backend/antrian/delete') ?>",
							data: {
								id_berkas: id_berkas,
							},
							dataType: "json",
							success: function (response) {
								if (response.res == "success") {
									Swal.fire(
										"Deleted!",
										"Data berhasil dihapus.",
										"success"
									);
								}
							},
						});
					}
				});
			});
		</script>

		</body>

		</html>
