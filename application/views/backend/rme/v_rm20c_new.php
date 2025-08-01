<div class="row">
    <div class="col-12">
        <div class="my-3 text-end">
            <button type="button" class="btn btn-dark" onclick="addRow()">
                <i class="bi bi-plus"></i> Tambah Berkas
            </button>
        </div>

        <div class="table-responsive overflow-auto">
            <table class="table table-bordered mt-4 border-dark" id="VisiteProgramTable" style="table-layout: fixed; width: 100%;">
                <thead class="table-bordered border-dark">
                    <tr>
                        <td colspan="6" class="text-center fw-bold">
                            <?= strtoupper('PENGKAJIAN DAN INTERVENSI RESIKO JATUH PADA PASIEN GERIATRI (SYDNEY SCORING)') ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <div class="row g-2">
                                <?php
                                $mainItems = [
                                    'nama_pasien' => 'Nama Pasien',
                                    'jenkel' => 'Jenis Kelamin',
                                    'tanggal_lahir' => 'Tanggal Lahir',
                                    'no_rm' => 'Nomor RM',
                                    'kelas' => 'Kelas',
                                    'ruangan_pasien' => 'Ruangan',
                                ];
                                foreach ($mainItems as $name => $label) :
                                ?>
                                    <div class="col-md-6">
                                        <label class="form-label"><?= $label; ?></label>
                                        <input type="text" name="<?= $name; ?>" class="form-control form-control-sm border-dark w-100" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
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
        const rowCount = table.rows.length / 27;
        const baseIndex = rowCount * 27;

        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);
        row1.classList.add("text-center");

        row1.innerHTML = `
            <td>Parameter</td>
            <td><div style="width:250px;">Skrinning</div></td>
            <td >Nilai Skor</td>
            <td>
                <div>Tanggal/jam</div>
                <input type="datetime-local" name="tanggal_jam_pertama[]" class="form-control border-dark">
            </td>
            <td>
                <div>Tanggal/jam</div>
                <input type="datetime-local" name="tanggal_jam_kedua[]" class="form-control border-dark">
            </td>
            <td>
                <div>Tanggal/jam</div>
                <input type="datetime-local" name="tanggal_jam_ketiga[]" class="form-control border-dark">
            </td>
        `;

        // === ROW 3 ===
        const row3 = table.insertRow(baseIndex + 1);
        row3.innerHTML = `
        <td>Riwayat Jatuh</td>
        <td>
            <div class="d-flex flex-column gap-2">
                <div>Apakah pasien dating kerumah sakit karena jatuh?</div>

                <div>Jika tidak, apakah pasien mengalami jatuh dalam 2 bulan terakhir ini?</div>
            </div>
        </td>
        <td align="center"><div style="width:80px">Ya = 6</div></td>
        <td><input name="riwayat_jatuh_pertama[]" class="form-control border-dark"></td>
        <td><input name="riwayat_jatuh_kedua[]" class="form-control border-dark"></td>
        <td><input name="riwayat_jatuh_ketiga[]" class="form-control border-dark"></td>
        `;

        // === ROW 4 ===
        const row4 = table.insertRow(baseIndex + 2);
        row4.innerHTML = `
        <td class="">Status Mental</td>
        <td class="">
            <div class="d-flex flex-column gap-3">
                <div>Apakah pasien delirium? (tidak dapat membuat keputusan, pola piker tidak terorganisir, gangguan daya ingat)</div>
                
                <div>Apakah pasien disorientasi? (salah menyebutkan waktu, tempat, atau orang)</div>

                <div>Apakah pasien mengalami agitasi? (ketakutan, gelisah, dancemas)</div>
            </div>
        </td>
        <td class="text-center">Ya = 14</td>
        <td class=""><input name="kesehatan_pertama[]" class="form-control border-dark"></td>
        <td class=""><input name="kesehatan_kedua[]" class="form-control border-dark"></td>
        <td class=""><input name="kesehatan_ketiga[]" class="form-control border-dark"></td>
        `;

        // === ROW 5 ===
        const row5 = table.insertRow(baseIndex + 3);
        row5.innerHTML = `
          <td class="">Penglihatan</td>
        <td>
            <div class="d-flex flex-column gap-2">
                <div>Apakah pasien memakai kacamata?</div>
                <div>Apakah pasien mengeluh adanya penglihatan buram?</div>
                <div>Apakah pasien mempunyai glaukoma, katarak, atau degenerasi makula?</div>
            </div>
        </td>
        <td class="text-center">
            Ya  = 1
        </td>
        <td class=""><input name="bantuan_ambulan_pertama[]" class="form-control border-dark"></td>
        <td class="align-middle text-center"><input name="bantuan_ambulan_kedua[]" class="form-control border-dark"></td>
        <td class="align-middle text-center"><input name="bantuan_ambulan_ketiga[]" class="form-control border-dark"></td>
        `;

        // === ROW 6 ===
        const row6 = table.insertRow(baseIndex + 4);
        row6.innerHTML = `
        <td class="">Kebiasaan berkemih</td>
        <td>Apakah terdapat perubahan perilaku berkemih? (frekuensi, urgensi, inkontinensia, nokturia) (skor 0)</td>
        <td class="text-center">
            <div>Ya = 2</div>
            <div>Tidak = 0</div>
        </td>
        <td class=""><input name="terapi_pertama[]" class="form-control border-dark"></td>
        <td class=""><input name="terapi_kedua[]" class="form-control border-dark"></td>
        <td class=""><input name="terapi_ketiga[]" class="form-control border-dark"></td>
        `;

        // === ROW 7 ===
        const row7 = table.insertRow(baseIndex + 5);
        row7.innerHTML = `
        <td class=""><div style="width:180px">Transfer (dari tempat tidur kekursi dan kembali ketempat tidur)</div></td>
        <td>
            <div class="d-flex flex-column gap-2">
                <div>mandiri (boleh menggunakan alat bantu jalan) (skor1)</div>
                <div>Memerlukan sedikit bantuan (1 orang) / dalam pengawasan (skor2) </div>
                <div>Memerlukan bantuan yang nyata (2 orang) (skor3)</div>
                <div>Tidak dapat duduk dengan seimbang, perlu bantuan total (3) </div>
            </div>
        </td>
        <td rowspan="2">    
           <div class="d-flex flex-column gap-2">
                <div>Skor transfer + mobilitas</div>
                <div> 0-3 = skor 0</div>
                <div>4-6 = skor 7</div>
           </div>
        </td>
        <td class=""><input name="gaya_berjalan_pertama[]" class="form-control border-dark"></td>
        <td class=""><input name="gaya_berjalan_kedua[]" class="form-control border-dark"></td>
        <td class=""><input name="gaya_berjalan_ketiga[]" class="form-control border-dark"></td>
        `;

        // === ROW 8 ===
        const row8 = table.insertRow(baseIndex + 6);
        row8.innerHTML = `
        <td class="">Mobilitas</td>
        <td>
            <div class="d-flex flex-column gap-2">
                <div>mandiri (boleh menggunakan alat bantu jalan) (skor0)</div>
                <div>Berjalan dengan bantuan 1 orang (verbal /fisik) (skor1)</div>
                <div>Menggunakan kursi roda (skor2) </div>
                <div>Imobilisasi (skor3)</div>
            </div>
        </td>
        <td class=""><input name="status_mental_pertama[]" class="form-control border-dark"></td>
        <td class=""><input name="status_mental_kedua[]" class="form-control border-dark"></td>
        <td class=""><input name="status_mental_ketiga[]" class="form-control border-dark"></td>
        `;

        // === ROW Total ===
        const rowTotal = table.insertRow(baseIndex + 7);
        rowTotal.innerHTML = `
        <td colspan="3">Total</td>
        <td class=""><input name="total_pertama[]" class="form-control border-dark"></td>
        <td class="align-middle text-center"><input name="total_kedua[]" class="form-control border-dark"></td>
        <td class="align-middle text-center"><input name="total_ketiga[]" class="form-control border-dark"></td>
        `;


        // === ROW 8 ===
        const rowResikoPlace = table.insertRow(baseIndex + 8);
        rowResikoPlace.innerHTML = `
        <td class="" colspan="3">Resiko rendah (0-5), resiko sedang (6-16), resiko tinggi (17-30) (Lingkari)</td>
        <td class=""><input name="placeResiko_pertama[]" class="form-control border-dark" placeholder="RR/RS/RT"></td>
        <td class=""><input name="placeResiko_kedua[]" class="form-control border-dark" placeholder="RR/RS/RT"></td>
        <td class=""><input name="placeResiko_ketiga[]" class="form-control border-dark" placeholder="RR/RS/RT"></td>
        `;

        // === ROW (Tanda Tangan) ===
        const rowTandaTangan = table.insertRow(baseIndex + 9);
        rowTandaTangan.innerHTML = `
            <td colspan="3">
                <div class="">Nama dan Paraf yang melakukan pengkajian</div>
            </td>
            <td>
                <div class="">
                    <select name="perawat_pengkaji_pertama[]" id="perawat_pengkaji_pertama${rowCount}" class="form-select perawat_pengkaji_pertama"></select>
                    <input type="hidden" name="perawat_pengkaji_pertama_nama[]" class="perawat_pengkaji_pertama_nama">
                </div>
            </td>
             <td>
                <div class="">
                    <select name="perawat_pengkaji_kedua[]" id="perawat_pengkaji_kedua${rowCount}" class="form-select perawat_pengkaji_kedua"></select>
                    <input type="hidden" name="perawat_pengkaji_kedua_nama[]" class="perawat_pengkaji_kedua_nama">
                </div>
            </td>
            <td>
                <div class="">
                    <select name="perawat_pengkaji_ketiga[]" id="perawat_pengkaji_ketiga${rowCount}" class="form-select perawat_pengkaji_ketiga"></select>
                    <input type="hidden" name="perawat_pengkaji_ketiga_nama[]" class="perawat_pengkaji_ketiga_nama">
                </div>
            </td>
            
        `;

        const rowIntervensi = table.insertRow(baseIndex + 10);
        rowIntervensi.innerHTML = `
            <td colspan="3">Intervensi pencegahan resiko jatuh (beritanda &check;)</td>
            <td>
                <input type="datetime-local" name="tanggal_intervensi_pertama[]" class="form-control border-dark">
            </td>
            <td>
                <input type="datetime-local" name="tanggal_intervensi_kedua[]" class="form-control border-dark">
            </td>
            <td>
                <input type="datetime-local" name="tanggal_intervensi_ketiga[]" class="form-control border-dark">
            </td>
        `;

        // === ROW Checkbox ===
        const rowCheckbox = table.insertRow(baseIndex + 11);
        rowCheckbox.innerHTML = `
            <td rowspan="6" colspan="">
                Resiko Rendah (RR)
            </td>
            <td colspan="2">1. Orientasi Lingkungan</td>
            <td align="center">
                    <label><input type="checkbox" class="form-check-input" data-role="orientasi_pertama"> </label>
                    <input type="hidden" name="orientasi_pertama[]" class="orientasi_pertama_hidden" data-role="orientasi_pertama" value="">
                    <input type="hidden" name="orientasi_pertama_nama[]" class="orientasi_pertama_nama"><br/>
            </td>
            <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="orientasi_kedua"></label>
                <input type="hidden" name="orientasi_kedua[]" class="orientasi_kedua_hidden" data-role="orientasi_kedua" value="">
                <input type="hidden" name="orientasi_kedua_nama[]" class="orientasi_kedua_nama">
            </td>
             <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="orientasi_ketiga"></label>
                <input type="hidden" name="orientasi_ketiga[]" class="orientasi_ketiga_hidden" data-role="orientasi_ketiga" value="">
                <input type="hidden" name="orientasi_ketiga_nama[]" class="orientasi_ketiga_nama">
            </td>
        `;


        function createCheckboxRow(table, index, label, rolePrefix) {
            const roles = ['pertama', 'kedua', 'ketiga'].map(level => `${rolePrefix}_${level}`);
            const row = table.insertRow(index);

            const cells = roles.map(role => `
            <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="${role}"></label>
                <input type="hidden" name="${role}[]" class="${role}_hidden" data-role="${role}" value="">
                <input type="hidden" name="${role}_nama[]" class="${role}_nama">
            </td>
        `).join('');

            row.innerHTML = `
            <td colspan="2">${label}</td>
            ${cells}
        `;
        }

        // Penggunaan:
        createCheckboxRow(table, baseIndex + 12, '	2.	Pastikan bel mudah dijangkau', 'bel');
        createCheckboxRow(table, baseIndex + 13, '	3.	Roda pada tempat tidur pada posisi terkunci', 'roda');
        createCheckboxRow(table, baseIndex + 14, '4. Naikkan pagar pengaman tempat tidur', 'pagar');
        createCheckboxRow(table, baseIndex + 15, '	5.	Pastikan lampu hidup saat malam hari', 'lampu');
        createCheckboxRow(table, baseIndex + 16, '	6.	Berikan edukasi kepada pasien', 'edukasi');



        // === ROW CheckboxSedang ===
        const rowCheckboxSedang = table.insertRow(baseIndex + 17);
        rowCheckboxSedang.innerHTML = `
            <td rowspan="3" colspan="">
                Resiko Sedang (RS)
            </td>
            <td colspan="2">1.	Lakukan semua pedoman pencegahan jatuh resiko rendah</td>
            <td align="center">
                    <label><input type="checkbox" class="form-check-input" data-role="pedoman_pertama"> </label>
                    <input type="hidden" name="pedoman_pertama[]" class="pedoman_pertama_hidden" data-role="pedoman_pertama" value="">
                    <input type="hidden" name="pedoman_pertama_nama[]" class="pedoman_pertama_nama"><br/>
            </td>
            <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="pedoman_kedua"></label>
                <input type="hidden" name="pedoman_kedua[]" class="pedoman_kedua_hidden" data-role="pedoman_kedua" value="">
                <input type="hidden" name="pedoman_kedua_nama[]" class="pedoman_kedua_nama">
            </td>
             <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="pedoman_ketiga"></label>
                <input type="hidden" name="pedoman_ketiga[]" class="pedoman_ketiga_hidden" data-role="pedoman_ketiga" value="">
                <input type="hidden" name="pedoman_ketiga_nama[]" class="pedoman_ketiga_nama">
            </td>
        `;



        function createCustomCheckboxRow(table, index, label, inputNamePrefix) {
            const roles = ['pertama', 'kedua', 'ketiga'].map(level => `${inputNamePrefix}_${level}`);
            const row = table.insertRow(index);

            const cells = roles.map(role => `
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="${role}"></label>
            <input type="hidden" name="${role}[]" class="${role}_hidden" data-role="${role}" value="">
            <input type="hidden" name="${role}_nama[]" class="${role}_nama">
        </td>
    `).join('');

            row.innerHTML = `
        <td colspan="2">${label}</td>
        ${cells}
    `;
        }

        createCustomCheckboxRow(table, baseIndex + 18, '2. Berikan stiker segitiga warna kuning pada tempat tidur pasien', 'stiker');

        createCustomCheckboxRow(table, baseIndex + 19, '3. Pasang gelang kuning penanda resiko jatuh pada tangan yang dominan', 'gelang');


        // === ROW CheckboxTinggi ===
        const rowCheckboxTinggi = table.insertRow(baseIndex + 20);
        rowCheckboxTinggi.innerHTML = `
            <td rowspan="5" colspan="">
                Resiko Tinggi (RT)
            </td>
            <td colspan="2">1.Lakukan semua pedoman pencegahan jatuh resiko rendah dan sedang</td>
            <td align="center">
                    <label><input type="checkbox" class="form-check-input" data-role="pencegahan_pertama"> </label>
                    <input type="hidden" name="pencegahan_pertama[]" class="pencegahan_pertama_hidden" data-role="pencegahan_pertama" value="">
                    <input type="hidden" name="pencegahan_pertama_nama[]" class="pencegahan_pertama_nama"><br/>
            </td>
            <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="pencegahan_kedua"></label>
                <input type="hidden" name="pencegahan_kedua[]" class="pencegahan_kedua_hidden" data-role="pencegahan_kedua" value="">
                <input type="hidden" name="pencegahan_kedua_nama[]" class="pencegahan_kedua_nama">
            </td>
             <td align="center">
                <label><input type="checkbox" class="form-check-input" data-role="pencegahan_ketiga"></label>
                <input type="hidden" name="pencegahan_ketiga[]" class="pencegahan_ketiga_hidden" data-role="pencegahan_ketiga" value="">
                <input type="hidden" name="pencegahan_ketiga_nama[]" class="pencegahan_ketiga_nama">
            </td>
        `;


        // Fungsi membuat satu kotak checkbox + 2 input hidden
        function createCheckboxCell(baseName, level) {
            return `
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="${baseName}_${level}"></label>
            <input type="hidden" name="${baseName}_${level}[]" class="${baseName}_${level}_hidden" data-role="${baseName}_${level}" value="">
            <input type="hidden" name="${baseName}_${level}_nama[]" class="${baseName}_${level}_nama">
        </td>
    `;
        }

        // Fungsi membuat seluruh baris
        function createRow(label, baseName) {
            const levels = ['pertama', 'kedua', 'ketiga'];
            const checkboxCells = levels.map(level => createCheckboxCell(baseName, level)).join('');
            return `<td colspan="2">${label}</td>${checkboxCells}`;
        }

        // Tambahkan baris ke tabel
        table.insertRow(baseIndex + 21).innerHTML = createRow('2.	Kunjungi dan monitor pasien setiap1 jam', 'kunjungi');
        table.insertRow(baseIndex + 22).innerHTML = createRow('	3.	Penggunaan kateter untuk BAK / pispot ', 'pispot');
        table.insertRow(baseIndex + 23).innerHTML = createRow('4.	Pastikan pasien menggunakan alat bantu jalan (bilamobilisasi)', 'bilamobilisasi');
        table.insertRow(baseIndex + 24).innerHTML = createRow('5.	Libatkan keluarga pasien untuk selalu menunggu pasien', 'yos');


        // === ROW (Tanda Tangan) ===
        const rowTandaTangan2 = table.insertRow(baseIndex + 25);
        rowTandaTangan2.innerHTML = `
            <td colspan="3">
                <div class="">Nama dan Paraf yang melakukan pengkajian</div>
            </td>
            <td>
                <div class="">
                    <select name="perawat_pengkaji2_pertama[]" id="perawat_pengkaji2_pertama${rowCount}" class="form-select perawat_pengkaji2_pertama"></select>
                    <input type="hidden" name="perawat_pengkaji2_pertama_nama[]" class="perawat_pengkaji2_pertama_nama">
                </div>
            </td>
             <td>
                <div class="">
                    <select name="perawat_pengkaji2_kedua[]" id="perawat_pengkaji2_kedua${rowCount}" class="form-select perawat_pengkaji2_kedua"></select>
                    <input type="hidden" name="perawat_pengkaji2_kedua_nama[]" class="perawat_pengkaji2_kedua_nama">
                </div>
            </td>
            <td>
                <div class="">
                    <select name="perawat_pengkaji2_ketiga[]" id="perawat_pengkaji2_ketiga${rowCount}" class="form-select perawat_pengkaji2_ketiga"></select>
                    <input type="hidden" name="perawat_pengkaji2_ketiga_nama[]" class="perawat_pengkaji2_ketiga_nama">
                </div>
            </td>
            
        `;


        const pematastable = table.insertRow(baseIndex + 26);
        pematastable.innerHTML = `
        <td class="border-top border-bottom border-0 px-0" style="height: 60px;"></td>
            `


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
                placeholder: 'Cari perawat...'
            }).on('select2:select', function(e) {
                $(this).closest('td').find(`.${namaKelas}_nama`).val(e.params.data.text);
            });
        }

        // Panggil fungsi untuk masing-masing elemen
        initSelect2Perawat('perawat_pengkaji_pertama', 'perawat_pengkaji_pertama');
        initSelect2Perawat('perawat_pengkaji_kedua', 'perawat_pengkaji_kedua');
        initSelect2Perawat('perawat_pengkaji_ketiga', 'perawat_pengkaji_ketiga');

        // Panggil fungsi untuk masing-masing elemen
        initSelect2Perawat('perawat_pengkaji2_pertama', 'perawat_pengkaji2_pertama');
        initSelect2Perawat('perawat_pengkaji2_kedua', 'perawat_pengkaji2_kedua');
        initSelect2Perawat('perawat_pengkaji2_ketiga', 'perawat_pengkaji2_ketiga');


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
        const rowCount = dataObj["tanggal_jam_pertama"]?.length || 0;

        for (let i = 0; i < rowCount; i++) {
            const tr = addRow(); // baris utama pertama dari 4 baris
            const baseIndex = i * 27;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 27);

            // row 1
            const tanggalPertama = dataObj['tanggal_jam_pertama']?.[i] || '';
            const tanggalKedua = dataObj['tanggal_jam_kedua']?.[i] || '';
            const tanggalKetiga = dataObj['tanggal_jam_ketiga']?.[i] || '';
            // batas

            // row 2
            const riwayatPertama = dataObj['riwayat_jatuh_pertama']?.[i] || '';
            const riwayatKedua = dataObj['riwayat_jatuh_kedua']?.[i] || '';
            const riwayatKetiga = dataObj['riwayat_jatuh_ketiga']?.[i] || '';
            // batas

            // row 3
            const kesehatanPertama = dataObj['kesehatan_pertama']?.[i] || '';
            const kesehatanKedua = dataObj['kesehatan_kedua']?.[i] || '';
            const kesehatanKetiga = dataObj['kesehatan_ketiga']?.[i] || '';
            // batas

            // row 4
            const bantuanAmbulanPertama = dataObj['bantuan_ambulan_pertama']?.[i] || '';
            const bantuanAmbulanKedua = dataObj['bantuan_ambulan_kedua']?.[i] || '';
            const bantuanAmbulanKetiga = dataObj['bantuan_ambulan_ketiga']?.[i] || '';
            // batas

            // row 5
            const koagulanPertama = dataObj['terapi_pertama']?.[i] || '';
            const koagulanKedua = dataObj['terapi_kedua']?.[i] || '';
            const koagulanKetiga = dataObj['terapi_ketiga']?.[i] || '';
            // batas

            // row 6
            const gayaBerjalanPertama = dataObj['gaya_berjalan_pertama']?.[i] || '';
            const gayaBerjalanKedua = dataObj['gaya_berjalan_kedua']?.[i] || '';
            const gayaBerjalanKetiga = dataObj['gaya_berjalan_ketiga']?.[i] || '';
            // batas

            // row 7
            const statusMentalPertama = dataObj['status_mental_pertama']?.[i] || '';
            const statusMentalKedua = dataObj['status_mental_kedua']?.[i] || '';
            const statusMentalKetiga = dataObj['status_mental_ketiga']?.[i] || '';
            // batas

            // row total
            const TotalPertama = dataObj['total_pertama']?.[i] || '';
            const TotalKedua = dataObj['total_kedua']?.[i] || '';
            const TotalKetiga = dataObj['total_ketiga']?.[i] || '';
            // batas

            // row 8
            const PlaceResikoPertama = dataObj['placeResiko_pertama']?.[i] || '';
            const PlaceResikoKedua = dataObj['placeResiko_kedua']?.[i] || '';
            const PlaceResikoKetiga = dataObj['placeResiko_ketiga']?.[i] || '';
            // batas

            // row 9
            const tanggalIntervensiPertama = dataObj['tanggal_intervensi_pertama']?.[i] || '';
            const tanggalIntervensiKedua = dataObj['tanggal_intervensi_kedua']?.[i] || '';
            const tanggalIntervensiKetiga = dataObj['tanggal_intervensi_ketiga']?.[i] || '';
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





            const testingPertama = dataObj['testingpertama']?.[i] || '';
            const testingKedua = dataObj['test3']?.[i] || '';

            // Row 1
            rows[0].querySelector('input[name="tanggal_jam_pertama[]"]').value = tanggalPertama;
            rows[0].querySelector('input[name="tanggal_jam_kedua[]"]').value = tanggalKedua;
            rows[0].querySelector('input[name="tanggal_jam_ketiga[]"]').value = tanggalKetiga;

            // Row 10
            rows[10].querySelector('input[name="tanggal_intervensi_pertama[]"]').value = tanggalIntervensiPertama;
            rows[10].querySelector('input[name="tanggal_intervensi_kedua[]"]').value = tanggalIntervensiKedua;
            rows[10].querySelector('input[name="tanggal_intervensi_ketiga[]"]').value = tanggalIntervensiKetiga;

            const inputMap = [
                ['riwayat_jatuh', riwayatPertama, riwayatKedua, riwayatKetiga],
                ['kesehatan', kesehatanPertama, kesehatanKedua, kesehatanKetiga],
                ['bantuan_ambulan', bantuanAmbulanPertama, bantuanAmbulanKedua, bantuanAmbulanKetiga],
                ['terapi', koagulanPertama, koagulanKedua, koagulanKetiga],
                ['gaya_berjalan', gayaBerjalanPertama, gayaBerjalanKedua, gayaBerjalanKetiga],
                ['status_mental', statusMentalPertama, statusMentalKedua, statusMentalKetiga],
                ['total', TotalPertama, TotalKedua, TotalKetiga],
                ['placeResiko', PlaceResikoPertama, PlaceResikoKedua, PlaceResikoKetiga],
            ];

            inputMap.forEach((field, index) => {
                const [baseName, val1, val2, val3] = field;

                rows[index + 1].querySelector(`input[name="${baseName}_pertama[]"]`).value = val1;
                rows[index + 1].querySelector(`input[name="${baseName}_kedua[]"]`).value = val2;
                rows[index + 1].querySelector(`input[name="${baseName}_ketiga[]"]`).value = val3;
            });



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

            // Row 3 - Orientasi
            handleCheckboxGroup(rows[11], ['orientasi_pertama', 'orientasi_kedua', 'orientasi_ketiga']);
            // Row 4 - Bel
            handleCheckboxGroup(rows[12], ['bel_pertama', 'bel_kedua', 'bel_ketiga']);
            // Row 4 - roda
            handleCheckboxGroup(rows[13], ['roda_pertama', 'roda_kedua', 'roda_ketiga']);
            handleCheckboxGroup(rows[14], ['pagar_pertama', 'pagar_kedua', 'pagar_ketiga']);
            handleCheckboxGroup(rows[15], ['lampu_pertama', 'lampu_kedua', 'lampu_ketiga']);
            handleCheckboxGroup(rows[16], ['edukasi_pertama', 'edukasi_kedua', 'edukasi_ketiga']);
            handleCheckboxGroup(rows[17], ['pedoman_pertama', 'pedoman_kedua', 'pedoman_ketiga']);
            handleCheckboxGroup(rows[18], ['stiker_pertama', 'stiker_kedua', 'stiker_ketiga']);
            handleCheckboxGroup(rows[19], ['gelang_pertama', 'gelang_kedua', 'gelang_ketiga']);
            handleCheckboxGroup(rows[20], ['pencegahan_pertama', 'pencegahan_kedua', 'pencegahan_ketiga']);
            handleCheckboxGroup(rows[21], ['kunjungi_pertama', 'kunjungi_kedua', 'kunjungi_ketiga']);
            handleCheckboxGroup(rows[22], ['pispot_pertama', 'pispot_kedua', 'pispot_ketiga']);
            handleCheckboxGroup(rows[23], ['bilamobilisasi_pertama', 'bilamobilisasi_kedua', 'bilamobilisasi_ketiga']);
            handleCheckboxGroup(rows[24], ['yos_pertama', 'yos_kedua', 'yos_ketiga']);




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
                    placeholder: 'Cari perawat...'
                });

                if (selectedText) {
                    const opt = new Option(selectedText, selectedId || selectedText, true, true);
                    selectElement.append(opt).trigger('change');
                    if (hiddenInput) hiddenInput.value = selectedText;
                }
            }

            // Baris ke-4 (index 9)
            const rowperawat = rows[9];

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
            const rowperawat2 = rows[25];

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



    function hitungTotal(i) {
        const table = document.getElementById("VisiteProgramTable").getElementsByTagName("tbody")[0];
        const baseIndex = i * 27; // karena 10 row per kelompok

        // Rows input indeks 1 sampai 6 yang berisi skor
        // Riwayat Jatuh (row 1 setelah base)
        const riwayatPertama = parseFloat(table.rows[baseIndex + 1].querySelector('input[name="riwayat_jatuh_pertama[]"]').value) || 0;
        const riwayatKedua = parseFloat(table.rows[baseIndex + 1].querySelector('input[name="riwayat_jatuh_kedua[]"]').value) || 0;
        const riwayatKetiga = parseFloat(table.rows[baseIndex + 1].querySelector('input[name="riwayat_jatuh_ketiga[]"]').value) || 0;

        // Kesehatan (row 2 setelah base)
        const kesehatanPertama = parseFloat(table.rows[baseIndex + 2].querySelector('input[name="kesehatan_pertama[]"]').value) || 0;
        const kesehatanKedua = parseFloat(table.rows[baseIndex + 2].querySelector('input[name="kesehatan_kedua[]"]').value) || 0;
        const kesehatanKetiga = parseFloat(table.rows[baseIndex + 2].querySelector('input[name="kesehatan_ketiga[]"]').value) || 0;

        // Bantuan Ambulan (row 3 setelah base)
        const bantuanPertama = parseFloat(table.rows[baseIndex + 3].querySelector('input[name="bantuan_ambulan_pertama[]"]').value) || 0;
        const bantuanKedua = parseFloat(table.rows[baseIndex + 3].querySelector('input[name="bantuan_ambulan_kedua[]"]').value) || 0;
        const bantuanKetiga = parseFloat(table.rows[baseIndex + 3].querySelector('input[name="bantuan_ambulan_ketiga[]"]').value) || 0;

        // Terapi (row 4 setelah base)
        const terapiPertama = parseFloat(table.rows[baseIndex + 4].querySelector('input[name="terapi_pertama[]"]').value) || 0;
        const terapiKedua = parseFloat(table.rows[baseIndex + 4].querySelector('input[name="terapi_kedua[]"]').value) || 0;
        const terapiKetiga = parseFloat(table.rows[baseIndex + 4].querySelector('input[name="terapi_ketiga[]"]').value) || 0;

        // Gaya Berjalan (row 5 setelah base)
        const gayaPertama = parseFloat(table.rows[baseIndex + 5].querySelector('input[name="gaya_berjalan_pertama[]"]').value) || 0;
        const gayaKedua = parseFloat(table.rows[baseIndex + 5].querySelector('input[name="gaya_berjalan_kedua[]"]').value) || 0;
        const gayaKetiga = parseFloat(table.rows[baseIndex + 5].querySelector('input[name="gaya_berjalan_ketiga[]"]').value) || 0;

        // Status Mental (row 6 setelah base)
        const mentalPertama = parseFloat(table.rows[baseIndex + 6].querySelector('input[name="status_mental_pertama[]"]').value) || 0;
        const mentalKedua = parseFloat(table.rows[baseIndex + 6].querySelector('input[name="status_mental_kedua[]"]').value) || 0;
        const mentalKetiga = parseFloat(table.rows[baseIndex + 6].querySelector('input[name="status_mental_ketiga[]"]').value) || 0;

        // Hitung total tiap kolom
        const totalPertama = riwayatPertama + kesehatanPertama + bantuanPertama + terapiPertama + gayaPertama + mentalPertama;
        const totalKedua = riwayatKedua + kesehatanKedua + bantuanKedua + terapiKedua + gayaKedua + mentalKedua;
        const totalKetiga = riwayatKetiga + kesehatanKetiga + bantuanKetiga + terapiKetiga + gayaKetiga + mentalKetiga;

        // Set hasil ke kolom total (row 7 setelah base)
        table.rows[baseIndex + 7].querySelector('input[name="total_pertama[]"]').value = totalPertama;
        table.rows[baseIndex + 7].querySelector('input[name="total_kedua[]"]').value = totalKedua;
        table.rows[baseIndex + 7].querySelector('input[name="total_ketiga[]"]').value = totalKetiga;
    }

    // Pasang event listener pada input yang terkait
    document.getElementById("VisiteProgramTable").addEventListener("input", function(e) {
        if (!e.target) return;

        // cek apakah input bagian skor
        const name = e.target.getAttribute('name');
        if (!name) return;

        // Nama input skor yang perlu dihitung
        const keys = [
            'riwayat_jatuh_pertama[]', 'riwayat_jatuh_kedua[]', 'riwayat_jatuh_ketiga[]',
            'kesehatan_pertama[]', 'kesehatan_kedua[]', 'kesehatan_ketiga[]',
            'bantuan_ambulan_pertama[]', 'bantuan_ambulan_kedua[]', 'bantuan_ambulan_ketiga[]',
            'terapi_pertama[]', 'terapi_kedua[]', 'terapi_ketiga[]',
            'gaya_berjalan_pertama[]', 'gaya_berjalan_kedua[]', 'gaya_berjalan_ketiga[]',
            'status_mental_pertama[]', 'status_mental_kedua[]', 'status_mental_ketiga[]'
        ];

        if (keys.includes(name)) {
            // Cari index dari row berdasarkan posisi input
            const input = e.target;
            const tr = input.closest('tr');
            const tbody = tr.parentNode;
            const rows = Array.from(tbody.rows);
            const baseIndex = rows.indexOf(tr) - (rows.indexOf(tr) % 27); // kelipatan 10
            const i = baseIndex / 27;
            hitungTotal(i);
        }
    });
</script>