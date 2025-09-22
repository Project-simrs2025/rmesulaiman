<div class="mb-3">
	<label class="form-label">NO. RM :</label>
	<input type="text" class="form-control border-dark" name="no_rm">
</div>
<div class="mb-3">
	<label class="form-label">NAMA PASIEN :</label>
	<input type="text" class="form-control border-dark" name="nama_pasien">
</div>
<div class="mb-3">
	<label class="form-label">KELAS / RUANG :</label>
	<input type="text" class="form-control border-dark" name="nama_rung" value="<?= $kelas . ' / ' . $nama_ruangan; ?>" disabled>
</div>

<table class="table table-bordered border-dark">
	<thead class="table-light">
		<tr>
			<th>KELENGKAPAN BERKAS</th>
			<th>TANGGAL PEMERIKSAAN</th>
			<th>TT & NAMA PEMERIKSA</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody id="table-body">
		<tr>
			<td>
				<div>Kartu Peserta : </div>
				<div class="d-flex justify-content-between flex-wrap">
					<div class="col-6 my-2">
						<div class="d-flex gap-2 my-2">
							<input type="radio" name="kartu_peserta" class="custom-checkbox-success" value="berkas_bpjs_kartu" id="berkas_bpjs_kartu"><label for="berkas_bpjs_kartu">BPJS</label>
						</div>
						<div class="d-flex gap-2 my-2">
							<input type="radio" name="kartu_peserta" class="custom-checkbox-success" value="berkas_jampersal_kartu" id="berkas_jampersal_kartu"><label for="berkas_jampersal_kartu">Jampersal</label>
						</div>
						<div class="d-flex gap-2 my-2">
							<input type="radio" name="kartu_peserta" class="custom-checkbox-success" value="berkas_jasa_rajarja_kartu" id="berkas_jasa_rajarja_kartu"><label for="berkas_jasa_rajarja_kartu">Jasa Raharja</label>
						</div>
					</div>
					<div class="col-6 my-2">
						<div class="d-flex gap-2 my-2">
							<input type="radio" name="kartu_peserta" class="custom-checkbox-success" value="berkas_bpjs_ketenagakerjaan_kartu" id="berkas_bpjs_ketenagakerjaan_kartu"><label for="berkas_bpjs_ketenagakerjaan_kartu">BPJS ketenagakerjaan</label>
						</div>
						<div class="d-flex gap-2 my-2">
							<input type="radio" name="kartu_peserta" class="custom-checkbox-success" value="berkas_jamkesda_kartu" id="berkas_jamkesda_kartu"><label for="berkas_jamkesda_kartu">Jamkesda</label>
						</div>
						<div class="d-flex gap-2 my-2">
							<input type="radio" name="kartu_peserta" class="custom-checkbox-success" value="berkas_dll_input_kartu" id="berkas_dll_input_kartu"><label for="berkas_dll_input_kartu">Dan Lain-lain</label>
						</div>
					</div>
				</div>

			</td>
			<td><input type="date" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
			<td class="text-center">
				<img class="marker-image" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>"
					data-input-name="image_drawer_state_image_1" alt="" style="width: 20vw">
				<input type="hidden" id="image_drawer_state_image_1" name="image_drawer_state_image_1" value="" />
				<input type="text" class="form-control border-dark" name="nama_pemeriksa[]">
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" class="custom-checkbox-success" name="berkas_check_ktp"> KTP, Kartu Keluarga (Resi)</td>
			<td><input type="date" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
			<td class="text-center">
				<img class="marker-image" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>"
					data-input-name="image_drawer_state_image_2" alt="" style="width: 20vw">
				<input type="hidden" id="image_drawer_state_image_2" name="image_drawer_state_image_2" value="" />
				<input type="text" class="form-control border-dark" name="nama_pemeriksa[]">
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" class="custom-checkbox-success" name="berkas_check_surat"> Surat Rujukan (RS lain, Puskesmas, Balai Pengobatan,
				Klinik, dll)
			</td>
			<td><input type="date" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
			<td class="text-center">
				<img class="marker-image" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>"
					data-input-name="image_drawer_state_image_3" alt="" style="width: 20vw">
				<input type="hidden" id="image_drawer_state_image_3" name="image_drawer_state_image_3" value="" />
				<input type="text" class="form-control border-dark" name="nama_pemeriksa[]">
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" class="custom-checkbox-success" name="berkas_check_nota"> Nota / Kwitansi Pembayaran di Rumah Sakit</td>
			<td><input type="date" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
			<td class="text-center"><img class="marker-image" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>"
					data-input-name="image_drawer_state_image_4" alt="" style="width: 20vw">
				<input type="hidden" id="image_drawer_state_image_4" name="image_drawer_state_image_4" value="" />
				<input type="text" class="form-control border-dark" name="nama_pemeriksa[]">
			</td>
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" class="custom-checkbox-success" name="berkas_check_rincian"> Perincian biaya di Rumah Sakit</td>
			<td><input type="date" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
			<td class="text-center">
				<img class="marker-image" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>"
					data-input-name="image_drawer_state_image_5" alt="" style="width: 20vw">
				<input type="hidden" id="image_drawer_state_image_5" name="image_drawer_state_image_5" value="" />
				<input type="text" class="form-control border-dark" name="nama_pemeriksa[]">
			</td>
			<td></td>
		</tr>
	</tbody>
</table>

<button type="button" class="btn btn-primary" onclick="tambahBaris()">Tambah Berkas Lainnya</button>

<script>
	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	let counter = 6;

	function tambahBaris() {
		let tbody = document.getElementById("table-body");
		let newRow = document.createElement("tr");

		newRow.innerHTML = `
                <td><div class="d-flex flex-row gap-2"><input type="hidden" name="berkas_check[]" value="false"><input type="checkbox" class="custom-checkbox-success" name="berkas_check[]" value="true"><input type="text" class="form-control border-dark" name="berkas_lainnya[]" placeholder="Berkas Lainnya"></div></td>
                <td><input type="date" class="form-control border-dark" name="tanggal_pemeriksaan[]"></td>
                <td><img class="marker-image" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" data-input-name="image_drawer_state_image_${counter}" alt="" style="width: 20vw">
			<input type="hidden" id="image_drawer_state_image_${counter}" name="image_drawer_state_image_${counter}" value=""/> <input type="text" class="form-control border-dark" name="nama_pemeriksa[]"></td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapusBaris(this)">Hapus</button>
                </td>
            `;
		tbody.appendChild(newRow);
		callMarkerManager()
		counter++
	}

	function hapusBaris(button) {
		if (counter > 6)
			counter--
		let row = button.parentNode.parentNode;
		row.remove();
	}

	function cbCommon(data) {
		const tableBody = document.getElementById("table-body");
		let rows = tableBody.getElementsByTagName("tr");

		const tanggalPemeriksaan = data.get("tanggal_pemeriksaan") || [];
		const namaPemeriksa = data.get("nama_pemeriksa") || [];
		const berkasLainnya = data.get("berkas_lainnya") || [];
		const berkasCheck = data.get("berkas_check") || [];

		const maxLength = Math.max(tanggalPemeriksaan.length, namaPemeriksa.length, berkasLainnya.length, berkasCheck.length);

		// Menambahkan baris jika diperlukan
		while (rows.length < maxLength) {
			tambahBaris();
			rows = tableBody.getElementsByTagName("tr"); // Memperbarui referensi baris
		}
		populateFormFields(data, false);

		let currentIndex = 0
		for (let i = 0; i < maxLength; i++) {
			const row = rows[i];
			const tanggalInput = row.querySelector('input[name="tanggal_pemeriksaan[]"]');
			const namaPemeriksaInput = row.querySelector('input[name="nama_pemeriksa[]"]');
			const berkasLainnyaInput = row.querySelector('input[name="berkas_lainnya[]"]');
			const berkasCheckInput = row.querySelector('input[name="berkas_check[]"][type="checkbox"]');

			if (tanggalInput && tanggalPemeriksaan[i]) {
				tanggalInput.value = tanggalPemeriksaan[i];
			}
			if (namaPemeriksaInput && namaPemeriksa[i]) {
				namaPemeriksaInput.value = namaPemeriksa[i];
			}

			if (berkasLainnyaInput && berkasLainnya[i - 5]) {
				berkasLainnyaInput.value = berkasLainnya[i - 5];
			}

			if (i >= 5 && berkasCheckInput) {
				// Memeriksa checkbox
				if (berkasCheck[i] === "true") {
					berkasCheckInput.checked = true;
				} else {
					berkasCheckInput.checked = false;
				}
			}
		}
	}
</script>