<div class="row">
	<div class="col-6 mb-4"><input type="text" class="form-control border-dark" name="nama_pasien"></div>
	<div class="col-6 mb-4"><input type="text" class="form-control border-dark" name="jenkel"></div>
	<div class="col-6 mb-4"><input type="text" class="form-control border-dark" name="tanggal_lahir"></div>
	<div class="col-6 mb-4"><input type="text" class="form-control border-dark" name="no_rm"></div>
</div>

<div class="table-responsive">
	<!-- First Table -->
	<table class="table table-bordered border-dark">
		<tbody>
			<tr>
				<td>Tanggal Masuk:</td>
				<td><input type="text" class="form-control border-dark" name="tgl_admit"></td>
				<td>Ruang Rawat Terakhir:</td>
				<td><input type="text" class="form-control border-dark" name="nama_ruangan"></td>
			</tr>
			<tr>
				<td>Tanggal Keluar / Meninggal:</td>
				<td><input type="date" class="form-control border-dark" name="tgl_discharge" ></td>
				<td>Penanggung Pembayaran:</td>
				<td><input type="text" class="form-control border-dark" name="penanggung_pembayaran"></td>
			</tr>
			<tr>
				<td>Dokter Penanggung Jawab (DPJP):</td>
				<td colspan="3"><input type="text" class="form-control border-dark" name="nama_dokter"></td>
			</tr>
			<tr>
				<td colspan="4">
					<div class="mb-3">Rawat tim dokter:</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="rawat_tim_dokter" id="tidak" value="tidak">
						<label class="form-check-label" for="tidak">Tidak</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="rawat_tim_dokter" id="ya" value="ya">
						<label class="form-check-label" for="ya">Ya, oleh:</label>
					</div>
					<div class="mb-2">
						<label class="form-label">1. dr</label>
						<select type="select" name="dokter_umum_1" id="dokter_umum_1" class="form-select"
							style="width: 100%;"></select>
					</div>
					<div class="mb-2">
						<label class="form-label">2. dr</label>
						<select type="select" name="dokter_umum_2" id="dokter_umum_2" class="form-select"
							style="width: 100%;"></select>
					</div>
					<div class="mb-2">
						<label class="form-label">3. dr</label>
						<select type="select" name="dokter_umum_3" id="dokter_umum_3" class="form-select"
							style="width: 100%;"></select>
					</div>
					<div class="mb-2">
						<label class="form-label">4. dr</label>
						<select type="select" name="dokter_umum_4" id="dokter_umum_4" class="form-select"
							style="width: 100%;"></select>
					</div>
				</td>
			</tr>
			<tr>
				<td>Alasan Dirawat</td>
				<td colspan="3"><textarea class="form-control border-dark" name="alasan_dirawat" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Diagnosis Masuk</td>
				<td colspan="3">
					<select type="select" name="diagnosa_masuk" id="diagnosa_masuk" class="form-control w-100 diagnosa">
					<!-- <input type="text" name="diagnosa_masuk" id="diagnosa_msk" class="form-control border-dark"> -->
				</td>
			</tr>
			<tr>
				<td>Diagnosis Keluar (Diagnosis Utama)</td>
				<td colspan="2">
					<select type="select" name="diagnosa_keluar" id="diagnosa_keluar" class="form-control w-100 diagnosa">
					<!-- <input type="text" name="diagnosa_keluar" id="diagnosa_klr" class="form-control border-dark"> -->
				</td>
				<td>ICD 10 <input type="text" class="form-control border-dark" name="icd10_utama"></td>
			</tr>
			<tr>
				<td>Diagnosis Sekunder</td>
				<td colspan="3">
					<div class="mb-2">
						<label class="form-label">1.</label>
						<textarea class="form-control border-dark" name="diagnosis_sekunder_1" rows="2"></textarea>
					</div>
					<div class="mb-2">
						<label class="form-label">2.</label>
						<textarea class="form-control border-dark" name="diagnosis_sekunder_2" rows="2"></textarea>
					</div>
					<div class="mb-2">
						<label class="form-label">3.</label>
						<textarea class="form-control border-dark" name="diagnosis_sekunder_3" rows="2"></textarea>
					</div>
					<div class="mb-2">
						<label class="form-label">4.</label>
						<textarea class="form-control border-dark" name="diagnosis_sekunder_4" rows="2"></textarea>
					</div>
					<div class="mb-2">
						<label class="form-label">5.</label>
						<textarea class="form-control border-dark" name="diagnosis_sekunder_5" rows="2"></textarea>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="fw-bold">Obat Selama di rumah sakit :</div>
					<div>(tuliskan obat yang pernah didapat, dan dianggap penting untuk diketahui)</div>
				</td>
				<td colspan="3"><textarea class="form-control border-dark" name="obat_rs" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Penyebab Kematian (Secara Klinis)</td>
				<td colspan="3"><textarea class="form-control border-dark" name="penyebab_kematian" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Pemeriksaan Fisik Yang Penting</td>
				<td colspan="3"><textarea class="form-control border-dark" name="pemeriksaan_fisik" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Laboratorium Yang Penting</td>
				<td colspan="3"><textarea class="form-control border-dark" name="laboratorium" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Penunjang Lain</td>
				<td colspan="3"><textarea class="form-control border-dark" name="penunjang_lain" rows="2"></textarea></td>
			</tr>
			<tr>
				<td>Tindakan / Operasi</td>
				<td colspan="2"><textarea class="form-control border-dark" name="tindakan_operasi" rows="2"></textarea></td>
				<td>ICD 9 CM <input type="text" class="form-control border-dark" name="icd9cm"></td>
			</tr>
			<tr>
				<td>Keadaan Umum Pasien Saat Pulang</td>
				<td colspan="3">
					<div class="row mb-2">
						<div class="col-4">Keadaan Umum:</div>
						<div class="col-8">
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keadaan_umum" id="baik" value="Baik">
								<label class="form-check-label" for="baik">Baik</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keadaan_umum" id="sedang" value="Sedang">
								<label class="form-check-label" for="sedang">Sedang</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="custom-checkbox-success" type="radio" name="keadaan_umum" id="buruk" value="Buruk">
								<label class="form-check-label" for="buruk">Buruk</label>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-2">GCS:</div>
						<div class="col-10">
							<div class="input-group">
								<span class="input-group-text">E</span>
								<input type="number" class="form-control border-dark" name="gcs_e">
								<span class="input-group-text">M</span>
								<input type="number" class="form-control border-dark" name="gcs_m">
								<span class="input-group-text">V</span>
								<input type="number" class="form-control border-dark" name="gcs_v">
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-text">Tensi</span>
								<input type="text" class="form-control border-dark" name="tensi">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-text">Respirasi</span>
								<input type="text" class="form-control border-dark" name="respirasi">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-text">Nadi</span>
								<input type="text" class="form-control border-dark" name="nadi">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-text">Suhu</span>
								<input type="text" class="form-control border-dark" name="suhu">
							</div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td rowspan="5">
					<p>Cara Pulang Pasien:</p>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="cara_pulang" id="pbj" value="PBJ">
						<label class="form-check-label" for="pbj">PBJ</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="cara_pulang" id="permintaan_sendiri"
							value="Pulang Atas Permintaan Sendiri">
						<label class="form-check-label col-10" for="permintaan_sendiri">Pulang Atas Permintaan Sendiri</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="cara_pulang" id="meninggal" value="Meninggal">
						<label class="form-check-label" for="meninggal">Meninggal</label>
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="cara_pulang" id="rujuk" value="Rujuk">
						<label class="form-check-label" for="rujuk">Rujuk</label>
						<input type="text" class="form-control border-dark mt-1" name="rujuk_ke">
					</div>
					<div class="form-check mb-2">
						<input class="custom-checkbox-success" type="radio" name="cara_pulang" id="lain_lain" value="Lain-lain">
						<label class="form-check-label" for="lain_lain">Lain-lain</label>
						<textarea class="form-control border-dark mt-1" name="keterangan_lain" rows="2"></textarea>
					</div>
				</td>
				<td colspan="3">Instruksi dan Edukasi Lanjutan (Follow Up)
					<textarea name="instruksi_edukasi" id="intruksi_edukasi" rows="3" class="form-control border-dark"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div class="row">
						<div class="col-md-6">
							<label class="form-label">Kontrol Tanggal:</label>
							<input type="date" class="form-control border-dark" name="kontrol_tanggal">
						</div>
						<div class="col-md-6">
							<label class="form-label">Di:</label>
							<input type="text" class="form-control border-dark" name="kontrol_lokasi">
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label class="form-label">Diet:</label>
					<input type="text" class="form-control border-dark" name="diet">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label class="form-label">Latihan:</label>
					<input type="text" class="form-control border-dark" name="latihan">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label class="form-label">Segera kembali ke RS, Langsung ke Gawat Darurat, bila terjadi:</label>
					<textarea class="form-control border-dark" name="kembali_ke_rs_bila" rows="2"></textarea>
				</td>
			</tr>
		</tbody>
	</table>

	<!-- Terapi Pulang Table -->

	<h3 class="mt-4">Terapi Pulang (Di isi dari SIMRS PMO CLIENT) <a href="http://192.168.100.126/pmo/client" target="_blank">>> link resep obat</a></h5>
	<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered border-dark">
				<tbody>
					<tr>
						<th>Nama Obat</th>
						<th>Jumlah</th>
						<th>Dosis</th>
						<th>Frekuensi</th>
						<th>Cara Pemberian</th>
						<th>Nama Obat</th>
						<th>Jumlah</th>
						<th>Dosis</th>
						<th>Frekuensi</th>
						<th>Cara Pemberian</th>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_1" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_1" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_1" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_1" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_1" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_6" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_6" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_6" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_6" style="width: 150px;"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_6" style="width: 150px;"></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_2"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_2"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_2"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_2"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_2"></td>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_7"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_7"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_7"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_7"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_7"></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_3"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_3"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_3"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_3"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_3"></td>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_8"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_8"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_8"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_8"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_8"></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_4"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_4"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_4"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_4"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_4"></td>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_9"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_9"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_9"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_9"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_9"></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_5"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_5"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_5"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_5"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_5"></td>
						<td><input type="text" class="form-control border-dark"  name="nama_obat_10"></td>
						<td><input type="text" class="form-control border-dark"  name="jumlah_obat_10"></td>
						<td><input type="text" class="form-control border-dark"  name="dosis_obat_10"></td>
						<td><input type="text" class="form-control border-dark"  name="frekuensi_obat_10"></td>
						<td><input type="text" class="form-control border-dark"  name="cara_pemberian_obat_10"></td>
					</tr>
					<!--  -->
					
				</tbody>
			</table>
		</div>
	</div>

	  <!-- Add Row Button -->
        <div class="my-3 float-end">
            <button type="button" class="btn btn-primary" onclick="addRow()">
                <span class="bi bi-plus"></span>
            </button>
        </div>

        <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
            <thead>
                <tr>
                    <td>Nama Obat</td>
                    <td>Jumlah Obat</td>
                    <td>Dosis</td>
                    <td>Frekuensi</td>
                    <td>Cara Pemberian</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

	<!-- Signature Section -->
	<div class="col-12 text-center mt-4">
		<div class="d-flex flex-row align-items-center gap-3 justify-content-center">
			<div class="col-md-4">
				<label class="form-label">Tanggal:</label>
				<input type="date" class="form-control border-dark" name="tanggal_tanda_tangan">
			</div>
			<div class="col-md-4">
				<label class="form-label">Jam:</label>
				<input type="time" class="form-control border-dark" name="jam_tanda_tangan">
			</div>
		</div>
		<div class="mb-5 mt-5 d-flex flex-column align-items-center gap-4">
			<p>Yang Membuat,</p>
			<label class="form-label">Nama Jelas dan Tanda Tangan</label>
			<img class="img-responsive center-block mt-2" style="width: 10%;" id="qr_dokter_umum" />
			<select type="select" name="dokter_umum" id="dokter_umum" class="form-select"
				style="width: 50%;"></select>
		</div>
	</div>
</div>

<script>
	let dataDokter = []
	const mode = "<?= $mode; ?>"

	  function addRow() {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const rowCount = table.rows.length;
        const newRow = table.insertRow(rowCount);

        newRow.classList.add("text-center");

        const cells = [
            ` <td><input type="text" name="nama_obat[]" id="" class="form-control border-dark"></td>`,
            `  <td><input type="text" name="jumlah_obat[]" id="" class="form-control border-dark"></td>`,
            ` <td><input type="text" name="dosis_obat[]" id="" class="form-control border-dark"></td>`,
            `  <td><input type="text" name="frekuensi_obat[]" id="" class="form-control border-dark"></td>`,
            `  <td><input type="text" name="pemberian_obat[]" id="" class="form-control border-dark"></td>`,
            `<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)" id="btn_delete"><span class="bi bi-trash"></span></button>`
        ];

        cells.forEach((cell, index) => {
            const newCell = newRow.insertCell(index);
            newCell.innerHTML = cell;
        });

        return newRow;
    }

    function deleteRow(button) {
        const row = button.parentElement.parentElement;
        row.remove();
    }

	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	$(document).ready(function() {
		let page = 1;
		listDokterUmumAPI()

		const globalData = <?= $global_data; ?>;
		const {
			id_dokter
		} = globalData;

		QRSignatureAPI(id_dokter, 'qr_dokter_dpjp')

		$('#diagnosa_masuk').select2({
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
		$('#diagnosa_masuk').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page++; // Increment page
					$('#diagnosa_masuk').select2('data', null); // Trigger new data fetch
				}
			});
		});

		$('#diagnosa_keluar').select2({
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
		$('#diagnosa_keluar').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					page++; // Increment page
					$('#diagnosa_keluar').select2('data', null); // Trigger new data fetch
				}
			});
		});

		for (let i = 1; i <= 4; i++) {
			$(`#dokter_umum_${i}`).on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, `qr_dokter_umum_${i}`)
			});
		}

		$('#dokter_umum').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_dokter_umum')
		});
	});

	function cbCommon(data) {

		 const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataLength = data.values().next().value.length;

        const params = Array.from({
                length: dataLength
            }, (_, rowIndex) =>
            Array.from(data.keys(), (key) => data.get(key)[rowIndex])
        );

        console.log(params);

        const rowLength = params.length;
        const colLength = params[0].length;

        for (let i = 0; i < rowLength; i++) {
            const tr = addRow();
            const inputs = tr.getElementsByTagName("input");

            for (let j = 0; j < colLength; j++) {
                inputs[j].value = params[i][j];
            }
        }
        
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


		for (let i = 1; i <= 4; i++) {
			$(`#dokter_umum_${i}`).prop('disabled', false)
			$(`#dokter_umum_${i}`).select2('open')
			$(`#dokter_umum_${i}`).select2('close')
			if (mode === "lihat") {
				$(`#dokter_umum_${i}`).prop('disabled', true)
			}
		}
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
		$('#dokter_umum_1').select2({
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
		$('#dokter_umum_2').select2({
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
		$('#dokter_umum_3').select2({
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
		$('#dokter_umum_4').select2({
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