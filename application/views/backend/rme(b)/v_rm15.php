<div class="container-fluid">
	<table class="table table-bordered border-dark">
		<tr>
			<td>Nama</td>
			<td><input type="text" class="form-control border-dark" name="nama_pasien"></td>
			<td>No. RM</td>
			<td><input type="text" class="form-control border-dark" name="no_rm"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" class="form-control border-dark" name="jenkel"></td>
			<td>Tgl Masuk</td>
			<td><input type="text" class="form-control border-dark" name="tgl_admit"></td>
		</tr>
		<tr>
			<td>Tgl Lahir</td>
			<td colspan="3"><input type="date" class="form-control border-dark" name="tanggal_lahir"></td>

		</tr>
		<tr>
			<td>Alamat</td>
			<td class="col-4"><textarea class="form-control border-dark" name="alamat"></textarea></td>
			<td>Tgl Keluar</td>
			<td><input type="datetime-local" class="form-control border-dark" name="tanggal_keluar" value="<?= date('Y-m-d H:i'); ?>"></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td colspan="3"><input type="text" class="form-control border-dark" name="nama_agama"></td>

		</tr>
		<tr>
			<td>Suku / Bangsa</td>
			<td><input type="text" class="form-control border-dark" name="nama_suku"></td>
			<td>Kelas / Ruang</td>
			<td><input type="text" class="form-control border-dark" name="kelas_ruang" value="<?= $kelas . ' / ' . $nama_ruangan; ?>" disabled></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td><input type="text" class="form-control border-dark" name="pendidikan_terakhir"></td>
			<td>Cara Masuk</td>
			<td>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="cara_masuk" value="datang Sendiri" id="datang_sendiri">
					<label for="datang_sendiri">Datang Sendiri</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="cara_masuk" value="Puskesmas" id="puskesmas">
					<label for="puskesmas">Puskesmas</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="cara_masuk" value="Dokter" id="dokter">
					<label for="dokter">Dokter</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="cara_masuk" value="Rumah Sakit" id="rumah_sakit">
					<label for="rumah_sakit">Rumah Sakit</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td colspan="3">
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="status" id="kawin" value="kawin">
					<label for="kawin">Kawin</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="status" id="belum_kawin" value="belum_kawin">
					<label for="belum_kawin"> Belum Kawin</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="status" id="janda" value="janda">
					<label for="janda"> Janda</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="status" id="duda" value="duda">
					<label for="duda"> Duda</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Penanggung Jawab Pasien</td>
			<td colspan="3">
				<div class="form-check form-check-inline">
					<input type="checkbox" class="custom-checkbox-success"> Suami
				</div>
				<div class="form-check form-check-inline">
					<input type="checkbox" class="custom-checkbox-success"> Istri
				</div>
				<div class="form-check form-check-inline">
					<input type="checkbox" class="custom-checkbox-success"> Ayah
				</div>
				<div class="form-check form-check-inline">
					<input type="checkbox" class="custom-checkbox-success"> Ibu
				</div>
				<div class="form-check form-check-inline">
					<input type="checkbox" class="custom-checkbox-success"> Dll
				</div>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" class="form-control border-dark" name="nama_penanggung"></td>
			<td>Nama Pengirim</td>
			<td><input type="text" class="form-control border-dark" name="nama_pengirim"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea class="form-control border-dark" name="alamat_penanggung"></textarea></td>
			<td>Telp / Hp</td>
			<td><input type="text" class="form-control border-dark" name="telp_2"></td>
		</tr>
		<tr>
			<td>Telp :</td>
			<td><input type="text" class="form-control border-dark" name="telp_1"></td>
			<td>Dokter Penanggung Jawab</td>
			<td><input type="text" class="form-control border-dark" name="nama_dokter"></td>
		</tr>
		<tr>
			<td>No. KTP / SIM / Passport</td>
			<td><input type="text" class="form-control border-dark" name="identitas"></td>
			<td>Keadaan Keluar </td>
			<td>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="keadaan_keluar" id="sembuh" value="sembuh">
					<label for="sembuh">Sembuh</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="keadaan_keluar" id="membaik" value="membaik">
					<label for="membaik">Membaik</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="keadaan_keluar" id="belum_sembuh" value="belum_sembuh">
					<label for="belum_sembuh">Belum Sembuh</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" name="keadaan_keluar" id="meninggal_sebelum" value="meninggal_sebelum">
					<label for="meninggal_sebelum">Meninggal sebelum 48 jam</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Cara Pembayaran</td>
			<td colspan="3">
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" id="umum" name="jenis_pembayaran" value="umum">
					<label class="form-check-label" for="umum">Umum</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" id="bpjs" name="jenis_pembayaran" value="bpjs">
					<label class="form-check-label" for="bpjs">BPJS</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" id="jamkesda" name="jenis_pembayaran" value="jamkesda">
					<label class="form-check-label" for="jamkesda">Jamkesda</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" id="bpjs_ketenagakerjaan" name="jenis_pembayaran" value="bpjs_ketenagakerjaan">
					<label class="form-check-label" for="bpjs_ketenagakerjaan">BPJS Ketenagakerjaan</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" class="custom-checkbox-success" id="jampersal" name="jenis_pembayaran" value="jampersal">
					<label class="form-check-label" for="jampersal">Jampersal</label>
				</div>

			</td>
		</tr>
		<tr>
			<td>Cara Pasien Keluar</td>
			<td colspan="3">
				<div class="row mb-3">
					<div class="col-md-6 form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" name="cara_pasien_keluar" id="diijinkan_pulang" value="diijinkan_pulang">
						<label class="form-check-label" for="diijinkan_pulang">Diijinkan Pulang</label>
					</div>
					<div class="col-md-6 form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" name="cara_pasien_keluar" id="pulang_paksa" value="pulang_paksa">
						<label class="form-check-label" for="pulang_paksa">Pulang Paksa</label>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-6 form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" name="cara_pasien_keluar" id="dirujuk_ke" value="dirujuk_ke">
						<label class="form-check-label" for="dirujuk_ke">Dirujuk ke</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control border-dark" id="rujukan_text">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-6 form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" name="cara_pasien_keluar" id="lari" value="lari">
						<label class="form-check-label" for="lari">Lari</label>
					</div>
					<div class="col-md-6 form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" name="cara_pasien_keluar" id="pindah_rs_lain" value="pindah_rs_lain">
						<label class="form-check-label" for="pindah_rs_lain">Pindah RS Lain</label>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-6 form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" name="cara_pasien_keluar" id="lain_lain" value="lain-lain">
						<label class="form-check-label" for="lain_lain">Lain-Lain</label>
						<input type="text" class="form-control border-dark border-dark" name="input_lain_pasien_keluar" id="input_lain_pasien_keluar">
					</div>
				</div>

			</td>
		</tr>
	</table>

	<table class="table table-bordered border-dark">
		<tr>
			<td style="width: 60%; padding: 8px;">
				<div class="mb-3">
					<label>Nama Perawat Penerima di Ruangan :</label>
					<select type="select" name="perawat_menerima" id="perawat_menerima" class="form-select"
						style="width: 100%;"></select>
				</div>
				<div class="mb-3">
					<label>Infeksi Nosokomial (bila ada)</label>
					<div class="form-check form-check-inline">
						<input type="radio" class="custom-checkbox-success" id="ada" name="infeksi_nosokomial" value="ada"> <label for="ada">Ada</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" class="custom-checkbox-danger" id="tidak" name="infeksi_nosokomial" value="tidak"> <label for="tidak">Tidak</label>
					</div>
				</div>
				<div class="mb-3">
					<label>Alasan Masuk RS</label>
					<textarea class="form-control border-dark" name="alasan_masuk_rs"></textarea>
				</div>
				<div class="mb-3">
					<label>Diagnosa Masuk</label>
					<select type="select" name="diagnosa" id="diagnosa_masuk" class="form-select diagnosa"></select>
				</div>
				<div class="mb-3">
					<label>Diagnosa Akhir</label>
					<select type="select" name="diagnosa2" id="diagnosa_akhir" class="form-select diagnosa">
						<!-- Data akan dimuat secara dinamis -->
					</select>
					</select>
				</div>
				<div class="mb-3">
					<label>Tindakan / Operasi</label>
					<textarea class="form-control border-dark" name="tindakan_ruangan"></textarea>
				</div>
			</td>
			<td style="width: 20%; padding: 8px; vertical-align: top;">
				<div class="mb-3">
					<label>Kode ICD X & ICD 9 cm</label>
					<div class="text-muted" style="font-size: 12px;">(Diisi oleh Petugas RM)</div>
					<textarea class="form-control border-dark" name="kode_icd9"></textarea>
				</div>
			</td>
			<td style="width: 20%; padding: 8px; vertical-align: top;">
				<div class="mb-3">
					<label>Nama & TT Dokter</label>
					<div class=" text-center">
						<img class="img-responsive center-block mt-2" style="width: 50%;" id="qr_dokter_umum" />
						<select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
							style="width: 100%;"></select>
					</div>
				</div>
			</td>
		</tr>
	</table>
</div>


<script>
	let dataDokter = []
	const mode = "<?= $mode; ?>"

	$(document).delay(1000).queue(function() {
		callMarkerManager();
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
		}, 500)
	}

	$(document).ready(function() {
		const globalData = <?= $global_data; ?>;
		const {
			id_dokter,
			id_perawat,
			nama_perawat
		} = globalData;

		$('#id_perawat_form').val($('#id_perawat_form').val() || id_perawat)
		$('#nama_perawat_form').val($('#nama_perawat_form').val() || nama_perawat)
		$('#nama_perawat_form').attr('disabled', true)

		QRSignatureAPI($('#id_perawat_form').val(), 'qr_perawat')

		listDokterUmumAPI()

		QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});



		let page_masuk = 1; // Track the current page for Diagnosa Masuk
		let page_akhir = 1; // Track the current page for Diagnosa Akhir

		listPerawatAPI()

		// Inisialisasi Select2 untuk Diagnosa Masuk
		$('#diagnosa_masuk').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>',
				dataType: 'json',
				delay: 250,
				data: function(params) {
					return {
						q: params.term,
						limit: 100,
						offset: (page_masuk - 1) * 100,
					};
				},
				processResults: function(data) {
					const {
						items,
						more
					} = data.data;
					return {
						results: items,
						pagination: {
							more: more,
						},
					};
				},
				cache: true,
			},
			placeholder: 'Cari Diagnosa Masuk...',
		});

		// Inisialisasi Select2 untuk Diagnosa Akhir
		$('#diagnosa_akhir').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>',
				dataType: 'json',
				delay: 250,
				data: function(params) {
					return {
						q: params.term,
						limit: 100,
						offset: (page_akhir - 1) * 100,
					};
				},
				processResults: function(data) {
					const {
						items,
						more
					} = data.data;
					return {
						results: items,
						pagination: {
							more: more,
						},
					};
				},
				cache: true,
			},
			placeholder: 'Cari Diagnosa Akhir...',
		});

		// Infinite Scroll untuk Diagnosa Masuk
		$('#diagnosa_masuk').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page_masuk++; // Increment page for Diagnosa Masuk
					$('#diagnosa_masuk').select2('data', null); // Trigger new data fetch
				}
			});
		});

		// Infinite Scroll untuk Diagnosa Akhir
		$('#diagnosa_akhir').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page_akhir++; // Increment page for Diagnosa Akhir
					$('#diagnosa_akhir').select2('data', null); // Trigger new data fetch
				}
			});
		});

		$('input[name="cara_pasien_keluar"]').on('change', function() {
			// Reset all inputs and disable them
			$('#rujukan_text, #input_lain_pasien_keluar').val('');

			// Check which option was selected
			switch ($(this).val()) {
				case 'dirujuk_ke':
					// Enable and focus the 'dirujuk_ke' input
					$('#rujukan_text').focus();
					break;
				case 'lain-lain':
					// Enable and focus the 'lain-lain' input
					$('#input_lain_pasien_keluar').focus();
					break;
				default:
					// Do nothing for other cases
					break;
			}
		});

		$('#perawat_menerima').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_menerima')
		});

		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});
	})

	function listPerawatAPI() {
		$('#perawat_menerima').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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