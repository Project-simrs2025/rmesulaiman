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
        const rowCount = table.rows.length / 2;
        const baseIndex = rowCount * 2;


        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);

        row1.innerHTML = `

           <td colspan="4" style="border:none;">
           <table class="table table-bordered border-dark" cellpadding="4" style="width:100%">
                <tr>
                    <td align="center"><b>FORMULIR PENANDAAN AREA OPERASI (Perempuan)</b></td>
                    <td> 
                        <div class="d-flex flex-column gap-2">
                            <div>
                                No RM  <br>
                                <input type="text" name="no_rm" value="<?= $no_rm ?>" class="form-control border-dark" disabled> 
                            </div>
                            <div>
                                Nama Pasien <br>
                                <input type="text" name="nama_pasien" value="<?= $nama_pasien ?>" class="form-control border-dark" disabled> 
                            </div>
                            <div>
                                UMUR  <br>
                                <input type="text" name="umur" value="<?= $umur ?>" class="form-control border-dark" disabled> 
                            </div>
                            <div>
                                Jenkel <br>
                                <input type="text" name="jenkel" value="<?= $jenkel ?>" class="form-control border-dark" disabled> 
                            </div>
                        </div>
                    </td> 
                </tr>
           </table>

           <table class="table table-borderless">
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0">Tanggal Operasi</div>
                            <input type="date" name="tanggal_jam_operasi[]" class="form-control border-dark" value="<?= date('Y-m-d') ?>">
                        </div>
                    </td>
                    <td style="width:35%">
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0">Prosedur Operasi</div>
                            <input type="text" name="prosedur_operasi[]" class="form-control border-dark">
                        </div>
                    </td>
                    <td style="width:35%">
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0">Operator</div>
                            <input type="text" name="operator_operasi[]" class="form-control border-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                    <table class="table table-borderless">
                    <tr>
                    <td colspan="2" rowspan="3">
                        <img id="setting_img" class="marker-image border" src="<?= base_url('assets2/rme/img/opperempuan.png') ?>" style="width: 600px;height:500px;" data-input-name="image_drawer_opperempuan_${rowCount}" />
						<input type="hidden"  id="image_drawer_opperempuan_${rowCount}" name="image_drawer_opperempuan_${rowCount}" value="" />
                    </td>
                    <td>
                        <img id="example-image" class="marker-image border" src="<?= base_url('assets2/rme/img/gambar_head.png') ?>" style="max-width: 600px;"  data-input-name="image_drawer_head_${rowCount}" />
						<input type="hidden"  id="image_drawer_head_${rowCount}" name="image_drawer_head_${rowCount}" value="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <img id="example-image" class="marker-image border" src="<?= base_url('assets2/rme/img/gambar_BackHand.png') ?>" style="max-width: 600px;"  data-input-name="image_drawer_backheand_${rowCount}" />
						<input type="hidden"  id="image_drawer_backheand_${rowCount}" name="image_drawer_backheand_${rowCount}" value="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <img id="example-image" class="marker-image border" src="<?= base_url('assets2/rme/img/gambar_headBack.png') ?>" style="max-width: 600px;"  data-input-name="image_drawer_headback_${rowCount}" />
						<input type="hidden"  id="image_drawer_headback_${rowCount}" name="image_drawer_headback_${rowCount}" value="" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <img id="example-image" class="marker-image border" src="<?= base_url('assets2/rme/img/gambar_Foot.png') ?>" style="max-width: 600px;"  data-input-name="image_drawer_foot_${rowCount}" />
						<input type="hidden"  id="image_drawer_foot_${rowCount}" name="image_drawer_foot_${rowCount}" value="" />
                    </td>
                    <td colspan="2">
                        <img id="example-image" class="marker-image border" src="<?= base_url('assets2/rme/img/gambar_FrontHand.png') ?>" style="max-width: 600px;"  data-input-name="image_drawer_fronthand_${rowCount}" />
						<input type="hidden"  id="image_drawer_fronthand_${rowCount}" name="image_drawer_fronthand_${rowCount}" value="" />
                    </td>
                </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">Saya menyatakan bahwa lokasi operasi yang telah ditetapkan pada diagram adalah benar.</td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="d-flex justify-content-end gap-2 align-items-center gap-2 mb-3">
                        <div><?= $city_sign; ?></div>
                        <input type="date" name="tgl_city[]" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d') ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">
                    Dokter Operator <br><br><br>
                    <select name="dokter_anestesi_pertama[]" id="dokter_anestesi_pertama${rowCount}" class="form-select dokter_anestesi_pertama" style="width:100%;"></select>
                    <input type="hidden" name="dokter_anestesi_pertama_nama[]" class="dokter_anestesi_pertama_nama">
                </td>
                <td align="center">
                    Nama Pasien/Keluarga <br>
                    <img id="example-image" class="marker-image border border-dark" src="<?= base_url('assets2/rme/img/testttd.png') ?>" style="width: 180px; height:80px;"  data-input-name="image_drawer_tanda_tangan_pasien_${rowCount}" />
                    <input type="hidden"  id="image_drawer_tanda_tangan_pasien_${rowCount}" name="image_drawer_tanda_tangan_pasien_${rowCount}" value="" />
                </td>
                <td align="center">
                    Perawat Penanggung Jawab <br><br><br>
                    <select name="perawat_kamar_pemulihan_pertama[]" id="perawat_kamar_pemulihan_pertama${rowCount}" class="form-select perawat_kamar_pemulihan_pertama" style="width:100%;"></select>
                    <input type="hidden" name="perawat_kamar_pemulihan_pertama_nama[]" class="perawat_kamar_pemulihan_pertama_nama">
                </td>
            </tr>
                
           </table>



           <div class="d-flex align-items-end justify-content-end flex-column">
                    
           </div>
		   </td>
        `;



        const pembatastable = table.insertRow(baseIndex + 1);
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
        initSelect2Perawat('perawat_kamar_pemulihan_pertama', 'perawat_kamar_pemulihan_pertama');


        // === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
        row1.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
        callMarkerManager();


        // Setelah row1, pembatastable ditambahkan
        attachSanitizeEvents(row1);
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
            const tr = addRow(); // baris utama pertama dari 2 baris
            const baseIndex = i * 2;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 2);



            // input text
            const TanggalJamOperasi = dataObj['tanggal_jam_operasi']?.[i] || '';
            const ProsedurOperasi = dataObj['prosedur_operasi']?.[i] || '';
            const OperatorOperasi = dataObj['operator_operasi']?.[i] || '';
            const TanggalCity = dataObj['tgl_city']?.[i] || '';


            // tangkap data perawat
            const asistantPertama = dataObj['perawat_kamar_pemulihan_pertama_nama']?.[i] || '';
            const asistant_idPertama = dataObj['perawat_kamar_pemulihan_pertama']?.[i] || '';



            //dokter select
            const perawatPertama = dataObj['dokter_anestesi_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_anestesi_pertama']?.[i] || '';




            // Row 2
            rows[0].querySelector('input[name="tanggal_jam_operasi[]"]').value = TanggalJamOperasi;
            rows[0].querySelector('input[name="prosedur_operasi[]"]').value = ProsedurOperasi;
            rows[0].querySelector('input[name="operator_operasi[]"]').value = OperatorOperasi;
            rows[0].querySelector('input[name="tgl_city[]"]').value = TanggalCity;






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