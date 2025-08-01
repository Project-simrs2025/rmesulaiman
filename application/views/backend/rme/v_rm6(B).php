<div class="container-fluid p-4 d-flex flex-column gap-3">
	<div class="row">
		<div class="col-md-6">
			<div class="mb-3">
				<label for="nama_pasien" class="form-label">Nama Pasien</label>
				<input type="text" class="form-control border-dark" id="patientName" name="nama_pasien" disabled>
			</div>
			<div class="mb-3">
				<label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
				<input type="date" class="form-control border-dark" id="tanggal_lahir" name="tanggal_lahir" disabled>
			</div>
			<div class="mb-3">
				<label for="jenkel" class="form-label">Jenis Kelamin</label>
				<input type="text" class="form-control border-dark" id="jenkel" name="jenkel" disabled>
			</div>
			<div class="mb-3">
				<label for="no_rm" class="form-label">No Rm</label>
				<input type="text" class="form-control border-dark" id="no_rm" name="no_rm" disabled>
			</div>

		</div>
		<div class="col-md-6">
			<div class="mb-3">
				<label for="nama_agama" class="form-label">Agama</label>
				<input type="text" class="form-control border-dark" id="religion" name="nama_agama" disabled>
			</div>
			<div class="mb-3">
				<label for="suku_bangsa" class="form-label">Suku / Bangsa</label>
				<input type="text" class="form-control border-dark" id="suku_bangsa" name="nama_suku">
			</div>
			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<input type="text" class="form-control border-dark" id="alamat" name="alamat" disabled>
			</div>
			<div class="mb-3">
				<label for="nik" class="form-label">Nik</label>
				<input type="text" class="form-control border-dark" id="nik" name="nik" disabled>
			</div>
		</div>
	</div>


	<!-- Add Row Button -->
	<!-- <div class="mt-3">
		<button type="button" class="btn btn-primary float-end" onclick="addRow()">
			<span class="bi bi-plus"></span>
		</button>
	</div> -->

	<div class="row">
		<div class="table-responsive">

			<table id="tableRm6" class="table table-bordered table-hover mt-5 border-dark">
				<tbody>
					<tr>
						<th>No</th>
						<th>Tanggal / Jam</th>
						<th>Profesional Pemberi Asuhan</th>
						<th>Hasil Asesmen Pasien dan Pemberian Pelayanan</th>
						<th>Instruksi PPA</th>
						<th>Review & Verifikasi DPJP</th>
						<!-- <th>Action</th> -->
					</tr>
				</tbody>
				<tbody>
					<?php
					for ($i = 1; $i <= 30; $i++) {
					?>
						<tr class="text-center">
							<td><?php echo $i; ?></td>
							<td><input type="datetime-local" class="form-control border-dark" name="tanggal_jam_<?php echo $i; ?>"></td>
							<td><textarea name="profesional_pemberi_asuhan_<?php echo $i; ?>" id="" rows="4" class="form-control border-dark" style="width: 200px;"></textarea>
								<div class="my-2">Nama Perawat</div>
								<div class="my-2">
									<img class=" img-responsive center-block my-2" style="width: 30%;" id="qr_perawat<?= $i; ?>" />
									<select type="select" name="perawat<?= $i; ?>" id="perawat<?= $i; ?>" class="form-select perawat" style="width: 80%;"></select>
								</div>
							</td>
							<td>
								<div class="d-flex flex-column gap-2" style="width: 250px;">
									<?php
									$fields = ['s', 'o', 'a', 'p'];
									foreach ($fields as $field) {
									?>
										<div class="d-flex align-items-start gap-2">
											<label class="flex-shrink-0" for="<?php echo $field; ?>_text_<?php echo $i; ?>"><?php echo strtoupper($field); ?> :</label>
											<textarea name="<?php echo $field; ?>_text_<?php echo $i; ?>" id="<?php echo $field; ?>_text_<?php echo $i; ?>" rows="2" class="w-100 form-control border-dark"></textarea>
										</div>
									<?php
									}
									?>
								</div>
							</td>
							<td><textarea name="intruksi_<?php echo $i; ?>" id="intruksi_<?php echo $i; ?>" rows="8" class="form-control border-dark" style="width: 200px;"></textarea></td>
							<td>
								<div style="width: 300px;">
									<img class="img-responsive center-block mt-2" style="width: 30%;" id="qr_dokter_umum<?php echo $i; ?>" />
									<select type="select" name="dokter_umum<?php echo $i; ?>" id="dokter_umum<?php echo $i; ?>" class="form-select dokter_umum" style="width: 80%;"></select>
								</div>
							</td>
						</tr>
					<?php
					}
					?>

				</tbody>
			</table>
		</div>

	</div>
</div>



<script>
	let dataDokter = []
	let dataPerawat = []
	const mode = "<?= $mode; ?>"

function sanitizeInput(text) {
		return text.replace(/[^\w\s.,()*?%/+=':><-]/g, '');
	}

	function cbCommon(data) {

		populateFormFields(data);


		// dokter img
		const jumlahDokter = 30;

		for (let i = 1; i <= jumlahDokter; i++) {
			const dokterSelect = `#dokter_umum${i}`;
			const qrId = `qr_dokter_umum${i}`;

			$(dokterSelect).prop('disabled', false).select2('open').select2('close');

			if (mode === "lihat") {
				$(dokterSelect).prop('disabled', true);
			}

			setTimeout(() => {
				console.log(dataDokter);
				dataDokter?.forEach(v => {
					if (v.text === $(dokterSelect).select2('data')[0]?.text) {
						QRSignatureAPI(v.id_original, qrId);
					}
				});
			}, 500);
		}

		// perawat img
		const jumlahPerawat = 30;

		for (let i = 1; i <= jumlahPerawat; i++) {
			const perawatSelect = `#perawat${i}`;
			const qrId = `qr_perawat${i}`;

			$(perawatSelect).prop('disabled', false).select2('open').select2('close');

			if (mode === "lihat") {
				$(perawatSelect).prop('disabled', true);
			}

			setTimeout(() => {
				// console.log(dataDokter);
				dataPerawat?.forEach(v => {
					if (v.text === $(perawatSelect).select2('data')[0]?.text) {
						QRSignatureAPI(v.id_original, qrId);
					}
				});
			}, 500);
		}

	}

	function listDokterUmumAPI() {
		$('.dokter_umum').select2({
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

	function listPerawatAPI() {
		$('.perawat').select2({
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
					dataPerawat = items
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


	// mulai
	$(document).ready(function() {
		// Tambahkan ini untuk semua textarea yang aktif
		$('textarea').on('input', function() {
			const clean = sanitizeInput(this.value);
			if (this.value !== clean) {
				this.value = clean;
			}
		});
		
		const globalData = <?= $global_data; ?>;
		const {
			id_dokter,
			id_perawat,
			nama_perawat
		} = globalData;

		listDokterUmumAPI()
		listPerawatAPI()


		// mulai aktif jumlah dokter
		const jumlahDokter = 30;

		for (let i = 1; i <= jumlahDokter; i++) {
			$(`#dokter_umum${i}`).on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, `qr_dokter_umum${i}`);
			});
		}
		// batas jumlah

		// mulai aktif jumlah dokter
		const jumlahPerawat = 30;

		for (let i = 1; i <= jumlahPerawat; i++) {
			$(`#perawat${i}`).on('select2:select', function(e) {
				const {
					id_original
				} = e.params.data;
				QRSignatureAPI(id_original, `qr_perawat${i}`);
			});
		}
		// batas jumlah



		// batas

		console.log(data);
		const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
		table.innerHTML = "";

		const dataLength = data.values().next().value.length;

		const params = Array.from({
				length: dataLength
			}, (_, rowIndex) =>
			Array.from(data.keys(), (key) => data.get(key)[rowIndex])
		);
		// batas qrcode


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
	})
</script>