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
        const rowCount = table.rows.length / 10;
        const baseIndex = rowCount * 10;


        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);

        row1.innerHTML = `
           <td colspan="4" style="border-left: none; border-right: none;">
                <table cellpadding="4" style="width:100%">
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-3">Nama Pasien</div>
                                <input type="text" name="nama_pasien" value="<?= $nama_pasien ?>" class="form-control border-dark" disabled>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-3">NO RM</div>
                                <input type="text" name="no_rm" value="<?= $no_rm ?>" class="form-control border-dark" disabled>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-3">Ruangan</div>
                               <input type="text" name="nama_ruangan" value="<?= $nama_ruangan ?>" class="form-control border-dark" disabled>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-md-3">Tanggal Lahir</div>
                                <input type="text" name="tgl_lahir" value="<?= $tgl_lahir ?>" class="form-control border-dark" disabled>
                            </div>
                        </td>
                    </tr>
                </table>

               
           </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `
        <td colspan="4">
            <table border="0" cellpadding="2" style="width:100%">
                <tr>
                    <td>
            Nama Ahli Bedah : <br>
            <select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
            <input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama">
        </td>
        <td>
            Nama Asistant : <br>
            <select name="perawat_asistant_pertama[]" id="perawat_asistant_pertama${rowCount}" class="form-select perawat_asistant_pertama" style="width:100%;"></select>
            <input type="hidden" name="perawat_asistant_pertama_nama[]" class="perawat_asistant_pertama_nama">
        </td>
        <td colspan="2">
            Nama Perawat : <br>
            <select name="perawat_pertama[]" id="perawat_pertama${rowCount}" class="form-select perawat_pertama" style="width:100%;"></select>
            <input type="hidden" name="perawat_pertama_nama[]" class="perawat_pertama_nama">
        </td>
    </tr>
    </table>

        </td>

        `;



        // === ROW 3 ===
        const row3 = table.insertRow(baseIndex + 2);
        row3.innerHTML = `

        <td colspan="3">
            Nama Ahli Anestesi <br>
            <select name="ahli_anestesi_pertama[]" id="ahli_anestesi_pertama${rowCount}" class="form-select ahli_anestesi_pertama" style="width:50%;"></select>
            <input type="hidden" name="ahli_anestesi_pertama_nama[]" class="ahli_anestesi_pertama_nama">
    
        </td>
        <td>
            Jenis Anestesi <br>
            <input type="text" name="jenis_anestesi[]" class="form-control border-dark">
        </td>
        `;


        // === ROW 4 ===
        const row4 = table.insertRow(baseIndex + 3);
        row4.innerHTML = `

        <td colspan="3">
                <label class="col-md-6">Diagnosis Pre - operatif</label> <br>
                <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
                <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
        </td>
        <td>

        Macam Pembedahan <br>
              <div class="d-flex align-items-center gap-2">
                <label><input type="checkbox" class="form-check-input" data-role="pembedahan_besar_check"> Besar </label>
                <input type="hidden" name="pembedahan_besar_check[]" class="pembedahan_besar_check_hidden" data-role="pembedahan_besar_check" value="">
                <input type="hidden" name="pembedahan_besar_check_nama[]" class="pembedahan_besar_check_nama">

                <label><input type="checkbox" class="form-check-input" data-role="pembedahan_elective_check"> elective </label>
                <input type="hidden" name="pembedahan_elective_check[]" class="pembedahan_elective_check_hidden" data-role="pembedahan_elective_check" value="">
                <input type="hidden" name="pembedahan_elective_check_nama[]" class="pembedahan_elective_check_nama">
            </div>

              <div class="d-flex align-items-center gap-2">
                <label><input type="checkbox" class="form-check-input" data-role="pembedahan_sedang_check"> sedang </label>
                <input type="hidden" name="pembedahan_sedang_check[]" class="pembedahan_sedang_check_hidden" data-role="pembedahan_sedang_check" value="">
                <input type="hidden" name="pembedahan_sedang_check_nama[]" class="pembedahan_sedang_check_nama">

                <label><input type="checkbox" class="form-check-input" data-role="pembedahan_emergency_check"> emergency </label>
                <input type="hidden" name="pembedahan_emergency_check[]" class="pembedahan_emergency_check_hidden" data-role="pembedahan_emergency_check" value="">
                <input type="hidden" name="pembedahan_emergency_check_nama[]" class="pembedahan_emergency_check_nama">
            </div>

              <div class="d-flex align-items-center gap-2">
                <label><input type="checkbox" class="form-check-input" data-role="pembedahan_kecil_check"> kecil </label>
                <input type="hidden" name="pembedahan_kecil_check[]" class="pembedahan_kecil_check_hidden" data-role="pembedahan_kecil_check" value="">
                <input type="hidden" name="pembedahan_kecil_check_nama[]" class="pembedahan_kecil_check_nama">

            </div>
        </td>
        `;


        // === ROW 5 ===
        const row5 = table.insertRow(baseIndex + 4);
        row5.innerHTML = `

        <td colspan="3">
                <label class="col-md-6">Diagnosis Post - operatif</label> <br>
                <select name="diagnosa_post[]" id="diagnosa_post${rowCount}" class="form-select diagnosa_post" style="width:100%;"></select>
                <input type="hidden" name="diagnosa_post_nama[]" class="diagnosa_post_nama">
        </td>
        <td>
        <div class="d-flex align-items-center gap-2">
                <label><input type="checkbox" class="form-check-input" data-role="diagnosa_ya_check"> Ya </label>
                <input type="hidden" name="diagnosa_ya_check[]" class="diagnosa_ya_check_hidden" data-role="diagnosa_ya_check" value="">
                <input type="hidden" name="diagnosa_ya_check_nama[]" class="diagnosa_ya_check_nama">

                <label><input type="checkbox" class="form-check-input" data-role="diagnosa_tidak_check"> tidak </label>
                <input type="hidden" name="diagnosa_tidak_check[]" class="diagnosa_tidak_check_hidden" data-role="diagnosa_tidak_check" value="">
                <input type="hidden" name="diagnosa_tidak_check_nama[]" class="diagnosa_tidak_check_nama">
            </div>
        </td>
        `;


        // === ROW 6 ===
        const row6 = table.insertRow(baseIndex + 5);
        row6.innerHTML = `

        <td colspan="4">
            Jaringan yang di eksisi <br>
            <textarea class="form-control border-dark" rows="4" name="jaringan_eksisi[]"></textarea>

            Nama / Macam Operasi <br>
            <textarea class="form-control border-dark" rows="4" name="macam_operasi[]"></textarea>
        </td>
        `;

        // === ROW 7 ===
        const row7 = table.insertRow(baseIndex + 6);
        row7.innerHTML = `

        <td>
            Tanggal Operasi<br>
           <input type="datetime-local" name="tanggal_operasi[]" class="form-control border-dark">
        </td>
        <td>
            Jam Operasi dimulai<br>
           <input type="time" name="jam_operasi_dimulai[]" class="form-control border-dark">
        </td>
        <td>
            Jam Operasi Selesai<br>
           <input type="time" name="jam_operasi_selesai[]" class="form-control border-dark">
        </td>
        <td>
            Lama Operasi Berlangsung<br>
           <input type="text" name="lama_operasi_berlangsung[]" class="form-control border-dark">
        </td>
        `;

        // === ROW 8 ===
        const row8 = table.insertRow(baseIndex + 7);
        row8.innerHTML = `

        <td colspan="4">
            Laporan <br>
            <textarea class="form-control border-dark" rows="4" name="laporan[]"></textarea>
        </td>
        `;

        // === ROW 9 ===
        const row9 = table.insertRow(baseIndex + 8);
        row9.innerHTML = `

        <td colspan="4" align="right">
            Dokter Penanggung Jawab Pasien, <br>
            <select name="dokter_penanggung_jawab_pertama[]" id="dokter_penanggung_jawab_pertama${rowCount}" class="form-select dokter_penanggung_jawab_pertama" style="width:25%;"></select>
            <input type="hidden" name="dokter_penanggung_jawab_pertama_nama[]" class="dokter_penanggung_jawab_pertama_nama">
        </td>
        `;




        const pembatastable = table.insertRow(baseIndex + 9);
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
        initSelect2Dokter('dokter_penanggung_jawab_pertama', 'dokter_penanggung_jawab_pertama');



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
        initSelect2Perawat('perawat_pertama', 'perawat_pertama');
        initSelect2Perawat('ahli_anestesi_pertama', 'ahli_anestesi_pertama');



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
        initSelect2Diagnosa('diagnosa_post', 'diagnosa_post');



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
            const tr = addRow(); // baris utama pertama dari 10 baris
            const baseIndex = i * 10;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 10);



            // input text
            const JenisAnestesi = dataObj['jenis_anestesi']?.[i] || '';
            const JaringanEksisi = dataObj['jaringan_eksisi']?.[i] || '';
            const MacamOperasi = dataObj['macam_operasi']?.[i] || '';
            const TanggalOperasi = dataObj['tanggal_operasi']?.[i] || '';
            const JamOperasiDimulai = dataObj['jam_operasi_dimulai']?.[i] || '';
            const JamOperasSelesai = dataObj['jam_operasi_selesai']?.[i] || '';
            const LamaOperasiBerlangsung = dataObj['lama_operasi_berlangsung']?.[i] || '';
            const laporan = dataObj['laporan']?.[i] || '';


            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
            const diagnosaPost = dataObj['diagnosa_post_nama']?.[i] || '';
            const diagnosa_idPost = dataObj['diagnosa_post']?.[i] || '';







            //dokter select
            const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';
            const dokterPenanggungJawab = dataObj['dokter_penanggung_jawab_pertama_nama']?.[i] || '';
            const dokterPenanggung_id = dataObj['dokter_penanggung_jawab_pertama']?.[i] || '';



            // tangkap data perawat
            const asistantPertama = dataObj['perawat_asistant_pertama_nama']?.[i] || '';
            const asistant_idPertama = dataObj['perawat_asistant_pertama']?.[i] || '';

            const namaPerawatPertama = dataObj['perawat_pertama_nama']?.[i] || '';
            const namaPerawat_idPertama = dataObj['perawat_pertama']?.[i] || '';

            const ahliAnestesiPertama = dataObj['ahli_anestesi_pertama_nama']?.[i] || '';
            const ahliAnestesi_idPertama = dataObj['ahli_anestesi_pertama']?.[i] || '';
            // batas



            // Row 2
            rows[2].querySelector('input[name="jenis_anestesi[]"]').value = JenisAnestesi;
            rows[5].querySelector('textarea[name="jaringan_eksisi[]"]').value = JaringanEksisi;
            rows[5].querySelector('textarea[name="macam_operasi[]"]').value = MacamOperasi;
            rows[6].querySelector('input[name="tanggal_operasi[]"]').value = TanggalOperasi;
            rows[6].querySelector('input[name="jam_operasi_dimulai[]"]').value = JamOperasiDimulai;
            rows[6].querySelector('input[name="jam_operasi_selesai[]"]').value = JamOperasSelesai;
            rows[6].querySelector('input[name="lama_operasi_berlangsung[]"]').value = LamaOperasiBerlangsung;
            rows[7].querySelector('textarea[name="laporan[]"]').value = laporan;







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
            handleCheckboxGroup(rows[3], ['pembedahan_besar_check']);
            handleCheckboxGroup(rows[3], ['pembedahan_elective_check']);
            handleCheckboxGroup(rows[3], ['pembedahan_sedang_check']);
            handleCheckboxGroup(rows[3], ['pembedahan_emergency_check']);
            handleCheckboxGroup(rows[3], ['pembedahan_kecil_check']);
            handleCheckboxGroup(rows[4], ['diagnosa_ya_check']);
            handleCheckboxGroup(rows[4], ['diagnosa_tidak_check']);





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
            const rowdiagnosa = rows[3];

            initSelect2Diagnosa(
                $(rowdiagnosa).find('.diagnosa_pertama'),
                rowdiagnosa.querySelector('.diagnosa_pertama_nama'),
                diagnosaPertama,
                diagnosa_idPertama
            );

            // Baris ke-2 (index 0)
            const rowdiagnosa2 = rows[4];
            initSelect2Diagnosa(
                $(rowdiagnosa2).find('.diagnosa_post'),
                rowdiagnosa2.querySelector('.diagnosa_post_nama'),
                diagnosaPost,
                diagnosa_idPost
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
            const rowdokter = rows[1];

            initSelect2Dokter(
                $(rowdokter).find('.dokter_pengkaji_pertama'),
                rowdokter.querySelector('.dokter_pengkaji_pertama_nama'),
                perawatPertama,
                perawat_idPertama
            );

            // Baris ke-8 dokter
            const rowdokter2 = rows[8];

            initSelect2Dokter(
                $(rowdokter2).find('.dokter_penanggung_jawab_pertama'),
                rowdokter.querySelector('.dokter_penanggung_jawab_pertama_nama'),
                dokterPenanggungJawab,
                dokterPenanggung_id
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
            const rowperawat = rows[1];

            initSelect2Perawat(
                $(rowperawat).find('.perawat_asistant_pertama'),
                rowperawat.querySelector('.perawat_asistant_pertama_nama'),
                asistantPertama,
                asistant_idPertama
            );

            initSelect2Perawat(
                $(rowperawat).find('.perawat_pertama'),
                rowperawat.querySelector('.perawat_pertama_nama'),
                namaPerawatPertama,
                namaPerawat_idPertama
            );


            const rowperawatbr2 = rows[2];

            initSelect2Perawat(
                $(rowperawatbr2).find('.ahli_anestesi_pertama'),
                rowperawatbr2.querySelector('.ahli_anestesi_pertama_nama'),
                ahliAnestesiPertama,
                ahliAnestesi_idPertama
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