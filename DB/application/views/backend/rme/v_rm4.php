<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control border-dark" name="nama_pasien">
		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label for="no-rm" class="form-label">No. RM</label>
			<input type="text" class="form-control border-dark" name="no_rm">
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<label class="form-label">Jenis Kelamin</label>
		<input type="text" name="jenkel" class="form-control border-dark">
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label for="tgl-masuk" class="form-label">Tgl Masuk</label>
			<input type="text" class="form-control border-dark" name="tgl_admit">
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="tgl-lahir" class="form-label">Tgl Lahir (Hari/Bulan/Tahun)</label>
			<input type="date" class="form-control border-dark" name="tanggal_lahir">
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat</label>
			<textarea class="form-control border-dark" name="alamat" rows="3"></textarea>
		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label class="form-label">Tgl Keluar</label>
			<input type="datetime-local" class="form-control border-dark" name="tgl_keluar" value="<?= date('Y-m-d H:i') ?>">
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="agama" class="form-label">Agama</label>
			<input type="text" class="form-control border-dark" name="nama_agama">
		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label for="kelas-ruang" class="form-label">Kelas/Ruang</label>
			<input type="text" class="form-control border-dark" name="kelas">
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="suku-bangsa" class="form-label">Suku/Bangsa</label>
			<div class="d-flex flex-row align-items-center gap-3">
				<input type="text" class="form-control border-dark" name="nama_suku">
				<div class="mt-2">
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="wni_wna" value="wni" id="wni">
						<label class="form-check-label" for="wni">WNI</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="wni_wna" value="wna" id="wna">
						<label class="form-check-label" for="wna">WNA</label>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-md-6">
		<label class="form-label">Cara Masuk</label>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="cara_masuk" value="datang_sendiri" id="datang_sendiri">
			<label class="form-check-label" for="datang_sendiri">Datang Sendiri</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="cara_masuk" value="puskesmas" id="puskesmas">
			<label class="form-check-label" for="puskesmas">Puskesmas</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="cara_masuk" value="dokter" id="dokter">
			<label class="form-check-label" for="dokter">Dokter</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="cara_masuk" value="rumah_sakit" id="rumah_sakit">
			<label class="form-check-label" for="rumah_sakit">Rumah Sakit</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="cara_masuk" value="instansi_lain" id="instansi_lain">
			<label class="form-check-label" for="instansi_lain">Instansi Lain</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="cara_masuk" value="kasus_polri" id="kasus_polri">
			<label class="form-check-label" for="kasus_polri">Kasus POLRI</label>
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="pendidikan" class="form-label">Pendidikan</label>
			<input type="text" class="form-control border-dark" name="pendidikan_terakhir" id="pendidikan_terakhir">
		</div>
	</div>
	<div class="col-md-6">
		<!-- Empty Column -->
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="pekerjaan" class="form-label">Pekerjaan</label>
			<input type="text" class="form-control border-dark" name="nama_pekerjaan" id="nama_pekerjaan">
		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label for="telp-hp" class="form-label">Telp/Hp</label>
			<input type="text" class="form-control border-dark" name="no_handphone" id="no_handphone">
		</div>
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<label class="form-label">Status</label>
		<div class="row">
			<div class="col-6">
				<input class="custom-checkbox-success" type="radio" name="status" value="menikah" id="menikah">
				<label class="form-check-label" for="menikah">Menikah</label>
			</div>
			<div class="col-6">
				<input class="custom-checkbox-success" type="radio" name="status" value="belum_menikah" id="belum_menikah">
				<label class="form-check-label" for="belum_menikah">Belum Menikah</label>
			</div>
			<div class="col-6">
				<input class="custom-checkbox-success" type="radio" name="status" value="janda" id="janda">
				<label class="form-check-label" for="janda">Janda</label>
			</div>
			<div class="col-6">
				<input class="custom-checkbox-success" type="radio" name="status" value="duda" id="duda">
				<label class="form-check-label" for="duda">Duda</label>
			</div>

		</div>
	</div>
	<div class="col-md-6">
		<div class="mb-3">
			<label for="dokter-penanggung-jawab" class="form-label">Dokter Penanggung Jawab</label>
			<input type="text" class="form-control border-dark" name="nama_dokter">
		</div>
	</div>
</div>

<label class="form-label">Penanggung Jawab Pasien</label>
<div class="row mb-3 gap-2">
	<div class="col-4">
		<input class="custom-checkbox-success" type="radio" name="penanggung_jawab" value="suami" id="suami" onchange="togglePenanggungInput()">
		<label class="form-check-label" for="suami">Suami</label>
	</div>
	<div class="col-4">
		<input class="custom-checkbox-success" type="radio" name="penanggung_jawab" value="istri" id="istri" onchange="togglePenanggungInput()">
		<label class="form-check-label" for="istri">Istri</label>
	</div>
	<div class="col-4">
		<input class="custom-checkbox-success" type="radio" name="penanggung_jawab" value="ayah" id="ayah" onchange="togglePenanggungInput()">
		<label class="form-check-label" for="ayah">Ayah</label>
	</div>
	<div class="col-4">
		<input class="custom-checkbox-success" type="radio" name="penanggung_jawab" value="ibu" id="ibu" onchange="togglePenanggungInput()">
		<label class="form-check-label" for="ibu">Ibu</label>
	</div>
	<div class="col-4">
		<input class="custom-checkbox-success" type="radio" name="penanggung_jawab" value="dll" id="dll" onchange="togglePenanggungInput()">
		<label class="form-check-label" for="dll">Dll</label>
		<input type="text" class="form-control border-dark" name="penanggung_jawab_pasien_dll" id="penanggung_jawab_pasien_dll" readonly>
	</div>
</div>


<div class="row mb-3">
	<div class="col-6 mb-2">
		<label for="nama-pj" class="form-label">Nama</label>
		<input type="text" class="form-control border-dark" name="nama_penanggung_jawab" id="nama_penanggung_jawab">
	</div>
	<div class="col-6 mb-2">
		<label for="nama-pengirim" class="form-label">Nama Pengirim</label>
		<input type="text" class="form-control border-dark" name="nama_pengirim" id="nama_pengirim">
	</div>
	<div class="col-6 mb-2">
		<label for="alamat-pj" class="form-label">Alamat</label>
		<textarea class="form-control border-dark" name="alamat_penanggung_jawab" rows="2" id="alamat_penanggung_jawab"></textarea>
	</div>
	<div class="col-6 mb-2">
		<label for="no-telp-pj" class="form-label">No. Telp:</label>
		<input type="text" class="form-control border-dark" name="no_telp_penanggung_jawab" id="no_telp_penanggung_jawab">
	</div>
	<div class="col-6 mb-2">
		<label for="no-ktp-sim" class="form-label">No. KTP/SIM:</label>
		<input type="text" class="form-control border-dark" name="no_ktp_sim" id="no_ktp_sim">
	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">
		<div class="mb-3">
			<label class="form-label">Cara Pembayaran</label>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="cara_bayar" value="umum" id="umum">
				<label class="form-check-label" for="umum">Umum</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="cara_bayar" value="bpjs_tk" id="bpjs_tk">
				<label class="form-check-label" for="bpjs_tk">BPJS Ketenagakerjaan</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="cara_bayar" value="jamkesda" id="jamkesda">
				<label class="form-check-label" for="jamkesda">Jamkesda</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="cara_bayar" value="bpjs" id="bpjs">
				<label class="form-check-label" for="bpjs">BPJS</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="cara_bayar" value="jampersal" id="jampersal">
				<label class="form-check-label" for="jampersal">Jampersal</label>
			</div>
			<div class="form-check">
				<input class="custom-checkbox-success" type="radio" name="cara_bayar" value="jasa_raharja" id="jasa_raharja">
				<label class="form-check-label" for="jasa_raharja">Jasa Raharja</label>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<label class="form-label">Keadaan Keluar</label>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="keadaan-keluar" value="sembuh" id="sembuh">
			<label class="form-check-label" for="sembuh">Sembuh</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="keadaan-keluar" value="membaik" id="membaik">
			<label class="form-check-label" for="membaik">Membaik</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="keadaan-keluar" value="belum_sembuh" id="belum_sembuh">
			<label class="form-check-label" for="belum_sembuh">Belum sembuh</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="keadaan-keluar" value="meninggal_sebelum_48_jam" id="meninggal_sebelum_48_jam">
			<label class="form-check-label" for="meninggal_sebelum_48_jam">Meninggal sebelum 48 jam</label>
		</div>
		<div class="form-check">
			<input class="custom-checkbox-success" type="radio" name="keadaan-keluar" value="meninggal_sesudah_48_jam" id="meninggal_sesudah_48_jam">
			<label class="form-check-label" for="meninggal_sesudah_48_jam">Meninggal sesudah 48 jam</label>
		</div>
	</div>
</div>

<label class="form-label">Cara Pasien Keluar</label>
<div class="row gap-3 mb-3">
	<div class="col-4 me-3">
		<input class="custom-checkbox-success" type="radio" name="cara_keluar" value="diijinkan_pulang" id="diijinkan_pulang" onchange="toggleCaraKeluarInput()">
		<label class="form-check-label" for="diijinkan_pulang">Diijinkan Pulang</label>
	</div>
	<div class="col-4 me-3">
		<input class="custom-checkbox-success" type="radio" name="cara_keluar" value="pulang_paksa" id="pulang_paksa" onchange="toggleCaraKeluarInput()">
		<label class="form-check-label" for="pulang_paksa">Pulang Paksa</label>
	</div>
	<div class="col-4 me-3">
		<input class="custom-checkbox-success" type="radio" name="cara_keluar" value="pindah_rs" id="pindah_rs" onchange="toggleCaraKeluarInput()">
		<label class="form-check-label" for="pindah_rs">Pindah RS Lain</label>
	</div>
	<div class="col-6 me-3">
		<input class="custom-checkbox-success" type="radio" name="cara_keluar" value="dirujuk" id="dirujuk" onchange="toggleCaraKeluarInput()">
		<label class="form-check-label me-2" for="dirujuk">Dirujuk ke</label>
		<input type="text" class="form-control border-dark" name="cara_keluar_dirujuk" id="cara_keluar_dirujuk" readonly>
	</div>
	<div class="col-4 me-3">
		<div class="form-check me-3">
			<input class="custom-checkbox-success" type="radio" name="cara_keluar" value="lari" id="lari" onchange="toggleCaraKeluarInput()">
			<label class="form-check-label" for="lari">Lari</label>
		</div>
	</div>
	<div class="col-6 me-3">
		<input class="custom-checkbox-success" type="radio" name="cara_keluar" value="lain_lain" id="lain_lain" onchange="toggleCaraKeluarInput()">
		<label class="form-check-label me-2" for="lain_lain">Lain-lain</label>
		<input type="text" class="form-control border-dark" name="cara_keluar_lain_lain" id="cara_keluar_lain_lain" readonly>
	</div>
</div>


<div class="row mb-3">
	<div class="col-md-6">

	</div>
</div>

<div class="row mb-3">
	<div class="col-md-6">

	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="table-responsive">
			<table class="table table-bordered border-dark">
				<tbody>
					<tr>
						<td>
							<div class="mb-3 d-flex flex-column gap-3">
								<label for="perawat" class="form-label">Nama perawat di ruangan</label>
								<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat" />
								<select type="select" name="perawat" id="perawat" class="form-select"
									style="width: 100%;"></select>
							</div>
							<div class="mb-3">
								<label class="form-label">Infeksi Nosokomial (bila ada):</label>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-success" type="radio" name="infeksi" value="ada" id="ada">
									<label class="form-check-label" for="ada">Ada</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="custom-checkbox-danger" type="radio" name="infeksi" value="tidak" id="tidak">
									<label class="form-check-label" for="tidak">Tidak</label>
								</div>
							</div>
							<div class="mb-3">
								<label for="alasan-masuk" class="form-label">Alasan Masuk RS:</label>
								<textarea type="textarea" class="form-control border-dark" name="alasan_masuk" rows="2"></textarea>
							</div>
						</td>
						<td>
							<div class="mb-3">
								<label for="kode-icd" class="form-label">Kode ICD X & ICD 9 CM<br>(Diisi oleh Petugas
									RM)</label>
								<textarea class="form-control border-dark" type="textarea" name="kode_icd" rows="7"></textarea>
							</div>
						</td>
						<td class="align-content-start">
							<div class="d-flex flex-column gap-2 align-items-center">
								<label>Nama & TT Dokter</label>
								<select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
									style="width: 100%;"></select>
								<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<div class="mb-3">
								<label for="diagnosa-masuk" class="form-label">Diagnosa Masuk</label>
								<select type="select" name="diagnosa_masuk" class="form-control w-100 diagnosa">
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<div class="mb-3">
								<label for="diagnosa-akhir" class="form-label">Diagnosa Akhir</label>
								<select type="select" name="diagnosa_akhir" class="form-control w-100 diagnosa">
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<div class="mb-3">
								<label for="tindakan-operasi" class="form-label">Tindakan/Operasi</label>
								<textarea class="form-control border-dark" type="textarea" name="tindakan_operasi" rows="2"></textarea>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


<script>
	const mode = "<?= $mode; ?>"
	let dataListPerawat = []
	let dataListDokter = []

	function cbCommon() {
		$('#perawat').prop('disabled', false)
		$('#perawat').select2('open')
		$('#perawat').select2('close')
		$('#dokter_umum').prop('disabled', false)
		$('#dokter_umum').select2('open')
		$('#dokter_umum').select2('close')
		if (mode === "lihat") {
			$('#perawat').prop('disabled', true)
			$('#dokter_umum').prop('disabled', true)

		}

		setTimeout(() => {
			dataListPerawat?.map(v => {
				if (v.text === $('#perawat').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_perawat')
				}
			})
			dataListDokter?.map(v => {
				if (v.text === $('#dokter_umum').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_dokter_umum')
				}
			})
		}, 1000)
	}

	$(document).ready(function() {
		listPerawatAPI()
		listDokterUmumAPI()
		$('#perawat').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat')
		});
		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});


		let page = 1; // Track the current page
		// let searchQuery = ''; // Track the search query

		// Initialize Select2
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

		});

		$('.diagnosa').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page++; // Increment page
					$('#diagnosa').select2('data', null); // Trigger new data fetch
				}
			});
		});
	})

	function listPerawatAPI() {
		$('#perawat').select2({
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
					dataListPerawat = items
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
					dataListDokter = items
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

	function togglePenanggungInput() {
		var dllRadio = document.getElementById('dll');
		var inputDll = document.getElementById('penanggung_jawab_pasien_dll');

		// If "Dll" is selected, enable the input field, clear its value, and focus on it
		if (dllRadio.checked) {
			inputDll.readOnly = false;
			inputDll.value = ''; // Clear the input value
			inputDll.focus(); // Focus on the input field
		} else {
			inputDll.readOnly = true;
			inputDll.value = ''; // Clear the value when any other option is selected
		}
	}

	// Call the function to set the correct state on page load
	togglePenanggungInput();



	function toggleCaraKeluarInput() {
		var dirujukRadio = document.getElementById('dirujuk');
		var lainLainRadio = document.getElementById('lain_lain');

		var inputDirujuk = document.getElementById('cara_keluar_dirujuk');
		var inputLainLain = document.getElementById('cara_keluar_lain_lain');

		// If "Dirujuk" is selected, enable the input field and clear its value
		if (dirujukRadio.checked) {
			inputDirujuk.readOnly = false;
			inputDirujuk.value = ''; // Clear the input value
			inputDirujuk.focus(); // Focus on the input field
		} else {
			inputDirujuk.readOnly = true;
			inputDirujuk.value = ''; // Clear the value when "Dirujuk" is not selected
		}

		// If "Lain-lain" is selected, enable the input field and clear its value
		if (lainLainRadio.checked) {
			inputLainLain.readOnly = false;
			inputLainLain.value = ''; // Clear the input value
			inputLainLain.focus(); // Focus on the input field
		} else {
			inputLainLain.readOnly = true;
			inputLainLain.value = ''; // Clear the value when "Lain-lain" is not selected
		}
	}

	// Call the function to set the correct state on page load
	toggleCaraKeluarInput();
</script>