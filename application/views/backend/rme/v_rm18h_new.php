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
           <table class="table table-bordered border-dark" cellpadding="4" style="width:100%">
                <tr>
                    <td align="center">CATATAN KAMAR PEMULIHAN</td>
                    <td> 
                        Nama Pasien <br>
                        <input type="text" name="nama_pasien" value="<?= $nama_pasien ?>" class="form-control border-dark" disabled> <br>

                        Tanggal Lahir  <br>
                        <input type="text" name="tgl_lahir" value="<?= $tgl_lahir ?>" class="form-control border-dark" disabled> <br>

                        No RM  <br>
                        <input type="text" name="no_rm" value="<?= $no_rm ?>" class="form-control border-dark" disabled> <br>

                    </td> 
                </tr>
                <tr>
                    <td>Data Masuk</td>
                    <td>
                        Jam <br>
                        <input type="time" name="tanggal_jam_operasi[]" class="form-control border-dark">
                    </td>
                </tr>
                <tr>
                    <td>Jalan Nafas</td>
                    <td>
                        <label><input type="checkbox" class="form-check-input" data-role="tidak_ada_kelainan_check"> Tidak Ada Kelainan</label>
						<input type="hidden" name="tidak_ada_kelainan_check[]" class="tidak_ada_kelainan_check_hidden" data-role="tidak_ada_kelainan_check" value="">
						<input type="hidden" name="tidak_ada_kelainan_check_nama[]" class="tidak_ada_kelainan_check_nama">
                    </td>
                </tr>
                <tr>
                    <td>Pernapasan</td>
                    <td>
                        <label><input type="checkbox" class="form-check-input" data-role="pernapasan_spontan_check"> Spontan</label>
						<input type="hidden" name="pernapasan_spontan_check[]" class="pernapasan_spontan_check_hidden" data-role="pernapasan_spontan_check" value="">
						<input type="hidden" name="pernapasan_spontan_check_nama[]" class="pernapasan_spontan_check_nama"> &nbsp; 

                        <label><input type="checkbox" class="form-check-input" data-role="pernapasan_dibantu_check"> dibantu</label>
						<input type="hidden" name="pernapasan_dibantu_check[]" class="pernapasan_dibantu_check_hidden" data-role="pernapasan_dibantu_check" value="">
						<input type="hidden" name="pernapasan_dibantu_check_nama[]" class="pernapasan_dibantu_check_nama">
                    </td>
                </tr>
                <tr>
                    <td>Bila spontan</td>
                    <td>
                        <label><input type="checkbox" class="form-check-input" data-role="adekuat_bersuara_check"> Adekuat bersuara</label>
						<input type="hidden" name="adekuat_bersuara_check[]" class="adekuat_bersuara_check_hidden" data-role="adekuat_bersuara_check" value="">
						<input type="hidden" name="adekuat_bersuara_check_nama[]" class="adekuat_bersuara_check_nama"> &nbsp;

                        <label><input type="checkbox" class="form-check-input" data-role="penyumbatan_check"> Penyumbatan </label>
						<input type="hidden" name="penyumbatan_check[]" class="penyumbatan_check_hidden" data-role="penyumbatan_check" value="">
						<input type="hidden" name="penyumbatan_check_nama[]" class="penyumbatan_check_nama"> &nbsp;

                        <label><input type="checkbox" class="form-check-input" data-role="membutuhkan_bantuan_check"> Membutuhkan bantuan alat</label>
						<input type="hidden" name="membutuhkan_bantuan_check[]" class="membutuhkan_bantuan_check_hidden" data-role="membutuhkan_bantuan_check" value="">
						<input type="hidden" name="membutuhkan_bantuan_check_nama[]" class="membutuhkan_bantuan_check_nama"> &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Kesadaran</td>
                    <td>
                        <label><input type="checkbox" class="form-check-input" data-role="sadar_betul_check"> Sadar Betul</label>
						<input type="hidden" name="sadar_betul_check[]" class="sadar_betul_check_hidden" data-role="sadar_betul_check" value="">
						<input type="hidden" name="sadar_betul_check_nama[]" class="sadar_betul_check_nama"> &nbsp;

                        <label><input type="checkbox" class="form-check-input" data-role="belum_sadar_betul_check"> Belum Sadar Betul</label>
						<input type="hidden" name="belum_sadar_betul_check[]" class="belum_sadar_betul_check_hidden" data-role="belum_sadar_betul_check" value="">
						<input type="hidden" name="belum_sadar_betul_check_nama[]" class="belum_sadar_betul_check_nama"> &nbsp;

                        <label><input type="checkbox" class="form-check-input" data-role="tidur_dalam_check"> Tidur Dalam</label>
						<input type="hidden" name="tidur_dalam_check[]" class="tidur_dalam_check_hidden" data-role="tidur_dalam_check" value="">
						<input type="hidden" name="tidur_dalam_check_nama[]" class="tidur_dalam_check_nama"> &nbsp;

                        <label><input type="checkbox" class="form-check-input" data-role="vas_check"> VAS</label>
						<input type="hidden" name="vas_check[]" class="vas_check_hidden" data-role="vas_check" value="">
						<input type="hidden" name="vas_check_nama[]" class="vas_check_nama"> &nbsp;
                    </td>
                </tr>

                <tr>
                    <td align="center">Skor ALDRETTE</td>
                    <td>
                        Aktivitas <br>
                        <input type="text" name="aldrette_aktivitas[]" class="form-control border-dark">

                        Sirkulasi <br>
                        <input type="text" name="aldrette_sirkulasi[]" class="form-control border-dark">

                        Pernapasan <br>
                        <input type="text" name="aldrette_pernapasan[]" class="form-control border-dark">

                        Kesadaran <br>
                        <input type="text" name="aldrette_kesadaran[]" class="form-control border-dark">

                        warna kulit <br>
                        <input type="text" name="aldrette_warna_kulit[]" class="form-control border-dark">

                        Total <br>
                        <input type="text" name="aldrette_total[]" class="form-control border-dark">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                    <img id="setting_img" class="marker-image border border-dark" src="<?= base_url('assets2/rme/img/kamar_pemulihan.png') ?>" style="width: 99%; height:440px" data-input-name="image_drawer_disetujui_${rowCount}" />
						<input type="hidden"  id="image_drawer_disetujui_${rowCount}" name="image_drawer_disetujui_${rowCount}" value="" />
                    </td>
                </tr>
           </table>

           <table border="1" cellpadding="4" style="width:100%">
            <tr>
                <td colspan="2">Keluar Kamar Pulih</td>
                <td>
                    Jam <br>
                    <input type="time" name="jam_kamar_pulih[]" class="form-control border-dark">
                </td>
                <td>
                      <label><input type="checkbox" class="form-check-input" data-role="vas_check2"> VAS</label>
						<input type="hidden" name="vas_check2[]" class="vas_check2_hidden" data-role="vas_check2" value="">
						<input type="hidden" name="vas_check2_nama[]" class="vas_check2_nama"> 
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">Skor ALDRETTE</td>
                <td>
                    Aktivitas <br>
                    <input type="text" name="aldrette_aktivitas2[]" class="form-control border-dark">
                </td>
                <td>
                    Sirkulasi <br>
                    <input type="text" name="aldrette_sirkulasi2[]" class="form-control border-dark">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Pernapasan <br>
                    <input type="text" name="aldrette_pernapasan2[]" class="form-control border-dark">
                </td>
                <td>
                    Kesadaran <br>
                    <input type="text" name="aldrette_kesadaran2[]" class="form-control border-dark">
                </td>
                <td>
                    Warna Kulit <br>
                    <input type="text" name="aldrette_warna_kulit2[]" class="form-control border-dark">
                </td>
                <td>
                    Total <br>
                    <input type="text" name="aldrette_total2[]" class="form-control border-dark">
                </td>
            </tr>

            <tr>
                <td>Ke :</td>
                <td>
                     <label><input type="checkbox" class="form-check-input" data-role="ruangan_check"> Ruang Rawat</label>
                    <input type="hidden" name="ruangan_check[]" class="ruangan_check_hidden" data-role="ruangan_check" value="">
                    <input type="hidden" name="ruangan_check_nama[]" class="ruangan_check_nama"> 
                </td>
                <td>
                     <label><input type="checkbox" class="form-check-input" data-role="icu_check"> ICU</label>
                    <input type="hidden" name="icu_check[]" class="icu_check_hidden" data-role="icu_check" value="">
                    <input type="hidden" name="icu_check_nama[]" class="icu_check_nama"> 
                </td>
                <td>
                     <label><input type="checkbox" class="form-check-input" data-role="langsung_pulang_check"> langsung pulang</label>
                    <input type="hidden" name="langsung_pulang_check[]" class="langsung_pulang_check_hidden" data-role="langsung_pulang_check" value="">
                    <input type="hidden" name="langsung_pulang_check_nama[]" class="langsung_pulang_check_nama"> 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <br>
                    Catatan Khusus Ruang Pemulihan: <br>
                    <textarea name="catatan_khusus_ruang_pemulihan[]" class="form-control border-dark" rows="4"></textarea>
                </td>
                <td colspan="2" align="center">
                    Perawat Kamar Pemulihan <br><br><br><br>
                    <select name="perawat_kamar_pemulihan_pertama[]" id="perawat_kamar_pemulihan_pertama${rowCount}" class="form-select perawat_kamar_pemulihan_pertama" style="width:100%;"></select>
                    <input type="hidden" name="perawat_kamar_pemulihan_pertama_nama[]" class="perawat_kamar_pemulihan_pertama_nama">
                </td>
            </tr>
           </table>


           <br><br><br>

           <h2><b>INSTRUKSI PASCA BEDAH</b></h2>

           <table class="table table-bordered border-dark">
                <tr>
                    <td>Bila kesakitan</td>
                    <td><input type="text" name="bila_kesakitan[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Bila Mual</td>
                    <td><input type="text" name="bila_mual[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Antibotika</td>
                    <td><input type="text" name="antibiotika[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Obat-obatan lain</td>
                    <td><input type="text" name="obat_lain[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Infus</td>
                    <td><input type="text" name="infus[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Minum</td>
                    <td><input type="text" name="minum[]" class="form-control border-dark"></td>
                </tr>
                <tr>
                    <td>Pemantauan Tensi Nadi, Nafas setiap : </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <input type="text" name="tensi_nadi[]" class="form-control border-dark">
                            <span>Selama</span>
                            <input type="text" name="tensi_nadi_selama[]" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lain-lain</td>
                    <td><input type="text" name="tensi_nadi_lain[]" class="form-control border-dark"></td>
                </tr>
           </table>

           <div class="d-flex align-items-end justify-content-end flex-column">
                    <div>Dokter Anestesi</div> <br><br><br>
                    <select name="dokter_anestesi_pertama[]" id="dokter_anestesi_pertama${rowCount}" class="form-select dokter_anestesi_pertama" style="width:25%;"></select>
                    <input type="hidden" name="dokter_anestesi_pertama_nama[]" class="dokter_anestesi_pertama_nama">
           </div>
		   </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `
        <td colspan="4" class="border-top border-bottom border-0 px-0" style="height: 280px;" align="center">
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
        initSelect2Dokter('dokter_anestesi_pertama', 'dokter_anestesi_pertama');


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
        initSelect2Perawat('perawat_kamar_pemulihan_pertama', 'perawat_kamar_pemulihan_pertama');


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
        const rowCount = dataObj["tanggal_jam_operasi"]?.length || 0;

        for (let i = 0; i < rowCount; i++) {
            const tr = addRow(); // baris utama pertama dari 3 baris
            const baseIndex = i * 3;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 3);



            // input text
            const TanggalJamOperasi = dataObj['tanggal_jam_operasi']?.[i] || '';
            const AlderetteAktivitas = dataObj['aldrette_aktivitas']?.[i] || '';
            const AlderetteSirkulasi = dataObj['aldrette_sirkulasi']?.[i] || '';
            const AlderettePernapasan = dataObj['aldrette_pernapasan']?.[i] || '';
            const AlderetteKesadaran = dataObj['aldrette_kesadaran']?.[i] || '';
            const AlderetteWarnaKulit = dataObj['aldrette_warna_kulit']?.[i] || '';
            const AlderetteTotal = dataObj['aldrette_total']?.[i] || '';
            const JamKamarPulih = dataObj['jam_kamar_pulih']?.[i] || '';

            const AlderetteAktivitas2 = dataObj['aldrette_aktivitas2']?.[i] || '';
            const AlderetteSirkulasi2 = dataObj['aldrette_sirkulasi2']?.[i] || '';
            const AlderettePernapasan2 = dataObj['aldrette_pernapasan2']?.[i] || '';
            const AlderetteKesadaran2 = dataObj['aldrette_kesadaran2']?.[i] || '';
            const AlderetteWarnaKulit2 = dataObj['aldrette_warna_kulit2']?.[i] || '';
            const AlderetteTotal2 = dataObj['aldrette_total2']?.[i] || '';
            const CatatanKhusus = dataObj['catatan_khusus_ruang_pemulihan']?.[i] || '';
            const BilaKesakitan = dataObj['bila_kesakitan']?.[i] || '';
            const BilaMual = dataObj['bila_mual']?.[i] || '';
            const Antibiotika = dataObj['antibiotika']?.[i] || '';
            const ObatLain = dataObj['obat_lain']?.[i] || '';
            const Infus = dataObj['infus']?.[i] || '';
            const Minum = dataObj['minum']?.[i] || '';
            const tensiNadi = dataObj['tensi_nadi']?.[i] || '';
            const tensiNadiSelama = dataObj['tensi_nadi_selama']?.[i] || '';
            const tensiNadiLain = dataObj['tensi_nadi_lain']?.[i] || '';


            // tangkap data perawat
            const asistantPertama = dataObj['perawat_kamar_pemulihan_pertama_nama']?.[i] || '';
            const asistant_idPertama = dataObj['perawat_kamar_pemulihan_pertama']?.[i] || '';



            //dokter select
            const perawatPertama = dataObj['dokter_anestesi_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_anestesi_pertama']?.[i] || '';




            // Row 2
            rows[0].querySelector('input[name="tanggal_jam_operasi[]"]').value = TanggalJamOperasi;
            rows[0].querySelector('input[name="aldrette_aktivitas[]"]').value = AlderetteAktivitas;
            rows[0].querySelector('input[name="aldrette_sirkulasi[]"]').value = AlderetteSirkulasi;
            rows[0].querySelector('input[name="aldrette_pernapasan[]"]').value = AlderettePernapasan;
            rows[0].querySelector('input[name="aldrette_kesadaran[]"]').value = AlderetteKesadaran;
            rows[0].querySelector('input[name="aldrette_warna_kulit[]"]').value = AlderetteWarnaKulit;
            rows[0].querySelector('input[name="aldrette_total[]"]').value = AlderetteTotal;
            rows[0].querySelector('input[name="jam_kamar_pulih[]"]').value = JamKamarPulih;

            rows[0].querySelector('input[name="aldrette_aktivitas2[]"]').value = AlderetteAktivitas2;
            rows[0].querySelector('input[name="aldrette_sirkulasi2[]"]').value = AlderetteSirkulasi2;
            rows[0].querySelector('input[name="aldrette_pernapasan2[]"]').value = AlderettePernapasan2;
            rows[0].querySelector('input[name="aldrette_kesadaran2[]"]').value = AlderetteKesadaran2;
            rows[0].querySelector('input[name="aldrette_warna_kulit2[]"]').value = AlderetteWarnaKulit2;
            rows[0].querySelector('input[name="aldrette_total2[]"]').value = AlderetteTotal2;
            rows[0].querySelector('textarea[name="catatan_khusus_ruang_pemulihan[]"]').value = CatatanKhusus;
            rows[0].querySelector('input[name="bila_kesakitan[]"]').value = BilaKesakitan;
            rows[0].querySelector('input[name="bila_mual[]"]').value = BilaMual;
            rows[0].querySelector('input[name="antibiotika[]"]').value = Antibiotika;
            rows[0].querySelector('input[name="obat_lain[]"]').value = ObatLain;
            rows[0].querySelector('input[name="infus[]"]').value = Infus;
            rows[0].querySelector('input[name="minum[]"]').value = Minum;
            rows[0].querySelector('input[name="tensi_nadi[]"]').value = tensiNadi;
            rows[0].querySelector('input[name="tensi_nadi_selama[]"]').value = tensiNadiSelama;
            rows[0].querySelector('input[name="tensi_nadi_lain[]"]').value = tensiNadiLain;




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
            handleCheckboxGroup(rows[0], ['tidak_ada_kelainan_check']);
            handleCheckboxGroup(rows[0], ['pernapasan_spontan_check']);
            handleCheckboxGroup(rows[0], ['pernapasan_dibantu_check']);
            handleCheckboxGroup(rows[0], ['adekuat_bersuara_check']);
            handleCheckboxGroup(rows[0], ['penyumbatan_check']);
            handleCheckboxGroup(rows[0], ['sadar_betul_check']);
            handleCheckboxGroup(rows[0], ['belum_sadar_betul_check']);
            handleCheckboxGroup(rows[0], ['tidur_dalam_check']);
            handleCheckboxGroup(rows[0], ['vas_check']);
            handleCheckboxGroup(rows[0], ['vas2_check']);
            handleCheckboxGroup(rows[0], ['ruangan_check']);
            handleCheckboxGroup(rows[0], ['icu_check']);
            handleCheckboxGroup(rows[0], ['langsung_pulang_check']);




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
                $(rowdokter).find('.dokter_anestesi_pertama'),
                rowdokter.querySelector('.dokter_anestesi_pertama_nama'),
                perawatPertama,
                perawat_idPertama
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
                $(rowperawat).find('.perawat_kamar_pemulihan_pertama'),
                rowperawat.querySelector('.perawat_kamar_pemulihan_pertama_nama'),
                asistantPertama,
                asistant_idPertama
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