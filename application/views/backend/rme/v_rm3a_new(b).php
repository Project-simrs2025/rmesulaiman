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
        const rowCount = table.rows.length / 4;
        const baseIndex = rowCount * 4;


        // === ROW 1 ===
        const row1 = table.insertRow(baseIndex);

        row1.innerHTML = `
           <td colspan="4">
                <table class="table table-bordered border-dark">
                    <tr>
                        <td class="col-md-6"><div>Nama Pasien</div><input type="text" name="nama_pasien" class="form-control border-dark" value="<?= $nama_pasien ?>" disabled></td>
                        <td class="col-md-6"><div>Tanggal Masuk</div><input type="date" name="tanggal_masuk[]" class="form-control border-dark" value=""></td>
                    </tr>
                    <tr>
                        <td><div>Tanggal Lahir</div><input type="text" name="tanggal_lahir" class="form-control border-dark" value="<?= $tgl_lahir ?>" disabled></td>
                        <td><div>Ruangan</div><input type="text" name="nama_ruangan[]" class="form-control border-dark" value="<?= $nama_ruangan ?>"></td>
                    </tr>
                    <tr>
                        <td><div>No RM</div><input type="text" name="no_rm" class="form-control border-dark" value="<?= $no_rm ?>" disabled></td>
                        <td><div>Tanggal / Jam Pindah</div><input type="datetime-local" name="tgl_pindah[]" class="form-control border-dark" value=""></td>
                    </tr>
                    <tr>
                        <td>
                            <div>Dokter Jaga</div>
                             <select name="dokter_pengkaji_pertama[]" id="dokter_pengkaji_pertama${rowCount}" class="form-select dokter_pengkaji_pertama" style="width:100%;"></select>
                            <input type="hidden" name="dokter_pengkaji_pertama_nama[]" class="dokter_pengkaji_pertama_nama">
                        </td>
                        <td>
                            <div>Pindah Ke ruangan</div><input type="text" name="pindah_keruangan[]" class="form-control border-dark" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>DPJP</div>
                              <select name="dokter_melakukan_konsultasi[]" id="dokter_melakukan_konsultasi${rowCount}" class="form-select dokter_melakukan_konsultasi" style="width:100%;"></select>
                            <input type="hidden" name="dokter_melakukan_konsultasi_nama[]" class="dokter_melakukan_konsultasi_nama">
                        </td>
                        <td>
                            <div>Diagnosa Sekarang</div>
                              <select name="diagnosa_pertama[]" id="diagnosa_pertama${rowCount}" class="form-select diagnosa_pertama" style="width:100%;"></select>
                                <input type="hidden" name="diagnosa_pertama_nama[]" class="diagnosa_pertama_nama">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div>Diagnosa</div>
                              <select name="diagnosa_utama[]" id="diagnosa_utama${rowCount}" class="form-select diagnosa_utama" style="width:100%;"></select>
                                <input type="hidden" name="diagnosa_utama_nama[]" class="diagnosa_utama_nama">
                        </td>
                    </tr>

                </table>
           </td>
        `;

        // === ROW 3 ===
        const rowPertama = table.insertRow(baseIndex + 1);
        rowPertama.innerHTML = `
        <td colspan="4" style="border-left: none; border-right: none;">
          <div class="d-flex flex-column gap-3">
              <div><b>I. Penunjang</b></div>
            <div class="d-flex align-items-start gap-2">
                <label class="col-md-2">A. Keluhan Utama :</label>
                <textarea class="form-control border-dark" name="keluhan_utama[]" rows="3"></textarea>
            </div>
            <div class="d-flex align-items-start gap-2">
                <label class="col-md-2">B. Riwayat Penyakit :</label>
                <textarea class="form-control border-dark" name="riwayat_penyakit[]" rows="3"></textarea>
            </div>

            <div><b>II. PEMERIKSAAN FISIK</b></div>

            <div class="d-flex align-items-center gap-2">
                <label class="col-md-2">A. Keadaan Umum</label>
                <input type="text" name="keadaan_umum[]" class="form-control border-dark">
            </div>

            <div class="d-flex align-items-start gap-2">
                <div class="col-md-2"><label>B. Tanda-tanda vital :</label></div>

                <div class="col-md-3 d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <label class="col-md-3">TD </label>
                        : <input type="text" name="tinggi_darah[]" class="form-control border-dark"> mmHg
                    </div>

                     <div class="d-flex align-items-center gap-2">
                        <label class="col-md-5">Pernafasan </label>
                        : <input type="text" name="pernafasan[]" class="form-control border-dark"> x/i
                    </div>
                </div>

                <div class="ms-4 col-md-3 d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <label class="col-md-3">Nadi </label>
                        : <input type="text" name="nadi[]" class="form-control border-dark"> x/i
                    </div>

                     <div class="d-flex align-items-center gap-2">
                        <label class="col-md-3">suhu </label>
                        : <input type="text" name="suhu[]" class="form-control border-dark"> &deg;C
                    </div>
                </div>

                <div class="ms-5 col d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <label class="col-md-5">Skala Nyeri </label>
                        : <input type="text" name="skala_nyeri[]" class="form-control border-dark">
                    </div>
                </div>
            </div>


            <div class="d-flex align-items-center gap-2">
                <label class="col-md-2">C. Pemeriksaan Fisik : </label>
                <input type="text" name="pemeriksaan_fisik[]" class="form-control border-dark">
            </div>


            <div class="d-flex align-items-center gap-2">
                <label class="col-md-2">D. Riwayat Alergi : </label>
                <input type="text" name="riwayat_alergi[]" class="form-control border-dark">
            </div>

            <div class="d-flex align-items-center gap-2">
                <label class="col-md-2">E. Alasan Pindah Ruangan : </label>
                <input type="text" name="alasan_pindah_ruangan[]" class="form-control border-dark">
            </div>

            <div><b>III. PEMERIKSAAN PENUNJANG / DIAGNOTIK</b></div>

          </div>
        </td>
        `;



        // === ROW 3 ===
        const row3 = table.insertRow(baseIndex + 2);
        row3.innerHTML = `

        <td colspan="4" style="border-left: none; border-right: none; ">
            <div class="d-flex align-items-center gap-2">
                <label><input type="checkbox" class="form-check-input" data-role="laboratorium_check"> laboratorium </label>
                <input type="hidden" name="laboratorium_check[]" class="laboratorium_check_hidden" data-role="laboratorium_check" value="">
                <input type="hidden" name="laboratorium_check_nama[]" class="laboratorium_check_nama">

                <label><input type="checkbox" class="form-check-input" data-role="ekg_check"> EKG </label>
                <input type="hidden" name="ekg_check[]" class="ekg_check_hidden" data-role="ekg_check" value="">
                <input type="hidden" name="ekg_check_nama[]" class="ekg_check_nama">

                 <label><input type="checkbox" class="form-check-input" data-role="radiologi_check"> Radiologi</label>
                <input type="hidden" name="radiologi_check[]" class="radiologi_check_hidden" data-role="radiologi_check" value="">
                <input type="hidden" name="radiologi_check_nama[]" class="radiologi_check_nama">

                <div class="col-md-1"></div>

                <div class="d-flex align-items-center gap-2">
                    <label class="flex-shrink-0">lain-lain</label>
                    <input type="text" class="form-control border-dark" name="lain_penunjang[]">
                </div>
            </div>

            <div class="d-flex flex-column gap-3">
                <div><b>IV. PEMBERIAN TERAPI</b></div>
                <textarea name="pemberian_terapi[]" rows="3" class="form-control border-dark"></textarea>

                <div><b>V. TINDAKAN MEDIS YANG TELAH DILAKUKAN</b></div>
                <textarea name="tindakan_medis_dilakukan[]" rows="3" class="form-control border-dark"></textarea>

                <div class="d-flex align-items-center gap-2">
                    <label class="col-md-2">VI. DIET</label>
                    <input type="text" name="diet_tindakan[]" class="form-control border-dark">
                </div>

                <div class="d-flex align-items-center gap-2">
                    <label class="col-md-2">VII. INDIKASI PASIEN MASUK</label>
                    <input type="text" name="indikasi_pasien[]" class="form-control border-dark">
                </div>


                <div class="d-flex align-items-center gap-2">
                    <label><input type="checkbox" class="form-check-input" data-role="preventif_check"> Preventif </label>
                    <input type="hidden" name="preventif_check[]" class="preventif_check_hidden" data-role="preventif_check" value="">
                    <input type="hidden" name="preventif_check_nama[]" class="preventif_check_nama">

                    <label><input type="checkbox" class="form-check-input" data-role="kuratif_check"> Kuratif </label>
                    <input type="hidden" name="kuratif_check[]" class="kuratif_check_hidden" data-role="kuratif_check" value="">
                    <input type="hidden" name="kuratif_check_nama[]" class="kuratif_check_nama">

                    <label><input type="checkbox" class="form-check-input" data-role="paliatif_check"> Paliatif </label>
                    <input type="hidden" name="paliatif_check[]" class="paliatif_check_hidden" data-role="paliatif_check" value="">
                    <input type="hidden" name="paliatif_check_nama[]" class="paliatif_check_nama">

                     <label><input type="checkbox" class="form-check-input" data-role="rehabilitatif_check"> Rehabilitatif </label>
                    <input type="hidden" name="rehabilitatif_check[]" class="rehabilitatif_check_hidden" data-role="rehabilitatif_check" value="">
                    <input type="hidden" name="rehabilitatif_check_nama[]" class="rehabilitatif_check_nama">
                </div>


                  <div class="d-flex flex-column gap-2">
                    <label class="col">VIII. KONDISI PASIEN SAAT TRANSFER</label>
                    <input type="text" name="kondisi_pasien[]" class="form-control border-dark">
                </div>


                <div class="row mt-5">
                    <div class="col-md-6">
                    <div class="mb-5 text-center">Perawat Yang Menyerahkan</div>
                            <select name="perawat_pengkaji_pertama[]" id="perawat_pengkaji_pertama${rowCount}" class="form-select perawat_pengkaji_pertama" style="width:100%;"></select>
                            <input type="hidden" name="perawat_pengkaji_pertama_nama[]" class="perawat_pengkaji_pertama_nama">
                    </div>
                    <div class="col-md-6">
                    <div class="mb-5 text-center">Perawat Yang Menerima</div>
                            <select name="perawat_penerima[]" id="perawat_penerima${rowCount}" class="form-select perawat_penerima" style="width:100%;"></select>
                            <input type="hidden" name="perawat_penerima_nama[]" class="perawat_penerima_nama">
                    </div>
                </div>
            </div>
        </td>
        `;



        const pembatastable = table.insertRow(baseIndex + 3);
        pembatastable.innerHTML = `
        <td class="border-top border-bottom border-0 px-0" style="height: 180px;">
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
        initSelect2Dokter('dokter_melakukan_konsultasi', 'dokter_melakukan_konsultasi');



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
        initSelect2Perawat('perawat_pengkaji_pertama', 'perawat_pengkaji_pertama');
        initSelect2Perawat('perawat_penerima', 'perawat_penerima');



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
        initSelect2Diagnosa('diagnosa_utama', 'diagnosa_utama');



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
            const baseIndex = i * 4;
            const rows = Array.from(table.rows).slice(baseIndex, baseIndex + 4);


            // row new
            // const NamaPasienDirawat = dataObj['nama_pasien_dirawat']?.[i] || '';
            const TanggalMasuk = dataObj['tanggal_masuk']?.[i] || '';
            // const TanggalLahir = dataObj['tanggal_lahir']?.[i] || '';
            const NamaRuangan = dataObj['nama_ruangan']?.[i] || '';
            const UmurPasienDirawat = dataObj['umur_pasien_dirawat']?.[i] || '';
            const JenkelPasienDirawat = dataObj['jenkel_pasien_dirawat']?.[i] || '';
            const RuanganPasienDirawat = dataObj['ruangan_pasien_dirawat']?.[i] || '';
            const KelasPasienDirawat = dataObj['kelas_pasien_dirawat']?.[i] || '';
            // const nomorRmPasienDirawat = dataObj['no_rm_pasien_dirawat']?.[i] || '';
            const TanggalPindah = dataObj['tgl_pindah']?.[i] || '';
            const PindahKeruangan = dataObj['pindah_keruangan']?.[i] || '';
            const KeluhanUtama = dataObj['keluhan_utama']?.[i] || '';
            const RiwayatPenyakit = dataObj['riwayat_penyakit']?.[i] || '';
            const KeadaanUmum = dataObj['keadaan_umum']?.[i] || '';
            const TinggiDarah = dataObj['tinggi_darah']?.[i] || '';
            const Pernapasan = dataObj['pernafasan']?.[i] || '';
            const Nadi = dataObj['nadi']?.[i] || '';
            const Suhu = dataObj['suhu']?.[i] || '';
            const SkalaNyeri = dataObj['skala_nyeri']?.[i] || '';
            const PemeriksaanFisik = dataObj['pemeriksaan_fisik']?.[i] || '';
            const RiwayatAlergi = dataObj['riwayat_alergi']?.[i] || '';
            const AlasanPindahRuangan = dataObj['alasan_pindah_ruangan']?.[i] || '';
            const LainPenunjang = dataObj['lain_penunjang']?.[i] || '';
            const PemberianTerapi = dataObj['pemberian_terapi']?.[i] || '';
            const TindakanMedis = dataObj['tindakan_medis_dilakukan']?.[i] || '';
            const DietTindakan = dataObj['diet_tindakan']?.[i] || '';
            const IndikasiPasien = dataObj['indikasi_pasien']?.[i] || '';
            const KondisiPasien = dataObj['kondisi_pasien']?.[i] || '';




            // Diagnosa 
            const diagnosaPertama = dataObj['diagnosa_pertama_nama']?.[i] || '';
            const diagnosa_idPertama = dataObj['diagnosa_pertama']?.[i] || '';
            const diagnosaUtamaPertama = dataObj['diagnosa_utama_nama']?.[i] || '';
            const diagnosaUtama_idPertama = dataObj['diagnosa_utama']?.[i] || '';



            // perawat ttd satu
            const perawatPertama = dataObj['dokter_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPertama = dataObj['dokter_pengkaji_pertama']?.[i] || '';

            const DokterMelakukanKonsultasi = dataObj['dokter_melakukan_konsultasi_nama']?.[i] || '';
            const DokterMelakukanKonsultasi_idPertama = dataObj['dokter_melakukan_konsultasi']?.[i] || '';


            const perawatPengkaji = dataObj['perawat_pengkaji_pertama_nama']?.[i] || '';
            const perawat_idPengkaji = dataObj['perawat_pengkaji_pertama']?.[i] || '';
            const perawatPenerima = dataObj['perawat_penerima_nama']?.[i] || '';
            const perawat_idPenerima = dataObj['perawat_penerima']?.[i] || '';
            // batas



            // Row 2
            // rows[0].querySelector('input[name="nama_pasien_dirawat[]"]').value = NamaPasienDirawat;
            rows[0].querySelector('input[name="tanggal_masuk[]"]').value = TanggalMasuk;
            // rows[0].querySelector('input[name="tanggal_lahir[]"]').value = TanggalLahir;
            rows[0].querySelector('input[name="nama_ruangan[]"]').value = NamaRuangan;
            // rows[0].querySelector('input[name="no_rm_pasien_dirawat[]"]').value = nomorRmPasienDirawat;
            rows[0].querySelector('input[name="tgl_pindah[]"]').value = TanggalPindah;
            rows[0].querySelector('input[name="pindah_keruangan[]"]').value = PindahKeruangan;
            rows[1].querySelector('textarea[name="keluhan_utama[]"]').value = KeluhanUtama;
            rows[1].querySelector('textarea[name="riwayat_penyakit[]"]').value = RiwayatPenyakit;
            rows[1].querySelector('input[name="keadaan_umum[]"]').value = KeadaanUmum;
            rows[1].querySelector('input[name="tinggi_darah[]"]').value = TinggiDarah;
            rows[1].querySelector('input[name="pernafasan[]"]').value = Pernapasan;
            rows[1].querySelector('input[name="nadi[]"]').value = Nadi;
            rows[1].querySelector('input[name="skala_nyeri[]"]').value = SkalaNyeri;
            rows[1].querySelector('input[name="pemeriksaan_fisik[]"]').value = PemeriksaanFisik;
            rows[1].querySelector('input[name="riwayat_alergi[]"]').value = RiwayatAlergi;
            rows[1].querySelector('input[name="alasan_pindah_ruangan[]"]').value = AlasanPindahRuangan;
            rows[2].querySelector('input[name="lain_penunjang[]"]').value = LainPenunjang;
            rows[2].querySelector('textarea[name="pemberian_terapi[]"]').value = PemberianTerapi;
            rows[2].querySelector('textarea[name="tindakan_medis_dilakukan[]"]').value = TindakanMedis;
            rows[2].querySelector('input[name="diet_tindakan[]"]').value = DietTindakan;
            rows[2].querySelector('input[name="indikasi_pasien[]"]').value = IndikasiPasien;
            rows[2].querySelector('input[name="kondisi_pasien[]"]').value = KondisiPasien;





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
            handleCheckboxGroup(rows[2], ['laboratorium_check']);
            handleCheckboxGroup(rows[2], ['ekg_check']);
            handleCheckboxGroup(rows[2], ['radiologi_check']);
            handleCheckboxGroup(rows[2], ['preventif_check']);
            handleCheckboxGroup(rows[2], ['kuratif_check']);
            handleCheckboxGroup(rows[2], ['paliatif_check']);
            handleCheckboxGroup(rows[2], ['rehabilitatif_check']);





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

            initSelect2Diagnosa(
                $(rowdiagnosa).find('.diagnosa_utama'),
                rowdiagnosa.querySelector('.diagnosa_utama_nama'),
                diagnosaUtamaPertama,
                diagnosaUtama_idPertama
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


            // Baris ke-13 dokter
            const rowdokter0 = rows[0];

            initSelect2Dokter(
                $(rowdokter0).find('.dokter_pengkaji_pertama'),
                rowdokter0.querySelector('.dokter_pengkaji_pertama_nama'),
                perawatPertama,
                perawat_idPertama
            );


            initSelect2Dokter(
                $(rowdokter0).find('.dokter_melakukan_konsultasi'),
                rowdokter0.querySelector('.dokter_melakukan_konsultasi_nama'),
                DokterMelakukanKonsultasi,
                DokterMelakukanKonsultasi_idPertama
            );


            // Baris ke-13 dokter


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


            // Baris ke- Perawat
            const rowperawat1 = rows[2];

            initSelect2Perawat(
                $(rowperawat1).find('.perawat_pengkaji_pertama'),
                rowperawat1.querySelector('.perawat_pengkaji_pertama_nama'),
                perawatPengkaji,
                perawat_idPengkaji
            );

            initSelect2Perawat(
                $(rowperawat1).find('.perawat_penerima'),
                rowperawat1.querySelector('.perawat_penerima_nama'),
                perawatPenerima,
                perawat_idPenerima
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