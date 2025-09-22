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
          <td align="center" colspan="2">
                <h3> <?= $site_title; ?></h3> <br>
                <p><?= $lokasi;  ?></p>
           </td>
           <td colspan="2">
             <table cellpadding="4" style="width:100%">
                <tr>
                    <td>Nama Pasien</td>
                    <td><input type="text" name="nama_pasien" value="<?= $nama_pasien ?>" class="form-control border-dark" disabled w-100></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenkel" value="<?= $jenkel ?>" class="form-control border-dark" disabled w-100></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" name="umur" value="<?= $umur ?>" class="form-control border-dark" disabled w-100></td>
                </tr>
                <tr>
                    <td>No Rm</td>
                    <td><input type="text" name="no_rm" value="<?= $no_rm ?>" class="form-control border-dark" disabled w-100></td>
                </tr>
            </table>
           </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `
        <td colspan="3">
            Ruangan : <br>
            <select name="ruangan_pertama[]" id="ruangan_pertama${rowCount}" class="form-select ruangan_pertama" style="width:100%;"></select>
            <input type="hidden" name="ruangan_pertama_nama[]" class="ruangan_pertama_nama">
        </td>

       <td>
            Tanggal <br> 
            <input type="date" name="tanggal_ruangan[]" class="form-control border-dark">
            Jam <br>
            <input type="time" name="jam_ruangan[]" class="form-control border-dark">
        </td>
    </tr>
    </table>
        </td>

        `;



        // === ROW 3 ===
        const row3 = table.insertRow(baseIndex + 2);
        row3.innerHTML = `
        <td colspan="3">
                <label class="col-md-6">Diagnosis Pre - operatif</label> <br>
                <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
                <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
        </td>
        <td>
            Timing Tindakan <br>
            <input type="text" name="timing_tindakan[]" class="form-control border-dark">
        </td>
        `;


        // === ROW 4 ===
        const row4 = table.insertRow(baseIndex + 3);
        row4.innerHTML = `
        <td colspan="4">
               Indikasi Tindakan <br>
               <input type="text" name="indikasi_tindakan[]" class="form-control border-dark">
        </td>
        `;


        // === ROW 5 ===
        const row5 = table.insertRow(baseIndex + 4);
        row5.innerHTML = `
          <td colspan="4">
               Prosedur <br>
               <input type="text" name="prosedur[]" class="form-control border-dark">
        </td>

        `;


        // === ROW 6 ===
        const row6 = table.insertRow(baseIndex + 5);
        row6.innerHTML = `

        <td colspan="4">
                Alternatif Lain <br>
               <input type="text" name="alternatif_lain[]" class="form-control border-dark">
        </td>
        `;

        // === ROW 7 ===
        const row7 = table.insertRow(baseIndex + 6);
        row7.innerHTML = `
        <td colspan="4">
          Resiko/komplikasi dan kemungkinan perdarahan intra operasi :
          <textarea class="form-control border-dark" rows="4" name="resiko_komplikasi[]"></textarea>
        </td>
       
        `;

        // === ROW 8 ===
        const row8 = table.insertRow(baseIndex + 7);
        row8.innerHTML = `

        <td colspan="4">
            Pemantauan Tindakan <br>
            <textarea class="form-control border-dark" rows="4" name="pemantauan_tindakan[]"></textarea>
        </td>
        `;

        // === ROW 9 ===
        const row9 = table.insertRow(baseIndex + 8);
        row9.innerHTML = `

        <td align="right" colspan="4">
            Dokter Penanggung Jawab Pasien, <br>
            <select name="dokter_penanggung_jawab_pertama[]" id="dokter_penanggung_jawab_pertama${rowCount}" class="form-select dokter_penanggung_jawab_pertama" style="width:25%;"></select>
            <input type="hidden" name="dokter_penanggung_jawab_pertama_nama[]" class="dokter_penanggung_jawab_pertama_nama">
        </td>
        `;




        const pembatastable = table.insertRow(baseIndex + 9);
        pembatastable.innerHTML = `
        <td class="border-top border-bottom border-0 px-0" style="height: 280px;" align="center"> 
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
        initSelect2Dokter('dokter_penanggung_jawab_pertama', 'dokter_penanggung_jawab_pertama');


        function initSelect2Ruangan(selectorId, namaKelas) {
            $(`#${selectorId}${rowCount}`).select2({
                ajax: {
                    url: '<?= site_url('backend/admission/getRuangan'); ?>',
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
        initSelect2Ruangan('ruangan_pertama', 'ruangan_pertama');



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
            const TanggalRuangan = dataObj['tanggal_ruangan']?.[i] || '';
            const JamRuangan = dataObj['jam_ruangan']?.[i] || '';
            const TimingTindakan = dataObj['timing_tindakan']?.[i] || '';
            const IndikasiTindakan = dataObj['indikasi_tindakan']?.[i] || '';
            const Prosedur = dataObj['prosedur']?.[i] || '';
            const AlternatifLain = dataObj['alternatif_lain']?.[i] || '';
            const ResikoKomplikasi = dataObj['resiko_komplikasi']?.[i] || '';
            const PemantauanTindakan = dataObj['pemantauan_tindakan']?.[i] || '';


            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';

            // tangkap data ruangan
            const ruanganPertama = dataObj['ruangan_pertama_nama']?.[i] || '';
            const ruangan_idPertama = dataObj['ruangan_pertama']?.[i] || '';



            //dokter select
            const dokterPenanggungJawab = dataObj['dokter_penanggung_jawab_pertama_nama']?.[i] || '';
            const dokterPenanggung_id = dataObj['dokter_penanggung_jawab_pertama']?.[i] || '';




            // Row hasil data
            rows[1].querySelector('input[name="tanggal_ruangan[]"]').value = TanggalRuangan;
            rows[1].querySelector('input[name="jam_ruangan[]"]').value = JamRuangan;
            rows[2].querySelector('input[name="timing_tindakan[]"]').value = TimingTindakan;
            rows[3].querySelector('input[name="indikasi_tindakan[]"]').value = IndikasiTindakan;
            rows[4].querySelector('input[name="prosedur[]"]').value = Prosedur;
            rows[5].querySelector('input[name="alternatif_lain[]"]').value = AlternatifLain;
            rows[6].querySelector('textarea[name="resiko_komplikasi[]"]').value = ResikoKomplikasi;
            rows[7].querySelector('textarea[name="pemantauan_tindakan[]"]').value = PemantauanTindakan;







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


            // Baris ke-8 dokter
            const rowdokter2 = rows[8];

            initSelect2Dokter(
                $(rowdokter2).find('.dokter_penanggung_jawab_pertama'),
                rowdokter.querySelector('.dokter_penanggung_jawab_pertama_nama'),
                dokterPenanggungJawab,
                dokterPenanggung_id
            );


            function initSelect2Ruangan(selectElement, hiddenInput, selectedText, selectedId) {
                selectElement.select2({
                    ajax: {
                        url: '<?= site_url('backend/admission/getRuangan'); ?>',
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


            // Baris Ruangan
            const rowruangan = rows[1];

            initSelect2Ruangan(
                $(rowruangan).find('.ruangan_pertama'),
                rowruangan.querySelector('.ruangan_pertama_nama'),
                ruanganPertama,
                ruangan_idPertama
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