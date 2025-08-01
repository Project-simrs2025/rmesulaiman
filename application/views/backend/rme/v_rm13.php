<div class="container mt-4">
	<table class="table table-bordered border-dark">
		<tr>
			<td class="font-weight-bold">No. Rekam Medis :</td>
			<td colspan="3"><input type="text" name="no_rm" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Nama :</td>
			<td colspan="3"><input type="text" name="nama_pasien" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Usia :</td>
			<td><input type="text" name="umur" class="form-control border-dark"></td>
			<td class="font-weight-bold">Tanggal Masuk :</td>
			<td><input type="text" name="tgl_admit" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Jenis Kelamin :</td>
			<td>
				<input type="text" class="form-control border-dark" name="jenkel">
			</td>
			<td class="font-weight-bold">Tanggal Keluar :</td>
			<td><input type="date" name="tanggal_keluar" class="form-control border-dark" value="<?= date('Y-m-d'); ?>"></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Kelas / Ruangan :</td>
			<td colspan="3"><input type="text" name="ruangan" value="<?= $kelas . ' / ' . $nama_ruangan; ?>" class=" form-control border-dark" disabled></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Pekerjaan :</td>
			<td colspan="3"><input type="text" name="nama_pekerjaan" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Alamat :</td>
			<td colspan="3"><input name="alamat" rows="3" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td class="font-weight-bold">Agama :</td>
			<td colspan="3"><input type="text" name="nama_agama" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td colspan="4">
				<h6 class="font-weight-bold">1. Diagnosa Keperawatan</h6>
			</td>
		</tr>
		<tr>
			<td colspan="4"><select type="select" name="diagnosa_keperawatan" id="diagnosa_keperawatan" class="form-select diagnosa" style="width: 100%;"></select></td>
		</tr>
		<tr>
			<td colspan="4">
				<h6 class="font-weight-bold">2. Masalah Perawat saat: Pulang / Meninggal / PAPS / Dirujuk</h6>
			</td>
		</tr>
		<tr>
			<td colspan="4"><textarea name="masalah_perawat" rows="3" class="form-control border-dark"></textarea></td>
		</tr>
		<tr>
			<td colspan="4">
				<h6 class="font-weight-bold">3. Nasehat Pada Waktu Pasien Pulang</h6>
			</td>
		</tr>
		<tr>
			<td colspan="4"><textarea name="Nasehat" rows="3" class="form-control border-dark"></textarea></td>
		</tr>

		<tr>
			<td colspan="4" class="align-content-start">
				<div class="d-flex flex-column align-items-end gap-3">
					<div class="d-flex gap-2 align-items-center w-100 justify-content-end">
						<label class="flex-shrink-0"><?= $city_sign; ?></label>
						<input type="date" class="form-control border-dark border-dark w-25" name="tgl_city" value="<?= date('Y-m-d') ?>">
					</div>
					<p>Kepala Ruangan, </p>
					<div class="text-end">
						<img class="img-responsive center-block mt-2" style="width: 20%;" id="qr_kepala_ruangan" />
					</div>
					<select type="select" name="kepala_ruangan" id="kepala_ruangan" class="form-select perawat" style="width: 40%;"></select>
				</div>
			</td>
		</tr>
	</table>
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

		$('#kepala_ruangan').prop('disabled', false)
		$('#kepala_ruangan').select2('open')
		$('#kepala_ruangan').select2('close')
		if (mode === "lihat")
			$('#kepala_ruangan').prop('disabled', true)

		setTimeout(() => {
			dataListPerawat?.map(v => {
				if (v.text === $('#kepala_ruangan').select2('data')[0].text) {
					QRSignatureAPI(v.id_original, 'qr_kepala_ruangan')
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


		$('#kepala_ruangan').on('select2:select', function(e) {
			const {
				id_original
			} = e.params.data;
			QRSignatureAPI(id_original, 'qr_kepala_ruangan')
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