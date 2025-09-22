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
                                <select name="nama_ruangan_operasi[]" id="nama_ruangan_operasi${rowCount}" class="form-select nama_ruangan_operasi" style="width:100%;"></select>
                                <input type="hidden" name="nama_ruangan_operasi_nama[]" class="nama_ruangan_operasi_nama">
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


                
            <br>

            <i>Petunjuk Pengisian : Diisi oleh perawat ruangan dan perawat IBS Isi</i> <br>
            <i>skolom dengan tulisan yang bisa dibaca dengan jelas</i>
               
           </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `

        <td colspan="4">
            <table class="table table-bordered border-dark" cellpadding="2" style="width:100%">
        <tr>
            <td>
            Diagnosa <br>
                <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
                <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
            </td>
            <td colspan="2">
                Rencana Operasi <br>
                <input type="text" name="rencana_operasi[]" class="form-control border-dark">
            </td>
        </tr>
        <tr>
        <td>
            Nama Dokter Bedah : <br>
            <select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
            <input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama">
        </td>
        <td colspan="2">
            Nama Dokter Anastesi : <br>
            <select name="dokter_anestesi_pertama[]" id="dokter_anestesi_pertama${rowCount}" class="form-select dokter_anestesi_pertama" style="width:100%;"></select>
            <input type="hidden" name="dokter_anestesi_pertama_nama[]" class="dokter_anestesi_pertama_nama">
        </td>
    </tr>
    <tr>
        <td> 
            Tanggal Operasi<br>
           <input type="date" name="tanggal_operasi[]" class="form-control border-dark">
        </td>
        <td> 
           Jam Operasi dimulai<br>
           <input type="time" name="jam_operasi_dimulai[]" class="form-control border-dark">
        </td>
        <td> 
           Jenis Operasi (Emergency Efektif) : <br>
           <input type="text" name="jenis_operasi[]" class="form-control border-dark">
        </td>
    </tr>
    <tr>
        <td> 
            Tanggal Penjadwalan :<br>
            <input type="date" name="tanggal_penjadwalan[]" class="form-control border-dark">
        </td>
        <td colspan="2"> 
            Jam Penjadwalan<br>
            <input type="time" name="jam_penjadwalan[]" class="form-control border-dark">
        </td>
    </tr>
    <tr>
        <td>
            Nama Dan Tanda Tangan Petugas Penjadwalan : <br><br><br>
            <select name="tanda_petugas_penjadwalan_pertama[]" id="tanda_petugas_penjadwalan_pertama${rowCount}" class="form-select tanda_petugas_penjadwalan_pertama" style="width:100%;"></select>
            <input type="hidden" name="tanda_petugas_penjadwalan_pertama_nama[]" class="tanda_petugas_penjadwalan_pertama_nama">
        </td>
        <td colspan="2">
            Nama dan tanda tangan petugas IBS yang menerima penjadwalan : <br><br><br>
            <select name="petugas_ibs_penjadwalan_pertama[]" id="petugas_ibs_penjadwalan_pertama${rowCount}" class="form-select petugas_ibs_penjadwalan_pertama" style="width:100%;"></select>
            <input type="hidden" name="petugas_ibs_penjadwalan_pertama_nama[]" class="petugas_ibs_penjadwalan_pertama_nama">
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
        initSelect2Dokter('dokter_anestesi_pertama', 'dokter_anestesi_pertama');



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
        initSelect2Perawat('tanda_petugas_penjadwalan_pertama', 'tanda_petugas_penjadwalan_pertama');
        initSelect2Perawat('petugas_ibs_penjadwalan_pertama', 'petugas_ibs_penjadwalan_pertama');



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
                placeholder: 'Cari...'
            }).on('select2:select', function(e) {
                $(this).closest('td').find(`.${namaKelas}_nama`).val(e.params.data.text);
            });
        }

        // Panggil fungsi untuk masing-masing elemen
        initSelect2Ruangan('nama_ruangan_operasi', 'nama_ruangan_operasi');



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

            const RencanaOperasi = dataObj['rencana_operasi']?.[i] || '';
            const TanggalOperasi = dataObj['tanggal_operasi']?.[i] || '';
            const JamOperasiDimulai = dataObj['jam_operasi_dimulai']?.[i] || '';
            const JenisOperasi = dataObj['jenis_operasi']?.[i] || '';
            const TanggalPenjadwalan = dataObj['tanggal_penjadwalan']?.[i] || '';
            const JamPenjadwalan = dataObj['jam_penjadwalan']?.[i] || '';



            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
            // Ruangan 
            const ruanganPertama = dataObj['nama_ruangan_operasi_nama']?.[i] || '';
            const ruangan_idPertama = dataObj['nama_ruangan_operasi']?.[i] || '';





            //dokter select
            const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';

            const DokterAnestesiPertama = dataObj['dokter_anestesi_pertama_nama']?.[i] || '';
            const DokterAnestesi_idPertama = dataObj['dokter_anestesi_pertama']?.[i] || '';




            // tangkap data perawat

            const ahliAnestesiPertama = dataObj['tanda_petugas_penjadwalan_pertama_nama']?.[i] || '';
            const ahliAnestesi_idPertama = dataObj['tanda_petugas_penjadwalan_pertama']?.[i] || '';

            const ibsPertama = dataObj['petugas_ibs_penjadwalan_pertama_nama']?.[i] || '';
            const ibs_idPertama = dataObj['petugas_ibs_penjadwalan_pertama']?.[i] || '';
            // batas



            // Row 2
            rows[1].querySelector('input[name="rencana_operasi[]"]').value = RencanaOperasi;
            rows[1].querySelector('input[name="tanggal_operasi[]"]').value = TanggalOperasi;
            rows[1].querySelector('input[name="jam_operasi_dimulai[]"]').value = JamOperasiDimulai;
            rows[1].querySelector('input[name="jenis_operasi[]"]').value = JenisOperasi;
            rows[1].querySelector('input[name="tanggal_penjadwalan[]"]').value = TanggalPenjadwalan;
            rows[1].querySelector('input[name="jam_penjadwalan[]"]').value = JamPenjadwalan;




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
                    placeholder: 'Cari ...'
                });

                if (selectedText) {
                    const opt = new Option(selectedText, selectedId || selectedText, true, true);
                    selectElement.append(opt).trigger('change');
                    if (hiddenInput) hiddenInput.value = selectedText;
                }
            }



            // Baris ke-1 (index 0)
            const rowruangan = rows[0];

            initSelect2Ruangan(
                $(rowruangan).find('.nama_ruangan_operasi'),
                rowruangan.querySelector('.nama_ruangan_operasi_nama'),
                ruanganPertama,
                ruangan_idPertama
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

            initSelect2Dokter(
                $(rowdokter).find('.dokter_anestesi_pertama'),
                rowdokter.querySelector('.dokter_anestesi_pertama_nama'),
                DokterAnestesiPertama,
                DokterAnestesi_idPertama
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
                $(rowperawat).find('.tanda_petugas_penjadwalan_pertama'),
                rowperawat.querySelector('.tanda_petugas_penjadwalan_pertama_nama'),
                ahliAnestesiPertama,
                ahliAnestesi_idPertama
            );

            initSelect2Perawat(
                $(rowperawat).find('.petugas_ibs_penjadwalan_pertama'),
                rowperawat.querySelector('.petugas_ibs_penjadwalan_pertama_nama'),
                ibsPertama,
                ibs_idPertama
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