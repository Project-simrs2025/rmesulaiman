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
        const rowCount = table.rows.length / 3;
        const baseIndex = rowCount * 3;


        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);

        row1.innerHTML = `

           <td colspan="4" style="border:none;">
           <table border="0" cellpadding="4" style="width:100%">
                <tr>
                    <td>No Rekam Medis</td>
                    <td> <input type="text" name="no_rm" value="<?= $no_rm ?>" class="form-control border-dark" disabled></td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td> <input type="text" name="nama_pasien" value="<?= $nama_pasien ?>" class="form-control border-dark" disabled></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> <input type="text" name="tgl_lahir" value="<?= $tgl_lahir ?>" class="form-control border-dark" disabled></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> <input type="text" name="kelas" value="<?= $kelas ?>" class="form-control border-dark" disabled></td>
                </tr>
                <tr>
                    <td>Ruangan</td>
                    <td> <input type="text" name="nama_ruangan" value="<?= $nama_ruangan ?>" class="form-control border-dark" disabled></td>
                </tr>
                <tr>
                    <td>Dokter Yang Merawat</td>
                    <td> <select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
                    <input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama"></td>
                </tr>
                <tr>
                    <td>Ahli Anestesi</td>
                    <td><select name="ahli_anesteshi_pertama[]" id="ahli_anesteshi_pertama${rowCount}" class="form-select ahli_anesteshi_pertama" style="width:100%;"></select>
                    <input type="hidden" name="ahli_anesteshi_pertama_nama[]" class="ahli_anesteshi_pertama_nama"> </td>
                </tr>
                <tr>
                    <td>Tanggal Jam Operasi</td>
                    <td> <input type="text" name="tanggal_jam_operasi[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Alergi</td>
                    <td> <textarea name="alergi_diagnosa[]" class="form-control border-dark" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>Diagnosa Utama</td>
                    <td> <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
                    <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama"></td>
                </tr>
           </table>

		   </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `
        <td colspan="4">
           <table class="table table-bordered border-dark">
		 		<tr align="center">
					<td>No</td>
					<td>Tindakan Yang Harus Dilakukan</td>
					<td>Sudah</td>
					<td>Tidak</td>
					<td>Keterangan</td>
				</tr>  
				<tr>
                    <td align="center">I</td>
                    <td>Melapor ke :</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_sudah_melapor_check"></label>
						<input type="hidden" name="ya_sudah_melapor_check[]" class="ya_sudah_melapor_check_hidden" data-role="ya_sudah_melapor_check" value="">
						<input type="hidden" name="ya_sudah_melapor_check_nama[]" class="ya_sudah_melapor_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_sudah_melapor_check"></label>
						<input type="hidden" name="tidak_sudah_melapor_check[]" class="tidak_sudah_melapor_check_hidden" data-role="tidak_sudah_melapor_check" value="">
						<input type="hidden" name="tidak_sudah_melapor_check_nama[]" class="tidak_sudah_melapor_check_nama">
					</td>
                    <td>
                        <input name="keterangan_melapor[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr align="center">
                    <td></td>
                    <td>- Dokter Bedah</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="ya_dokter_bedah_check"></label>
						<input type="hidden" name="ya_dokter_bedah_check[]" class="ya_dokter_bedah_check_hidden" data-role="ya_dokter_bedah_check" value="">
						<input type="hidden" name="ya_dokter_bedah_check_nama[]" class="ya_dokter_bedah_check_nama">
					</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="tidak_dokter_bedah_check"></label>
						<input type="hidden" name="tidak_dokter_bedah_check[]" class="tidak_dokter_bedah_check_hidden" data-role="tidak_dokter_bedah_check" value="">
						<input type="hidden" name="tidak_dokter_bedah_check_nama[]" class="tidak_dokter_bedah_check_nama">
					</td>
                    <td>
                        <input name="keterangan_dokter_bedah[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr align="center">
                    <td></td>
                    <td>- Dokter Aneshtesi</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="ya_dokter_anesteshi_check"></label>
						<input type="hidden" name="ya_dokter_anesteshi_check[]" class="ya_dokter_anesteshi_check_hidden" data-role="ya_dokter_anesteshi_check" value="">
						<input type="hidden" name="ya_dokter_anesteshi_check_nama[]" class="ya_dokter_anesteshi_check_nama">
					</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="tidak_dokter_anesteshi_check"></label>
						<input type="hidden" name="tidak_dokter_anesteshi_check[]" class="tidak_dokter_anesteshi_check_hidden" data-role="tidak_dokter_anesteshi_check" value="">
						<input type="hidden" name="tidak_dokter_anesteshi_check_nama[]" class="tidak_dokter_anesteshi_check_nama">
					</td>
                    <td>
                        <input name="keterangan_dokter_anesteshi[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr align="center">
                    <td></td>
                    <td>- Instalasi Bedah Sentral</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="ya_instalasi_bedah_check"></label>
						<input type="hidden" name="ya_instalasi_bedah_check[]" class="ya_instalasi_bedah_check_hidden" data-role="ya_instalasi_bedah_check" value="">
						<input type="hidden" name="ya_instalasi_bedah_check_nama[]" class="ya_instalasi_bedah_check_nama">
					</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="tidak_instalasi_bedah_check"></label>
						<input type="hidden" name="tidak_instalasi_bedah_check[]" class="tidak_instalasi_bedah_check_hidden" data-role="tidak_instalasi_bedah_check" value="">
						<input type="hidden" name="tidak_instalasi_bedah_check_nama[]" class="tidak_instalasi_bedah_check_nama">
					</td>
                    <td>
                        <input name="keterangan_instalasi_bedah[]" class="form-control border-dark">
                    </td>
				</tr>
                 <tr>
                    <td align="center">II</td>
                    <td>Persiapan</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_persiapan_bedah_check"></label>
						<input type="hidden" name="ya_persiapan_bedah_check[]" class="ya_persiapan_bedah_check_hidden" data-role="ya_persiapan_bedah_check" value="">
						<input type="hidden" name="ya_persiapan_bedah_check_nama[]" class="ya_persiapan_bedah_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_persiapan_bedah_check"></label>
						<input type="hidden" name="tidak_persiapan_bedah_check[]" class="tidak_persiapan_bedah_check_hidden" data-role="tidak_persiapan_bedah_check" value="">
						<input type="hidden" name="tidak_persiapan_bedah_check_nama[]" class="tidak_persiapan_bedah_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_persiapan_bedah[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td>1. Mengisi lembar informed concent</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_informed_concent_check"></label>
						<input type="hidden" name="ya_informed_concent_check[]" class="ya_informed_concent_check_hidden" data-role="ya_informed_concent_check" value="">
						<input type="hidden" name="ya_informed_concent_check_nama[]" class="ya_informed_concent_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_informed_concent_check"></label>
						<input type="hidden" name="tidak_informed_concent_check[]" class="tidak_informed_concent_check_hidden" data-role="tidak_informed_concent_check" value="">
						<input type="hidden" name="tidak_informed_concent_check_nama[]" class="tidak_informed_concent_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_informed_concent[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td>2. Mengingatkan, Menuntun Doa sebelum operasi</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_menuntun_doa_check"></label>
						<input type="hidden" name="ya_menuntun_doa_check[]" class="ya_menuntun_doa_check_hidden" data-role="ya_menuntun_doa_check" value="">
						<input type="hidden" name="ya_menuntun_doa_check_nama[]" class="ya_menuntun_doa_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_menuntun_doa_check"></label>
						<input type="hidden" name="tidak_menuntun_doa_check[]" class="tidak_menuntun_doa_check_hidden" data-role="tidak_menuntun_doa_check" value="">
						<input type="hidden" name="tidak_menuntun_doa_check_nama[]" class="tidak_menuntun_doa_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_menuntun_doa[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td>3. Jasmani</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_jasmani_check"></label>
						<input type="hidden" name="ya_jasmani_check[]" class="ya_jasmani_check_hidden" data-role="ya_jasmani_check" value="">
						<input type="hidden" name="ya_jasmani_check_nama[]" class="ya_jasmani_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_jasmani_check"></label>
						<input type="hidden" name="tidak_jasmani_check[]" class="tidak_jasmani_check_hidden" data-role="tidak_jasmani_check" value="">
						<input type="hidden" name="tidak_jasmani_check_nama[]" class="tidak_jasmani_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_jasmani[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.1 . Mencukur rambut daerah yang akan dioperasi</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_mencukur_rambut_check"></label>
						<input type="hidden" name="ya_mencukur_rambut_check[]" class="ya_mencukur_rambut_check_hidden" data-role="ya_mencukur_rambut_check" value="">
						<input type="hidden" name="ya_mencukur_rambut_check_nama[]" class="ya_mencukur_rambut_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_mencukur_rambut_check"></label>
						<input type="hidden" name="tidak_mencukur_rambut_check[]" class="tidak_mencukur_rambut_check_hidden" data-role="tidak_mencukur_rambut_check" value="">
						<input type="hidden" name="tidak_mencukur_rambut_check_nama[]" class="tidak_mencukur_rambut_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_mencukur_rambut[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.2. Puasa</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_puasa_check"></label>
						<input type="hidden" name="ya_puasa_check[]" class="ya_puasa_check_hidden" data-role="ya_puasa_check" value="">
						<input type="hidden" name="ya_puasa_check_nama[]" class="ya_puasa_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_puasa_check"></label>
						<input type="hidden" name="tidak_puasa_check[]" class="tidak_puasa_check_hidden" data-role="tidak_puasa_check" value="">
						<input type="hidden" name="tidak_puasa_check_nama[]" class="tidak_puasa_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_puasa[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.3 . Melakukan klisma</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_klisma_check"></label>
						<input type="hidden" name="ya_klisma_check[]" class="ya_klisma_check_hidden" data-role="ya_klisma_check" value="">
						<input type="hidden" name="ya_klisma_check_nama[]" class="ya_klisma_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_klisma_check"></label>
						<input type="hidden" name="tidak_klisma_check[]" class="tidak_klisma_check_hidden" data-role="tidak_klisma_check" value="">
						<input type="hidden" name="tidak_klisma_check_nama[]" class="tidak_klisma_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_klisma[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.4 . Memeriksa gigi palsu yg bisa lepas</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_gigipalsu_check"></label>
						<input type="hidden" name="ya_gigipalsu_check[]" class="ya_gigipalsu_check_hidden" data-role="ya_gigipalsu_check" value="">
						<input type="hidden" name="ya_gigipalsu_check_nama[]" class="ya_gigipalsu_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_gigipalsu_check"></label>
						<input type="hidden" name="tidak_gigipalsu_check[]" class="tidak_gigipalsu_check_hidden" data-role="tidak_gigipalsu_check" value="">
						<input type="hidden" name="tidak_gigipalsu_check_nama[]" class="tidak_gigipalsu_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_gigipalsu[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.5 . Melepas perhiasan</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_perhiasan_check"></label>
						<input type="hidden" name="ya_perhiasan_check[]" class="ya_perhiasan_check_hidden" data-role="ya_perhiasan_check" value="">
						<input type="hidden" name="ya_perhiasan_check_nama[]" class="ya_perhiasan_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_perhiasan_check"></label>
						<input type="hidden" name="tidak_perhiasan_check[]" class="tidak_perhiasan_check_hidden" data-role="tidak_perhiasan_check" value="">
						<input type="hidden" name="tidak_perhiasan_check_nama[]" class="tidak_perhiasan_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_perhiasan[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.6 . Menghapus lipstik</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_lipstik_check"></label>
						<input type="hidden" name="ya_lipstik_check[]" class="ya_lipstik_check_hidden" data-role="ya_lipstik_check" value="">
						<input type="hidden" name="ya_lipstik_check_nama[]" class="ya_lipstik_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_lipstik_check"></label>
						<input type="hidden" name="tidak_lipstik_check[]" class="tidak_lipstik_check_hidden" data-role="tidak_lipstik_check" value="">
						<input type="hidden" name="tidak_lipstik_check_nama[]" class="tidak_lipstik_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_lipstik[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.7 . Memakai baju operasi dengan rapi</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_bajuoperasi_check"></label>
						<input type="hidden" name="ya_bajuoperasi_check[]" class="ya_bajuoperasi_check_hidden" data-role="ya_bajuoperasi_check" value="">
						<input type="hidden" name="ya_bajuoperasi_check_nama[]" class="ya_bajuoperasi_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_bajuoperasi_check"></label>
						<input type="hidden" name="tidak_bajuoperasi_check[]" class="tidak_bajuoperasi_check_hidden" data-role="tidak_bajuoperasi_check" value="">
						<input type="hidden" name="tidak_bajuoperasi_check_nama[]" class="tidak_bajuoperasi_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_bajuoperasi[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.8. Memberikan premedikasi</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_premedikasi_check"></label>
						<input type="hidden" name="ya_premedikasi_check[]" class="ya_premedikasi_check_hidden" data-role="ya_premedikasi_check" value="">
						<input type="hidden" name="ya_premedikasi_check_nama[]" class="ya_premedikasi_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_premedikasi_check"></label>
						<input type="hidden" name="tidak_premedikasi_check[]" class="tidak_premedikasi_check_hidden" data-role="tidak_premedikasi_check" value="">
						<input type="hidden" name="tidak_premedikasi_check_nama[]" class="tidak_premedikasi_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_premedikasi[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.9 . T.N.P dan Suhu</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_tnp_check"></label>
						<input type="hidden" name="ya_tnp_check[]" class="ya_tnp_check_hidden" data-role="ya_tnp_check" value="">
						<input type="hidden" name="ya_tnp_check_nama[]" class="ya_tnp_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_tnp_check"></label>
						<input type="hidden" name="tidak_tnp_check[]" class="tidak_tnp_check_hidden" data-role="tidak_tnp_check" value="">
						<input type="hidden" name="tidak_tnp_check_nama[]" class="tidak_tnp_check_nama">
					</td>
                    <td align="center">
                        <div class="row">
                            <div class="col-md-3" style="width:100px;">T : <br> <input type="text" name="tnp_t[]" style="width:90px;"></div>
                            <div class="col-md-3" style="width:100px;">N : <br> <input type="text" name="tnp_n[]" style="width:90px;"></div>
                            <div class="col-md-3" style="width:100px;">P : <br> <input type="text" name="tnp_p[]" style="width:90px;"></div>
                            <div class="col-md-3" style="width:100px;">S : <br> <input type="text" name="tnp_s[]" style="width:90px;"></div>
                        </div>
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.10. Pemasangan Katheter</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_kateter_check"></label>
						<input type="hidden" name="ya_kateter_check[]" class="ya_kateter_check_hidden" data-role="ya_kateter_check" value="">
						<input type="hidden" name="ya_kateter_check_nama[]" class="ya_kateter_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_kateter_check"></label>
						<input type="hidden" name="tidak_kateter_check[]" class="tidak_kateter_check_hidden" data-role="tidak_kateter_check" value="">
						<input type="hidden" name="tidak_kateter_check_nama[]" class="tidak_kateter_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_kateter[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.11. Pemeriksaan Laboratorium</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_pemeriksaan_lab_check"></label>
						<input type="hidden" name="ya_pemeriksaan_lab_check[]" class="ya_pemeriksaan_lab_check_hidden" data-role="ya_pemeriksaan_lab_check" value="">
						<input type="hidden" name="ya_pemeriksaan_lab_check_nama[]" class="ya_pemeriksaan_lab_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_pemeriksaan_lab_check"></label>
						<input type="hidden" name="tidak_pemeriksaan_lab_check[]" class="tidak_pemeriksaan_lab_check_hidden" data-role="tidak_pemeriksaan_lab_check" value="">
						<input type="hidden" name="tidak_pemeriksaan_lab_check_nama[]" class="tidak_pemeriksaan_lab_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_pemeriksaan_lab[]" class="form-control border-dark">
                    </td>
				</tr>
                <tr>
                    <td align="center"></td>
                    <td align="center">3.12. Thorax, EKG</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_pemeriksaan_thoraks_check"></label>
						<input type="hidden" name="ya_pemeriksaan_thoraks_check[]" class="ya_pemeriksaan_thoraks_check_hidden" data-role="ya_pemeriksaan_thoraks_check" value="">
						<input type="hidden" name="ya_pemeriksaan_thoraks_check_nama[]" class="ya_pemeriksaan_thoraks_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_pemeriksaan_thoraks_check"></label>
						<input type="hidden" name="tidak_pemeriksaan_thoraks_check[]" class="tidak_pemeriksaan_thoraks_check_hidden" data-role="tidak_pemeriksaan_thoraks_check" value="">
						<input type="hidden" name="tidak_pemeriksaan_thoraks_check_nama[]" class="tidak_pemeriksaan_thoraks_check_nama">
					</td>
                    <td align="center">
                        <input name="keterangan_pemeriksaan_thoraks[]" class="form-control border-dark">
                    </td>
				</tr>
                
                <tr>
                    <td align="center"></td>
                    <td align="center">
                    Lain-lain <br>
                    <textarea name="keterangan_pemeriksaan_lainnya1[]" class="form-control border-dark" rows="3"></textarea></td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="ya_pemeriksaan_lainnya_check"></label>
						<input type="hidden" name="ya_pemeriksaan_lainnya_check[]" class="ya_pemeriksaan_lainnya_check_hidden" data-role="ya_pemeriksaan_lainnya_check" value="">
						<input type="hidden" name="ya_pemeriksaan_lainnya_check_nama[]" class="ya_pemeriksaan_lainnya_check_nama">
					</td>
					<td align="center">
						<label><input type="checkbox" class="form-check-input" data-role="tidak_pemeriksaan_lainnya_check"></label>
						<input type="hidden" name="tidak_pemeriksaan_lainnya_check[]" class="tidak_pemeriksaan_lainnya_check_hidden" data-role="tidak_pemeriksaan_lainnya_check" value="">
						<input type="hidden" name="tidak_pemeriksaan_lainnya_check_nama[]" class="tidak_pemeriksaan_lainnya_check_nama">
					</td>
                    <td align="center">
                        <textarea name="keterangan_pemeriksaan_lainnya2[]" class="form-control border-dark" rows="3"></textarea>
                    </td>
				</tr>
                
            </table>


            <br><br>

            <table border="0" cellpading="4" style="width:100%">
                <tr>
                    <td align="center">
                        Yang, Menyerahkan 
                        Perawat Ruangan <br>
                    <select name="perawat_menyerahkan[]" id="perawat_menyerahkan${rowCount}" class="form-select perawat_menyerahkan" style="width:100%;"></select>
                    <input type="hidden" name="perawat_menyerahkan_nama[]" class="perawat_menyerahkan_nama"></td>
                    <td align="center">
                        Yang, Menerima
                        Perawat Kamar Bedah <br>
                    <select name="perawat_menerima[]" id="perawat_menerima${rowCount}" class="form-select perawat_menerima" style="width:100%;"></select>
                    <input type="hidden" name="perawat_menerima_nama[]" class="perawat_menerima_nama"></td>
                </tr>
            </table>
            
        </td>

        `;



        const pembatastable = table.insertRow(baseIndex + 2);
        pembatastable.innerHTML = `
        <td colspan="4" class="border-top border-bottom border-0 px-0" style="height: 280px;" align="center"> 
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
        initSelect2Dokter('dokter_pengkaji_kedua', 'dokter_pengkaji_kedua');



        function initSelect2Perawat(selectorId, namaKelas) {
            $(`#${selectorId}${rowCount}`).select2({
                ajax: {
                    url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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
        initSelect2Perawat('ahli_anesteshi_pertama', 'ahli_anesteshi_pertama');
        initSelect2Perawat('perawat_menyerahkan', 'perawat_menyerahkan');
        initSelect2Perawat('perawat_menerima', 'perawat_menerima');



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



        // === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
        row1.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
        callMarkerManager();


        // Setelah row1, rowPertama, pembatastable ditambahkan
        attachSanitizeEvents(row1);
        attachSanitizeEvents(rowPertama);
        attachSanitizeEvents(pembatastable);


        return row1;
    }


    function sanitizeInput(text) {
        return text
            .replace(/\\n/g, '\n')
            .replace(/\\t/g, '\t')
            .replace(/\\\//g, '/')
            .replace(/\\u2013/g, '–')
            .replace(/[<>]/g, '') // Buang karakter < dan >
            .replace(/['"]/g, '') // Buang kutip tunggal dan ganda
            .replace(/[^\w\s.,()*%\/+=:\-\n\t]/g, ''); // Hapus simbol aneh lainnya
    }

    function attachSanitizeEvents(row) {
        const inputs = row.querySelectorAll('input[type="text"], textarea');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                const original = this.value;
                const sanitized = sanitizeInput(original);
                if (original !== sanitized) {
                    this.value = sanitized;
                }
            });
        });
    }


    function cbCommon(data) {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataObj = Object.fromEntries(data.entries());
        const rowCount = dataObj["diagnosa_pertama_nama"]?.length || 0;

        for (let i = 0; i < rowCount; i++) {
            const tr = addRow(); // baris utama pertama dari 3 baris
            const baseIndex = i * 3;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 3);



            // input text
            const TanggalJamOperasi = dataObj['tanggal_jam_operasi']?.[i] || '';
            const AlergiDiagnosa = dataObj['alergi_diagnosa']?.[i] || '';
            const KeteranganMelapor = dataObj['keterangan_melapor']?.[i] || '';
            const KeteranganDokterBedah = dataObj['keterangan_dokter_bedah']?.[i] || '';
            const KeteranganDokterAnesthesi = dataObj['keterangan_dokter_anesteshi']?.[i] || '';
            const KeteranganInstalasiBedahSentral = dataObj['keterangan_instalasi_bedah']?.[i] || '';
            const KeteranganPersiapanBedah = dataObj['keterangan_persiapan_bedah']?.[i] || '';
            const KeteranganInformedConcent = dataObj['keterangan_informed_concent']?.[i] || '';
            const KeteranganMenuntunDoa = dataObj['keterangan_menuntun_doa']?.[i] || '';
            const KeteranganJasmani = dataObj['keterangan_jasmani']?.[i] || '';
            const KeteranganPuasa = dataObj['keterangan_puasa']?.[i] || '';
            const KeteranganKlisma = dataObj['keterangan_klisma']?.[i] || '';
            const Keterangangigipalsu = dataObj['keterangan_gigipalsu']?.[i] || '';
            const Keteranganperhiasan = dataObj['keterangan_perhiasan']?.[i] || '';
            const Keteranganlipstik = dataObj['keterangan_lipstik']?.[i] || '';
            const Keteranganbajuoperasi = dataObj['keterangan_bajuoperasi']?.[i] || '';
            const Keteranganpremedikasi = dataObj['keterangan_premedikasi']?.[i] || '';
            const tnp_T = dataObj['tnp_t']?.[i] || '';
            const tnp_N = dataObj['tnp_n']?.[i] || '';
            const tnp_P = dataObj['tnp_p']?.[i] || '';
            const tnp_S = dataObj['tnp_s']?.[i] || '';
            const Keterangankateter = dataObj['keterangan_kateter']?.[i] || '';
            const Keteranganlab = dataObj['keterangan_pemeriksaan_lab']?.[i] || '';
            const Keteranganthoraks = dataObj['keterangan_pemeriksaan_thoraks']?.[i] || '';
            const KeteranganLainnya1 = dataObj['keterangan_pemeriksaan_lainnya1']?.[i] || '';
            const KeteranganLainnya2 = dataObj['keterangan_pemeriksaan_lainnya2']?.[i] || '';



            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';

            //dokter select
            const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';
            const perawatKedua = dataObj['dokter_pengkaji_kedua_nama']?.[i] || '';
            const perawat_idKedua = dataObj['dokter_pengkaji_kedua']?.[i] || '';


            // tangkap data perawat
            const asistantPertama = dataObj['ahli_anesteshi_pertama_nama']?.[i] || '';
            const asistant_idPertama = dataObj['ahli_anesteshi_pertama']?.[i] || '';

            const perawatMenyerahkanPertama = dataObj['perawat_menyerahkan_nama']?.[i] || '';
            const perawatMenyerahkan_idPertama = dataObj['perawat_menyerahkan']?.[i] || '';

            const perawatMenerimaPertama = dataObj['perawat_menerima_nama']?.[i] || '';
            const perawatMenerima_idPertama = dataObj['perawat_menerima']?.[i] || '';






            // Row 2
            rows[0].querySelector('input[name="tanggal_jam_operasi[]"]').value = TanggalJamOperasi;
            rows[0].querySelector('textarea[name="alergi_diagnosa[]"]').value = AlergiDiagnosa;
            rows[1].querySelector('input[name="keterangan_melapor[]"]').value = KeteranganMelapor;
            rows[1].querySelector('input[name="keterangan_dokter_bedah[]"]').value = KeteranganDokterBedah;
            rows[1].querySelector('input[name="keterangan_dokter_anesteshi[]"]').value = KeteranganDokterAnesthesi;
            rows[1].querySelector('input[name="keterangan_instalasi_bedah[]"]').value = KeteranganInstalasiBedahSentral;
            rows[1].querySelector('input[name="keterangan_persiapan_bedah[]"]').value = KeteranganPersiapanBedah;
            rows[1].querySelector('input[name="keterangan_informed_concent[]"]').value = KeteranganInformedConcent;
            rows[1].querySelector('input[name="keterangan_menuntun_doa[]"]').value = KeteranganMenuntunDoa;
            rows[1].querySelector('input[name="keterangan_jasmani[]"]').value = KeteranganJasmani;
            rows[1].querySelector('input[name="keterangan_puasa[]"]').value = KeteranganPuasa;
            rows[1].querySelector('input[name="keterangan_klisma[]"]').value = KeteranganKlisma;
            rows[1].querySelector('input[name="keterangan_gigipalsu[]"]').value = Keterangangigipalsu;
            rows[1].querySelector('input[name="keterangan_perhiasan[]"]').value = Keteranganperhiasan;
            rows[1].querySelector('input[name="keterangan_lipstik[]"]').value = Keteranganlipstik;
            rows[1].querySelector('input[name="keterangan_bajuoperasi[]"]').value = Keteranganbajuoperasi;
            rows[1].querySelector('input[name="keterangan_premedikasi[]"]').value = Keteranganpremedikasi;
            rows[1].querySelector('input[name="tnp_t[]"]').value = tnp_N;
            rows[1].querySelector('input[name="tnp_n[]"]').value = tnp_N;
            rows[1].querySelector('input[name="tnp_p[]"]').value = tnp_N;
            rows[1].querySelector('input[name="tnp_s[]"]').value = tnp_N;
            rows[1].querySelector('input[name="keterangan_kateter[]"]').value = Keterangankateter;
            rows[1].querySelector('input[name="keterangan_pemeriksaan_lab[]"]').value = Keteranganlab;
            rows[1].querySelector('input[name="keterangan_pemeriksaan_thoraks[]"]').value = Keteranganthoraks;
            rows[1].querySelector('textarea[name="keterangan_pemeriksaan_lainnya1[]"]').value = KeteranganLainnya1;
            rows[1].querySelector('textarea[name="keterangan_pemeriksaan_lainnya2[]"]').value = KeteranganLainnya2;







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


            // Row checklist
            handleCheckboxGroup(rows[1], ['ya_sudah_melapor_check']);
            handleCheckboxGroup(rows[1], ['tidak_sudah_melapor_check']);
            handleCheckboxGroup(rows[1], ['ya_dokter_bedah_check']);
            handleCheckboxGroup(rows[1], ['tidak_dokter_bedah_check']);
            handleCheckboxGroup(rows[1], ['ya_dokter_anesteshi_check']);
            handleCheckboxGroup(rows[1], ['tidak_dokter_anesteshi_check']);
            handleCheckboxGroup(rows[1], ['ya_instalasi_bedah_check']);
            handleCheckboxGroup(rows[1], ['tidak_instalasi_bedah_check']);
            handleCheckboxGroup(rows[1], ['ya_persiapan_bedah_check']);
            handleCheckboxGroup(rows[1], ['tidak_persiapan_bedah_check']);
            handleCheckboxGroup(rows[1], ['ya_informed_concent_check']);
            handleCheckboxGroup(rows[1], ['tidak_informed_concent_check']);
            handleCheckboxGroup(rows[1], ['ya_menuntun_doa_check']);
            handleCheckboxGroup(rows[1], ['tidak_menuntun_doa_check']);
            handleCheckboxGroup(rows[1], ['ya_jasmani_check']);
            handleCheckboxGroup(rows[1], ['tidak_jasmani_check']);
            handleCheckboxGroup(rows[1], ['ya_mencukur_rambut_check']);
            handleCheckboxGroup(rows[1], ['tidak_mencukur_rambut_check']);
            handleCheckboxGroup(rows[1], ['ya_puasa_check']);
            handleCheckboxGroup(rows[1], ['tidak_puasa_check']);
            handleCheckboxGroup(rows[1], ['ya_klisma_check']);
            handleCheckboxGroup(rows[1], ['tidak_klisma_check']);
            handleCheckboxGroup(rows[1], ['ya_gigipalsu_check']);
            handleCheckboxGroup(rows[1], ['tidak_gigipalsu_check']);
            handleCheckboxGroup(rows[1], ['ya_perhiasan_check']);
            handleCheckboxGroup(rows[1], ['tidak_perhiasan_check']);
            handleCheckboxGroup(rows[1], ['ya_lipstik_check']);
            handleCheckboxGroup(rows[1], ['tidak_lipstik_check']);
            handleCheckboxGroup(rows[1], ['ya_bajuoperasi_check']);
            handleCheckboxGroup(rows[1], ['tidak_bajuoperasi_check']);
            handleCheckboxGroup(rows[1], ['ya_premedikasi_check']);
            handleCheckboxGroup(rows[1], ['tidak_premedikasi_check']);
            handleCheckboxGroup(rows[1], ['ya_tnp_check']);
            handleCheckboxGroup(rows[1], ['tidak_tnp_check']);
            handleCheckboxGroup(rows[1], ['ya_kateter_check']);
            handleCheckboxGroup(rows[1], ['tidak_kateter_check']);
            handleCheckboxGroup(rows[1], ['ya_pemeriksaan_lab_check']);
            handleCheckboxGroup(rows[1], ['tidak_pemeriksaan_lab_check']);
            handleCheckboxGroup(rows[1], ['ya_pemeriksaan_thoraks_check']);
            handleCheckboxGroup(rows[1], ['tidak_pemeriksaan_thoraks_check']);
            handleCheckboxGroup(rows[1], ['ya_pemeriksaan_lainnya_check']);
            handleCheckboxGroup(rows[1], ['tidak_pemeriksaan_lainnya_check']);




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
            const rowdiagnosa = rows[0];

            initSelect2Diagnosa(
                $(rowdiagnosa).find('.diagnosa_pertama'),
                rowdiagnosa.querySelector('.diagnosa_pertama_nama'),
                diagnosaPertama,
                diagnosa_idPertama
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




            // Baris ke-3 dokter
            const rowdokter = rows[0];

            initSelect2Dokter(
                $(rowdokter).find('.dokter_pengkaji_pertama'),
                rowdokter.querySelector('.dokter_pengkaji_pertama_nama'),
                perawatPertama,
                perawat_idPertama
            );


            function initSelect2Perawat(selectElement, hiddenInput, selectedText, selectedId) {
                selectElement.select2({
                    ajax: {
                        url: '<?= site_url('backend/admission/getKaryawan/13'); ?>',
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




            // Baris perawat
            const rowperawat = rows[0];

            initSelect2Perawat(
                $(rowperawat).find('.ahli_anesteshi_pertama'),
                rowperawat.querySelector('.ahli_anesteshi_pertama_nama'),
                asistantPertama,
                asistant_idPertama
            );

            const rowperawat2 = rows[1];

            initSelect2Perawat(
                $(rowperawat2).find('.perawat_menyerahkan'),
                rowperawat2.querySelector('.perawat_menyerahkan_nama'),
                perawatMenyerahkanPertama,
                perawatMenyerahkan_idPertama
            );

            initSelect2Perawat(
                $(rowperawat2).find('.perawat_menerima'),
                rowperawat2.querySelector('.perawat_menerima_nama'),
                perawatMenerimaPertama,
                perawatMenerima_idPertama
            );









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
</script>