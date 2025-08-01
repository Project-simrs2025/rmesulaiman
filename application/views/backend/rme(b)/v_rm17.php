<table class="table table-bordered border-dark">
	<tbody>
		<tr>
			<th colspan="3" class="text-center">PEMBERIAN INFORMASI</th>
		</tr>
	</tbody>
	<tbody>
		<tr>
			<td>Dokter Pelaksana Tindakan</td>
			<td colspan="2">
				<input type="text" class="form-control border-dark" name="nama_dokter">
			</td>
		</tr>
		<tr>
			<td>Pemberi Informasi</td>
			<td colspan="2"><input type="text" class="form-control border-dark" name="pemberi_informasi"></td>
		</tr>
		<tr>
			<td>Penerima Informasi / Persetujuan</td>
			<td colspan="2"><input type="text" class="form-control border-dark" name="penerima_informasi"></td>
		</tr>
	</tbody>
</table>

<table class="table table-bordered border-dark">
	<tbody class="text-center">
		<tr>
			<th>No.</th>
			<th>Jenis Informasi</th>
			<th>Isi Informasi</th>
			<th>Tandai &check;</th>
		</tr>
	</tbody>
	<tbody class="text-center">
		<tr>
			<td>1</td>
			<td>Diagnosis (WD & DD)</td>
			<td><input type="text" class="form-control border-dark" name="diagnosis"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_diagnosis"></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Dasar Diagnosis</td>
			<td><input type="text" class="form-control border-dark" name="dasar_diagnosis"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_dasar_diagnosis"></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Tindakan Kedokteran</td>
			<td><input type="text" class="form-control border-dark" name="tindakan_kedokteran"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_tindakan_kedokteran"></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Indikasi Tindakan</td>
			<td><input type="text" class="form-control border-dark" name="indikasi_tindakan"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_indikasi_tindakan"></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Tata Cara</td>
			<td><input type="text" class="form-control border-dark" name="tata_cara"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_tata_cara"></td>
		</tr>
		<tr>
			<td>6</td>
			<td>Tujuan</td>
			<td><input type="text" class="form-control border-dark" name="tujuan"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_tujuan"></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Risiko</td>
			<td><input type="text" class="form-control border-dark" name="risiko"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_risiko"></td>
		</tr>
		<tr>
			<td>8</td>
			<td>Komplikasi</td>
			<td><input type="text" class="form-control border-dark" name="komplikasi"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_komplikasi"></td>
		</tr>
		<tr>
			<td>9</td>
			<td>Prognosis</td>
			<td><input type="text" class="form-control border-dark" name="prognosis"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_prognosis"></td>
		</tr>
		<tr>
			<td>10</td>
			<td>Alternatif & Risiko</td>
			<td><input type="text" class="form-control border-dark" name="alternatif_risiko"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_alternatif_risiko"></td>
		</tr>
		<tr>
			<td>11</td>
			<td>Pemberian terapi analgetik post anestesi/ sedasi</td>
			<td><input type="text" class="form-control border-dark" name="terapi_analgetik"></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_terapi_analgetik"></td>
		</tr>
		<tr>
			<td colspan="3">
				Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas dan memberikan
				kesempatan untuk bertanya dan/atau berdiskusi
			</td>
			<td>
				<div>
					<img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
				</div>
				<select type="select" name="dokter_umum" id="dokter_umum" class="form-select" style="width: 100%;"></select>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana di atas kemudian saya beri
				tanda/paraf di kolom kanannya, dan telah memahaminya
			</td>
			<td>
				<img class="marker-image" style="width: 250px" src="<?= base_url() . 'assets/images/form/base-ttd.png' ?>" data-input-name="image_drawer_state_ttd_2" alt="">
				<input type="hidden" id="image_drawer_state_ttd_2" name="image_drawer_state_ttd_2" value="" />
			</td>
		</tr>
		<tr>
			<td colspan="4">
				* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau
				keluarga terdekat
			</td>
		</tr>
		<tr>
			<td class="bg-light text-center " colspan="4">
				<h5 class="text-black">PERSETUJUAN TINDAKAN ANESTESI / SEDASI</h5>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<div class="d-flex flex-wrap align-items-center gap-3 mb-4">
					<span>Yang bertandatangan di bawah ini, saya, nama </span>
					<span class="col-4"><input type="text" name="nama_pasien" class="form-control border-dark"></span>
					<span>, Umur</span>
					<span class="col-3"><input type="text" name="umur" class="form-control border-dark"></span>
					<span>Tahun, </span>
					<span><input type="text" class="form-control border-dark" name="jenkel"></span>
					<span>, dengan ini menyatakan persetujuan untuk dilakukannya tindakan</span>
					<span class="col-5"><input type="text" class="form-control border-dark" name="tindakan_anestesi"></span>
					<span>terhadap saya/</span>
					<span>bernama</span>
					<span class="col-4"><input type="text" name="nama_pasien" class="form-control border-dark"></span>
					<span>, Umur</span>
					<span class="col-3"><input type="text" name="umur" class="form-control border-dark"></span>
					<span>Tahun, </span>
					<span><input type="text" class="form-control border-dark" name="jenkel"></span>
					<span>, alamat</span>
					<span class="col-5"><textarea name="alamat" rows="2" class="form-control border-dark"></textarea></span>
				</div>
				<p>Saya memahami perlunya dan manfaat tindakan sebagaimana telah dijelaskan seperti di atas kepada saya,
					termasuk risiko dan komplikasi yang mungkin timbul. </p>
				<p>Saya juga menyadari bahwa dokter melakukan suatu upaya dan oleh karena ilmu kedokteran bukanlah ilmu
					pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada
					izin Tuhan Yang Maha Esa.</p>

				<div class="d-flex justify-content-end gap-2 mt-2 align-items-center">
					<label for=""><?= $city_sign ?>,</label> <input type="date" name="tanggal_2" class="form-control border-dark w-25" value="<?= date('Y-m-d'); ?>">
				</div>


				<div class="row mt-5">
					<div class="col-4">
						<div class="d-flex flex-column gap-2">
							<label for="">Disetujui Oleh Pasien :</label>
							<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
								style="width: 350px; height:200px" data-input-name="image_drawer_state_image_2" />
							<input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
								value="" />
						</div>
					</div>
					<div class="col-4">
						<div class="d-flex flex-column gap-2">
							<label for="">Saksi Wali/Keluarga:</label>
							<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
								style="width: 350px; height:200px" data-input-name="image_drawer_state_image_3" />
							<input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
								value="" />
						</div>
					</div>
					<div class="col-4">
						<div class="d-flex flex-column gap-2">
							<label for="">Saksi Rumah Sakit:</label>
							<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
								style="width: 300px; height:200px" data-input-name="image_drawer_state_image_4" />
							<input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4"
								value="" />
						</div>
					</div>
				</div>
				<br><br>
			</td>
		</tr>
	</tbody>
</table>

<script>
	let dataDokter = []
	const mode = "<?= $mode; ?>"

	$(document).ready(function() {
		let page = 1;
		listDokterUmumAPI();

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