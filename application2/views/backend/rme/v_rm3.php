<!-- Poliklinik / IGD -->
<div class="row mb-3">
	<label for="poliklinik_igd" class="col-sm-3 col-form-label">Dari Poliklinik / IGD :</label>
	<div class="col-sm-9">
		<input type="text" class="form-control border-dark" id="poliklinik_igd" name="nama_poli_rawat" value="<?= $nama_poli; ?>">
	</div>
</div>


<div class="row d-flex flex-column gap-3 my-4">
	<div>Kepada Yth,</div>
	<div>Petugas Pendaftaran Pasien Rawat Inap</div>
	<div>Di tempat,</div>
</div>

<!-- Kelas / Ruangan -->
<div class="row mb-3">
	<label for="kelas_ruangan" class="col-sm-3 col-form-label">Kelas / Ruangan :</label>
	<div class="col-sm-9">
		<input type="text" class="form-control border-dark" id="kelas_ruangan" name="kelas_ruangan"
			value="<?= $kelas . ' / ' . $nama_ruangan; ?>" disabled>
	</div>
</div>

<!-- Nama -->
<div class="row mb-3">
	<label for="nama" class="col-sm-3 col-form-label">Nama :</label>
	<div class="col-sm-9">
		<input type="text" class="form-control border-dark" id="nama_pasien" name="nama_pasien" value="<?= $nama_pasien; ?>"
			disabled>
	</div>
</div>

<!-- Tanggal Lahir -->
<div class="row mb-3">
	<label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
	<div class="col-sm-9">
		<input type="date" class="form-control border-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $tgl_lahir; ?>"
			disabled>
	</div>
</div>

<!-- Jenis Kelamin -->
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">Jenis Kelamin :</label>
	<div class="col-sm-9"><input type="text" class="form-control border-dark" name="jenkel" value="<?= $jenkel; ?>"
			disabled></div>
</div>

<!-- No. RM -->
<div class="row mb-3">
	<label for="no_rm" class="col-sm-3 col-form-label">No. RM :</label>
	<div class="col-sm-9">
		<input type="text" class="form-control border-dark" id="no_rm" name="no_rm" value="<?= $no_rm; ?>" disabled>
	</div>
</div>

<!-- Pekerjaan -->
<div class="row mb-3">
	<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan :</label>
	<div class="col-sm-9">
		<input type="text" class="form-control border-dark" id="pekerjaan" name="pekerjaan" value="<?= $nama_pekerjaan; ?>"
			disabled>
	</div>
</div>

<!-- Diagnosa -->
<div class="row mb-3">
	<label for="diagnosa" class="col-sm-3 col-form-label">Diagnosa :</label>
	<div class="col-sm-9">
		<select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa border-dark" style="width:600px;">
		</select>
	</div>
</div>

<!-- Alamat -->
<div class="row mb-3">
	<label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
	<div class="col-sm-9">
		<input type="text" class="form-control border-dark" id="alamat" name="alamat" value="<?= $alamatt; ?>" disabled>
	</div>
</div>

<!-- Identifikasi Pasien Masuk -->
<label class="form-label mt-4">Identifikasi Pasien Masuk :</label>
<div class="mb-3 d-flex flex-row gap-3">
	<div class="form-check">
		<input class="custom-checkbox-success" type="radio" name="identifikasi_pasien_masuk" id="preventif"
			value="Preventif">
		<label class="form-check-label" for="preventif">Preventif</label>
	</div>
	<div class="form-check">
		<input class="custom-checkbox-success" type="radio" name="identifikasi_pasien_masuk" id="kuratif"
			value="Kuratif">
		<label class="form-check-label" for="kuratif">Kuratif</label>
	</div>
	<div class="form-check">
		<input class="custom-checkbox-success" type="radio" name="identifikasi_pasien_masuk" id="paliatif"
			value="Paliatif">
		<label class="form-check-label" for="paliatif">Paliatif</label>
	</div>
	<div class="form-check">
		<input class="custom-checkbox-success" type="radio" name="identifikasi_pasien_masuk" id="rehabilitatif"
			value="Rehabilitatif">
		<label class="form-check-label" for="rehabilitatif">Rehabilitatif</label>
	</div>
</div>

<!-- Footer Section -->
<div class="mt-4 d-flex flex-column gap-3 align-items-end col-12 gap-2">
	<div class="d-flex flex-row justify-content-center ">
		<div class="d-flex align-items-center justify-content-end gap-2">
			<div class="flex-shrink-0"><?= $city_sign; ?></div>, <input type="date" value="<?= date('Y-m-d'); ?>" name="tanggal_city" class="form-control border-dark">
		</div>
	</div>
</div>
<div class="text-end">Dokter yang memeriksa</div>
<div class="d-flex flex-column align-items-end justify-content-end">
	<img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
	<select type="select" name="dokter_umum" id="dokter_umum" class="form-select w-25"></select>
</div>
</div>

<script>
	let dataDokter = []
	const mode = "<?= $mode; ?>"
	$(document).ready(function() {
		let page = 1;
		listDokterUmumAPI()

		// Initialize Select2
		$('#diagnosa').select2({
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

		$('#diagnosa').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page++; // Increment page
					$('#diagnosa').select2('data', null); // Trigger new data fetch
				}
			});
		});


		const globalData = <?= $global_data; ?>;
		const {
			id_dokter
		} = globalData;

		QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});
	});

	function cbCommon(data) {
		populateFormFields(data);


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
		$('#dokter_umum').select2({
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