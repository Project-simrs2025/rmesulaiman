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
			<td colspan="3"><input type="text" name="ruangan" value="<?= $nama_ruangan . ' / ' . $no_bad; ?>" class=" form-control border-dark"></td>
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
			<td colspan="4"><select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa" style="width: 100%;">
				</select></td>
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
						<label class="col-2"><?= $city_sign; ?></label>
						<input type="date" class="form-control border-dark border-dark w-25" name="sei_rampah_date">
					</div>
					<p>Kepala Ruangan, </p>
					<img class="marker-image" style="width: 350px; height:200px;" src="<?= base_url() . 'assets/images/form/base-ttd.png' ?>" data-input-name="image_drawer_state_base_ttd" alt="">
					<input type="hidden" id="image_drawer_state_base_ttd" name="image_drawer_state_base_ttd" value="" />
					<input type="text" class="form-control border-dark w-50 border-dark" name="nama_pembuat"></input>
				</div>
			</td>
		</tr>
	</table>
</div>


<script>
	$(document).delay(1000).queue(function() {
		callMarkerManager();
	});

	$(document).ready(function() {
		let page = 1; // Track the current page
		// Initialize Select2
		$('#diagnosa').select2({
			ajax: {
				url: '<?= site_url('backend/admission/getDiagnosa'); ?>', // PHP script to fetch data
				dataType: 'json',
				delay: 250, // Delay in ms while typing
				data: function(params) {
					// Send search term, limit, and offset
					return {
						q: params.term, // Search query
						limit: 100, // Number of items per page
						offset: (page - 1) * 100, // Calculate offset based on the page
					};
				},
				processResults: function(data) {
					console.log(data)
					const {
						items,
						more
					} = data.data;

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
		});

		// Handle scroll to load more data
		$('#diagnosa').on('select2:open', function() {
			$('.select2-results__options').on('scroll', function() {
				const $this = $(this);
				if ($this.scrollTop() + $this.innerHeight() >= $this[0].scrollHeight) {
					if (page > 0) { // Check if more pages are available
						page++; // Increment page
						$('#diagnosa').select2('open'); // Keep dropdown open
						$('#diagnosa').select2('data', null); // Clear current data
					}
				}
			});
		});
	});

	function cbCommon(data) {
		populateFormFields(data);
	}
</script>