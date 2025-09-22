<div class="row">
    <?php
    $dataform1 = array(
        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "disabled", 'name' => "nama_pasien"),
        array('nama' => "NIK", 'name' => "nik", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nik", 'status' => "disabled"),
        array('nama' => "Agama", 'name' => "nama_agama", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Agama", 'status' => "disabled"),
    );
    foreach ($dataform1 as $a) {
        echo "<div class='col-4 d-flex gap-2 align-items-center mt-4'>";
        echo "<label for='{$a['nama']}' class='flex-shrink-0'>{$a['nama']} :</label>";
        echo "<input type='{$a['tipe']}' name='{$a['name']}' value='{$a['values']}' placeholder='{$a['holder']}' class='form-control border-dark' {$a['status']}>";
        echo "</div>";
    }
    ?>
</div>


<div class="row">
    <?php
    $dataform2 = array(
        array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "disabled", 'name' => "no_rm"),
        array('nama' => "Tanggal Lahir", 'name' => "tanggal_lahir", 'tipe' => "date", 'values' => "", 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
        array('nama' => "Suku Bangsa", 'name' => "nama_suku", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Suku", 'status' => "disabled"),
    );
    foreach ($dataform2 as $b) {
        echo "<div class='col-4 d-flex gap-2 align-items-center mt-4'>";
        echo "<label for='{$b['nama']}' class='flex-shrink-0'>{$b['nama']} :</label>";
        echo "<input type='{$b['tipe']}' name='{$b['name']}' value='{$b['values']}' placeholder='{$b['holder']}' class='form-control border-dark' {$b['status']}>";
        echo "</div>";
    }
    ?>
</div>
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
        const rowCount = table.rows.length / 17;
        const baseIndex = rowCount * 17;


        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);
        row1.classList.add("text-center");

        row1.innerHTML = `
           <td colspan="2">
                <div class="d-flex flex-column gap-2">
                    <div class="">
                    <label>Dokter Pelaksana Tindakan</label>
                </div>

                <div class="">
                    <label>Penerima Informasi (Pemberi Persetujuan)</label>
                </div>

                </div>
           </td>

           <td colspan="2">
                <div class="d-flex flex-column gap-2">
                    <div class="">
                    <select name="dokter_pelaksana_pertama[]" id="dokter_pelaksana_pertama${rowCount}" class="form-select dokter_pelaksana_pertama" style="width:100%;"></select>
                    <input type="hidden" name="dokter_pelaksana_pertama_nama[]" class="dokter_pelaksana_pertama_nama">
                </div>

                <div class="">
                    <input name="penerima_informasi_persetujuan[]" class="form-control border-dark">
                </div>

                </div>
           </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `
         <td>No</td>
        <td colspan="" align="center">Jenis Informasi</td>
        <td align="center">Isi Informasi</td>
        <td align="center">Tanda &check;</td>
        `;


        // === ROW 3 ===
        const row3 = table.insertRow(baseIndex + 2);
        row3.innerHTML = `
        <td>1</td>
        <td>Diagnosa</td>
        <td align="center">
              <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
            <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
        </td>
        <td align="center">
             <label><input type="checkbox" class="form-check-input" data-role="diagnosa_check_pertama"> </label>
            <input type="hidden" name="diagnosa_check_pertama[]" class="diagnosa_check_pertama_hidden" data-role="diagnosa_check_pertama" value="">
            <input type="hidden" name="diagnosa_check_pertama_nama[]" class="diagnosa_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 4 ===
        const row4 = table.insertRow(baseIndex + 3);
        row4.innerHTML = `
        <td class="">2</td>
        <td class="">Jenis Tindakan</td>
        <td class=""><input name="jenis_tambahan_pertama[]" class="form-control border-dark"></td>
         <td align="center">
             <label><input type="checkbox" class="form-check-input" data-role="jenis_tambahan_check_pertama"> </label>
            <input type="hidden" name="jenis_tambahan_check_pertama[]" class="jenis_tambahan_check_pertama_hidden" data-role="jenis_tambahan_check_pertama" value="">
            <input type="hidden" name="jenis_tambahan_check_pertama_nama[]" class="jenis_tambahan_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 5 ===
        const row5 = table.insertRow(baseIndex + 4);
        row5.innerHTML = `
        <td class="">3</td>
        <td>Tujuan</td>
        <td class=""><input name="tujuan_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="tujuan_check_pertama"> </label>
            <input type="hidden" name="tujuan_check_pertama[]" class="tujuan_check_pertama_hidden" data-role="tujuan_check_pertama" value="">
            <input type="hidden" name="tujuan_check_pertama_nama[]" class="tujuan_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 6 ===
        const row6 = table.insertRow(baseIndex + 5);
        row6.innerHTML = `
        <td class="">4</td>
        <td>Persiapan</td>
        <td class=""><input name="persiapan_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="persiapan_check_pertama"> </label>
            <input type="hidden" name="persiapan_check_pertama[]" class="persiapan_check_pertama_hidden" data-role="persiapan_check_pertama" value="">
            <input type="hidden" name="persiapan_check_pertama_nama[]" class="persiapan_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 7 ===
        const row7 = table.insertRow(baseIndex + 6);
        row7.innerHTML = `
        <td class="">5</td>
        <td>Resiko</td>
        <td class=""><input name="resiko_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="resiko_check_pertama"> </label>
            <input type="hidden" name="resiko_check_pertama[]" class="resiko_check_pertama_hidden" data-role="resiko_check_pertama" value="">
            <input type="hidden" name="resiko_check_pertama_nama[]" class="resiko_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 8 ===
        const row8 = table.insertRow(baseIndex + 7);
        row8.innerHTML = `
        <td class="">6</td>
        <td>Faktor Penyulit</td>
        <td class=""><input name="penyulit_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="penyulit_check_pertama"> </label>
            <input type="hidden" name="penyulit_check_pertama[]" class="penyulit_check_pertama_hidden" data-role="penyulit_check_pertama" value="">
            <input type="hidden" name="penyulit_check_pertama_nama[]" class="penyulit_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW Total ===
        const row9 = table.insertRow(baseIndex + 8);
        row9.innerHTML = `
        <td>7</td>
        <td>Kondisi spesifik pasien</td>
        <td class=""><input name="spesifik_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="spesifik_check_pertama"> </label>
            <input type="hidden" name="spesifik_check_pertama[]" class="spesifik_check_pertama_hidden" data-role="spesifik_check_pertama" value="">
            <input type="hidden" name="spesifik_check_pertama_nama[]" class="spesifik_check_pertama_nama"><br/>
        </td>
        `;


        // === ROW 8 ===
        const row9new = table.insertRow(baseIndex + 9);
        row9new.innerHTML = `
        <td>8</td>
        <td>Efek samping dan komplikasi</td>
        <td class=""><input name="efek_pertama[]" class="form-control border-dark"></td>

        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="efek_check_pertama"> </label>
            <input type="hidden" name="efek_check_pertama[]" class="efek_check_pertama_hidden" data-role="efek_check_pertama" value="">
            <input type="hidden" name="efek_check_pertama_nama[]" class="efek_check_pertama_nama"><br/>
        </td>
        `;


        // === ROW 9 ===
        const row10 = table.insertRow(baseIndex + 10);
        row10.innerHTML = `
        <td>9</td>
        <td>Prognosis</td>
        <td class=""><input name="prognosis_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="prognosis_check_pertama"> </label>
            <input type="hidden" name="prognosis_check_pertama[]" class="prognosis_check_pertama_hidden" data-role="prognosis_check_pertama" value="">
            <input type="hidden" name="prognosis_check_pertama_nama[]" class="prognosis_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 10 ===
        const row11 = table.insertRow(baseIndex + 11);
        row11.innerHTML = `
        <td>10</td>
        <td>Alternatif dan resiko</td>

        <td class=""><input name="alter_pertama[]" class="form-control border-dark"></td>
        <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="alternatif_check_pertama"> </label>
            <input type="hidden" name="alternatif_check_pertama[]" class="alternatif_check_pertama_hidden" data-role="alternatif_check_pertama" value="">
            <input type="hidden" name="alternatif_check_pertama_nama[]" class="alternatif_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW 11 ===
        const row12 = table.insertRow(baseIndex + 12);
        row12.innerHTML = `
        <td>11</td>
        <td>Lain-lain</td>
         <td class=""><input name="alter_lain_pertama[]" class="form-control border-dark"></td>
         <td align="center">
            <label><input type="checkbox" class="form-check-input" data-role="alter_lain_check_pertama"> </label>
            <input type="hidden" name="alter_lain_check_pertama[]" class="alter_lain_check_pertama_hidden" data-role="alter_lain_check_pertama" value="">
            <input type="hidden" name="alter_lain_check_pertama_nama[]" class="alter_lain_check_pertama_nama"><br/>
        </td>
        `;

        // === ROW (Tanda Tangan) ===
        const rowTandaTangan = table.insertRow(baseIndex + 13);
        rowTandaTangan.innerHTML = `
            <td colspan="3">
                <div class="">Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas, dan memberikan kesempatan untuk bertanya dan berdiskusi.</div>
            </td>
            <td>
            <div class="text-center">Tanda Tangan Dokter</div>
                <div class="">
                    <select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
                    <input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama">
                </div>
            </td>
        `;



        // === ROW (Tanda Tangan) ===
        const rowTandaTangan2 = table.insertRow(baseIndex + 14);
        rowTandaTangan2.innerHTML = `
            <td colspan="3">
                <div class="">Dengan ini menyatakan bahwa saya telah menerima informasi sebagaimana diatas yang saya berikan tanda paraf dan telah memahaminya.</div>
            </td>
            <td>
            <div class="text-center">Tanda tangan nama pasien/keluarga</div>
                <div class="text-center">
                    <img class="marker-image border border-dark" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" style="width: 220px; height:120px" data-input-name="image_drawer_disetujui_${rowCount}" />
                    <input type="hidden"  id="image_drawer_disetujui_${rowCount}" name="image_drawer_disetujui_${rowCount}" value="" />

                    <input type="text" name="tanda_tangan_pasien_keluarga[]" value="<?= $nama_hub_pasien; ?>" class="form-control border-dark">
                </div>
            </td>
        `;


        // === ROW 13 ===
        const row13 = table.insertRow(baseIndex + 15);
        row13.innerHTML = `
        <td colspan="4">
                <div class="text-center">Bila pasien tidak kompeten atau tidak bisa menrima informasi, maka penerima informasiadalah wali atau keluarga terdekat.</div>

                <div class="bg-dark text-white text-center"><b>PERSETUJUAN TINDAKAN KEDOKTERAN</b></div>

                <div class="mt-2 d-flex align-items-center gap-2 flex-wrap">
                    <label class="flex-shrink-0">Yang bertanda tangan dibawah ini, saya Nama </label>
                    <input type="text" name="nama_yang_bertanda_tangan[]" class="form-control border-dark">
                    <div class="d-flex gap-2 col-md-12 align-items-center">
                        <label class="flex-shrink-0">Umur</label>
                        <input type="text" name="umur_yang_bertanda_tangan[]" class="form-control border-dark w-25">
                        <span>tahun</span>
                    </div>
                     <label class="flex-shrink-0">jenis kelamin</label>
                    <input type="text" name="jenkel_yang_bertanda_tangan[]" class="form-control border-dark">
                    <label class="flex-shrink-0">Alamat</label>
                    <textarea rows="" class="form-control border-dark" name="alamat_yang_bertanda_tangan[]"></textarea>
                    <label class="flex-shrink-0">Dengan ini </label>
                    <input type="text" name="siapa_yang_bertanda_tangan[]" class="form-control border-dark" placeholder="saya sendiri/ Istri/ Anak/ Ibu/ Bapak/">


                    <label class="flex-shrink-0">saya menyatakan SETUJU dilakukan Tindakan Kedokteran berupa </label>
                    <input type="text" name="setuju_yang_bertanda_tangan[]" class="form-control border-dark">
                </div>

                <div class="mt-3">Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti diatas kepada saya, termasuk resiko dan komplikasi yang timbul saat dilakukan Tindakan Kedokteran.</div>

                <div class="mt-3">Saya menyadari bahwa oleh ilmu kedokteran bukanlah ilmu pasti, karena keberhasilan Tindakan Kedokteran bukan keniscayaan, melainkan sangat bergantung kepada Tuhan Yang Maha Esa.</div>


                <div class="d-flex align-items-center justify-content-end gap-2">
                    <div><?= $city_sign; ?></div>
                    <input type="date" class="form-control border-dark w-25" name="tanggal_city[]" value="<?= date('Y-m-d'); ?>">
                </div>


                <div class="d-flex align-items-center gap-2 mt-3">
                    <div class="col-4">
                    <div class="text-center">Disetujui oleh Pasien</div>
                        <div class="text-center">
                            <img class="marker-image border border-dark" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" style="width: 220px; height:120px" data-input-name="image_drawer_setuju_pasien_${rowCount}" />
                            <input type="hidden"  id="image_drawer_setuju_pasien_${rowCount}" name="image_drawer_setuju_pasien_${rowCount}" value="" />
                        </div>

                        <input type="text" name="setuju_tanda_tangan_pasien[]" value="<?= $nama_pasien; ?>" class="form-control border-dark">
                    </div>



                    <div class="col-4">
                    <div class="text-center">Saksi Wali/ Keluarga</div>
                        <div class="text-center">
                            <img class="marker-image border border-dark" src="<?= base_url() . './assets/images/form/base-ttd.png' ?>" style="width: 220px; height:120px" data-input-name="image_drawer_saksi_${rowCount}" />
                            <input type="hidden"  id="image_drawer_saksi_${rowCount}" name="image_drawer_saksi_${rowCount}" value="" />
                        </div>
                        <input type="text" name="saksi_tanda_tangan_pasien[]" value="<?= $nama_hub_pasien; ?>" class="form-control border-dark">
                    </div>


                    <div class="col-4">
                        <div class="text-center">Saksi Rumah Sakit</div>
                        <div class="">
                            <select name="perawat_pengkaji_pertama[]" id="perawat_pengkaji_pertama${rowCount}" class="form-select perawat_pengkaji_pertama" style="width:90%;"></select>
                            <input type="hidden" name="perawat_pengkaji_pertama_nama[]" class="perawat_pengkaji_pertama_nama">
                        </div>
                    </div>
                </div>
        </td>
      
        `;


        const pembatastable = table.insertRow(baseIndex + 16);
        pembatastable.innerHTML = `
        <td class="border-top border-bottom border-0 px-0" style="height: 60px;">
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
        initSelect2Dokter('dokter_pelaksana_pertama', 'dokter_pelaksana_pertama');



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
                placeholder: 'Cari...'
            }).on('select2:select', function(e) {
                $(this).closest('td').find(`.${namaKelas}_nama`).val(e.params.data.text);
            });
        }

        // Panggil fungsi untuk masing-masing elemen
        initSelect2Perawat('perawat_pengkaji_pertama', 'perawat_pengkaji_pertama');



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
            const tr = addRow(); // baris utama pertama dari 4 baris
            const baseIndex = i * 17;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 17);


            // row new
            const PenerimaInformasiPertama = dataObj['penerima_informasi_persetujuan']?.[i] || '';
            const JenisTambahanPertama = dataObj['jenis_tambahan_pertama']?.[i] || '';
            const TujuanPertama = dataObj['tujuan_pertama']?.[i] || '';
            const PersiapanPertama = dataObj['persiapan_pertama']?.[i] || '';
            const ResikoPertama = dataObj['resiko_pertama']?.[i] || '';
            const PenyulitPertama = dataObj['penyulit_pertama']?.[i] || '';
            const SpesifikPertama = dataObj['spesifik_pertama']?.[i] || '';
            const EfekPertama = dataObj['efek_pertama']?.[i] || '';
            const PrognosisPertama = dataObj['prognosis_pertama']?.[i] || '';
            const AlterPertama = dataObj['alter_pertama']?.[i] || '';
            const AlterLainPertama = dataObj['alter_lain_pertama']?.[i] || '';
            const TandaTanganKeluargaPertama = dataObj['tanda_tangan_pasien_keluarga']?.[i] || '';
            const SetujuTandaTanganPasienPertama = dataObj['setuju_tanda_tangan_pasien']?.[i] || '';
            const SaksiPasien = dataObj['saksi_tanda_tangan_pasien']?.[i] || '';
            const TanggalCity = dataObj['tanggal_city']?.[i] || '';




            // new row 14
            const NamaBertandaTangan = dataObj['nama_yang_bertanda_tangan']?.[i] || '';
            const UmurBertandaTangan = dataObj['umur_yang_bertanda_tangan']?.[i] || '';
            const JenkelBertandaTangan = dataObj['jenkel_yang_bertanda_tangan']?.[i] || '';
            const AlamatBertandaTangan = dataObj['alamat_yang_bertanda_tangan']?.[i] || '';
            const SiapaBertandaTangan = dataObj['siapa_yang_bertanda_tangan']?.[i] || '';
            const SetujuBertandaTangan = dataObj['setuju_yang_bertanda_tangan']?.[i] || '';
            // batas





            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
            // batas


            // perawat ttd satu
            const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';


            const dokterPelaksanaPertama = dataObj['dokter_pelaksana_pertama_nama']?.[i] || '';
            const dokterPelaksana_idPertama = dataObj['dokter_pelaksana_pertama']?.[i] || '';


            const perawatKedua = dataObj['perawat_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idKedua = dataObj['perawat_pengkaji_pertama']?.[i] || '';
            // batas










            // Row 2
            rows[0].querySelector('input[name="penerima_informasi_persetujuan[]"]').value = PenerimaInformasiPertama;
            rows[3].querySelector('input[name="jenis_tambahan_pertama[]"]').value = JenisTambahanPertama;
            rows[4].querySelector('input[name="tujuan_pertama[]"]').value = TujuanPertama;
            rows[5].querySelector('input[name="persiapan_pertama[]"]').value = PersiapanPertama;
            rows[6].querySelector('input[name="resiko_pertama[]"]').value = ResikoPertama;
            rows[7].querySelector('input[name="penyulit_pertama[]"]').value = PenyulitPertama;
            rows[8].querySelector('input[name="spesifik_pertama[]"]').value = SpesifikPertama;
            rows[9].querySelector('input[name="efek_pertama[]"]').value = EfekPertama;
            rows[10].querySelector('input[name="prognosis_pertama[]"]').value = PrognosisPertama;
            rows[11].querySelector('input[name="alter_pertama[]"]').value = AlterPertama;
            rows[12].querySelector('input[name="alter_lain_pertama[]"]').value = AlterLainPertama;
            rows[14].querySelector('input[name="tanda_tangan_pasien_keluarga[]"]').value = TandaTanganKeluargaPertama;


            // row 14
            rows[15].querySelector('input[name="setuju_tanda_tangan_pasien[]"]').value = SetujuTandaTanganPasienPertama;
            rows[15].querySelector('input[name="saksi_tanda_tangan_pasien[]"]').value = SaksiPasien;
            rows[15].querySelector('input[name="nama_yang_bertanda_tangan[]"]').value = NamaBertandaTangan;
            rows[15].querySelector('input[name="umur_yang_bertanda_tangan[]"]').value = UmurBertandaTangan;
            rows[15].querySelector('input[name="jenkel_yang_bertanda_tangan[]"]').value = JenkelBertandaTangan;
            rows[15].querySelector('textarea[name="alamat_yang_bertanda_tangan[]"]').value = AlamatBertandaTangan;
            rows[15].querySelector('input[name="siapa_yang_bertanda_tangan[]"]').value = SiapaBertandaTangan;
            rows[15].querySelector('input[name="setuju_yang_bertanda_tangan[]"]').value = SetujuBertandaTangan;
            rows[15].querySelector('input[name="tanggal_city[]"]').value = TanggalCity;






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
            handleCheckboxGroup(rows[2], ['diagnosa_check_pertama']);
            handleCheckboxGroup(rows[3], ['jenis_tambahan_check_pertama']);
            handleCheckboxGroup(rows[4], ['tujuan_check_pertama']);
            handleCheckboxGroup(rows[5], ['persiapan_check_pertama']);
            handleCheckboxGroup(rows[6], ['resiko_check_pertama']);
            handleCheckboxGroup(rows[7], ['penyulit_check_pertama']);
            handleCheckboxGroup(rows[8], ['spesifik_check_pertama']);
            handleCheckboxGroup(rows[9], ['efek_check_pertama']);
            handleCheckboxGroup(rows[10], ['prognosis_check_pertama']);
            handleCheckboxGroup(rows[11], ['alternatif_check_pertama']);
            handleCheckboxGroup(rows[12], ['alter_lain_check_pertama']);





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


            // Baris ke-1 dokter
            const rowdokterPelaksana = rows[0];

            initSelect2Dokter(
                $(rowdokterPelaksana).find('.dokter_pelaksana_pertama'),
                rowdokterPelaksana.querySelector('.dokter_pelaksana_pertama_nama'),
                dokterPelaksanaPertama,
                dokterPelaksana_idPertama
            );


            // Baris ke-13 dokter
            const rowdokter = rows[13];

            initSelect2Dokter(
                $(rowdokter).find('.dokter_pengkaji_pertama'),
                rowdokter.querySelector('.dokter_pengkaji_pertama_nama'),
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



            // Baris ke-4 (index 9)
            const rowperawatnew = rows[15];

            initSelect2Perawat(
                $(rowperawatnew).find('.perawat_pengkaji_pertama'),
                rowperawatnew.querySelector('.perawat_pengkaji_pertama_nama'),
                perawatKedua,
                perawat_idKedua
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