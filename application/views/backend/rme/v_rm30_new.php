<div class="row">
    <div class="d-flex flex-column gap-2">
        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Nama</label>
            <input type="text" name="nama_pasien" id="" class="form-control border-dark">
        </div>
        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir" id="" class="form-control border-dark">
        </div>
        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">No. Rm</label>
            <input type="text" name="no_rm" id="" class="form-control border-dark">
        </div>
        <div class="d-flex align-items-center gap-2">
            <label for="" class="col-md-2">Ruangan</label>
            <input type="text" name="ruangan_rawat" id="" class="form-control border-dark">
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12 table-responsive overflow-auto">
        <div class="my-3 float-end">
            <button type="button" class="btn btn-dark" onclick="addRow()"><span class="bi bi-plus"></span> Tambah Berkas</button>
        </div>


        <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable" style="table-layout: fixed; width: 100%;">
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
        const rowCount = table.rows.length / 12;
        const baseIndex = rowCount * 12;

        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);
        row1.classList.add("text-center");

        row1.innerHTML = `
            <td rowspan="2">Asuhan Perawatan</td>
            <td colspan="3">Timbang Terima</td>
       
        `;

        const rowAsuhan = table.insertRow(baseIndex + 1);
        rowAsuhan.innerHTML = `
            <td>Shift Pagi</td>
            <td>Shift Sore</td>
            <td>Shift Malam</td>
            `;

        const row2 = table.insertRow(baseIndex + 2);
        row2.innerHTML = `
         <td>Diagnosa Medis</td>
             <td>
                <div class="">
                    <select style="width:200px;" name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama"></select>
                    <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
                </div>
            </td>
             <td>
                <div class="">
                    <select style="width:200px;" name="diagnosa_kedua[]" id="diagnosa_kedua${rowCount}" class="form-select diagnosa_kedua"></select>
                    <input type="hidden" name="diagnosa_kedua_nama[]" class="diagnosa_kedua_nama">
                </div>
            </td>
            <td>
                <div class="">
                    <select style="width:200px;" name="diagnosa_ketiga[]" id="diagnosa_ketiga${rowCount}" class="form-select diagnosa_ketiga"></select>
                    <input type="hidden" name="diagnosa_ketiga_nama[]" class="diagnosa_ketiga_nama">
                </div>
            </td>
            `;



        // === ROW 3 ===
        const row3 = table.insertRow(baseIndex + 3);
        row3.innerHTML = `
        <td align="">Masalah Keperawatan</td>
        <td><textarea rows="3" name="masalah_keperawatan_pertama[]" class="form-control border-dark"></textarea></td>
        <td><textarea rows="3" name="masalah_keperawatan_kedua[]" class="form-control border-dark"></textarea></td>
        <td><textarea rows="3" name="masalah_keperawatan_ketiga[]" class="form-control border-dark"></textarea></td>
        `;

        // === ROW 4 ===
        const row4 = table.insertRow(baseIndex + 4);
        row4.innerHTML = `
        <td class=""><div style="width:180px;">Intervensi Keperawtan yang telah dilaksanakan</div></td>
        <td class=""><textarea rows="3" name="intervensi_pertama[]" class="form-control border-dark"></textarea></td>
        <td class=""><textarea rows="3" name="intervensi_kedua[]" class="form-control border-dark"></textarea></td>
        <td class=""><textarea rows="3" name="intervensi_ketiga[]" class="form-control border-dark"></textarea></td>
        `;

        // === ROW 5 ===
        const row5 = table.insertRow(baseIndex + 5);
        row5.innerHTML = `
        <td class="">
            Intervensi yang belum dilaksanakan
        </td>
        <td class=""><textarea rows="3" name="intervensi_belum_pertama[]" class="form-control border-dark"></textarea></td>
        <td class="align-middle text-center"><textarea rows="3" name="intervensi_belum_kedua[]" class="form-control border-dark"></textarea></td>
        <td class="align-middle text-center"><textarea rows="3" name="intervensi_belum_ketiga[]" class="form-control border-dark"></textarea></td>
        `;

        // === ROW 6 ===
        const row6 = table.insertRow(baseIndex + 6);
        row6.innerHTML = `
        <td class="">Intervensi Kolaborasi (obat, konsultasi, tindakan medis)</td>
        <td class=""><textarea rows="3" name="intervensi_kolaborasi_pertama[]" class="form-control border-dark"></textarea></td>
        <td class=""><textarea rows="3" name="intervensi_kolaborasi_kedua[]" class="form-control border-dark"></textarea></td>
        <td class=""><textarea rows="3" name="intervensi_kolaborasi_ketiga[]" class="form-control border-dark"></textarea></td>
        `;

        // === ROW 7 ===
        const row7 = table.insertRow(baseIndex + 7);
        row7.innerHTML = `
        <td class="">
        Pesan Khusus (Rencana umum, pemeriksaan penunjang, atau prosedur lainnya)
        </td>
        <td class=""><textarea rows="3" name="rencana_umum_pertama[]" class="form-control border-dark"></textarea></td>
        <td class=""><textarea rows="3" name="rencana_umum_kedua[]" class="form-control border-dark"></textarea></td>
        <td class=""><textarea rows="3" name="rencana_umum_ketiga[]" class="form-control border-dark"></textarea></td>
        `;


        // === ROW (Tanda Tangan) ===
        const rowTandaTangan = table.insertRow(baseIndex + 8);
        rowTandaTangan.innerHTML = `
        <td rowspan="3">Nama dan tanda tangan </td>
            <td>
            <div>Pj Shift Pagi</div>
                <div class="">
                    <select name="perawat_pengkaji_pertama[]" id="perawat_pengkaji_pertama${rowCount}" class="form-select perawat_pengkaji_pertama" style="width:200px"></select>
                    <input type="hidden" name="perawat_pengkaji_pertama_nama[]" class="perawat_pengkaji_pertama_nama">
                </div>
            </td>
             <td>
                <div class="">
                <div>Pj Shift Sore</div>
                    <select name="perawat_pengkaji_kedua[]" id="perawat_pengkaji_kedua${rowCount}" class="form-select perawat_pengkaji_kedua" style="width:200px"></select>
                    <input type="hidden" name="perawat_pengkaji_kedua_nama[]" class="perawat_pengkaji_kedua_nama">
                </div>
            </td>
            <td>
                <div class="">
                <div>Pj Shift Malam</div>
                    <select name="perawat_pengkaji_ketiga[]" id="perawat_pengkaji_ketiga${rowCount}" class="form-select perawat_pengkaji_ketiga" style="width:200px"></select>
                    <input type="hidden" name="perawat_pengkaji_ketiga_nama[]" class="perawat_pengkaji_ketiga_nama">
                </div>
            </td>
            
        `;




        // === ROW (Tanda Tangan) ===
        const rowTandaTangan2 = table.insertRow(baseIndex + 9);
        rowTandaTangan2.innerHTML = `
            <td>
                <div class="">
                <div>Pj Shift Sore</div>
                    <select name="perawat_pengkaji2_pertama[]" id="perawat_pengkaji2_pertama${rowCount}" class="form-select perawat_pengkaji2_pertama" style="width:200px"></select>
                    <input type="hidden" name="perawat_pengkaji2_pertama_nama[]" class="perawat_pengkaji2_pertama_nama">
                </div>
            </td>
             <td>
                <div class="">
                <div>Pj Shift Malam</div>
                    <select name="perawat_pengkaji2_kedua[]" id="perawat_pengkaji2_kedua${rowCount}" class="form-select perawat_pengkaji2_kedua" style="width:200px"></select>
                    <input type="hidden" name="perawat_pengkaji2_kedua_nama[]" class="perawat_pengkaji2_kedua_nama">
                </div>
            </td>
            <td>
                <div class="">
                <div>Pj Shift Pagi</div>
                    <select name="perawat_pengkaji2_ketiga[]" id="perawat_pengkaji2_ketiga${rowCount}" class="form-select perawat_pengkaji2_ketiga" style="width:200px"></select>
                    <input type="hidden" name="perawat_pengkaji2_ketiga_nama[]" class="perawat_pengkaji2_ketiga_nama">
                </div>
            </td> 
        `;


        // === ROW (Tanda Tangan) ===
        const rowKaru = table.insertRow(baseIndex + 10);
        rowKaru.innerHTML = `
            <td>
                <div class="">
                <div>Karu</div>
                    <select name="karu_pertama[]" id="karu_pertama${rowCount}" class="form-select karu_pertama" style="width:200px"></select>
                    <input type="hidden" name="karu_pertama_nama[]" class="karu_pertama_nama">
                </div>
            </td>
             <td>
                <div class="">
                <div>Karu</div>
                    <select name="karu_kedua[]" id="karu_kedua${rowCount}" class="form-select karu_kedua" style="width:200px"></select>
                    <input type="hidden" name="karu_kedua_nama[]" class="karu_kedua_nama">
                </div>
            </td>
            <td>
                <div class="">
                <div>Karu</div>
                    <select name="karu_ketiga[]" id="karu_ketiga${rowCount}" class="form-select karu_ketiga" style="width:200px"></select>
                    <input type="hidden" name="karu_ketiga_nama[]" class="karu_ketiga_nama">
                </div>
            </td> 
        `;


        const pematastable = table.insertRow(baseIndex + 11);
        pematastable.innerHTML = `
        <td class="border-top border-bottom border-0 px-0" style="height: 60px;"></td>
            `



        function initSelect2Dynamic(selectorId, namaKelas, url) {
            $(`#${selectorId}${rowCount}`).select2({
                ajax: {
                    url: url,
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
        // Untuk diagnosa
        initSelect2Dynamic('diagnosa_pertama', 'diagnosa_pertama', '<?= site_url('backend/admission/getDiagnosa'); ?>');
        initSelect2Dynamic('diagnosa_kedua', 'diagnosa_kedua', '<?= site_url('backend/admission/getDiagnosa'); ?>');
        initSelect2Dynamic('diagnosa_ketiga', 'diagnosa_ketiga', '<?= site_url('backend/admission/getDiagnosa'); ?>');

        // Untuk perawat
        initSelect2Dynamic('perawat_pengkaji_pertama', 'perawat_pengkaji_pertama', '<?= site_url('backend/admission/getKaryawan'); ?>');
        initSelect2Dynamic('perawat_pengkaji_kedua', 'perawat_pengkaji_kedua', '<?= site_url('backend/admission/getKaryawan'); ?>');
        initSelect2Dynamic('perawat_pengkaji_ketiga', 'perawat_pengkaji_ketiga', '<?= site_url('backend/admission/getKaryawan'); ?>');

        initSelect2Dynamic('perawat_pengkaji2_pertama', 'perawat_pengkaji2_pertama', '<?= site_url('backend/admission/getKaryawan'); ?>');
        initSelect2Dynamic('perawat_pengkaji2_kedua', 'perawat_pengkaji2_kedua', '<?= site_url('backend/admission/getKaryawan'); ?>');
        initSelect2Dynamic('perawat_pengkaji2_ketiga', 'perawat_pengkaji2_ketiga', '<?= site_url('backend/admission/getKaryawan'); ?>');

        initSelect2Dynamic('karu_pertama', 'karu_pertama', '<?= site_url('backend/admission/getKaryawan'); ?>');
        initSelect2Dynamic('karu_kedua', 'karu_kedua', '<?= site_url('backend/admission/getKaryawan'); ?>');
        initSelect2Dynamic('karu_ketiga', 'karu_ketiga', '<?= site_url('backend/admission/getKaryawan'); ?>');



        // === AUTO SCROLL KE TABLE YANG DITAMBAHKAN ===
        row1.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

        return row1;
    }

    function cbCommon(data) {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        table.innerHTML = "";

        const dataObj = Object.fromEntries(data.entries());
        const rowCount = dataObj["perawat_pengkaji_pertama_nama"]?.length || 0;

        for (let i = 0; i < rowCount; i++) {
            const tr = addRow(); // baris utama pertama dari 4 baris
            const baseIndex = i * 12;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 12);

            // row 1

            // batas

            // row 2
            const riwayatPertama = dataObj['masalah_keperawatan_pertama']?.[i] || '';
            const riwayatKedua = dataObj['masalah_keperawatan_kedua']?.[i] || '';
            const riwayatKetiga = dataObj['masalah_keperawatan_ketiga']?.[i] || '';
            // batas

            // row 3
            const intervensiPertama = dataObj['intervensi_pertama']?.[i] || '';
            const intervensiKedua = dataObj['intervensi_kedua']?.[i] || '';
            const intervensiKetiga = dataObj['intervensi_ketiga']?.[i] || '';
            // batas

            // row 4
            const bantuanAmbulanPertama = dataObj['intervensi_belum_pertama']?.[i] || '';
            const bantuanAmbulanKedua = dataObj['intervensi_belum_kedua']?.[i] || '';
            const bantuanAmbulanKetiga = dataObj['intervensi_belum_ketiga']?.[i] || '';
            // batas

            // row 5
            const koagulanPertama = dataObj['intervensi_kolaborasi_pertama']?.[i] || '';
            const koagulanKedua = dataObj['intervensi_kolaborasi_kedua']?.[i] || '';
            const koagulanKetiga = dataObj['intervensi_kolaborasi_ketiga']?.[i] || '';
            // batas

            // row 6
            const gayaBerjalanPertama = dataObj['rencana_umum_pertama']?.[i] || '';
            const gayaBerjalanKedua = dataObj['rencana_umum_kedua']?.[i] || '';
            const gayaBerjalanKetiga = dataObj['rencana_umum_ketiga']?.[i] || '';
            // batas




            // diagnosa
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
            const diagnosaKedua = dataObj['diagnosa_kedua_nama']?.[i] || '';
            const diagnosa_idKedua = dataObj['diagnosa_kedua']?.[i] || '';
            const diagnosaKetiga = dataObj['diagnosa_ketiga_nama']?.[i] || '';
            const diagnosa_idKetiga = dataObj['diagnosa_ketiga']?.[i] || '';
            // batas


            // perawat ttd satu
            const perawatPertama = dataObj['perawat_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['perawat_pengkaji_pertama']?.[i] || '';
            const perawatKedua = dataObj['perawat_pengkaji_kedua_nama']?.[i] || '';
            const perawat_idKedua = dataObj['perawat_pengkaji_kedua']?.[i] || '';
            const perawatKetiga = dataObj['perawat_pengkaji_ketiga_nama']?.[i] || '';
            const perawat_idKetiga = dataObj['perawat_pengkaji_ketiga']?.[i] || '';
            // batas


            // perawat ttd satu
            const perawat2Pertama = dataObj['perawat_pengkaji2_pertama_nama']?.[i] || '';
            const perawat2_idPertama = dataObj['perawat_pengkaji2_pertama']?.[i] || '';
            const perawat2Kedua = dataObj['perawat_pengkaji2_kedua_nama']?.[i] || '';
            const perawat2_idKedua = dataObj['perawat_pengkaji2_kedua']?.[i] || '';
            const perawat2Ketiga = dataObj['perawat_pengkaji2_ketiga_nama']?.[i] || '';
            const perawat2_idKetiga = dataObj['perawat_pengkaji2_ketiga']?.[i] || '';
            // batas


            // perawat ttd satu
            const karuPertama = dataObj['karu_pertama_nama']?.[i] || '';
            const karu_idPertama = dataObj['karu_pertama']?.[i] || '';
            const karuKedua = dataObj['karu_kedua_nama']?.[i] || '';
            const karu_idKedua = dataObj['karu_kedua']?.[i] || '';
            const karuKetiga = dataObj['karu_ketiga_nama']?.[i] || '';
            const karu_idKetiga = dataObj['karu_ketiga']?.[i] || '';
            // batas





            // Row 1
            const inputMap = [
                ['masalah_keperawatan', riwayatPertama, riwayatKedua, riwayatKetiga],
                ['intervensi', intervensiPertama, intervensiKedua, intervensiKetiga],
                ['intervensi_belum', bantuanAmbulanPertama, bantuanAmbulanKedua, bantuanAmbulanKetiga],
                ['intervensi_kolaborasi', koagulanPertama, koagulanKedua, koagulanKetiga],
                ['rencana_umum', gayaBerjalanPertama, gayaBerjalanKedua, gayaBerjalanKetiga]
            ];

            inputMap.forEach((field, index) => {
                if (rows[index + 3]) {
                    const [baseName, val1, val2, val3] = field;

                    rows[index + 3].querySelector(`textarea[name="${baseName}_pertama[]"]`).value = val1;
                    rows[index + 3].querySelector(`textarea[name="${baseName}_kedua[]"]`).value = val2;
                    rows[index + 3].querySelector(`textarea[name="${baseName}_ketiga[]"]`).value = val3;
                }
            });




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
                    placeholder: 'Cari...'
                });

                if (selectedText) {
                    const opt = new Option(selectedText, selectedId || selectedText, true, true);
                    selectElement.append(opt).trigger('change');
                    if (hiddenInput) hiddenInput.value = selectedText;
                }
            }


            // Diagnosa
            const rowdiagnosa = rows[2];

            initSelect2Diagnosa(
                $(rowdiagnosa).find('.diagnosa_pertama'),
                rowdiagnosa.querySelector('.diagnosa_pertama_nama'),
                diagnosaPertama,
                diagnosa_idPertama
            );

            initSelect2Diagnosa(
                $(rowdiagnosa).find('.diagnosa_kedua'),
                rowdiagnosa.querySelector('.diagnosa_kedua_nama'),
                diagnosaKedua,
                diagnosa_idKedua
            );

            initSelect2Diagnosa(
                $(rowdiagnosa).find('.diagnosa_ketiga'),
                rowdiagnosa.querySelector('.diagnosa_ketiga_nama'),
                diagnosaKetiga,
                diagnosa_idKetiga
            );



            // Baris ke-4 (index 8)
            const rowperawat = rows[8];

            initSelect2Perawat(
                $(rowperawat).find('.perawat_pengkaji_pertama'),
                rowperawat.querySelector('.perawat_pengkaji_pertama_nama'),
                perawatPertama,
                perawat_idPertama
            );

            initSelect2Perawat(
                $(rowperawat).find('.perawat_pengkaji_kedua'),
                rowperawat.querySelector('.perawat_pengkaji_kedua_nama'),
                perawatKedua,
                perawat_idKedua
            );

            initSelect2Perawat(
                $(rowperawat).find('.perawat_pengkaji_ketiga'),
                rowperawat.querySelector('.perawat_pengkaji_ketiga_nama'),
                perawatKetiga,
                perawat_idKetiga
            );

            // perawat tanda tangan 2
            const rowperawat2 = rows[9];

            initSelect2Perawat(
                $(rowperawat2).find('.perawat_pengkaji2_pertama'),
                rowperawat2.querySelector('.perawat_pengkaji2_pertama_nama'),
                perawat2Pertama,
                perawat2_idPertama
            );

            initSelect2Perawat(
                $(rowperawat2).find('.perawat_pengkaji2_kedua'),
                rowperawat2.querySelector('.perawat_pengkaji2_kedua_nama'),
                perawat2Kedua,
                perawat2_idKedua
            );

            initSelect2Perawat(
                $(rowperawat2).find('.perawat_pengkaji2_ketiga'),
                rowperawat2.querySelector('.perawat_pengkaji2_ketiga_nama'),
                perawat2Ketiga,
                perawat2_idKetiga
            );


            // perawat karu
            const rowkaru = rows[10];

            initSelect2Perawat(
                $(rowkaru).find('.karu_pertama'),
                rowkaru.querySelector('.karu_pertama_nama'),
                karuPertama,
                karu_idPertama
            );

            initSelect2Perawat(
                $(rowkaru).find('.karu_kedua'),
                rowkaru.querySelector('.karu_kedua_nama'),
                karuKedua,
                karu_idKedua
            );

            initSelect2Perawat(
                $(rowkaru).find('.karu_ketiga'),
                rowkaru.querySelector('.karu_ketiga_nama'),
                karuKetiga,
                karu_idKetiga
            );




        }
    }
</script>