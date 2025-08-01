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
					<input class="custom-checkbox-success" type="radio" name="resiko_malnutrisi" id="resiko_ringan"
						value="ringan">
					<label class="form-check-label" for="resiko_ringan">Risiko ringan (SKOR rendah 0)</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="resiko_malnutrisi" id="resiko_sedang"
						value="sedang">
					<label class="form-check-label" for="resiko_sedang">Risiko sedang (SKOR sedang 1)</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="resiko_malnutrisi" id="resiko_tinggi"
						value="tinggi">
					<label class="form-check-label" for="resiko_tinggi">Risiko tinggi (SKOR tinggi ≥ 2)</label>
				</div>
			</div>
			<div class="form-group d-flex flex-row align-items-center gap-3">
				<label for="bb">BB:</label>
				<div class="input-group">
					<input type="number" class="form-control border-dark" name="bb">
					<span class="input-group-text">kg</span>
				</div>
				<label>TB: </label>
				<div class="input-group">
					<input type="number" class="form-control border-dark" name="tb">
					<span class="input-group-text">cm</span>
				</div>
				<label>IMT: </label>
				<div class="input-group">
					<input type="number" class="form-control border-dark" name="imt">
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
					<input class="custom-checkbox-success" type="radio" name="kondisi_khusus" id="kondisi_khusus_tidak"
						value="tidak">
					<label class="form-check-label" for="kondisi_khusus_tidak">Tidak</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="kondisi_khusus" id="kondisi_khusus_ya"
						value="ya">
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
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_telur_udang"
						value="telur_udang">
					<label class="form-check-label" for="alergi_telur_udang">Telur Udang</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_susu_sapi"
						value="susu_sapi">
					<label class="form-check-label" for="alergi_susu_sapi">Susu Sapi & produk olahannya</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_ikan" value="ikan">
					<label class="form-check-label" for="alergi_ikan">Ikan</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_kacang"
						value="kacang">
					<label class="form-check-label" for="alergi_kacang">Kacang kedelai / tanah & olahannya</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_hazelnut"
						value="hazelnut">
					<label class="form-check-label" for="alergi_hazelnut">Hazelnut / Almond</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_gluten"
						value="gluten">
					<label class="form-check-label" for="alergi_gluten">Gluten / gandum</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="alergi_makanan" id="alergi_lainnya"
						value="lainnya">
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
					<input class="custom-checkbox-success" type="radio" name="preskripsi_diet" id="diet_biasa" value="biasa">
					<label class="form-check-label" for="diet_biasa">Makan Biasa</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="preskripsi_diet" id="diet_lunak" value="lunak">
					<label class="form-check-label" for="diet_lunak">Makan Lunak</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="preskripsi_diet" id="diet_bubur_saring"
						value="bubur_saring">
					<label class="form-check-label" for="diet_bubur_saring">Bubur saring</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="preskripsi_diet" id="diet_sonde_vuding"
						value="sonde_vuding">
					<label class="form-check-label" for="diet_sonde_vuding">Sonde Vuding</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="preskripsi_diet" id="diet_khusus" value="khusus">
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
					<input class="custom-checkbox-success" type="radio" name="tindak_lanjut" id="tindak_lanjut_perlu"
						value="perlu">
					<label class="form-check-label" for="tindak_lanjut_perlu">Perlu asuhan gizi (lanjut ke Proses Asuhan
						Gizi Terstandar)</label>
				</div>
				<div class="form-check">
					<input class="custom-checkbox-success" type="radio" name="tindak_lanjut" id="tindak_lanjut_belum"
						value="belum">
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
					<label for="">Tanggal</label>
					<input type="date" name="footer_date" class="form-control border-dark">
					<label for="">Jam</label>
					<input type="time" name="footer_time" class="form-control border-dark"> WIB
				</div>
				<p class="text-center">Ahli Gizi</p>
				<img class="marker-image" style="width: 500px; height:200px;"
					src="<?= base_url() . 'assets/images/form/base-ttd.png' ?>"
					data-input-name="image_drawer_state_base_ttd" alt="">
				<input type="hidden" id="image_drawer_state_base_ttd" name="image_drawer_state_base_ttd" value="" />
				<textarea type="textarea" class="form-control border-dark w-50" name="ahli_gizi"></textarea>
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
						<input type="number" class="form-control border-dark" name="bbDewasa" placeholder="BB">
						<span class="input-group-text">kg</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="tbDewasa" placeholder="TB">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="imtDewasa" placeholder="IMT">
						<span class="input-group-text">kg</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="llaDewasa" placeholder="LLA">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="tinggiLututDewasa" placeholder="Tinggi Lutut">
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
						<input type="number" class="form-control border-dark" name="bbAnak" placeholder="BB">
						<span class="input-group-text">kg</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="tbAnak" placeholder="TB">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="bbuAnak" placeholder="BB/U">
						<span class="input-group-text">SD</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="tbuAnak" placeholder="TB/U">
						<span class="input-group-text">SD</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="imtAnak" placeholder="IMT">
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="llaAnak" placeholder="LLA">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="lkAnak" placeholder="LK">
						<span class="input-group-text">cm</span>
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control border-dark" name="bbiAnak" placeholder="BBI">
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
		<textarea class="form-control border-dark" id="diagnosisGizi" name="diagnosisGizi" rows="3"></textarea>
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
			<img class="marker-image" style="width: 250px; height:200px;"
				src="<?= base_url() . 'assets/images/form/base-ttd.png' ?>"
				data-input-name="image_drawer_state_base_ttd2" alt="">
		</div>
		<div>
			<input type="hidden" id="image_drawer_state_base_ttd2" name="image_drawer_state_base_ttd2" value="" />
		</div>
		<p>(Dietesien/Ahli Gizi)</p>
	</div>
</div>

<script>
	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});
	$(document).ready(function() {
		let page = 1; // Track the current page
		// let searchQuery = ''; // Track the search query

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
	});

	function cbCommon(data) {
		populateFormFields(data);
	}
</script>