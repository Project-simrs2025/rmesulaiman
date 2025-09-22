<div class="row">
	<div class="col-12 table-responsive">
		<div class="my-3 float-end">
			<button type="button" class="btn btn-dark" onclick="addRow()"><span class="bi bi-plus"></span> Tambah Berkas</button>
		</div>


		<table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable">
			<thead class="table-bordered border-dark">

			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>



<!-- JavaScript -->
<script>
	const mode = "<?= $mode; ?>";
	let dataDokter = [];
	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});
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
				url: '<?= site_url('backend/admission/getKaryawan/13'); ?>'
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


		$('#list_perawat').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_list_perawat')
		});


		$('#perawat_ruangan').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_perawat_ruangan')
		});


		//================ new =====================//
	});

	function addRow() {
		const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
		const rowCount = table.rows.length / 4;
		const baseIndex = rowCount * 4;


		// === ROW 1 ===
		const row1 = table.insertRow(baseIndex);

		row1.innerHTML = `
           <td colspan="4">
                <table class="table table-bordered border-dark">
                    <tr align="center">
                        <td>Tanggal</td>
                        <td><input type="date" class="form-control border-dark" name="tanggal_mulai[]" value="<?= date('Y-m-d'); ?>"></td>
                        <td>Umur</td>
                        <td>Kelamin</td>
                        <td>Ruangan</td>
                        <td>Kelas</td>
                        <td>No.Rm</td>
                    </tr>
                    <tr>
                        <td>Nama Pasien</td>
                        <td>
							<textarea name="nama_pasien_dirawat[]" class="form-control border-dark"><?= $nama_pasien ?></textarea>
						</td>
                        <td><input type="text" name="umur_pasien_dirawat[]" class="form-control border-dark" value="<?= $umur ?>"></td>
                        <td><input type="text" name="jenkel_pasien_dirawat[]" class="form-control border-dark" value="<?= $jenkel ?>"></td>
                        <td><input type="text" name="ruangan_pasien_dirawat[]" class="form-control border-dark"></td>
                        <td><input type="text" name="kelas_pasien_dirawat[]" class="form-control border-dark" value="<?= $kelas ?>"></td>
                        <td><input type="text" name="no_rm_pasien_dirawat[]" class="form-control border-dark" value="<?= $no_rm ?>"></td>
                    </tr>
                </table>
           </td>
        `;

		// === ROW 3 ===
		const rowPertama = table.insertRow(baseIndex + 1);
		rowPertama.innerHTML = `
        <td colspan="4" style="border-left: none; border-right: none;">
                <h4 class="text-center my-3">KONSULTASI</h4>
        </td>
        `;



		// === ROW 3 ===
		const row3 = table.insertRow(baseIndex + 2);
		row3.innerHTML = `

        <td colspan="4">
        <div class="d-flex align-items-center gap-2">
            <label class="col-md-2">Kepada Yth</label>
            <input type="text" name="nama_yang_terhormat[]" class="form-control border-dark">
        </div>

        <div class="d-flex align-items-center gap-2 my-3">
            <label class="col-md-2">T.S. Dr</label>
            <select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
            <input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama">
        </div>

        <div class="d-flex align-items-center gap-2">
            <label class="col-md-2">Ahli</label>
            <input type="text" name="nama_ahli[]" class="form-control border-dark">
        </div>

        <div class="d-flex flex-column gap-2">
            <div>Dengan Hormat, </div>
            <div>Mohon Konsultasi penanganan lebih lanjut terhadap pasien tersebut diatas yang kami rawat dengan</div>


            <div class="d-flex align-items-center gap-2">
                <label class="col-md-2">Diagnosa</label>
                <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
                <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
            </div>


            <div class="d-flex align-items-start gap-2">
                <label class="col-md-2">Terapi Sementara</label>
                <textarea name="terapi_sementara[]" class="form-control border-dark" rows="3"></textarea>
            </div>

            <div class="d-flex align-items-start gap-2">
                <label class="col-md-2">pemeriksaan yang telah dilakukan</label>
                <textarea name="pemeriksaan_dilakukan[]" class="form-control border-dark" rows="3"></textarea>
            </div>
        </div>


        <div class="mt-2 d-flex flex-column align-items-end gap-2 justify-content-end w-100">
            <div>Salam Sejawat</div>

            <select name="dokter_melakukan_konsultasi[]" id="dokter_melakukan_konsultasi${rowCount}" class="form-select dokter_melakukan_konsultasi" style="width:30%;"></select>
            <input type="hidden" name="dokter_melakukan_konsultasi_nama[]" class="dokter_melakukan_konsultasi_nama">
        </div>
              
        <hr>

        <div class="text-center"><h5>Jawaban Konsultasi</h5></div>

        <div class="mt-2 d-flex align-items-center gap-2 justify-content-end w-100">
            <div>Tanggal</div>

            <input type="date" class="form-control border-dark w-25" name="tanggal_konsul[]" value="<?= date('Y-m-d'); ?>">
        </div>


            <div class="mt-3">
                <label>Yth.T.S</label>
                <div>
                     <select name="dokter_menjawab_konsul[]" id="dokter_menjawab_konsul${rowCount}" class="form-select dokter_menjawab_konsul" style="width:30%;"></select>
                    <input type="hidden" name="dokter_menjawab_konsul_nama[]" class="dokter_menjawab_konsul_nama">
                </div>
            </div>


            <div class="mt-3">Dengan Hormat,</div>

            <div class="mt-3 d-flex align-items-start gap-2">
                <label class="col-md-4">Mengenai pasien yang dikonsulkan pada pemeriksaan os ini didapati </label>
                <textarea name="pemeriksaan_konsul[]" class="form-control border-dark" rows="3"></textarea>
            </div>

			 <div class="d-flex align-items-center gap-2 my-3">
                <label class="col-md-2">Diagnosa</label>
                <select name="diagnosa_jawaban[]" id="diagnosa_jawaban${rowCount}" class="form-select diagnosa_jawaban" style="width:100%;"></select>
                <input type="hidden" name="diagnosa_jawaban_nama[]" class="diagnosa_jawaban_nama">
            </div>
			

            <div class="d-flex align-items-center gap-2 my-3">
                <label class="col-md-3">Advis</label>
				<textarea name="advis[]" rows="2" class="form-control border-dark"></textarea>
            </div>


            <div class="d-flex align-items-center gap-2">
                <div>O.S**</div>

                <label><input type="checkbox" class="form-check-input" data-role="dikembalikan_check_os"> Dikembalikan </label>
                <input type="hidden" name="dikembalikan_check_os[]" class="dikembalikan_check_os_hidden" data-role="dikembalikan_check_os" value="">
                <input type="hidden" name="dikembalikan_check_os_nama[]" class="dikembalikan_check_os_nama">

                <label><input type="checkbox" class="form-check-input" data-role="dirawat_check_os"> Dirawat bersama diambil </label>
                <input type="hidden" name="dirawat_check_os[]" class="dirawat_check_os_hidden" data-role="dirawat_check_os" value="">
                <input type="hidden" name="dirawat_check_os_nama[]" class="dirawat_check_os_nama">

                 <label><input type="checkbox" class="form-check-input" data-role="alih_check_os"> alih (sementara / selanjutnya) </label>
                <input type="hidden" name="alih_check_os[]" class="alih_check_os_hidden" data-role="alih_check_os" value="">
                <input type="hidden" name="alih_check_os_nama[]" class="alih_check_os_nama">
            </div>
           


            <div class="mt-2 d-flex flex-column align-items-end gap-2 justify-content-end w-100">
            <div>Salam Sejawat</div>

            <select name="dokter_akhir_konsultasi[]" id="dokter_akhir_konsultasi${rowCount}" class="form-select dokter_akhir_konsultasi" style="width:30%;"></select>
            <input type="hidden" name="dokter_akhir_konsultasi_nama[]" class="dokter_akhir_konsultasi_nama">
        </div>

        </td>
        `;




		const pembatastable = table.insertRow(baseIndex + 3);
		pembatastable.innerHTML = `
        <td class="border-top border-bottom border-0 px-0" style="height: 280px;">
        </td>`;


		function initSelect2Dokter(selectorId, namaKelas) {
			$(`#${selectorId}${rowCount}`).select2({
				ajax: {
					url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
					dataType: 'json',
					delay: 250,
					data: params => ({
						q: params.term
					}),
					processResults: data => ({
						results: data.data.items,
						pagination: {
							more: data.data.more
						}
					}),
					cache: true
				},
				placeholder: 'Cari Dokter...'
			}).on('select2:select', function(e) {
				$(this).closest('td').find(`.${namaKelas}_nama`).val(e.params.data.text);
			});
		}

		// Panggil fungsi untuk masing-masing elemen
		initSelect2Dokter('dokter_pengkaji_pertama', 'dokter_pengkaji_pertama');
		initSelect2Dokter('dokter_melakukan_konsultasi', 'dokter_melakukan_konsultasi');
		initSelect2Dokter('dokter_menjawab_konsul', 'dokter_menjawab_konsul');
		initSelect2Dokter('dokter_akhir_konsultasi', 'dokter_akhir_konsultasi');



		function initSelect2Perawat(selectorId, namaKelas) {
			$(`#${selectorId}${rowCount}`).select2({
				ajax: {
					url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
					dataType: 'json',
					delay: 250,
					data: params => ({
						q: params.term
					}),
					processResults: data => ({
						results: data.data.items,
						pagination: {
							more: data.data.more
						}
					}),
					cache: true
				},
				placeholder: 'Cari ...'
			}).on('select2:select', function(e) {
				$(this).closest('td').find(`.${namaKelas}_nama`).val(e.params.data.text);
			});
		}

		// Panggil fungsi untuk masing-masing elemen
		initSelect2Perawat('perawat_pengkaji_pertama', 'perawat_pengkaji_pertama');



		function initSelect2Diagnosa(selectorId, namaKelas) {
			$(`#${selectorId}${rowCount}`).select2({
				ajax: {
					url: '<?= site_url('backend/admission/getDiagnosa'); ?>',
					dataType: 'json',
					delay: 250,
					data: params => ({
						q: params.term
					}),
					processResults: data => ({
						results: data.data.items,
						pagination: {
							more: data.data.more
						}
					}),
					cache: true
				},
				placeholder: 'Cari...'
			}).on('select2:select', function(e) {
				$(this).closest('td').find(`.${namaKelas}_nama`).val(e.params.data.text);
			});
		}

		// Panggil fungsi untuk masing-masing elemen
		initSelect2Diagnosa('diagnosa_pertama', 'diagnosa_pertama');
		initSelect2Diagnosa('diagnosa_jawaban', 'diagnosa_jawaban');



		// === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
		row1.scrollIntoView({
			behavior: "smooth",
			block: "center"
		});
		callMarkerManager();
		return row1;
	}

	function cbCommon(data) {
		const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
		table.innerHTML = "";

		const dataObj = Object.fromEntries(data.entries());
		const rowCount = dataObj["diagnosa_pertama_nama"]?.length || 0;

		for (let i = 0; i < rowCount; i++) {
			const tr = addRow(); // baris utama pertama dari 4 baris
			const baseIndex = i * 4;
			const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 4);


			// row new
			const TanggalMulai = dataObj['tanggal_mulai']?.[i] || '';
			const TanggalKonsul = dataObj['tanggal_konsul']?.[i] || '';
			const NamaPasienDirawat = dataObj['nama_pasien_dirawat']?.[i] || '';
			const UmurPasienDirawat = dataObj['umur_pasien_dirawat']?.[i] || '';
			const JenkelPasienDirawat = dataObj['jenkel_pasien_dirawat']?.[i] || '';
			const RuanganPasienDirawat = dataObj['ruangan_pasien_dirawat']?.[i] || '';
			const KelasPasienDirawat = dataObj['kelas_pasien_dirawat']?.[i] || '';
			const nomorRmPasienDirawat = dataObj['no_rm_pasien_dirawat']?.[i] || '';
			const KepadaYth = dataObj['nama_yang_terhormat']?.[i] || '';
			const Ahli = dataObj['nama_ahli']?.[i] || '';
			const Advis = dataObj['advis']?.[i] || '';
			const TerapiSementara = dataObj['terapi_sementara']?.[i] || '';
			const PemeriksaanDilakukan = dataObj['pemeriksaan_dilakukan']?.[i] || '';
			const PemeriksaanKonsul = dataObj['pemeriksaan_konsul']?.[i] || '';




			// Diagnosa 
			const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
			const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
			const diagnosaJawaban = dataObj['diagnosa_jawaban_nama']?.[i] || '';
			const diagnosa_idJawaban = dataObj['diagnosa_jawaban']?.[i] || '';



			// perawat ttd satu
			const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
			const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';

			const DokterMelakukanKonsultasi = dataObj['dokter_melakukan_konsultasi_nama']?.[i] || '';
			const DokterMelakukanKonsultasi_idPertama = dataObj['dokter_melakukan_konsultasi']?.[i] || '';

			const DokterMenjawabKonsultasi = dataObj['dokter_menjawab_konsul_nama']?.[i] || '';
			const DokterMenjawabKonsultasi_idPertama = dataObj['dokter_menjawab_konsul']?.[i] || '';

			const DokterAkhirKonsultasi = dataObj['dokter_akhir_konsultasi_nama']?.[i] || '';
			const DokterAkhirKonsultasi_idPertama = dataObj['dokter_akhir_konsultasi']?.[i] || '';


			const perawatKedua = dataObj['perawat_pengkaji_pertama_nama']?.[i] || '';
			const perawat_idKedua = dataObj['perawat_pengkaji_pertama']?.[i] || '';
			// batas



			// Row 2
			rows[0].querySelector('input[name="tanggal_mulai[]"]').value = TanggalMulai;
			rows[0].querySelector('textarea[name="nama_pasien_dirawat[]"]').value = NamaPasienDirawat;
			rows[0].querySelector('input[name="umur_pasien_dirawat[]"]').value = UmurPasienDirawat;
			rows[0].querySelector('input[name="jenkel_pasien_dirawat[]"]').value = JenkelPasienDirawat;
			rows[0].querySelector('input[name="ruangan_pasien_dirawat[]"]').value = RuanganPasienDirawat;
			rows[0].querySelector('input[name="kelas_pasien_dirawat[]"]').value = KelasPasienDirawat;
			rows[0].querySelector('input[name="no_rm_pasien_dirawat[]"]').value = nomorRmPasienDirawat;
			rows[2].querySelector('input[name="nama_yang_terhormat[]"]').value = KepadaYth;
			rows[2].querySelector('input[name="nama_ahli[]"]').value = Ahli;
			rows[2].querySelector('textarea[name="advis[]"]').value = Advis;
			rows[2].querySelector('textarea[name="terapi_sementara[]"]').value = TerapiSementara;
			rows[2].querySelector('textarea[name="pemeriksaan_dilakukan[]"]').value = PemeriksaanDilakukan;
			rows[2].querySelector('textarea[name="pemeriksaan_konsul[]"]').value = PemeriksaanKonsul;
			rows[2].querySelector('input[name="tanggal_konsul[]"]').value = TanggalKonsul;








			// Helper function untuk isi checkbox + hidden + nama
			function handleCheckboxGroup(row, roles, prefix) {
				roles.forEach(role => {
					const checkbox = row.querySelector(`input.form-check-input[data-role="${role}"]`);
					const hidden = row.querySelector(`input[type="hidden"][data-role="${role}"]`);
					const value = dataObj[role]?.[i] || '';
					if (checkbox && hidden) {
						hidden.value = value;
						checkbox.checked = !!value;
					}

					const namaField = row.querySelector(`.${role}_nama`);
					if (namaField) {
						namaField.value = dataObj[`${role}_nama`]?.[i] || '';
					}
				});
			}


			// Row 1 - diagnosa
			handleCheckboxGroup(rows[2], ['dikembalikan_check_os']);
			handleCheckboxGroup(rows[2], ['dirawat_check_os']);
			handleCheckboxGroup(rows[2], ['alih_check_os']);





			function initSelect2Diagnosa(selectElement, hiddenInput, selectedText, selectedId) {
				selectElement.select2({
					ajax: {
						url: '<?= site_url('backend/admission/getDiagnosa'); ?>',
						dataType: 'json',
						delay: 250,
						data: params => ({
							q: params.term
						}),
						processResults: data => ({
							results: data.data.items,
							pagination: {
								more: data.data.more
							}
						}),
						cache: true
					},
					placeholder: 'Cari ...'
				});

				if (selectedText) {
					const opt = new Option(selectedText, selectedId || selectedText, true, true);
					selectElement.append(opt).trigger('change');
					if (hiddenInput) hiddenInput.value = selectedText;
				}
			}



			// Baris ke-1 (index 0)
			const rowdiagnosa = rows[2];

			initSelect2Diagnosa(
				$(rowdiagnosa).find('.diagnosa_pertama'),
				rowdiagnosa.querySelector('.diagnosa_pertama_nama'),
				diagnosaPertama,
				diagnosa_idPertama
			);

			initSelect2Diagnosa(
				$(rowdiagnosa).find('.diagnosa_jawaban'),
				rowdiagnosa.querySelector('.diagnosa_jawaban_nama'),
				diagnosaJawaban,
				diagnosa_idJawaban
			);



			function initSelect2Dokter(selectElement, hiddenInput, selectedText, selectedId) {
				selectElement.select2({
					ajax: {
						url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
						dataType: 'json',
						delay: 250,
						data: params => ({
							q: params.term
						}),
						processResults: data => ({
							results: data.data.items,
							pagination: {
								more: data.data.more
							}
						}),
						cache: true
					},
					placeholder: 'Cari...'
				});

				if (selectedText) {
					const opt = new Option(selectedText, selectedId || selectedText, true, true);
					selectElement.append(opt).trigger('change');
					if (hiddenInput) hiddenInput.value = selectedText;
				}
			}




			// Baris ke-13 dokter
			const rowdokter = rows[2];

			initSelect2Dokter(
				$(rowdokter).find('.dokter_pengkaji_pertama'),
				rowdokter.querySelector('.dokter_pengkaji_pertama_nama'),
				perawatPertama,
				perawat_idPertama
			);

			initSelect2Dokter(
				$(rowdokter).find('.dokter_melakukan_konsultasi'),
				rowdokter.querySelector('.dokter_melakukan_konsultasi_nama'),
				DokterMelakukanKonsultasi,
				DokterMelakukanKonsultasi_idPertama
			);

			initSelect2Dokter(
				$(rowdokter).find('.dokter_menjawab_konsul'),
				rowdokter.querySelector('.dokter_menjawab_konsul_nama'),
				DokterMenjawabKonsultasi,
				DokterMenjawabKonsultasi_idPertama
			);

			initSelect2Dokter(
				$(rowdokter).find('.dokter_akhir_konsultasi'),
				rowdokter.querySelector('.dokter_akhir_konsultasi_nama'),
				DokterAkhirKonsultasi,
				DokterAkhirKonsultasi_idPertama
			);


			function initSelect2Perawat(selectElement, hiddenInput, selectedText, selectedId) {
				selectElement.select2({
					ajax: {
						url: '<?= site_url('backend/admission/5'); ?>',
						dataType: 'json',
						delay: 250,
						data: params => ({
							q: params.term
						}),
						processResults: data => ({
							results: data.data.items,
							pagination: {
								more: data.data.more
							}
						}),
						cache: true
					},
					placeholder: 'Cari...'
				});

				if (selectedText) {
					const opt = new Option(selectedText, selectedId || selectedText, true, true);
					selectElement.append(opt).trigger('change');
					if (hiddenInput) hiddenInput.value = selectedText;
				}
			}


			populateFormFields(data, false);


		}
	}

	// Update hidden field saat checkbox berubah
	document.addEventListener('change', function(e) {
		if (e.target.classList.contains('form-check-input')) {
			const role = e.target.getAttribute('data-role');
			const container = e.target.closest('div.bg-light') || e.target.closest('tr');
			if (!container) return;
			const hiddenInput = container.querySelector(`input[type="hidden"][data-role="${role}"]`);
			if (hiddenInput) {
				hiddenInput.value = e.target.checked ? "on" : "";
			}
		}
	});

	document.addEventListener('keydown', function (event) {
	if (event.key === 'Enter') {
		const isTextarea = event.target.tagName === 'TEXTAREA';
		const isSelect = event.target.classList.contains('select2-search__field');

		if (!isTextarea && !isSelect) {
			event.preventDefault(); // Mencegah form tersubmit
			return false;
		}
	}
});

</script>