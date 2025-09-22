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
				<select type="select" name="dokter_pelaksana" id="dokter_pelaksana" class="form-select dokter" style="width: 100%;"></select>

			</td>
		</tr>
		<tr>
			<td>Pemberi Informasi</td>
			<td colspan="2">
				<select type="select" name="pemberi_informasi" id="pemberi_informasi" class="form-select perawat" style="width: 100%;"></select>
			</td>
		</tr>
		<tr>
			<td>Penerima Informasi / Persetujuan</td>
			<td colspan="2">
				<input type="text" class="form-control border-dark" name="penerima_informasi">
			</td>
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
			<td><select type="select" name="diagnosis" id="diagnosis" class="form-select diagnosa" style="width: 100%;"></select></td>
			<td><input type="checkbox" class="custom-checkbox-success " name="tandai_diagnosis"></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Dasar Diagnosis</td>
			<td><input type="text" name="dasar_diagnosis" id="dasar_diagnosis" class="form-control border-dark" style="width: 100%;"></td>
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
				<div class="text-center">Tanda Tangan</div>
				<div class="text-center">Dokter</div>
				<div>
					<img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum" />
				</div>
				<select type="select" name="dokter_umum" id="dokter_umum" class="form-select perawat" style="width: 100%;"></select>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana di atas kemudian saya beri
				tanda/paraf di kolom kanannya, dan telah memahaminya
			</td>
			<td>
				<div class="text-center">Tanda Tangan</div>
				<div class="text-center">Pasien / Keluarga</div>
				<div class="text-center my-2">
					<img class="marker-image border-dark border" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
						style="width: 150px; height:100px" data-input-name="image_drawer_state_image_1" />
					<input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1"
						value="" />
				</div>
				<input type="text" name="nama_hub_pasien_ttd" id="" class="form-control border-dark" value="<?= $nama_pasien;  ?>">
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
					<span class="col-4"><input type="text" name="nama_pasien_dirawat" class="form-control border-dark" value="<?= $nama_pasien; ?>"></span>
					<span>, Umur</span>
					<span class="col-3"><input type="text" name="umur_dirawat" class="form-control border-dark" value="<?= $umur; ?>"></span>
					<span>Tahun, </span>
					<span><input type="text" class="form-control border-dark" name="jenkel_dirawat" value="<?= $jenkel; ?>"></span>
					<span>, dengan ini menyatakan persetujuan untuk dilakukannya tindakan</span>
					<span class="col-5"><input type="text" class="form-control border-dark" name="tindakan_anestesi"></span>
					<span>terhadap saya/</span>
					<span>bernama</span>
					<span class="col-4"><input type="text" name="nama_pasien_keluarga" class="form-control border-dark" value="<?= $nama_hub_pasien; ?>"></span>
					<span>, Umur</span>
					<span class="col-3"><input type="text" name="umur_keluarga" class="form-control border-dark"></span>
					<span>Tahun, </span>
					<span><input type="text" class="form-control border-dark" name="jenkel_keluarga"></span>
					<span>, alamat</span>
					<span class="col-5"><textarea name="alamat_keluarga" rows="2" class="form-control border-dark"><?= $alamat_hub_pasien; ?></textarea></span>
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
							<div class="my-2 text-center ">
								<img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
									style="width: 180px; height:100px" data-input-name="image_drawer_state_image_2" />
								<input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2"
									value="" />
							</div>
							<input type="text" name="nama_pasien" id="" class="form-control border-dark">
						</div>
					</div>
					<div class="col-4">
						<div class="d-flex flex-column gap-2">
							<label for="">Saksi Wali/Keluarga:</label>
							<div class="text-center my-2">
								<img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
									style="width: 180px; height:100px" data-input-name="image_drawer_state_image_3" />
								<input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3"
									value="" />
							</div>
							<input type="text" name="saksi_wali" id="" class="form-control border-dark" placeholder="Nama saksi/keluarga">
						</div>
					</div>
					<div class="col-4">
						<div class="d-flex flex-column gap-2">
							<label for="">Saksi Rumah Sakit:</label>
							<div class="text-center">
								<img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_saksi_rs" />
							</div>
							<select type="select" name="saksi_rs" id="saksi_rs" class="form-select perawat" style="width: 100%;"></select>
						</div>
					</div>
				</div>
				<br><br>
			</td>
		</tr>
	</tbody>
</table>

<script>
	const mode = "<?= $mode; ?>"
	let dataListPerawat = []
	let dataDokter = []

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
			dataListPerawat?.map(v => {
				if (v.text === $('#dokter_umum').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_dokter_umum')
				}
			})
		}, 1000)

		$('#saksi_rs').prop('disabled', false)
		$('#saksi_rs').select2('open')
		$('#saksi_rs').select2('close')
		if (mode === "lihat")
			$('#saksi_rs').prop('disabled', true)

		setTimeout(() => {
			dataListPerawat?.map(v => {
				if (v.text === $('#saksi_rs').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_saksi_rs')
				}
			})
		}, 1000)



	}

	$(document).ready(function() {
		let page = 1;


		const globalData = <?= $global_data; ?>;
		const {
			id_dokter
		} = globalData;


		const select2Configs = [{
				selector: '.diagnosa',
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>'
			},
			{
				selector: '.poli',
				url: '<?= site_url('backend/admission/getPoli'); ?>'
			},
			{
				selector: '.ruangan',
				url: '<?= site_url('backend/admission/getRuangan'); ?>'
			},
			{
				selector: '.perawat',
				url: '<?= site_url('backend/admission/getKaryawan'); ?>'
			},
			{
				selector: '.dokter',
				url: '<?= site_url('backend/admission/getKaryawan/5'); ?>'
			},
		];

		select2Configs.forEach(({
			selector,
			url
		}) => {
			$(selector).select2({
				ajax: {
					url: url,
					dataType: 'json',
					delay: 250,
					data: function(params) {
						return {
							q: params.term,
							limit: 100,
							offset: (page - 1) * 100,
						};
					},
					processResults: function(data) {
						const {
							items,
							more
						} = data.data;

						// Assign ke variabel tertentu jika perlu
						if (selector === '.perawat') {
							dataListPerawat = items;
						} else if (selector === '.dokter') {
							dataDokter = items;
						}

						const defaultOption = [{
							id: '',
							text: '--pilih--'
						}];
						const combinedItems = defaultOption.concat(items);

						return {
							results: combinedItems,
							pagination: {
								more: more
							},
						};
					},
					cache: true,
				},
				placeholder: '--pilih--',
				allowClear: true,
			});

			$(selector).val(null).trigger('change');

			// Infinite scroll handler
			$(selector).on('select2:open', function() {
				$('.select2-results__options').off('scroll').on('scroll', function() {
					const $this = $(this);
					if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
						page++;
						$(selector).select2('data', null); // Optional
					}
				});
			});
		});


		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});

		$('#saksi_rs').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_saksi_rs')
		});

		//================ new =====================//
	});
</script>