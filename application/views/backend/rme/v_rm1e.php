<div class="container">
	<!-- Patient Information Table -->
	<table class="table table-bordered border-dark">
		<tr>
			<th class="col-3">Nama Pasien</th>
			<td class="col-8"><input type="text" name="nama_pasien" class="form-control border-dark">
			</td>
		</tr>
		<tr>
			<th>NIK</th>
			<td><input type="text" name="nik" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Pendidikan</th>
			<td><input type="text" name="pendidikan_terakhir" class="form-control border-dark" /></td>
		</tr>
		<tr>
			<th>Pekerjaan</th>
			<td><input type="text" name="nama_pekerjaan" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>No. RM</th>
			<td><input type="text" name="no_rm" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Tgl Lahir / Umur</th>

			<td>
				<div class="row">
					<div class="col-3">
						<input type="text" name="tanggal_lahir" class="form-control border-dark">
					</div>
					<div class="col-5">
						<input type="text" name="umur" class="form-control border-dark">
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td><input type="text" name="jenkel" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Tgl Masuk</th>
			<td><input type="text" name="tgl_admit" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Nama DPJP</th>
			<td><input type="text" name="nama_dokter" class="form-control border-dark"></td>
		</tr>
		<tr>
			<th>Nilai Pribadi</th>
			<td><input type="text" name="nilai_pribadi" class="form-control border-dark"></td>
		</tr>
		<tr>
			<td colspan="3" class="text-center">(Tempelkan stiker identitas pasien jika tersedia)</td>
		</tr>
	</table>

	<!-- Diagnosis and Therapy Request Table -->

	<table class="table table-bordered mt-4 w-100 border-dark">
		<tr>
			<th class="col-3">Diagnosa</th>
			<td class="col-9">
				<select type="select" name="diagnosa" id="diagnosa" class="form-select diagnosa" style="width: 100%;">
				</select>
			</td>
		</tr>
		<tr>
			<th>Permintaan Terapi</th>
			<td><input type="text" name="permintaan_terapi" class="form-control border-dark"></td>
		</tr>
	</table>

	<div class="row">
		<div class="col-12">
			<div class="table-responsive">

				<input type="hidden" name="table-pengkajian-count" id="table-pengkajian-count" value="1">
				<table class="table table-bordered table-pengkajian border-dark" id="table-pengkajian">
					<thead>
						<tr>
							<th class="col-1 text-center" rowspan="2">No</th>
							<th class="col-3 text-center" rowspan="2">Program</th>
							<th class="col-2 text-center" rowspan="2">Tanggal</th>
							<th class="col-2 text-center" colspan="3">Tanda Tangan</th>
							<!-- <th class="col-1 text-center">Action</th> -->
						</tr>
						<tr>
							<th class="col-2 text-center">Pasien</th>
							<th class="col-2 text-center">Dokter</th>
							<th class="col-2 text-center">Terapi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$programCount = 30;
						$base_url = base_url('assets2/rme/img/testttd.png');
						?>

						<?php
						for ($i = 1; $i <= $programCount; $i++) {
						?>
							<tr class="text-center">
								<td><?php echo $i; ?></td>
								<td><textarea rows="4" name="program_<?= $i; ?>[]" class="form-control border-dark" style="width: 300px;"></textarea></td>
								<td><input type="date" name="tanggal_<?= $i; ?>[]" class="form-control border-dark" style="width:300px;"></td>
								<td>
									 <img class="marker-image border border-dark" id="example-image" src="<?= base_url('assets2/rme/img/testttd.png') ?>"
										style="width: 150px; height:100px" data-input-name="image_drawer_state_image_<?= $i; ?>" />
									<input type="hidden" id="image_drawer_state_image_<?= $i; ?>" name="image_drawer_state_image_<?= $i; ?>"
										value="" />
								</div>
								<div style="width:250px">
								<input type="text" name="nama_pasien_ttd" class="form-control border-dark" placeholder="pasien yang mendatangani"></div>
								</td>
								<td>
									<div style="width: 300px;">
										<img class="img-responsive center-block mt-2" style="width: 40%;" id="qr_dokter_umum<?= $i; ?>" />
										<select type="select" name="dokter_umum<?= $i; ?>" id="dokter_umum<?= $i; ?>" class="form-select dokter" style="width: 100%;"></select>
									</div>
								</td>
								<td>
									<div style="width: 300px;">
										<img class="img-responsive center-block mt-2" style="width: 40%;" id="qr_perawat<?= $i; ?>" />
										<select type="select" name="perawat<?= $i; ?>" id="perawat<?= $i; ?>" class="form-select perawat" style="width: 100%;"></select>
									</div>
								</td>
							</tr>
						<?php
						}
						?>
				</table>




			</div>
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


        $('#dokter_umum').prop('disabled', false)
        $('#dokter_umum').select2('open')
        $('#dokter_umum').select2('close')
        if (mode === "lihat")
            $('#dokter_umum').prop('disabled', true)

        setTimeout(() => {
            dataDokter?.map(v => {
                if (v.text === $('#dokter_umum').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_dokter_umum')
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

          $('#perawat_pengkaji').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_pengkaji')
        });



        //================ new =====================//
    });
</script>