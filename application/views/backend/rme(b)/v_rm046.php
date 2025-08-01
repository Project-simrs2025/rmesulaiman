<div class="row">
    <table class="table table-bordered border-dark">
        <tr>
            <td colspan="4">
                <h3 class="fw-bold text-center">DAFTAR TILIK PRE OPERASI</h3>
            </td>
            <td colspan="2">

                <?php
                // Gabungkan tanggal lahir dan umur
                $tgl_lahir = $tgl_lahir;
                $umur = $umur;
                $values = "$tgl_lahir / $umur";

                $dataform1 = array(
                    array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "", 'name' => 'no_rm'),
                    array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
                    array('nama' => "Tanggal Lahir/Umur", 'name' => "tanggall_lahir", 'tipe' => "text", 'values' => $values, 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
                    array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'values' => "", 'holder' => "jenkel", 'status' => ""),
                );
                foreach ($dataform1 as $a) {
                    echo "<div class='form-group mt-2'>";
                    echo "<label for='{$a['nama']}'>{$a['nama']} :</label>";
                    echo "<input type='{$a['tipe']}' class='form-control border-dark {$a['name']}' name='{$a['name']}' id='{$a['name']}' placeholder='{$a['holder']}' value='{$a['values']}' {$a['status']}>
                    </div>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Jam Tiba Di Kamar Operasi</label>
                        <input type="time" name="jam_tiba" class="form-control border-dark w-25" value="<?= date('H:i'); ?>">

                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Tanggal Operasi</label>
                        <input type="date" name="tanggal_operasi" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d'); ?>">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Tindakan</label>
                        <input type="text" name="tindakan" id="" class="form-control border-dark w-100">
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Ruangan / kamar</label>
                        <input type="text" name="ruangan" id="" class="form-control border-dark w-100">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="d-flex flex-column gap-2">
                    <!-- jenis pasien -->
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Jenis Pasien</label>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="jns_rawat_pasien_umum" id="jns_rawat_pasien_umum" class="custom-checkbox-success">
                            <label for="jns_rawat_pasien_umum">Umum</label>
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="jns_rawat_pasien_BPJS" id="jns_rawat_pasien_BPJS" class="custom-checkbox-success">
                            <label for="jns_rawat_pasien_BPJS">BPJS</label>
                        </div>
                        <div class="col d-flex align-items-center gap-2">
                            <input type="checkbox" name="jns_rawat_pasien_lain" id="jns_rawat_pasien_lain" class="custom-checkbox-success">
                            <div class="d-flex align-items-center gap-2 w-100">
                                <label for="jns_rawat_pasien_lain" class="flex-shrink-0">Lain-lain</label>
                                <input type="text" name="lain_input" id="lain_input" class="form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <!-- divider -->

                    <!-- Kelas -->
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Kelas</label>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="kelas_pasien_i" id="kelas_pasien_i" class="custom-checkbox-success">
                            <label for="kelas_pasien_i">i</label>
                        </div>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="kelas_pasien_ii" id="kelas_pasien_ii" class="custom-checkbox-success">
                            <label for="kelas_pasien_ii">ii</label>
                        </div>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="kelas_pasien_iii" id="kelas_pasien_iii" class="custom-checkbox-success">
                            <label for="kelas_pasien_iii">iii</label>
                        </div>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="kelas_pasien_vip" id="kelas_pasien_vip" class="custom-checkbox-success">
                            <label for="kelas_pasien_vip">vip</label>
                        </div>
                        <div class="col-2 d-flex align-items-center gap-2">
                            <input type="checkbox" name="kelas_pasien_S.vip" id="kelas_pasien_S.vip" class="custom-checkbox-success">
                            <label for="kelas_pasien_S.vip">S.vip</label>
                        </div>

                    </div>
                    <!-- divider -->

                    <!-- Lembar Jaminan -->
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Lembar Jaminan</label>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="lmbr_jaminan_pasien_ada" id="lmbr_jaminan_pasien_ada" class="custom-checkbox-success">
                            <label for="lmbr_jaminan_pasien_ada">Ada</label>
                        </div>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="lmbr_jaminan_pasien_Tidak" id="lmbr_jaminan_pasien_Tidak" class="custom-checkbox-success">
                            <label for="lmbr_jaminan_pasien_Tidak">Tidak</label>
                        </div>
                    </div>
                    <!-- divider -->

                    <!-- Lembar asesment -->
                    <div class="d-flex align-items-center gap-2">
                        <label for="" class="col-3">Lembar asesment</label>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="lmbr_asesment_pasien_ada" id="lmbr_asesment_pasien_ada" class="custom-checkbox-success">
                            <label for="lmbr_asesment_pasien_ada">Ada</label>
                        </div>
                        <div class="col-1 d-flex align-items-center gap-2">
                            <input type="checkbox" name="lmbr_asesment_pasien_Tidak" id="lmbr_asesment_pasien_Tidak" class="custom-checkbox-success">
                            <label for="lmbr_asesment_pasien_Tidak">Tidak</label>
                        </div>
                    </div>
                    <!-- divider -->
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="6">
                <div class="fw-bold text-center">Hal-Hal Yang diserah Terimakan</div>
            </td>
        </tr>
        <tr class="text-center">
            <td>No</td>
            <td colspan="2">Beri Tanda (&check;) Ya (-) Tidak</td>
            <td>Perawat Ruangan</td>
            <td>Perawat Kamar Bedah</td>
            <td>Keterangan</td>
        </tr>
        <tr class="text-center">
            <td>1</td>
            <td colspan="2">Identifikasi Pasien</td>
            <td><input type="checkbox" name="perawat_ruangan_indentifikasi" id="perawat_ruangan_indentifikasi" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_identifikasi" id="perawat_kamar_bedah_identifikasi" class="custom-checkbox-success"></td>
            <td><input type="text" name="identifikasi_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td>2</td>
            <td colspan="2">Periksa gelang Identitas Pasien</td>
            <td><input type="checkbox" name="perawat_ruangan_periksa_gelang" id="perawat_ruangan_periksa_gelang" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_periksa_gelang" id="perawat_kamar_bedah_periksa_gelang" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_gelang_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td rowspan="2">3</td>
            <td class="col-6">Informasi Prosedur Operasi</td>
            <td class="col-6">Bedah</td>
            <td><input type="checkbox" name="perawat_ruangan_info_prosedur" id="perawat_ruangan_info_prosedur" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_info_prosedur" id="perawat_kamar_bedah_info_prosedur" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_info_prosedur_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td class="col-6">(Persetujuan Tindakan Medik)</td>
            <td class="col-6">Anestesi</td>
            <td><input type="checkbox" name="perawat_ruangan_persetujuan_dokter" id="perawat_ruangan_persetujuan_dokter" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_persetujuan_dokter" id="perawat_kamar_bedah_persetujuan_dokter" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_persetujuan_dokter_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td rowspan="2">4</td>
            <td rowspan="2">Hasil Pemeriksaan</td>
            <td>Laboratorium</td>
            <td><input type="checkbox" name="perawat_ruangan_hasil_pemeriksaan_lab" id="perawat_ruangan_hasil_pemeriksaan_lab" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_hasil_pemeriksaan_lab" id="perawat_kamar_bedah_hasil_pemeriksaan_lab" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_hasil_pemeriksaan_lab_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td>PA</td>
            <td><input type="checkbox" name="perawat_ruangan_hasil_pemeriksaan_PA" id="perawat_ruangan_hasil_pemeriksaan_PA" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_hasil_pemeriksaan_PA" id="perawat_kamar_bedah_hasil_pemeriksaan_PA" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_hasil_pemeriksaan_PA_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td rowspan="5">5</td>
            <td rowspan="5">Rontgen</td>
            <td>Thorax</td>
            <td><input type="checkbox" name="perawat_ruangan_rontgen_thorax" id="perawat_ruangan_rontgen_thorax" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_rontgen_thorax" id="perawat_kamar_bedah_rontgen_thorax" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_rontgen_thorax_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td>CT-Scan</td>
            <td><input type="checkbox" name="perawat_ruangan_rontgen_ct_scan" id="perawat_ruangan_rontgen_ct_scan" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_rontgen_ct_scan" id="perawat_kamar_bedah_rontgen_ct_scan" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_rontgen_ct_scan_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td>MRI</td>
            <td><input type="checkbox" name="perawat_ruangan_rontgen_mri" id="perawat_ruangan_rontgen_mri" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_rontgen_mri" id="perawat_kamar_bedah_rontgen_mri" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_rontgen_mri_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td>USG</td>
            <td><input type="checkbox" name="perawat_ruangan_rontgen_usg" id="perawat_ruangan_rontgen_usg" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_rontgen_usg" id="perawat_kamar_bedah_rontgen_usg" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_rontgen_usg_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td>
                <div>Foto Lain</div>
                <div><input type="text" name="rontgen_foto_lain" class="form-control border-dark"></div>
            </td>
            <td><input type="checkbox" name="perawat_ruangan_rontgen_fto_lain" id="perawat_ruangan_rontgen_fto_lain" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_rontgen_fto_lain" id="perawat_kamar_bedah_rontgen_fto_lain" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_rontgen_fto_lain_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <tr class="text-center">
            <td rowspan="5">6</td>
            <td rowspan="5">Hasil Konsul (Anastesi dan DPJP Lainnya)</td>
            <td><input type="text" name="hasil_konsul_dpjp_1" id="" class="form-control border-dark"></td>
            <td><input type="checkbox" name="perawat_ruangan_hsl_konsul_1" id="perawat_ruangan_hsl_konsul_1" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_hsl_konsul_1" id="perawat_kamar_bedah_hsl_konsul_1" class="custom-checkbox-success"></td>
            <td><input type="text" name="periksa_hsl_konsul_1_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <?php for ($i = 2; $i <= 5; $i++) : ?>
            <tr class="text-center">
                <td><input type="text" name="hasil_konsul_dpjp_<?= $i; ?>" id="" class="form-control border-dark"></td>
                <td><input type="checkbox" name="perawat_ruangan_hsl_konsul_<?= $i; ?>" id="perawat_ruangan_hsl_konsul_<?= $i; ?>" class="custom-checkbox-success"></td>
                <td><input type="checkbox" name="perawat_kamar_bedah_hsl_konsul_<?= $i; ?>" id="perawat_kamar_bedah_hsl_konsul_<?= $i; ?>" class="custom-checkbox-success"></td>
                <td><input type="text" name="periksa_hsl_konsul_<?= $i; ?>_input" id="" class="form-control border-dark" style="width: 450px;"></td>
            </tr>
        <?php endfor; ?>
        <?php
        $data = [
            ['no' => 7,  'label' => 'Mandi Besar/Lap', 'name' => 'mandi'],
            ['no' => 8,  'label' => 'Cukur Pubis', 'name' => 'cukur'],
            ['no' => 9,  'label' => 'Vemplon Nomor 18', 'name' => 'vemplon_18'],
            ['no' => 10, 'label' => 'Gigi Palsu, Kaca mata, Kotak lensa dan perhiasan lainnya dilepas dan disimpan', 'name' => 'barang_dilepas'],
            ['no' => 11, 'label' => 'puasa', 'name' => 'puasa'],
            ['no' => 12, 'label' => 'Penandaan (Mark site)', 'name' => 'penandaan'],
            ['no' => 13, 'label' => 'pemeriksaan golongan darah', 'name' => 'pemeriksaan'],
        ];
        ?>

        <?php foreach ($data as $item): ?>
            <tr class="text-center">
                <td><?= $item['no'] ?></td>
                <td colspan="2"><?= $item['label'] ?></td>
                <?php foreach (['perawat_ruangan', 'perawat_kamar_bedah'] as $prefix): ?>
                    <td><input type="checkbox" name="<?= $prefix . '_' . $item['name'] ?>" class="custom-checkbox-success"></td>
                <?php endforeach; ?>
                <td><input type="text" name="<?= $item['name'] ?>_input" class="form-control border-dark" style="width: 450px;"></td>
            </tr>
        <?php endforeach; ?>

        <tr class="text-center">
            <td rowspan="5">14</td>
            <td rowspan="5">Persediaan Darah</td>
            <td>
                <div class="d-flex align-items-center gap-2">
                    <div>WB</div>
                    <input type="text" name="darah_wb" id="darah_wb" class="form-control border-dark">
                    <span class="col-4">(kantong)</span>
                </div>
            </td>
            <td><input type="checkbox" name="perawat_ruangan_darah_Wb" id="perawat_ruangan_darah_Wb" class="custom-checkbox-success"></td>
            <td><input type="checkbox" name="perawat_kamar_bedah_darah_Wb" id="perawat_kamar_bedah_darah_Wb" class="custom-checkbox-success"></td>
            <td><input type="text" name="persediaan_darah_Wb_input" id="" class="form-control border-dark" style="width: 450px;"></td>
        </tr>
        <?php
        $darahItems = [
            ['label' => 'PRC', 'name' => 'prc'],
            ['label' => 'FFP', 'name' => 'ffp'],
            ['label' => 'Trombosit', 'name' => 'trombosit'],
            ['label' => 'lain-lain', 'name' => 'lain'],
        ];
        ?>

        <?php foreach ($darahItems as $item): ?>
            <tr class="text-center">
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <div><?= $item['label'] ?></div>
                        <input type="text" name="darah_<?= $item['name'] ?>" class="form-control border-dark">
                        <span class="col-4">(kantong)</span>
                    </div>
                </td>
                <?php foreach (['perawat_ruangan', 'perawat_kamar_bedah'] as $prefix): ?>
                    <td><input type="checkbox" name="<?= $prefix ?>_darah_<?= $item['name'] ?>" class="custom-checkbox-success"></td>
                <?php endforeach; ?>
                <td><input type="text" name="persediaan_darah_<?= $item['name'] ?>_input" class="form-control border-dark" style="width: 450px;"></td>
            </tr>
        <?php endforeach; ?>

        <?php for ($p = 15; $p <= 20; $p++) : ?>
            <tr class="text-center">
                <td><?= $p; ?></td>
                <td colspan="2"><textarea name="input_tambahan_<?= $p; ?>" id="" class="form-control border-dark" rows="1"></textarea></td>
                <td><input type="checkbox" name="input_tambahan_perawat_ruangan_<?= $p; ?>" id="" class="custom-checkbox-success"></td>
                <td><input type="checkbox" name="input_tambahan_perawat_bedah_<?= $p; ?>" id="" class="custom-checkbox-success"></td>
                <td><input type="text" name="input_tambahan_keterangan_<?= $p; ?>" id="" class="form-control border-dark"></td>
            </tr>
        <?php endfor; ?>

        <tr>
            <td colspan="6">
                <div class="row">
                    <div class="col-6 text-center">
                        <div class="text-center">Perawat Yang Menyerahkan</div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_menyerahkan" />
                        </div>
                        <select type="select" name="perawat_menyerahkan" id="perawat_menyerahkan" class="form-select perawat" style="width: 100%;"></select>
                    </div>
                    <div class="col-6">
                        <div class="text-center">Perawat Yang Menerima</div>
                        <div class="my-2 text-center">
                            <img class="img-responsive center-block mt-2" style="width: 15%;" id="qr_perawat_menerima" />
                        </div>
                        <select type="select" name="perawat_menerima" id="perawat_menerima" class="form-select perawat" style="width: 100%;"></select>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>



<script>
    let dataPerawat = []
    const mode = "<?= $mode; ?>"

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    $(document).ready(function() {
        let page = 1;
        listPerawatAPI()

        $('#perawat_menyerahkan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_menyerahkan')
        });

        $('#perawat_menerima').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_perawat_menerima')
        });
    });

    function cbCommon(data) {
        populateFormFields(data);

        $('#perawat_menyerahkan').prop('disabled', false)
        $('#perawat_menyerahkan').select2('open')
        $('#perawat_menyerahkan').select2('close')
        if (mode === "lihat")
            $('#perawat_menyerahkan').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat_menyerahkan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_menyerahkan')
                }
            })
        }, 1000)

        $('#perawat_menerima').prop('disabled', false)
        $('#perawat_menerima').select2('open')
        $('#perawat_menerima').select2('close')
        if (mode === "lihat")
            $('#perawat_menerima').prop('disabled', true)

        setTimeout(() => {
            // console.log(dataDokter)
            dataPerawat?.map(v => {
                if (v.text === $('#perawat_menerima').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_perawat_menerima')
                }
            })
        }, 1000)
    }

    function listPerawatAPI() {
        $('.perawat').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan'); ?>',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                    }
                },
                processResults: function(data) {
                    const {
                        items,
                        more
                    } = data.data;
                    dataPerawat = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Cari nama Perawat',
        })
    }
</script>