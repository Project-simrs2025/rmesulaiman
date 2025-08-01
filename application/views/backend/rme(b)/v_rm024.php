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
			<th class="col-1">No.</th>
			<th class="col-3">Jenis Informasi</th>
			<th class="col-7">Isi Informasi</th>
			<th class="col-1">Tandai &check;</th>
		</tr>
	</tbody>
	<tbody>
		<tr>
			<td class="text-center">1</td>
			<td>Diagnosis (WD & DD)</td>
			<td><textarea class="form-control border-dark" name="diagnosis" placeholder="Status Fisik ASA" rows="2"></textarea></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_diagnosis"></td>
		</tr>
		<tr>
			<td class="text-center">2</td>
			<td>Dasar Diagnosis</td>
			<td>
				<div class="d-flex flex-column gap-2">
					<div>
						<textarea name="klinis" id="" class="form-control border-dark" rows="1" placeholder="klinis"></textarea>
					</div>
					<div>
						<textarea name="radiologi" id="" class="form-control border-dark" rows="1" placeholder="radiologi"></textarea>
					</div>
					<div>
						<textarea name="ekg" id="" class="form-control border-dark" rows="1" placeholder="ekg"></textarea>
					</div>
					<div>
						<textarea name="lab" id="" class="form-control border-dark" rows="1" placeholder="lab"></textarea>
					</div>
				</div>
			</td>
			<td>
				<div style="height: 180px;" class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_dasar_diagnosis"></div>
			</td>
		</tr>
		<tr>
			<td class="text-center">3</td>
			<td>Tindakan Kedokteran</td>
			<td>
				Anestesi / Pembiusan<br>
				<div class="d-flex align-items-center gap-2">
					<div class="col-2">umum :</div> <textarea name="pembiusan_umum" id="" class="form-control border-dark" rows="1" placeholder="Intubasi/LMA/FM/TIVA"></textarea>
				</div>
				<div class="d-flex align-items-center gap-2">
					<div class="col-2">Regional :</div> <textarea name="pembiusan_regional" id="" class="form-control border-dark" rows="1" placeholder="Spinal/Epidural/Blok Perifer"></textarea>
				</div>
			</td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_tindakan_kedokteran"></td>
		</tr>
		<tr>
			<td class="text-center">4</td>
			<td>Indikasi Tindakan</td>
			<td><textarea class="form-control border-dark" name="indikasi_tindakan" rows="1" placeholder="memfasilitasi operasi, menghilangkan rasa sakit saat operasi"></textarea></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_indikasi_tindakan"></td>
		</tr>
		<tr>
			<td class="text-center">5</td>
			<td>Tata Cara</td>
			<td><textarea class="form-control border-dark" name="tata_cara" rows="1"></textarea></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_tata_cara"></td>
		</tr>
		<tr>
			<td class="text-center">6</td>
			<td>Risiko</td>
			<td><input type="text" class="form-control border-dark" name="risiko"></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_risiko"></td>
		</tr>
		<tr>
			<td class="text-center">7</td>
			<td>Komplikasi</td>
			<td>
				<b>1. Anestesi Umum</b>
				<div class="d-flex flex-column gap-2">
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="chechk_sistem_pernapasan" id="chechk_sistem_pernapasan" class="custom-checkbox-success">
						<label for="chechk_sistem_pernapasan" class="col-11">Sistem Pernapasan : kejang dan penyempitan nafas, kekurangan kadar Co<sub>2</sub> dalam darah, aspirasi pneumonia / masuknya isi lambung kedalam saluran nafas/paru</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_jantung" id="check_jantung" class="custom-checkbox-success">
						<label for="check_jantung" class="col-11">Jantung dan Pembuluh darah tekanan darah turun, tekanan darah naik, gangguan irama jantung sampai henti jantung.</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_sistem_saraf" id="check_sistem_saraf" class="custom-checkbox-success">
						<label for="check_sistem_saraf" class="col-11">Sistem saraf : kejang, bangun lambat, trauma saraf tepi</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_tindakan_laringoskopi" id="check_tindakan_laringoskopi" class="custom-checkbox-success">
						<label for="check_tindakan_laringoskopi" class="col-11">Tindakan laringoskopi intubasi(gigi patah, luka mulut, pendarahan)</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_suhu_tubuh" id="check_suhu_tubuh" class="custom-checkbox-success">
						<label for="check_suhu_tubuh" class="col-11">Suhu tubuh naik/turun</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_efek_merugikan_subuh" id="check_efek_merugikan_subuh" class="custom-checkbox-success">
						<label for="check_efek_merugikan_subuh" class="col-11">Efek Merugikan obat dan alergi(syok nafistik sampai meninggal dunia)</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_cedera_akibat" id="check_cedera_akibat" class="custom-checkbox-success">
						<label for="check_cedera_akibat" class="col-11">Cedera Akibat posisi saat operasi :</label>
					</div>
					<ol>
							<div class="d-flex align-items-center gap-2">
								<div class="d-flex align-items-center gap-2 col-3">
									<input class="custom-checkbox-success" type="checkbox" id="muntah_cedera_operasi" name="muntah_cedera_operasi">
									<label for="muntah_cedera_operasi">Muntah</label>
								</div>
								<div class="d-flex align-items-center gap-2 col-4">
									<input class="custom-checkbox-success" type="checkbox" id="perut_kembung_cedera_operasi" name="perut_kembung_cedera_operasi">
									<label for="perut_kembung_cedera_operasi">Perut Kembung</label>
								</div>
								<div class="d-flex align-items-center gap-2 col-4">
									<input class="custom-checkbox-success" type="checkbox" id="tenggorkan_serak_cedera_operasi" name="tenggorkan_serak_cedera_operasi">
									<label for="tenggorkan_serak_cedera_operasi">Tenggorakan Serak</label>
								</div>
							</div>
						</ol>
					<b>2. Anestesi Regional : Spinal / Epidural</b>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_komplikasi_segera" id="check_komplikasi_segera" class="custom-checkbox-success">
						<label for="check_komplikasi_segera" class="col-11">komplikasi Segera</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_penurunan_tek_darah" id="check_penurunan_tek_darah" class="custom-checkbox-success">
						<label for="check_penurunan_tek_darah" class="col-11">Penurunan Tekanan Darah</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_anestesi_spinal_total" id="check_anestesi_spinal_total" class="custom-checkbox-success">
						<label for="check_anestesi_spinal_total" class="col-11">Anestesi spinal total (penurunan kesadaran, penurunan denyut jantung)</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_reaksi_toksik" id="check_reaksi_toksik" class="custom-checkbox-success">
						<label for="check_reaksi_toksik" class="col-11">Reaksi Toksik (kejang, henti jantung)</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_reaksi_alergi" id="check_reaksi_alergi" class="custom-checkbox-success">
						<label for="check_reaksi_alergi" class="col-11">Reaksi Alergi(syok anfilatik sampai meninggal)</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_komplikasi_lanjutan" id="check_komplikasi_lanjutan" class="custom-checkbox-success">
						<label for="check_komplikasi_lanjutan" class="col-11">komplikasi lanjutan</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_nyeri_kepala_cekot" id="check_nyeri_kepala_cekot" class="custom-checkbox-success">
						<label for="check_nyeri_kepala_cekot" class="col-11">Nyeri Kepala cekot-cekot</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_nyeri_punggung" id="check_nyeri_punggung" class="custom-checkbox-success">
						<label for="check_nyeri_punggung" class="col-11">Nyeri Punggung</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_tidak_bs_kemih" id="check_tidak_bs_kemih" class="custom-checkbox-success">
						<label for="check_tidak_bs_kemih" class="col-11">Tidak bisa Berkemih</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_cedera_saraf" id="check_cedera_saraf" class="custom-checkbox-success">
						<label for="check_cedera_saraf" class="col-11">Cedara Saraf</label>
					</div>
					<div class="d-flex align-items-start gap-2">
						<input type="checkbox" name="check_pendarahan" id="check_pendarahan" class="custom-checkbox-success">
						<label for="check_pendarahan" class="col-11">Pendarahan</label>
					</div>
				</div>
			</td>
			<td class="text-center">
				<div style="height: 700px;"><input type="checkbox" class="custom-checkbox-success " name="tandai_komplikasi"></div>
			</td>
		</tr>
		<tr>
			<td class="text-center">8</td>
			<td>Prognosis</td>
			<td><textarea class="form-control border-dark" name="prognosis" rows="1"></textarea></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_prognosis"></td>
		</tr>
		<tr>
			<td class="text-center">9</td>
			<td>Alternatif & Risiko</td>
			<td><textarea class="form-control border-dark" name="alternatif_risiko" rows="1"></textarea></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_alternatif_risiko"></td>
		</tr>
		<tr>
			<td class="text-center">10</td>
			<td>Lain-lain</td>
			<td><textarea class="form-control border-dark" name="lain-lain" rows="1"></textarea></td>
			<td class="text-center"><input type="checkbox" class="custom-checkbox-success " name="tandai_lain-lain"></td>
		</tr>
		<tr>
			<td colspan="3">
				Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas dan memberikan
				kesempatan untuk bertanya dan/atau berdiskusi
			</td>
			<td>
				<div class="text-center">Tanda Tangan Dokter</div>
				<div class="text-center">
					<img class="img-responsive center-block mt-2" style="width: 50%;" id="qr_dokter_umum" />
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
				<div class="text-center">Tanda Tangan</div>
				<img class="marker-image" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
					style="width: 130px; height:130px" data-input-name="image_drawer_state_image_4" />
				<input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4"
					value="" />
				<input type="text" name="nama_hub_pasien" class="form-control border-dark">
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