<div class="container">
	<!-- Patient Information Table -->
	<table class="table table-bordered border-dark">
		<tr>
			<th class="col-3">Nama Pasien</th>
			<td class="col-8"><input type="text" name="nama_pasien" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<th>NIK</th>
			<td><input type="text" name="nik" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Pendidikan</th>
			<td><input type="text" name="pendidikan_terakhir" class="form-control border-dark" /></td>
		</tr>
		<tr>
			<th>Pekerjaan</th>
			<td><input type="text" name="nama_pekerjaan" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>No. RM</th>
			<td><input type="text" name="no_rm" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Tgl Lahir / Umur</th>

			<td>
				<div class="row">
					<div class="col-3">
						<input type="text" name="tanggal_lahir" class="form-control border-dark">
					</div>
					<div class="col-5">
						<input type="text" name="umur" class="form-control border-dark">
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td><input type="text" name="jenkel" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Tgl Masuk</th>
			<td><input type="text" name="tgl_admit" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Nama DPJP</th>
			<td><input type="text" name="nama_dokter" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Nilai Pribadi</th>
			<td><input type="text" name="nilai_pribadi" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">(Tempelkan stiker identitas pasien jika tersedia)</td>
		</tr>
	</table>

	<!-- Diagnosis and Therapy Request Table -->

	<table class="table table-bordered mt-4 w-100 border-dark">
		<tr>
			<th class="col-3">Diagnosa</th>
			<td class="col-9">
				<select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa" style="width: 100%;">
				</select>
			</td>
		</tr>
		<tr>
			<th>Permintaan Terapi</th>
			<td><input type="text" name="permintaan_terapi" class="form-control border-dark"></td>
		</tr>
	</table>

	<div class="row">
		<div class="col-12">
			<div class="table-responsive">

				<input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
				<table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
					<thead>
						<tr>
							<th class="col-1 text-center" rowspan="2">No</th>
							<th class="col-3 text-center" rowspan="2">Program</th>
							<th class="col-2 text-center" rowspan="2">Tanggal</th>
							<th class="col-2 text-center" colspan="3">Tanda Tangan</th>
							<!-- <th class="col-1 text-center">Action</th> -->
						</tr>
						<tr>
							<th class="col-2 text-center">Pasien</th>
							<th class="col-2 text-center">Dokter</th>
							<th class="col-2 text-center">Terapi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$programCount = 30;
						$base_url = base_url('assets2/rme/img/testttd.png');
						?>

						<?php
						for ($i = 1; $i <= $programCount; $i++) {
						?>
							<tr class="text-center">
								<td><?php echo $i; ?></td>
								<td><textarea rows="4" name="program_<?= $i; ?>[]" class="form-control border-dark" style="width: 300px;"></textarea></td>
								<td><input type="date" name="tanggal_<?= $i; ?>[]" class="form-control border-dark" style="width:300px;"></td>
								<td>
									<!-- harusnya tdd -->
									<input type="text" name="nama_pasien" class="form-control border-dark my-2" style="width: 300px;">
								</td>
								<td>
									<div style="width: 300px;">
										<img class="img-responsive center-block mt-2" style="width: 40%;" id="qr_dokter_umum<?= $i; ?>" />
										<select type="select" name="dokter_umum<?= $i; ?>" id="dokter_umum<?= $i; ?>" class="form-select dokter_umum" style="width: 100%;"></select>
									</div>
								</td>
								<td>
									<img class="marker-image" id="example-image" src="<?= $base_url ?>" style="width: 350px; height:200px" data-input-name="image_drawer_state_image_<?= $i ?>" />
									<input type="hidden" id="image_drawer_state_image_<?= $i ?>" name="image_drawer_state_image_<?= $i ?>" value="" />
								</td>
							</tr>
						<?php
						}
						?>
				</table>




			</div>
		</div>

	</div>





	<script>
		// ready
		// function copyTable(tableId) {
		// 	let table = document.getElementById(tableId);
		// 	let newTable = table.cloneNode(true);

		// 	let countInput = document.querySelector("input[name='" + tableId + "-count']");
		// 	let count = +(countInput.value ?? "1") + 1;

		// 	countInput.value = count;

		// 	newTable.id = tableId + "-copy-" + count;

		// 	// reset all input in newTable
		// 	let inputs = newTable.querySelectorAll("input");
		// 	inputs.forEach(input => {
		// 		input.value = "";
		// 	})
		// 	table.parentNode.insertBefore(newTable, table.nextSibling);
		// }

		// function deleteTable(tableId) {
		// 	let countInput = document.getElementById(tableId + "-count");
		// 	if (countInput) {
		// 		let count = +(countInput.value);
		// 		if (count > 0) {
		// 			let lastCopiedTable = document.getElementById(tableId + "-copy-" + count);
		// 			console.log(lastCopiedTable);
		// 			if (lastCopiedTable) {
		// 				lastCopiedTable.remove();
		// 				countInput.value = count - 1;
		// 			}
		// 		}
		// 	}
		// }



		let dataDokter = []
		const mode = "<?= $mode; ?>"

		$(document).ready(function() {
			let page = 1;
			$('#diagnosa').select2({
				ajax: {
					url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
					dataType: 'json',
					delay: 250, // Delay in ms while typing
					data: function(params) {
						// Send search term, limit, and offset
						return {
							q: params.term, // Search query
							limit: 100, // Number of items per page
							offset: (page - 1) * 100, // Calculate offset based on the page
						};
					},
					processResults: function(data) {
						console.log(data)
						const {
							items,
							more
						} = data.data;

						return {
							results: items, // Data from PHP
							pagination: {
								more: more, // Check if more data is available
							},
						};
					},
					cache: true,
				},
				placeholder: 'Search for items...',
			});

			// Handle scroll to load more data
			$('#diagnosa').on('select2:open', function() {
				$('.select2-results__options').on('scroll', function() {
					const $this = $(this);
					if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
						if (page > 0) { // Check if more pages are available
							page++; // Increment page
							$('#diagnosa').select2('open'); // Keep dropdown open
							$('#diagnosa').select2('data', null); // Clear current data
						}
					}
				});
			});

			const globalData = <?= $global_data; ?>;
			const {
				id_dokter,
				id_perawat,
				nama_perawat
			} = globalData;

			listDokterUmumAPI()


			// mulai aktif jumlah dokter
			const jumlahDokter = 30;

			for (let i = 1; i <= jumlahDokter; i++) {
				$(`#dokter_umum${i}`).on('select2:select', function(e) {
					const {
						id_original
					} = e.params.data;
					QRSignatureAPI(id_original, `qr_dokter_umum${i}`);
				});
			}

			$('#dokter_umum').on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, 'qr_dokter_umum')
			});

		});


		$(document).delay(1000).queue(function() {
			callMarkerManager();
		});

		function cbCommon(data) {
			// on init generate table based on table-{name}-count
			let resikoCountInput = document.getElementById("table-resiko-count");
			if (resikoCountInput) {
				let count = +(resikoCountInput.value ?? "0");
				if (count > 0) {
					for (let i = 1; i < count; i++) {
						let tableId = 'table-resiko';
						let table = document.getElementById(tableId);
						let newTable = table.cloneNode(true);

						newTable.id = tableId + "-copy-" + `${i + 1}`;

						table.parentNode.insertBefore(newTable, table.nextSibling);
					}
				}
			}

			let pengkajianCountInput = document.getElementById("table-pengkajian-count");
			if (pengkajianCountInput) {
				let count = +(pengkajianCountInput.value ?? "0");
				if (count > 0) {
					for (let i = 1; i < count; i++) {

						let tableId = 'table-pengkajian';
						let table = document.getElementById(tableId);
						let newTable = table.cloneNode(true);

						newTable.id = tableId + "-copy-" + `${i + 1}`;

						table.parentNode.insertBefore(newTable, table.nextSibling);
					}
				}
			}


			populateFormFields(data);


			// dokter img
			const jumlahDokter = 30;

			for (let i = 1; i <= jumlahDokter; i++) {
				const dokterSelect = `#dokter_umum${i}`;
				const qrId = `qr_dokter_umum${i}`;

				$(dokterSelect).prop('disabled', false).select2('open').select2('close');

				if (mode === "lihat") {
					$(dokterSelect).prop('disabled', true);
				}

				setTimeout(() => {
					console.log(dataDokter);
					dataDokter?.forEach(v => {
						if (v.text === $(dokterSelect).select2('data')[0]?.text) {
							QRSignatureAPI(v.id_original, qrId);
						}
					});
				}, 500);
			}



			$('#dokter_umum').prop('disabled', false)
			$('#dokter_umum').select2('open')
			$('#dokter_umum').select2('close')
			if (mode === "lihat")
				$('#dokter_umum').prop('disabled', true)

			setTimeout(() => {
				console.log(dataDokter)
				dataDokter?.map(v => {
					if (v.text === $('#dokter_umum').select2('data')[0].text) {
						QRSignatureAPI(v.id_original, 'qr_dokter_umum')
					}
				})
			}, 1000)
		}


		function listDokterUmumAPI() {
			$('.dokter_umum').select2({
				ajax: {
					url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
					dataType: 'json',
					delay: 250,
					data: function(params) {
						return {
							q: params.term,
						}
					},
					processResults: function(data) {
						const {
							items,
							more
						} = data.data;
						dataDokter = items
						return {
							results: items, // Data from PHP
							pagination: {
								more: more, // Check if more data is available
							},
						};
					},
					cache: true,

				},
				placeholder: 'Search for items...',
			})
		}
	</script>