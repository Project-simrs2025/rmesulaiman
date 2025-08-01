<!-- Basic Information Table OK -->
<table class="table table-borderless mb-5 border-dark">
	<tbody>
		<tr>
			<td width="20%">Nama Pasien</td>
			<td width="30%">
				<input name="nama_pasien" type="text" class="form-control border-dark">
			</td>
			<td width="20%">Hari / Tanggal Periksa</td>
			<td width="30%">
				<input type="date" name="tanggal_periksa" class="form-control border-dark" value="<?= date('Y-m-d'); ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="date" name="tanggal_lahir" class="form-control border-dark">
			</td>
			<td>Pekerjaan</td>
			<td>
				<input type="text" name="nama_pekerjaan" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="text" name="jenkel" class="form-control border-dark"">
		</td>
		<td>Suku / Bangsa</td>
		<td>
			<input type=" text" class="form-control border-dark" name="nama_suku">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<textarea name="alamat" class="form-control border-dark" rows="2"></textarea>
			</td>
			<td>Status Pembayaran</td>
			<td>
				<input type="text" class="form-control border-dark" name="st_pembayaran">
			</td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>
				<input name="nik" type="text" class="form-control border-dark">
			</td>
			<td>No. RM</td>
			<td>
				<input name="no_rm" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td colspan="1">
				<input name="nama_agama" type="text" class="form-control border-dark">
			</td>
		</tr>
	</tbody>
</table>

<!-- Medical History Table OK-->
<table class="table table-bordered mt-5 mb-4 border-dark">
	<tbody>
		<tr>
			<td width="20%">Keluhan Utama</td>
			<td>
				<textarea name="keluhan_utama" class="form-control border-dark" rows="2"></textarea>
			</td>
		</tr>
		<tr>
			<td>Riwayat Kesehatan</td>
			<td>
				<textarea name="riwayat_kesehatan" class="form-control border-dark" rows="2"></textarea>
			</td>
		</tr>
		<tr>
			<td>Riwayat Alergi</td>
			<td>
				<textarea name="riwayat_alergi" class="form-control border-dark" rows="2"></textarea>
			</td>
		</tr>
	</tbody>
</table>

<!-- Objective Examination OK-->
<table class="table table-bordered mb-4 border-dark">
	<tbody>
		<tr>
			<td colspan="2" class="bg-light"><strong>Pemeriksaan Obyektif</strong></td>
		</tr>
		<tr>
			<td width="20%">Kesadaran Umum</td>
			<td>
				<input name="kesadaran_umum" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Berat Badan</td>
			<td>
				<input name="berat_badan" type="number" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Tinggi Badan</td>
			<td>
				<input name="tinggi_badan" type="number" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td colspan="2" class="bg-light"><strong>Tanda-Tanda Vital</strong></td>
		</tr>
		<tr>
			<td>Tekanan Darah</td>
			<td>
				<input name="tekanan_darah" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Nadi</td>
			<td>
				<input name="nadi" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Pernafasan</td>
			<td>
				<input name="pernafasan" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Suhu</td>
			<td>
				<input name="suhu" type="text" class="form-control border-dark">
			</td>
		</tr>
	</tbody>
</table>

<!-- Pain Assessment OK-->
<table class="table table-bordered mb-4 border-dark">
	<tbody>
		<tr>
			<td colspan="2" class="bg-light"><strong>Nyeri</strong></td>
		</tr>
		<tr>
			<td width="20%">Lokasi nyeri</td>
			<td>
				<input name="lokasi_nyeri" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Skala nyeri</td>
			<td>
				<input name="skala_nyeri" type="text" class="form-control border-dark border-dark" min="0" max="10">
			</td>
		</tr>
		<tr>
			<td>Lama nyeri</td>
			<td>
				<input name="lama_nyeri" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Pencetus nyeri</td>
			<td>
				<input name="pencetus_nyeri" type="text" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<td>Kualitas nyeri</td>
			<td>
				<input name="kualitas_nyeri" type="text" class="form-control border-dark">
			</td>
		</tr>
	</tbody>
</table>

<!-- Extra Oral Examination OK-->
<table class="table table-bordered mb-4 border-dark">
	<tbody>
		<tr>
			<td colspan="2" class="bg-light"><strong>Pemeriksaan Ekstra Oral</strong></td>
		</tr>
		<tr>
			<td width="20%">Muka</td>
			<td>
				<div class="form-check form-check-inline col-2">
					<input class="custom-checkbox-success" type="radio" name="muka" value="simetris">
					<label class="form-check-label">Simetris</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="muka" value="tidak_simetris">
					<label class="form-check-label">Tidak Simetris</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Kelenjar Lymphe</td>
			<td>
				<div class="form-check">
					<input type="text" class="form-control border-dark w-100" name="kelenjar_lymphe_input">
				</div>
			</td>
		</tr>
		<tr>
			<td><span class="ms-5"></span>Kiri</td>
			<td>
				<div class="col">
					<div class="form-check form-check-inline col-2">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kiri" value="teraba" id="lympe_kiri_teraba">
						<label for="lympe_kiri_teraba">Teraba</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kiri" value="tidak-teraba" id="lympe_kiri_tidak_teraba">
						<label for="lympe_kiri_tidak_teraba">Tidak Teraba</label>
					</div>
				</div>
				<div class="col">
					<div class="form-check form-check-inline col-2">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kiri_keras_lunak" value="keras" id="keras">
						<label class="form-check-label" for="keras">Keras</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kiri_keras_lunak" value="lunak" id="lunak">
						<label class="form-check-label" for="lunak">Lunak</label>
					</div>
				</div>
				<div class="col">
					<div class="form-check form-check-inline col-2">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kiri_sakit" value="sakit" id="sakit">
						<label class="form-check-label" for="sakit">Sakit</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kiri_sakit" value="tidak_sakit" id="tidak_sakit">
						<label class="form-check-label" for="tidak_sakit">Tidak Sakit</label>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td><span class="ms-5"></span>Kanan</td>
			<td>
				<div class="col">
					<div class="form-check form-check-inline col-2">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kanan" value="teraba" id="lympe_kanan_teraba">
						<label for="lympe_kanan_teraba">Teraba</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kanan" value="tidak-teraba" id="lympe_kanan_tidak_teraba">
						<label for="lympe_kanan_tidak_teraba">Tidak Teraba</label>
					</div>
				</div>
				<div class="col">
					<div class="form-check form-check-inline col-2">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kanan_keras_lunak" value="keras_kanan" id="keras_kanan">
						<label class="form-check-label" for="keras_kanan">Keras</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kanan_keras_lunak" value="lunak_kanan" id="lunak_kanan">
						<label class="form-check-label" for="lunak_kanan">Lunak</label>
					</div>
				</div>
				<div class="col">
					<div class="form-check form-check-inline col-2">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kanan_sakit" value="sakit_kanan" id="sakit_kanan">
						<label class="form-check-label" for="sakit_kanan">Sakit</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="custom-checkbox-success" type="radio" name="kelenjar_lymphe_kanan_sakit" value="tidak_sakit_kanan" id="tidak_sakit_kanan">
						<label class="form-check-label" for="tidak_sakit_kanan">Tidak Sakit</label>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<!-- Intra Oral Examination OK-->
<table class="table table-bordered mb-4 border-dark">
	<tbody>
		<tr>
			<td colspan="2" class="bg-light"><strong>Pemeriksaan Intra Oral</strong></td>
		</tr>
		<tr>
			<td width="20%">Bibir</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="bibir" value="normal">
					<label class="form-check-label">Normal</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="bibir" value="ada_kelainan">
					<label class="form-check-label">Ada Kelainan</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Lidah</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="lidah" value="normal">
					<label class="form-check-label">Normal</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="lidah" value="ada_kelainan">
					<label class="form-check-label">Ada Kelainan</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Mukosa Bukal</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="mukosa_bukal" value="normal">
					<label class="form-check-label">Normal</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="mukosa_bukal" value="ada_kelainan">
					<label class="form-check-label">Ada Kelainan</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Mukosa Palatinal</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="mukosa_palatinal" value="normal">
					<label class="form-check-label">Normal</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="mukosa_palatinal" value="ada_kelainan">
					<label class="form-check-label">Ada Kelainan</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Gingiva</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="gingiva" value="normal">
					<label class="form-check-label">Normal</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="gingiva" value="ada_kelainan">
					<label class="form-check-label">Ada Kelainan</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>Pipi</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="pipi" value="normal">
					<label class="form-check-label">Normal</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="custom-checkbox-success" type="radio" name="pipi" value="ada_kelainan">
					<label class="form-check-label">Ada Kelainan</label>
				</div>
			</td>
		</tr>
	</tbody>
</table>


<!--Oral Health-->
<table class="table table-bordered border-dark mt-4">
	<tr>
		<td colspan="2" class="bg-light"><strong>Keadaan Kebersihan / Kesehatan Mulut</strong></td>
	</tr>
	<tr>
		<td colspan="2">
			<p>Lingkarilah elemen gigi yang menjadi Gigi indeks</p>
			<div class="col text-center">
				<img class="marker-image" src="<?= base_url() . 'assets/images/form/rm1/elemen-gigi-indeks.png' ?>" data-input-name="image_drawer_state_image_gigi_indeks" alt="">
				<input type="hidden" id="image_drawer_state_image_gigi_indeks" name="image_drawer_state_image_gigi_indeks" value="" />
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<strong>Debris Score</strong>
			<div class="col text-center">
				<img class="marker-image" src="<?= base_url() . 'assets/images/form/rm1/debris-score.png' ?>" data-input-name="image_drawer_state_debris-score" alt="">
				<input type="hidden" id="image_drawer_state_debris-score" name="image_drawer_state_debris-score" value="" />
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<strong>Green and Vermilion</strong>
			<input type="text" class="form-control border-dark mt-3" name="green_vermilion_1">
			<input type="text" class="form-control border-dark mt-2" name="green_vermilion_2">
			<input type="text" class="form-control border-dark mt-2 mb-3" name="green_vermilion_3">
		</td>
	</tr>
	<tr>
		<td><strong>Simplified Debris Index</strong></td>
		<td><input type="text" class="form-control border-dark" name="simplified_debris_index"></td>
	</tr>
	<tr>
		<td><strong>Simplified Calculus Index</strong></td>
		<td><input type="text" class="form-control border-dark" name="simplified_calculus_index"></td>
	</tr>
	<tr>
		<td><strong>Simplified Oral Hygiene Index (OHI-S)</strong>
			<input type="text" class="form-control border-dark" name="simplified_oral_hygiene_index">
		</td>
		<td>
			<strong>CHI - S</strong>
			<input type="text" class="form-control border-dark" name="simplified_oral_hygiene_index_chi">
		</td>
	</tr>
	<tr>
		<td><strong>Baik</strong></td>
		<td><input type="text" class="form-control border-dark" name="oral_baik"></td>
	</tr>
	<tr>
		<td><strong>Sedang</strong></td>
		<td><input type="text" class="form-control border-dark" name="oral_sedang"></td>
	</tr>
	<tr>
		<td><strong>Buruk</strong></td>
		<td><input type="text" class="form-control border-dark" name="oral_buruk"></td>
	</tr>
</table>

<!--Teeth Location-->
<table class="table table-bordered border-dark mt-4">
	<tr>
		<td colspan="2" class="bg-light"><strong>Status Lokasi Gigi Geligi</strong></td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="col text-center">
				<img class="marker-image" id="example-image" style="width: 900px" src="<?= base_url() . 'assets/images/form/rm1/lokasi_gigi.png' ?>"
					data-input-name="image_drawer_state_image_1"
					alt="">
				<input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1" value="" />
			</div>

		</td>
	</tr>
</table>

<table class="table table-bordered border-dark mt-4">
	<tr>
		<td colspan="4" class="bg-light"><strong>Kode Status Karies Gigi (Indeks Pengalaman Kerja)</strong></td>
	</tr>
	<tr>
		<td colspan="2"><strong>Gigi</strong></td>
		<td colspan="2"><strong>Kelainan Jaringan Keras Gigi</strong></td>
	</tr>
	<tr>
		<td><strong>Tetap</strong></td>
		<td><strong>Susu</strong></td>
		<td><strong>Status / Kondisi</strong></td>
		<td>
			<div class="d-flex flex-row">
				<label for="" class="col-3"> Gigi tetap: </label>
				<input name="gigi_tetap" class="form-control border-dark" type="text">
			</div>
		</td>
	</tr>
	<tr>
		<td>0</td>
		<td>A</td>
		<td>Sehat</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">D : </label>
				<input type="text" name="kode_karies_0" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>1</td>
		<td>B</td>
		<td>Gigi Berlubang</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">M : </label>
				<input type="text" name="kode_karies_1" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>C</td>
		<td>Tumpatan, dengan karies</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">F : </label>
				<input type="text" name="kode_karies_2" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>3</td>
		<td>D</td>
		<td>Tumpatan, tanpa karies</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3"></label>
				<input type="text" name="kode_karies_3" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>4</td>
		<td>E</td>
		<td>Gigi dicabut karena karies</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">DMF-T : </label>
				<input type="text" name="kode_karies_4" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>5</td>
		<td></td>
		<td>Gigi dicabut oleh sebab lain</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">Gigi susu : </label>
				<input type="text" name="kode_karies_5" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>6</td>
		<td></td>
		<td>Sealant, Varnish</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">d : </label>
				<input type="text" name="kode_karies_6" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>7</td>
		<td>F</td>
		<td>Abutment, Mahkota Khusus</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">e : </label>
				<input type="text" name="kode_karies_7" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>8</td>
		<td>G</td>
		<td>Gigi Tidak Tumbuh</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">f : </label>
				<input type="text" name="kode_karies_8" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td>9</td>
		<td></td>
		<td>Gigi tidak termasuk kriteria di atas (misalnya : trauma / fraktur)</td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3"></label>
				<input type="text" name="kode_karies_9" class="form-control border-dark">
			</div>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>
			<div class="d-flex flex-row align-items-center">
				<label class="col-3">def-t : </label>
				<input type="text" name="kode_karies_10" class="form-control border-dark">
			</div>
		</td>
	</tr>
</table>


<!-- Diagnosis and Treatment -->
<table class="table table-bordered mb-4 border-dark">
	<tbody>
		<tr>
			<td width="20%">Diagnosa</td>
			<td>
				<select type="select" name="diagnosa" id="diagnosa" class="form-control border-dark diagnosa">
				</select>
			</td>
		</tr>
		<tr>
			<td>Terapi / Tindakan</td>
			<td>
				<textarea name="terapi_tindakan" class="form-control border-dark" rows="3"></textarea>
			</td>
		</tr>
		<tr>
			<td>Edukasi</td>
			<td>
				<textarea name="edukasi" class="form-control border-dark" rows="3"></textarea>
			</td>
		</tr>
	</tbody>
</table>

<!-- Doctor's Signature -->
<div class="d-flex flex-column gap-2 align-items-end text-end mb-4">
	<div>Tanda Tangan Dokter Gigi</div>
	<div class=" col-4 d-flex flex-column gap-4 align-items-end">
		<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_dokter_umum" />
		<select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
	</div>
</div>

<script>
	let dataDokter = []
	const mode = "<?= $mode; ?>"

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	$(document).ready(function() {
		let page = 1;
		listDokterUmumAPI()

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