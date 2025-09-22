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
		 		<table class="table table-bordered border-dark" cellpadding="8" style="width:100%">
					<tr>
						<td align="center" colspan="2">PEMBERIAN INFORMASI</td>
					</tr>
					<tr>
						<td>Dokter Pelaksana Tindakan</td>
						<td>
							<select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
							<input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama">
						</td>
					</tr>
					<tr>
						<td>Pemberian Informasi</td>
						<td>
							<select name="perawat_asistant_pertama[]" id="perawat_asistant_pertama${rowCount}" class="form-select perawat_asistant_pertama" style="width:100%;"></select>
							<input type="hidden" name="perawat_asistant_pertama_nama[]" class="perawat_asistant_pertama_nama">
						</td>
					</tr>
					<tr>
						<td>Penerima Informasi / penolakan</td>
						<td><input type="text" name="penerima_informasi[]" class="form-control border-dark"></td>
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
					<td>Jenis Informasi</td>
					<td>Isi Informasi</td>
					<td>Tanda &check;</td>
				</tr>  
				<tr align="center">
					<td>1</td>
					<td>Diagnosis (WD & DD)</td>
					<td>
						<select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
						<input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
					</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="diagnosis_wd_check"></label>
						<input type="hidden" name="diagnosis_wd_check[]" class="diagnosis_wd_check_hidden" data-role="diagnosis_wd_check" value="">
						<input type="hidden" name="diagnosis_wd_check_nama[]" class="diagnosis_wd_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>2</td>
					<td>Dasar Diagnosis</td>
					<td>
						<input type="text" name="dasar_diagnosis[]" class="form-control border-dark">
					</td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="dasar_diagnosis_check"></label>
						<input type="hidden" name="dasar_diagnosis_check[]" class="dasar_diagnosis_check_hidden" data-role="dasar_diagnosis_check" value="">
						<input type="hidden" name="dasar_diagnosis_check_nama[]" class="dasar_diagnosis_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>3</td>
					<td>Tindakan Kedokteran</td>
					<td><input type="text" name="tindakan_kedokteran[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="tindakan_kedokteran_check"></label>
						<input type="hidden" name="tindakan_kedokteran_check[]" class="tindakan_kedokteran_check_hidden" data-role="tindakan_kedokteran_check" value="">
						<input type="hidden" name="tindakan_kedokteran_check_nama[]" class="tindakan_kedokteran_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>4</td>
					<td>Indikasi Tindakan</td>
					<td><input type="text" name="indikasi_tindakan[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="indikasi_tindakan_check"></label>
						<input type="hidden" name="indikasi_tindakan_check[]" class="indikasi_tindakan_check_hidden" data-role="indikasi_tindakan_check" value="">
						<input type="hidden" name="indikasi_tindakan_check_nama[]" class="indikasi_tindakan_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>5</td>
					<td>Indikasi Tindakan</td>
					<td><input type="text" name="tata_cara[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="tata_cara_check"></label>
						<input type="hidden" name="tata_cara_check[]" class="tata_cara_check_hidden" data-role="tata_cara_check" value="">
						<input type="hidden" name="tata_cara_check_nama[]" class="tata_cara_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>6</td>
					<td>Tujuan</td>
					<td><input type="text" name="tujuan[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="tujuan_check"></label>
						<input type="hidden" name="tujuan_check[]" class="tujuan_check_hidden" data-role="tujuan_check" value="">
						<input type="hidden" name="tujuan_check_nama[]" class="tujuan_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>7</td>
					<td>Risiko</td>
					<td><input type="text" name="resiko[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="resiko_check"></label>
						<input type="hidden" name="resiko_check[]" class="resiko_check_hidden" data-role="resiko_check" value="">
						<input type="hidden" name="resiko_check_nama[]" class="resiko_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>8</td>
					<td>Komplikasi</td>
					<td><input type="text" name="komplikasi[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="komplikasi_check"></label>
						<input type="hidden" name="komplikasi_check[]" class="komplikasi_check_hidden" data-role="komplikasi_check" value="">
						<input type="hidden" name="komplikasi_check_nama[]" class="komplikasi_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>9</td>
					<td>Prognosis</td>
					<td><input type="text" name="prognosis[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="prognosis_check"></label>
						<input type="hidden" name="prognosis_check[]" class="prognosis_check_hidden" data-role="prognosis_check" value="">
						<input type="hidden" name="prognosis_check_nama[]" class="prognosis_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>10</td>
					<td>Alternatif & Risiko</td>
					<td><input type="text" name="alternatif[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="alternatif_check"></label>
						<input type="hidden" name="alternatif_check[]" class="alternatif_check_hidden" data-role="alternatif_check" value="">
						<input type="hidden" name="alternatif_check_nama[]" class="alternatif_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td>11</td>
					<td>Pemberian terapi analgetik post anestesi/ sedasi</td>
					<td><input type="text" name="pemberian_terapi[]" class="form-control border-dark"></td>
					<td>
						<label><input type="checkbox" class="form-check-input" data-role="pemberian_terapi_check"></label>
						<input type="hidden" name="pemberian_terapi_check[]" class="pemberian_terapi_check_hidden" data-role="pemberian_terapi_check" value="">
						<input type="hidden" name="pemberian_terapi_check_nama[]" class="pemberian_terapi_check_nama">
					</td>
				</tr>
				<tr align="center">
					<td colspan="3">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara benar dan jelas dan memberikan kesempatan untuk bertanya dan/atau berdiskusi</td>
					<td>
						Tanda Tangan Dokter <br><br><br>
						<select name="dokter_pengkaji_kedua[]" id="dokter_pengkaji_kedua${rowCount}" class="form-select dokter_pengkaji_kedua" style="width:100%;"></select>
						<input type="hidden" name="dokter_pengkaji_kedua_nama[]" class="dokter_pengkaji_kedua_nama">
					</td>
				</tr>
				<tr align="center">
					<td colspan="3">Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana di atas kemudian saya beri tanda/paraf di kolom kanannya, dan telah memahaminya</td>
					<td>
						Tanda Tangan <br> Pasien / Keluarga <br>
						<img class="marker-image border border-dark" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" style="width: 220px; height:120px" data-input-name="image_drawer_disetujui_${rowCount}" />
						<input type="hidden"  id="image_drawer_disetujui_${rowCount}" name="image_drawer_disetujui_${rowCount}" value="" /> <br><br>

						<input type="text" name="nama_hub_pasien" value="<?= $nama_hub_pasien; ?>" class="form-control border-dark">
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center">* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</td>
				</tr>
				<tr>
					<td colspan="4" align="center">
						<div class="bg-secondary"><h2 class="text-white">PENOLAKAN TINDAKAN ANESTESI / SEDASI</h2></div>
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<div class="d-flex flex-column gap-1">
							<div class="d-flex align-items-center gap-2">
						<span class="flex-shrink-0">Yang bertandatangan di bawah ini, saya, nama</span>	
						<input type="text" name="yg_bertanda_tangan[]" class="form-control border-dark"> <span class="flex-shrink-0">, Umur</span> <input type="text" name="umur_tanda_tangan[]" class="form-control border-dark"> Tahun, <input type="text" name="jenkel_tanda_tangan[]" class="form-control border-dark">
						</div>

						<div  class="d-flex align-items-center gap-2">
							<span class="flex-shrink-0">, dengan ini menyatakan penolakan untuk dilakukannya tindakan</span>
							<input type="text" name="yang_menyatakan_tanda_tangan[]" class="form-control border-dark">
						</div>

						<div class="d-flex align-items-center gap-2">
							<span class="flex-shrink-0">terhadap saya/
							bernama</span>
							<input type="text" name="terhadap_saya_bernama[]" class="form-control border-dark"> <span class="flex-shrink-0">umur</span> <input type="text" name="tehadap_saya_umur[]" class="form-control border-dark">
							<span class="flex-shrink-0">Tahun</span> <input type="text" name="tehadap_saya_jenkel[]" class="form-control border-dark">
						</div>

						<div class="d-flex align-items-center gap-2">
							<span class="d-flex flex-shrink-0">alamat</span>
							<textarea name="alamat_pasien[]" class="form-control border-dark" rows="2"></textarea>
						</div>

						<div align="center">Saya memahami perlunya dan manfaat tindakan sebagaimana telah dijelaskan seperti di atas kepada saya, termasuk risiko dan komplikasi yang mungkin timbul.</div>

						<div align="center">Saya juga menyadari bahwa dokter melakukan suatu upaya dan oleh karena ilmu kedokteran bukanlah ilmu pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.</div>


						<div class="d-flex gap-2 justify-content-end align-items-center">
						<span><?= $city_sign; ?>,</span> <input type="date" class="form-control border-dark w-25" name="tgl_kedatangan[]">
						</div>


						<br><br>


						<table cellpadding="4">
							<tr>
								<td align="center">
									Disetujui Oleh Pasien : <br>

									<img class="marker-image border border-dark" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" style="width: 220px; height:120px" data-input-name="image_drawer_ttd_pasien_${rowCount}" />
									<input type="hidden"  id="image_drawer_ttd_pasien_${rowCount}" name="image_drawer_ttd_pasien_${rowCount}" value="" /> <br><br>

									<input type="text" name="nama_pasien" value="<?= $nama_pasien; ?>" class="form-control border-dark" disabled>
								</td>
								<td align="center">
									Saksi Wali/Keluarga : <br> 

									<img class="marker-image border border-dark" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" style="width: 220px; height:120px" data-input-name="image_drawer_ttd_hub_pasien_${rowCount}" />
									<input type="hidden"  id="image_drawer_ttd_hub_pasien_${rowCount}" name="image_drawer_ttd_hub_pasien_${rowCount}" value="" /> <br><br>

									<input type="text" name="nama_hub_pasien" value="<?= $nama_hub_pasien; ?>" class="form-control border-dark">
								</td>
								<td align="center">
									Saksi Rumah Sakit: <br><br><br><br><br>


                                    <select name="saksi_rs_pertama[]" id="saksi_rs_pertama${rowCount}" class="form-select saksi_rs_pertama" style="width:100%;"></select>
                                    <input type="hidden" name="saksi_rs_pertama_nama[]" class="saksi_rs_pertama_nama">

								</td>
							</tr>
						</table>



						</div>
					</td>
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
                    url: '<?= site_url('backend/admission/getKaryawan'); ?>',
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
        initSelect2Perawat('perawat_asistant_pertama', 'perawat_asistant_pertama');
        initSelect2Perawat('saksi_rs_pertama', 'saksi_rs_pertama');



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
            const PenerimaInformasi = dataObj['penerima_informasi']?.[i] || '';
            const TindakanKedokteran = dataObj['tindakan_kedokteran']?.[i] || '';
            const DasarDiagnosis = dataObj['dasar_diagnosis']?.[i] || '';
            const IndikasiTindakan = dataObj['indikasi_tindakan']?.[i] || '';
            const TataCara = dataObj['tata_cara']?.[i] || '';
            const Tujuan = dataObj['tujuan']?.[i] || '';
            const Resiko = dataObj['resiko']?.[i] || '';
            const Komplikasi = dataObj['komplikasi']?.[i] || '';
            const Prognosis = dataObj['prognosis']?.[i] || '';
            const Alternatif = dataObj['alternatif']?.[i] || '';
            const PemberianTerapi = dataObj['pemberian_terapi']?.[i] || '';
            const YangBertandaTangan = dataObj['yg_bertanda_tangan']?.[i] || '';
            const UmurtandaTangan = dataObj['umur_tanda_tangan']?.[i] || '';
            const JenkeltandaTangan = dataObj['jenkel_tanda_tangan']?.[i] || '';
            const YangMenyatakanTandaTangan = dataObj['yang_menyatakan_tanda_tangan']?.[i] || '';
            const TerhadapSayaBernamaTandaTangan = dataObj['terhadap_saya_bernama']?.[i] || '';
            const TerhadapSayaUmurTandaTangan = dataObj['tehadap_saya_umur']?.[i] || '';
            const TerhadapSayaJenkelTandaTangan = dataObj['tehadap_saya_jenkel']?.[i] || '';
            const AlamatPasien = dataObj['alamat_pasien']?.[i] || '';
            const TanggalKedatangan = dataObj['tgl_kedatangan']?.[i] || '';


            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
            const diagnosaPost = dataObj['dasar_diagnosis_nama']?.[i] || '';
            const diagnosa_idPost = dataObj['dasar_diagnosis']?.[i] || '';


            //dokter select
            const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';
            const perawatKedua = dataObj['dokter_pengkaji_kedua_nama']?.[i] || '';
            const perawat_idKedua = dataObj['dokter_pengkaji_kedua']?.[i] || '';


            // tangkap data perawat
            const asistantPertama = dataObj['perawat_asistant_pertama_nama']?.[i] || '';
            const asistant_idPertama = dataObj['perawat_asistant_pertama']?.[i] || '';
            const saksiRsPertama = dataObj['saksi_rs_pertama_nama']?.[i] || '';
            const saksiRs_idPertama = dataObj['saksi_rs_pertama']?.[i] || '';





            // Row 2
            rows[0].querySelector('input[name="penerima_informasi[]"]').value = PenerimaInformasi;
            rows[1].querySelector('input[name="tindakan_kedokteran[]"]').value = TindakanKedokteran;
            rows[1].querySelector('input[name="dasar_diagnosis[]"]').value = DasarDiagnosis;
            rows[1].querySelector('input[name="indikasi_tindakan[]"]').value = IndikasiTindakan;
            rows[1].querySelector('input[name="tata_cara[]"]').value = TataCara;
            rows[1].querySelector('input[name="tujuan[]"]').value = Tujuan;
            rows[1].querySelector('input[name="resiko[]"]').value = Resiko;
            rows[1].querySelector('input[name="komplikasi[]"]').value = Komplikasi;
            rows[1].querySelector('input[name="prognosis[]"]').value = Prognosis;
            rows[1].querySelector('input[name="alternatif[]"]').value = Alternatif;
            rows[1].querySelector('input[name="pemberian_terapi[]"]').value = PemberianTerapi;

            rows[1].querySelector('input[name="yg_bertanda_tangan[]"]').value = YangBertandaTangan;
            rows[1].querySelector('input[name="umur_tanda_tangan[]"]').value = UmurtandaTangan;
            rows[1].querySelector('input[name="jenkel_tanda_tangan[]"]').value = JenkeltandaTangan;
            rows[1].querySelector('input[name="yang_menyatakan_tanda_tangan[]"]').value = YangMenyatakanTandaTangan;
            rows[1].querySelector('input[name="terhadap_saya_bernama[]"]').value = TerhadapSayaBernamaTandaTangan;
            rows[1].querySelector('input[name="tehadap_saya_umur[]"]').value = TerhadapSayaUmurTandaTangan;
            rows[1].querySelector('input[name="tehadap_saya_jenkel[]"]').value = TerhadapSayaJenkelTandaTangan;
            rows[1].querySelector('textarea[name="alamat_pasien[]"]').value = AlamatPasien;
            rows[1].querySelector('input[name="tgl_kedatangan[]"]').value = TanggalKedatangan;






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
            handleCheckboxGroup(rows[1], ['diagnosis_wd_check']);
            handleCheckboxGroup(rows[1], ['dasar_diagnosis_check']);
            handleCheckboxGroup(rows[1], ['tindakan_kedokteran_check']);
            handleCheckboxGroup(rows[1], ['indikasi_tindakan_check']);
            handleCheckboxGroup(rows[1], ['tata_cara_check']);
            handleCheckboxGroup(rows[1], ['tujuan_check']);
            handleCheckboxGroup(rows[1], ['resiko_check']);
            handleCheckboxGroup(rows[1], ['komplikasi_check']);
            handleCheckboxGroup(rows[1], ['prognosis_check']);
            handleCheckboxGroup(rows[1], ['alternatif_check']);
            handleCheckboxGroup(rows[1], ['pemberian_terapi_check']);





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
            const rowdiagnosa = rows[1];

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

            const rowdokter2 = rows[1];
            initSelect2Dokter(
                $(rowdokter2).find('.dokter_pengkaji_kedua'),
                rowdokter2.querySelector('.dokter_pengkaji_kedua_nama'),
                perawatKedua,
                perawat_idKedua
            );



            function initSelect2Perawat(selectElement, hiddenInput, selectedText, selectedId) {
                selectElement.select2({
                    ajax: {
                        url: '<?= site_url('backend/admission/getKaryawan'); ?>',
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
                $(rowperawat).find('.perawat_asistant_pertama'),
                rowperawat.querySelector('.perawat_asistant_pertama_nama'),
                asistantPertama,
                asistant_idPertama
            );

            const rowperawat2 = rows[1];

            initSelect2Perawat(
                $(rowperawat2).find('.saksi_rs_pertama'),
                rowperawat2.querySelector('.saksi_rs_pertama_nama'),
                saksiRsPertama,
                saksiRs_idPertama
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