<div class="row">
	<div class="form-group col-6">
		<label for="nama">Nama:</label>
		<input type="text" class="form-control border-dark" name="nama_pasien">
	</div>
	<div class="form-group col-6">
		<label for="tanggal_lahir">Tanggal Lahir:</label>
		<input type="text" class="form-control border-dark" id="tanggal_lahir" name="tanggal_lahir">
	</div>
	<div class="form-group col-6">
		<label>Umur:</label>
		<input type="text" class="form-control border-dark" name="umur">
	</div>
	<div class="form-group col-6">
		<label>Jenis Kelamin:</label>
		<input type="text" class="form-control border-dark" name="jenkel">
	</div>

	<div class="form-group col-6">
		<label for="no_rm">No. RM:</label>
		<input type="text" class="form-control border-dark" id="no_rm" name="no_rm">
	</div>
	<div class="form-group col-6">
		<label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
		<input type="text" class="form-control border-dark" id="tanggal_kunjungan" name="tgl_admit">
	</div>
	<div class="form-group col-6">
		<label for="diagnosa_medis">Diagnosa Medis</label>
		<select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa">
			<!--					<option value="">-- PILIH DIAGNOSA --</option>-->
		</select>
	</div>
</div>


<table class="table table-bordered mt-5 border-dark">
	<tr>
		<td colspan="2">
			<div class="form-group">
				<label>1. Resiko malnutrisi berdasarkan hasil skrining gizi oleh perawat, kondisi pasien termasuk
					kategori:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="resiko_ringan"
						name="resiko_ringan">
					<label class="form-check-label" for="resiko_ringan">Risiko ringan (SKOR rendah 0)</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="resiko_sedang"
						name="sedang">
					<label class="form-check-label" for="resiko_sedang">Risiko sedang (SKOR sedang 1)</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="resiko_tinggi"
						name="resiko_tinggi">
					<label class="form-check-label" for="resiko_tinggi">Risiko tinggi (SKOR tinggi ≥ 2)</label>
				</div>
			</div>
			<div class="form-group d-flex flex-row align-items-center gap-3">
				<label for="bb">BB:</label>
				<div class="input-group">
					<input type="text" class="form-control border-dark" name="bb">
					<span class="input-group-text">kg</span>
				</div>
				<label>TB: </label>
				<div class="input-group">
					<input type="text" class="form-control border-dark" name="tb">
					<span class="input-group-text">cm</span>
				</div>
				<label>IMT: </label>
				<div class="input-group">
					<input type="text" class="form-control border-dark" name="imt">
					<span class="input-group-text">kg/m2</span>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
				<label>2. Pasien mempunyai kondisi khusus:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="kondisi_khusus_tidak"
						name="kondisi_khusus_tidak">
					<label class="form-check-label" for="kondisi_khusus_tidak">Tidak</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="kondisi_khusus_ya"
						name="kondisi_khusus_ya">
					<label class="form-check-label" for="kondisi_khusus_ya">Ya</label>
					<textarea class="form-control border-dark mt-2" type="textarea" name="kondisi_khusus_jelaskan"
						rows="2"></textarea>
				</div>


			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
				<label>3. Alergi Makanan:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_telur_udang"
						name="alergi_telur_udang">
					<label class="form-check-label" for="alergi_telur_udang">Telur Udang</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_susu_sapi"
						name="alergi_susu_sapi">
					<label class="form-check-label" for="alergi_susu_sapi">Susu Sapi & produk olahannya</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_ikan" name="alergi_ikan">
					<label class="form-check-label" for="alergi_ikan">Ikan</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_kacang"
						name="alergi_kacang">
					<label class="form-check-label" for="alergi_kacang">Kacang kedelai / tanah & olahannya</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_hazelnut"
						name="alergi_hazelnut">
					<label class="form-check-label" for="alergi_hazelnut">Hazelnut / Almond</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_gluten"
						name="alergi_gluten">
					<label class="form-check-label" for="alergi_gluten">Gluten / gandum</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="alergi_lainnya"
						name="alergi_lainnya">
					<label class="form-check-label" for="alergi_lainnya">Lainnya</label>
					<input type="text" class="form-control border-dark mt-2" id="alergi_lainnya_jelaskan"
						name="alergi_lainnya_jelaskan">
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
				<label>4. Preskripsi diet:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="diet_biasa" name="diet_biasa">
					<label class="form-check-label" for="diet_biasa">Makan Biasa</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="diet_lunak" name="diet_lunak">
					<label class="form-check-label" for="diet_lunak">Makan Lunak</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="diet_bubur_saring"
						name="diet_bubur_saring">
					<label class="form-check-label" for="diet_bubur_saring">Bubur saring</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="diet_sonde_vuding"
						name="diet_sonde_vuding">
					<label class="form-check-label" for="diet_sonde_vuding">Sonde Vuding</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="diet_khusus" name="diet_khusus">
					<label class="form-check-label" for="diet_khusus">Diet Khusus</label>
					<input type="text" class="form-control border-dark mt-2" id="diet_khusus_jelaskan" name="diet_khusus_jelaskan">
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
				<label>5. Tindak lanjut:</label>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="tindak_lanjut_perlu"
						name="tindak_lanjut_perlu">
					<label class="form-check-label" for="tindak_lanjut_perlu">Perlu asuhan gizi (lanjut ke Proses Asuhan
						Gizi Terstandar)</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="checkbox" id="tindak_lanjut_belum"
						name="tindak_lanjut_belum">
					<label class="form-check-label" for="tindak_lanjut_belum">Belum perlu asuhan gizi</label>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="form-group">
				<label for="kesimpulan">6. Kesimpulan:</label>
				<textarea class="form-control border-dark" id="kesimpulan" name="kesimpulan" rows="5"></textarea>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="d-flex flex-column align-items-end gap-3 mt-5">
				<div class="d-flex flex-row align-items-center gap-3">
					<label for="" class="flex-shrink-0">Tanggal / jam</label>
					<input type="datetime-local" name="footer_date" class="form-control border-dark" value="<?= date('Y-m-d H:i') ?>"> WIB
				</div>
				<p class="text-center">Ahli Gizi</p>
				<div class="text-end">
					<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_ahli_gizi" />
				</div>
				<select type="select" name="ahli_gizi" id="ahli_gizi" class="form-select perawat" style="width: 4	0%;"></select>
			</div>
		</td>
	</tr>
</table>

<div class="container mt-4">
	<h5>ASSEMEN GIZI</h5>
	<table class="table table-bordered mb-4 border-dark">
		<thead>
			<tr>
				<th>Anthropometri Dewasa</th>
				<th>Anthropometri Anak</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="align-content-start">
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="umurDewasaThn" placeholder="Umur">
						<span class="input-group-text">Thn</span>
						<input type="text" class="form-control border-dark" name="umurDewasaBln" placeholder="Bln">
						<span class="input-group-text">Bln</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="bbDewasa" placeholder="BB">
						<span class="input-group-text">kg</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="tbDewasa" placeholder="TB">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="imtDewasa" placeholder="IMT">
						<span class="input-group-text">kg</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="llaDewasa" placeholder="LLA">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="tinggiLututDewasa" placeholder="Tinggi Lutut">
						<span class="input-group-text">cm</span>
					</div>
				</td>
				<td>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="umurAnakThn" placeholder="Umur">
						<span class="input-group-text">Thn</span>
						<input type="text" class="form-control border-dark" name="umurAnakBln" placeholder="Bln">
						<span class="input-group-text">Bln</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="bbAnak" placeholder="BB">
						<span class="input-group-text">kg</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="tbAnak" placeholder="TB">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="bbuAnak" placeholder="BB/U">
						<span class="input-group-text">SD</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="tbuAnak" placeholder="TB/U">
						<span class="input-group-text">SD</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="imtAnak" placeholder="IMT">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="llaAnak" placeholder="LLA">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="lkAnak" placeholder="LK">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control border-dark" name="bbiAnak" placeholder="BBI">
						<span class="input-group-text">kg</span>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

	<!-- Biokimia Section -->
	<h5>Biokimia</h5>
	<div class="mb-3">
		<textarea class="form-control border-dark" id="biokimia" name="biokimia" rows="3"></textarea>
	</div>

	<!-- Klinik/Fisik Section -->
	<h5>Klinik / Fisik</h5>
	<div class="mb-3">
		<textarea class="form-control border-dark" id="klinikFisik" name="klinikFisik" rows="3"></textarea>
	</div>

	<!-- ASUHAN GIZI Section -->
	<h5>ASUHAN GIZI</h5>
	<div class="mb-3">
		<label for="riwayatPersonal" class="form-label">Riwayat Personal</label>
		<textarea class="form-control border-dark" id="riwayatPersonal" name="riwayatPersonal" rows="3"></textarea>
	</div>
	<div class="mb-3">
		<label for="diagnosisGizi" class="form-label">Diagnosis Gizi</label>
		<input type="text" name="diagnosisGizi" class="form-control border-dark">
		<!-- <select type="select" name="diagnosisGizi" id="diagnosisGizi" class="form-select diagnosa" style="width: 100%;"></select> -->

	</div>
	<div class="mb-3">
		<label for="intervensiGizi" class="form-label">Intervensi Gizi / Planing</label>
		<textarea class="form-control border-dark" id="intervensiGizi" name="intervensiGizi" rows="3"></textarea>
	</div>
	<div class="mb-3">
		<label for="monitoringEvaluasi" class="form-label">Monitoring dan Evaluasi</label>
		<textarea class="form-control border-dark" id="monitoringEvaluasi" name="monitoringEvaluasi" rows="3"></textarea>
	</div>
	<div class="d-flex align-items-end gap-2 flex-column">
		<div>
			<label for="">Tanda Tangan</label>
		</div>
		<div class="float-end">
			<div class="text-end">
				<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_perawat_pengkaji" />
			</div>
			<select type="select" name="perawat_pengkaji" id="perawat_pengkaji" class="form-select perawat" style="width: 100%;"></select>
			<p class="text-end">(Dietesien/Ahli Gizi)</p>
		</div>
	</div>

	<script>
		const mode = "<?= $mode; ?>"
		let dataListPerawat = []
		let dataDokter = []

		$(document).delay(1000).queue(function() {
			callMarkerManager();
		});

		function cbCommon(data) {
			populateFormFields(data);


			$('#perawat_pengkaji').prop('disabled', false)
			$('#perawat_pengkaji').select2('open')
			$('#perawat_pengkaji').select2('close')
			if (mode === "lihat")
				$('#perawat_pengkaji').prop('disabled', true)

			setTimeout(() => {
				dataListPerawat?.map(v => {
					if (v.text === $('#perawat_pengkaji').select2('data')[0].text) {
						QRSignatureAPI(v.id_original, 'qr_perawat_pengkaji')
					}
				})
			}, 1000)

			$('#ahli_gizi').prop('disabled', false)
			$('#ahli_gizi').select2('open')
			$('#ahli_gizi').select2('close')
			if (mode === "lihat")
				$('#ahli_gizi').prop('disabled', true)

			setTimeout(() => {
				dataListPerawat?.map(v => {
					if (v.text === $('#ahli_gizi').select2('data')[0].text) {
						QRSignatureAPI(v.id_original, 'qr_ahli_gizi')
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


			$('#ahli_gizi').on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, 'qr_ahli_gizi')
			});

			$('#perawat_pengkaji').on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, 'qr_perawat_pengkaji')
			});

			//================ new =====================//
		});
	</script>