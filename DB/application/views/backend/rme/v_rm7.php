<table class="table table-bordered border-dark">
	<tbody>
		<tr>
			<th>Tanggal</th>
			<th>Nama Pasien</th>
			<th>Umur</th>
			<th>Kelamin</th>
			<th>Ruangan</th>
			<th>Kelas</th>
			<th>No. RM</th>
		</tr>
	</tbody>
	<tbody>
		<tr>
			<td><input type="date" name="tanggal" class="form-control border-dark" value="<?= date('Y-m-d'); ?>"></td>
			<td><input type="text" name="nama_pasien" class="form-control border-dark" disabled></td>
			<td><input type="text" name="umur" value="<?= $umur; ?>" class="form-control border-dark" disabled /></td>
			<td><input type="text" name="jenkel" class="form-control border-dark" disabled /></td>
			<td><input type="text" name="nama_ruangan" class="form-control border-dark" disabled /></td>
			<td><input type="text" name="kelas" class="form-control border-dark" disabled /></td>
			<td><input type="text" name="no_rm" class="form-control border-dark" disabled /></td>
		</tr>
	</tbody>
</table>



<div class="row">
	<table class="table table-borderless border-dark">
		<tbody>
			<tr>
				<td>

					<div class="d-flex flex-column gap-4 mt-5">
						<h3 class="text-center">Konsultasi</h3>
						<div class="d-flex flex-row">
							<label class="col-2">Kepada Yth</label>
							<input type="text" class="form-control border-dark" name="kepada_yth">
						</div>
						<div class="d-flex flex-row">
							<label class="col-2">T.S Dr</label>
							<div class=" col-4 d-flex flex-column gap-4 align-items-start">
								<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
								<select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
							</div>
						</div>
						<div class="d-flex flex-row">
							<label class="col-2">Ahli</label>
							<input type="text" class="form-control border-dark" name="ahli">
						</div>
						<p>Dengan hormat,</p>
						<p>Mohon konsultasi penanganan lebih lanjut terhadap pasien tersebut diatas yang kamirawat dengan </p>
						<div class="d-flex flex-row">
							<label class="col-2">Diagnosa</label>
							<select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa" style="width: 100%;">
							</select>
						</div>
						<div class="d-flex flex-row">
							<label class="col-2">Terapi Sementara</label>
							<textarea class="form-control border-dark" name="terapi_sementara"></textarea>
						</div>
						<div class="d-flex flex-row">
							<label class="col-2">Pemeriksaan yang telah dilakukan</label>
							<textarea class="form-control border-dark" name="pemeriksaan_sementara"></textarea>
						</div>

						<!-- Footer Section -->
						<div class="mt-4 d-flex flex-column gap-3 align-items-end col-12">
							<div class="d-flex flex-row justify-content-center align-items-center gap-3">
								<div>Salam sejawat,</div>
							</div>
							<div class="d-flex flex-column align-items-end gap-3">
								<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum_2" />
								<select type="select" name="dokter_umum_2" id="dokter_umum_2" class="form-select"
									style="width: 100%;"></select>
							</div>
						</div>
					</div>

					<div class="col mt-5">
						<h3 class="text-center">Jawaban Konsultasi</h3>
						<div class="d-flex flex-row justify-content-between mb-5">
							<div class="d-flex flex-column gap-3">
								<p>Yth T.S</p>
								<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
									style="width: 250px" data-input-name="image_drawer_state_image_11" />
								<input type="hidden" id="image_drawer_state_image_11" name="image_drawer_state_image_11"
									value="" />

								<?= $nama_pasien; ?>
							</div>
							<div class="d-flex flex-row align-items-center gap-3 justify-content-center">
								<p>Tanggal</p>
								<input type="date" name="tanggal_jawaban" class="form-control border-dark" value="<?= date('Y-m-d'); ?>">
							</div>
						</div>
						<p>Dengan hormat, </p>
						<p>Mengenai pasien yang dikonsulkan pada pemeriksaan os ini didapati :</p>
						<textarea name="hasil_pemeriksaan" class="form-control border-dark" rows="10"></textarea>

						<div class="mt-4 d-flex flex-column gap-3">
							<label>Advis</label>
							<textarea name="advis" class="form-control border-dark" rows="3"></textarea>
						</div>

						<div class="row mb-3 mt-4">
							<label class="col-1">O.S**</label>
							<div class="col">
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="os" value="dikembalikan" id="dikembalikan">
									<label class="form-check-label" for="dikembalikan">Dikembalikan</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="os" id="os_pr"
										value="dirawat bersama diambil">
									<label class="form-check-label" for="os_pr">Dirawat bersama diambil</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="os" value="alih" id="alih">
									<label class="form-check-label" for="alih">Alih (Sementara / Selanjutnya) </label>
								</div>
							</div>
						</div>

						<!-- Footer Section -->
						<div class="mt-4 d-flex flex-column gap-3 align-items-end col-12">
							<div class="d-flex flex-row justify-content-center align-items-center gap-3">
								<div>Salam sejawat,</div>
							</div>
							<div class=" col-5 d-flex flex-column gap-4 align-items-end">
								<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum_3" />
								<select type="select" name="dokter_umum_3" id="dokter_umum_3" class="form-select"
									style="width: 100%;"></select>

							</div>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>


<!-- penambahan looping -->
<?php for ($i = 1; $i <= 2; $i++) : ?>
	<div class="row my-5">
		<h3 class="text-center my-5">LEMBAR KONSULTASI FOLLOW UP DOKTER SPECIALIS</h3>
		<table class="table table-bordered border-dark">
			<tbody>
				<tr>
					<th>Tanggal</th>
					<th>Nama Pasien</th>
					<th>Umur</th>
					<th>Kelamin</th>
					<th>Ruangan</th>
					<th>Kelas</th>
					<th>No. RM</th>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<td><input type="date" name="tanggal_tb<?= $i; ?>[]" class="form-control border-dark"></td>
					<td><input type="text" name="nama_pasien" class="form-control border-dark" disabled></td>
					<td><input type="text" name="umur" value="<?= $umur; ?>" class="form-control border-dark" disabled /></td>
					<td><input type="text" name="jenkel" class="form-control border-dark" disabled /></td>
					<td><input type="text" name="nama_ruangan" class="form-control border-dark" disabled /></td>
					<td><input type="text" name="kelas" class="form-control border-dark" disabled /></td>
					<td><input type="text" name="no_rm" class="form-control border-dark" disabled /></td>
				</tr>
			</tbody>
		</table>

	</div>


	<div class="row mt-5">
		<table class="table table-borderless border-dark">
			<tbody>
				<tr>
					<td>

						<div class="d-flex flex-column gap-4 mt-5">
							<h3 class="text-center">Konsultasi</h3>
							<div class="d-flex flex-row">
								<label class="col-2">Kepada Yth</label>
								<input type="text" class="form-control border-dark" name="kepada_yth_tb<?= $i; ?>[]">
							</div>
							<div class="d-flex flex-row">
								<label class="col-2">T.S Dr</label>
								<div class=" col-4 d-flex flex-column gap-4 align-items-start">
									<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum_tb<?= $i; ?>_1" />
									<select type="select" name="dokter_umum_tb<?= $i; ?>_1" id="dokter_umum_tb<?= $i; ?>_1" class="form-select" style="width: 100%;"></select>
								</div>
							</div>
							<div class="d-flex flex-row">
								<label class="col-2">Ahli</label>
								<input type="text" class="form-control border-dark" name="ahli_tb<?= $i; ?>[]">
							</div>
							<p>Dengan hormat,</p>
							<p>Mohon konsultasi penanganan lebih lanjut terhadap pasien tersebut diatas yang kamirawat dengan </p>
							<div class="d-flex flex-row">
								<label class="col-2">Diagnosa</label>
								<select type="select" name="diagnosa_tb<?= $i; ?>" id="diagnosa_tb<?= $i; ?>" class="form-select diagnosa" style="width: 100%;">
								</select>
							</div>
							<div class="d-flex flex-row">
								<label class="col-2">Terapi Sementara</label>
								<textarea class="form-control border-dark" name="terapi_sementara_tb<?= $i; ?>[]"></textarea>
							</div>
							<div class="d-flex flex-row">
								<label class="col-2">Pemeriksaan yang telah dilakukan</label>
								<textarea class="form-control border-dark" name="pemeriksaan_sementara_tb<?= $i; ?>[]"></textarea>
							</div>

							<!-- Footer Section -->
							<div class="mt-4 d-flex flex-column gap-3 align-items-end col-12">
								<div class="d-flex flex-row justify-content-center align-items-center gap-3">
									<div>Salam sejawat,</div>
								</div>
								<div class="d-flex flex-column align-items-end gap-3">
									<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum_tb<?= $i; ?>_2" />
									<select type="select" name="dokter_umum_tb<?= $i; ?>_2" id="dokter_umum_tb<?= $i; ?>_2" class="form-select"
										style="width: 100%;"></select>
								</div>
							</div>
						</div>

						<div class="col mt-5">
							<h3 class="text-center">Jawaban Konsultasi</h3>
							<div class="d-flex flex-row justify-content-between mb-5">
								<div class="d-flex flex-column gap-3">
									<p>Yth T.S</p>
									<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
										style="width: 250px" data-input-name="image_drawer_state_tb<?= $i; ?>" />
									<input type="hidden" id="image_drawer_state_tb<?= $i; ?>" name="image_drawer_state_tb<?= $i; ?>"
										value="" />

									<?= $nama_pasien; ?>
								</div>
								<div class="d-flex flex-row align-items-center gap-3 justify-content-center">
									<p>Tanggal</p>
									<input type="date" name="tanggal_jawaban_tb<?= $i; ?>[]" class="form-control border-dark" >
								</div>
							</div>
							<p>Dengan hormat, </p>
							<p>Mengenai pasien yang dikonsulkan pada pemeriksaan os ini didapati :</p>
							<textarea name="hasil_pemeriksaan_tb<?= $i; ?>[]" class="form-control border-dark" rows="10"></textarea>

							<div class="mt-4 d-flex flex-column gap-3">
								<label>Advis</label>
								<textarea name="advis_tb<?= $i; ?>[]" class="form-control border-dark" rows="3"></textarea>
							</div>

							<div class="row mb-3 mt-4">
								<label class="col-1">O.S**</label>
								<div class="col">
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" name="os_tb<?= $i; ?>" id="os_tb<?= $i; ?>">
										<label class="form-check-label" for="os_tb<?= $i; ?>">Dikembalikan</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" name="os_rawat_tb<?= $i; ?>" id="os_rawat_tb<?= $i; ?>">
										<label class="form-check-label" for="os_rawat_tb<?= $i; ?>">Dirawat bersama diambil</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="custom-checkbox-success" type="checkbox" name="alih_tb<?= $i; ?>" id="alih_tb<?= $i; ?>">
										<label class="form-check-label" for="alih_tb<?= $i; ?>">Alih (Sementara / Selanjutnya) </label>
									</div>
								</div>
							</div>

							<!-- Footer Section -->
							<div class="mt-4 d-flex flex-column gap-3 align-items-end col-12">
								<div class="d-flex flex-row justify-content-center align-items-center gap-3">
									<div>Salam sejawat,</div>
								</div>
								<div class=" col-5 d-flex flex-column gap-4 align-items-end">
									<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum_tb<?= $i; ?>_3" />
									<select type="select" name="dokter_umum_tb<?= $i; ?>_3" id="dokter_umum_tb<?= $i; ?>_3" class="form-select"
										style="width: 100%;"></select>

								</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php endfor; ?>




<script>
	let dataDokter = []
	const mode = "<?= $mode; ?>"

	$(document).ready(function() {
		let page = 1;
		listDokterUmumAPI()

		const globalData = <?= $global_data; ?>;
		const {
			id_dokter
		} = globalData;

		QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

		$('.diagnosa').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
				dataType: 'json',
				delay: 250, // Delay in ms while typing
				data: function(params) {
					console.log("params", params)
					return {
						q: params.term, // Search query
						limit: 100, // Number of items per page
						offset: (page - 1) * 100, // Calculate offset
					};
				},
				processResults: function(data) {
					const {
						items,
						more
					} = data.data
					console.log(items, more)
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
			// minimumInputLength: 0,
		});


		// Daftar ID untuk dokter umum
		const dokterUmumIds = ['dokter_umum', 'dokter_umum_2', 'dokter_umum_3'];

		// Event handler untuk dokter umum
		for (let i = 0; i < dokterUmumIds.length; i++) {
			const id = dokterUmumIds[i];
			$('#' + id).on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, 'qr_' + id);
			});
		}


		// Loop untuk TB1 dan TB2
		for (let tb = 1; tb <= 2; tb++) {
			// Loop untuk index 1 sampai 3
			for (let i = 1; i <= 3; i++) {
				const id = `dokter_umum_tb${tb}_${i}`;
				$('#' + id).on('select2:select', function(e) {
					const {
						id_original
					} = e.params.data;
					QRSignatureAPI(id_original, 'qr_' + id);
				});
			}
		}

	});

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	function cbCommon(data) {
		for (let i = 0; i <= 3; i++) {
			const id = i === 0 ? 'dokter_umum' : `dokter_umum_${i}`;
			const $el = $('#' + id);
			$el.prop('disabled', false);
			$el.select2('open');
			$el.select2('close');
		}

		if (mode === "lihat") {
			$('#dokter_umum').prop('disabled', true)
			$('#dokter_umum_2').prop('disabled', true)
			$('#dokter_umum_3').prop('disabled', true)
			$('#dokter_umum_tb1_1').prop('disabled', true)
			$('#dokter_umum_tb1_2').prop('disabled', true)
			$('#dokter_umum_tb1_3').prop('disabled', true)
			$('#dokter_umum_tb2_1').prop('disabled', true)
			$('#dokter_umum_tb2_2').prop('disabled', true)
			$('#dokter_umum_tb2_3').prop('disabled', true)
		}

		setTimeout(() => {
			dataDokter?.map(v => {
				// Bagian untuk dokter umum utama
				['dokter_umum', 'dokter_umum_2', 'dokter_umum_3'].forEach(function(id) {
					const selectedText = $('#' + id).select2('data')[0]?.text;
					if (v.text === selectedText) {
						QRSignatureAPI(v.id_original, 'qr_' + id);
					}
				});

				// Bagian untuk dokter umum TB (tb1 & tb2)
				for (let tb = 1; tb <= 2; tb++) {
					for (let i = 1; i <= 3; i++) {
						const id = `dokter_umum_tb${tb}_${i}`;
						const selectedText = $('#' + id).select2('data')[0]?.text;
						if (v.text === selectedText) {
							QRSignatureAPI(v.id_original, 'qr_' + id);
						}
					}
				}
			});
		}, 1000);


		populateFormFields(data);
	}



	function listDokterUmumAPI() {
		function initDokterSelect2(id) {
			$('#' + id).select2({
				ajax: {
					url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
					dataType: 'json',
					delay: 250,
					data: function(params) {
						return {
							q: params.term,
						};
					},
					processResults: function(data) {
						const {
							items,
							more
						} = data.data;
						dataDokter = items; // kalau mau tiap select beda data, ini harus diubah
						return {
							results: items,
							pagination: {
								more
							},
						};
					},
					cache: true,
				},
				placeholder: 'Search for items...',
			});
		}
		// Pemanggilan untuk dokter_umum
		['dokter_umum', 'dokter_umum_2', 'dokter_umum_3'].forEach(initDokterSelect2);

		// Perulangan untuk dokter_umum_tb1 dan dokter_umum_tb2
		for (let i = 1; i <= 2; i++) {
			for (let j = 1; j <= 3; j++) {
				initDokterSelect2(`dokter_umum_tb${i}_${j}`);
			}
		}




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