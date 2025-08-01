<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-4">
                    <h6 class="fw-bold text-center">PENGKAJIAN AWAL KEBIDANAN ANTE, INTRA, POST PARTUM PASIEN RAWAT INAP</h6>
                </td>
                <td class="col-6">
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
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr class="border-bottom-0">
                <td>
                    <div class="fw-bold">1. ASESMEN INFORMASI :</div>
                    <div class="mt-2 fw-bold"> Data Umum :</div>
                    <div class="d-flex flex-column gap-2 mt-2">
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-2">Tiba Di Ruangan / Pukul</label>
                            <input type="datetime-local" name="tiba_di_ruangan" id="" class="form-control border-dark w-25">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-2">Asesmen / Pukul</label>
                            <input type="datetime-local" name="asesmen_tanggal" id="" class="form-control border-dark w-25">
                        </div>
                        <!-- cara masuk -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Cara Masuk</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="cara_jalan" id="cara_jalan" class="custom-checkbox-success">
                                <label for="cara_jalan">Jalan</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="cara_kursi_roda" id="cara_kursi_roda" class="custom-checkbox-success">
                                <label for="cara_kursi_roda">Kursi Roda</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="cara_Branker" id="cara_Branker" class="custom-checkbox-success">
                                <label for="cara_Branker">Branker</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="cara_jalan_lain_check" id="cara_jalan_lain_check" class="custom-checkbox-success">
                                <div class="w-100">
                                    <input type="text" name="cara_jalan_lain_text" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider cara masuk -->
                        <!-- Asal Masuk -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Asal Masuk</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="asal_masuk_ugd" id="asal_masuk_ugd" class="custom-checkbox-success">
                                <label for="asal_masuk_ugd">UGD</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="asal_masuk_poli" id="asal_masuk_poli" class="custom-checkbox-success">
                                <label for="asal_masuk_poli">Poliklinik</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="asal_masuk_lain_check" id="asal_masuk_lain_check" class="custom-checkbox-success">
                                <div class="w-100">
                                    <input type="text" name="asal_masuk_lain_text" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider Asal Masuk -->
                    </div>
                </td>
            </tr>
            <tr class="border-top-0 border-bottom-0">
                <td>
                    <div class="row">
                        <div class="fw-bold mt-3">Data Kebidanan Waktu Masuk :</div>
                        <div class="col-6 d-flex flex-column gap-2 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <label for="data_bidan_g">G</label>
                                    <input type="text" name="data_bidan_g" id="data_bidan_g" class="form-control border-dark">
                                </div>
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <label for="data_bidan_P">P</label>
                                    <input type="text" name="data_bidan_P" id="data_bidan_P" class="form-control border-dark">
                                </div>
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <label for="data_bidan_A">A</label>
                                    <input type="text" name="data_bidan_A" id="data_bidan_A" class="form-control border-dark">
                                </div>
                            </div>
                            <!-- divider -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-4">Di Kirim Oleh</div>
                                <span>:</span>
                                <input type="checkbox" name="di_krm_dokter" id="di_krm_dokter" class="custom-checkbox-success">
                                <label for="di_krm_dokter">Dokter</label>
                            </div>
                            <!-- divider dokter -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-4">Riwayat ANC</div>
                                <span>:</span>
                                <input type="checkbox" name="anc_ada" id="anc_ada" class="custom-checkbox-success">
                                <label for="anc_ada">Ada</label>
                            </div>
                            <!-- divider anc -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-4">Gerakan Janin</div>
                                <span>:</span>
                                <input type="checkbox" name="grk_janin_ada" id="grk_janin_ada" class="custom-checkbox-success">
                                <label for="grk_janin_ada">Ada</label>
                            </div>
                            <!-- divider janin -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-4">Berat Badan Sekarang</div>
                                <span>:</span>
                                <input type="text" name="weight_body" id="weight_body" class="form-control border-dark w-25">
                                <span>kg</span>
                            </div>
                        </div>
                        <div class="col-6 d-flex flex-column gap-2 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-5">
                                    <label for="data_bidan_HPHT">HPHT</label>
                                    <input type="text" name="data_bidan_HPHT" id="data_bidan_HPHT" class="form-control border-dark">
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <label for="data_bidan_taksiran_partus" class="flex-shrink-0">Taksiran Partus</label>
                                    <input type="text" name="data_bidan_taksiran_partus" id="data_bidan_taksiran_partus" class="form-control border-dark">
                                </div>
                            </div>
                            <!-- divider hpht -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <input type="checkbox" name="dikirim_bidan" id="dikirim_bidan" class="custom-checkbox-success">
                                    <label for="dikirim_bidan">Bidan</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-4">
                                    <input type="checkbox" name="dikirim_datang_sendiri" id="dikirim_datang_sendiri" class="custom-checkbox-success">
                                    <label for="dikirim_datang_sendiri">Datang sendiri</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="dikirim_lain_check" id="dikirim_lain_check" class="custom-checkbox-success">
                                    <div>
                                        <input type="text" name="dikirim_lain_text" id="" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider transfer-->
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <input type="checkbox" name="rwyat_anc_bidan" id="rwyat_anc_bidan" class="custom-checkbox-success">
                                    <label for="rwyat_anc_bidan">Bidan</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-4">
                                    <input type="checkbox" name="rwyat_anc_tdk_pernah" id="rwyat_anc_tdk_pernah" class="custom-checkbox-success">
                                    <label for="rwyat_anc_tdk_pernah">Tidak Pernah</label>
                                </div>
                            </div>
                            <!-- divider rwayat anc -->
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="grk_janin_tdk_ada" id="grk_janin_tdk_ada" class="custom-checkbox-success">
                                <label for="grk_janin_tdk_ada">Tidak Ada</label>
                            </div>
                            <!-- divider gerakan janin -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-5">
                                    <label for="height_body" class="flex-shrink-0">Tingga Badan</label>
                                    <input type="text" name="height_body" id="height_body" class="form-control border-dark">
                                    <span>cm</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 col ms-5">
                                    <label for="gol_Darah" class="flex-shrink-0">Gol Darah</label>
                                    <input type="text" name="gol_Darah" id="gol_Darah" class="form-control border-dark w-25">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <label for="" class="col-5">Berat badan sebelum hamil</label>
                                <span>:</span>
                                <input type="text" name="berat_sblm_hamil" id="" class="form-control border-dark w-25">
                                <span>kg</span>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="berat_sblm_haml_tdktimbang" id="berat_sblm_haml_tdktimbang" class="custom-checkbox-success">
                                <label for="berat_sblm_haml_tdktimbang">Tidak pernah ditimbang</label>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div>Masalah selama kehamilan</div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="masalah_hamil_tdk_ada" id="masalah_hamil_tdk_ada" class="custom-checkbox-success">
                                <label for="masalah_hamil_tdk_ada">Tidak Ada</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="masalah_hamil_ada" id="masalah_hamil_ada" class="custom-checkbox-success">
                                <label for="masalah_hamil_ada"> Ada</label>
                            </div>
                            <textarea name="text_hamil_ada" id="" rows="3" class="form-control border-dark"></textarea>
                        </div>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <div class="col-2">Keluhan Utama</div>
                            <input type="text" name="keluhan_utama" class="form-control border-dark">
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="border-top-0">
                <td>
                    <div class="fw-bold">Riwayat Kehamilan dan Persalinan</div>
                    <table class="table table-bordered border-dark">
                        <tbody>
                            <tr class="text-center">
                                <td>No</td>
                                <td>Usia Kehamilan</td>
                                <td>Tempat & Penolong</td>
                                <td>Jenis Persalinan</td>
                                <td>BBL/PB (kg/cm)</td>
                                <td>Jenis Kelamin</td>
                                <td>Asi Ekslusif</td>
                                <td>Umur Sekarang</td>
                            </tr>
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                            ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td><textarea name="usia_kehamilan_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea></td>
                                    <td><textarea name="tempat_kehamilan_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea>
                                        <div class="my-2">Nama Penolong</div>
                                        <div class="my-2">
                                            <div>
                                                <img class=" img-responsive center-block my-2" style="width: 15%;" id="qr_dokter_umum<?= $i; ?>" />
                                            </div>
                                            <select type="select" name="dokter_umum<?= $i; ?>" id="dokter_umum<?= $i; ?>" class="form-select dokter_umum" style="width: 100%;"></select>
                                        </div>
                                    </td>
                                    <td>
                                        <textarea name="jenis_persalinan_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea>
                                    </td>
                                    <td>
                                        <textarea name="bbl_pb_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea>
                                    </td>
                                    <td>
                                        <textarea name="jenis_kelamin_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea>
                                    </td>
                                    <td>
                                        <textarea name="asi_ekslusif_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea>
                                    </td>
                                    <td>
                                        <textarea name="umur_ekslusif_<?= $i; ?>" id="" rows="1" class="form-control border-dark"></textarea>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="fw-bold">Riwayat Kesehatan</div>
                    <div class="d-flex flex-column">
                        <!-- kebiasaan merokok -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">kebiasaan merokok</div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="rwayat_kesehatan_merokok_tidak" id="rwayat_kesehatan_merokok_tidak" class="custom-checkbox-success">
                                <label for="rwayat_kesehatan_merokok_tidak">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="riwayat_kesehatan_merokok_ya" id="riwayat_kesehatan_merokok_ya" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="riwayat_kesehatan_merokok_ya">Ya</label>
                                    <input type="text" name="riwayat_kesehatan_input_kebiasaan_merokok" id="" class="form-control border-dark">
                                    <span class="col-2">batang / hari</span>
                                </div>
                            </div>
                        </div>
                        <!-- divider -->

                        <!-- Minuman beralkohol -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">Minuman beralkohol</div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_kesehatan_beralkohol_tidak" id="riwayat_kesehatan_beralkohol_tidak" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_beralkohol_tidak">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="riwayat_kesehatan_beralkohol_ya" id="riwayat_kesehatan_beralkohol_ya" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_beralkohol_ya">Ya</label>
                            </div>
                        </div>
                        <!-- divider -->

                        <!-- obat-obat terlarang -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">obat-obat terlarang</div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_obat_tidak" id="riwayat_obat_tidak" class="custom-checkbox-success">
                                <label for="riwayat_obat_tidak">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="riwayat_obat_ya" id="riwayat_obat_ya" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="riwayat_obat_ya" class="flex-shrink-0">Ya, jenis</label>
                                    <input type="text" name="input_kebiasaan_obat" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider -->


                        <!-- makan -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3 d-flex align-items-center gap-2">
                                <label for="">makan:</label>
                                <input type="text" name="riwayat_kesehatan_input_makan" id="riwayat_kesehatan_input_makan" class="form-control border-dark">
                            </div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">nafsu makan</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_kesehatan_makan_meningkat" id="riwayat_kesehatan_makan_meningkat" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_makan_meningkat">Meningkat</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_kesehatan_makan_Menurun" id="riwayat_kesehatan_makan_Menurun" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_makan_Menurun">Menurun</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_kesehatan_makan_Normal" id="riwayat_kesehatan_makan_Normal" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_makan_Normal">Normal</label>
                            </div>
                        </div>
                        <!-- divider -->


                        <!-- Senam hamil -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">Senam hamil</div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_kesehatan_senam_tidak" id="riwayat_kesehatan_senam_tidak" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_senam_tidak">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="riwayat_kesehatan_senam_ya" id="riwayat_kesehatan_senam_ya" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_senam_ya">Ya</label>
                            </div>
                        </div>
                        <!-- divider -->

                        <!-- Kesulitan berkemih -->
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">Kesulitan berkemih</div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="riwayat_kesehatan_berkemih_tidak" id="riwayat_kesehatan_berkemih_tidak" class="custom-checkbox-success">
                                <label for="riwayat_kesehatan_berkemih_tidak">Tidak</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="riwayat_kesehatan_berkemih_ya" id="riwayat_kesehatan_berkemih_ya" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="riwayat_kesehatan_berkemih_ya" class="flex-shrink-0">Ya</label>
                                    <input type="text" name="input_kebiasaan_berkemih" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider -->

                        <!-- penyakit yang pernah di derita -->
                        <div>Penyakit yang pernah di derita</div>
                        <div class="d-flex flex-column gap-2">
                            <!-- nyeri -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Nyeri</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="penyakit_nyeri_ya" id="penyakit_nyeri_ya" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_ya">Ya</label>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="penyakit_nyeri_tidak" id="penyakit_nyeri_tidak" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_tidak">Tidak</label>
                                </div>
                            </div>
                            <!-- divider -->

                            <!-- nyeri mempengaruhi -->
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <div class="col-3">Nyeri mempengaruhi</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="penyakit_nyeri_mempengaruhi_tiddur" id="penyakit_nyeri_mempengaruhi_tiddur" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_mempengaruhi_tiddur">Tidur</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="penyakit_nyeri_mempengaruhi_aktifitas" id="penyakit_nyeri_mempengaruhi_aktifitas" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_mempengaruhi_aktifitas">Aktifitas fisik</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="penyakit_nyeri_mempengaruhi_emosi" id="penyakit_nyeri_mempengaruhi_emosi" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_mempengaruhi_emosi">Emosi</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="penyakit_nyeri_mempengaruhi_Konsentrasi" id="penyakit_nyeri_mempengaruhi_Konsentrasi" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_mempengaruhi_Konsentrasi">Konsentrasi</label>
                                </div>
                                <div class="col-3"></div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="penyakit_nyeri_mempengaruhi_napsu" id="penyakit_nyeri_mempengaruhi_napsu" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_mempengaruhi_napsu">nafsu makan</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="penyakit_nyeri_mempengaruhi_hub_org_lain" id="penyakit_nyeri_mempengaruhi_hub_org_lain" class="custom-checkbox-success">
                                    <label for="penyakit_nyeri_mempengaruhi_hub_org_lain">Hubungan dengan orang lain</label>
                                </div>
                            </div>
                            <!-- divider -->

                        </div>
                        <!-- divider -->

                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr class="text-center">
                <td>No</td>
                <td>Lokasi</td>
                <td>Skala</td>
                <td>Lama</td>
                <td>Faktor Pencetus</td>
                <td>Kualitas</td>
                <td>Frekuensi</td>
                <td>Faktor Pereda</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <div style="width:250px; height:250px;">
                        <textarea name="Lokasi_nyeri" id="" rows="3" class="form-control border-dark"></textarea>
                    </div>
                </td>
                <td>
                    <div style="width: 200px; height:250px;">
                        <textarea name="Skala_nyeri" id="" rows="3" class="form-control border-dark"></textarea>
                    </div>
                </td>
                <td>
                    <div style="width: 200px; height:250px;">
                        <textarea name="Lama_nyeri" id="" rows="3" class="form-control border-dark"></textarea>
                    </div>
                </td>
                <td class="col-3">
                    <div class="d-flex flex-column" style="width: 200px; height:250px;">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_bergerak" id="faktor_bergerak" class="custom-checkbox-success">
                            <label for="faktor_bergerak">Bergerak</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_bnyk_aktif" id="faktor_bnyk_aktif" class="custom-checkbox-success">
                            <label for="faktor_bnyk_aktif">Banyak Aktifitas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_tarik_nafas" id="faktor_tarik_nafas" class="custom-checkbox-success">
                            <label for="faktor_tarik_nafas">Saat Menarik Nafas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_suhu_nafas" id="faktor_suhu_nafas" class="custom-checkbox-success">
                            <label for="faktor_suhu_nafas">Suhu Nafas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_stres_fisik" id="faktor_stres_fisik" class="custom-checkbox-success">
                            <label for="faktor_stres_fisik">Stres fisik</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_stres_emosi" id="faktor_stres_emosi" class="custom-checkbox-success">
                            <label for="faktor_stres_emosi">Stres emosi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor_stres_check_lain_1" id="faktor_stres_check_lain_1" class="custom-checkbox-success">
                            <input type="text" class="form-control border-dark" name="faktor_stres_check_lain_1">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column" style="width: 200px; height:250px;">
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="kualitas_terbakar" id="kualitas_terbakar" class="custom-checkbox-success">
                            <label for="kualitas_terbakar">Terbakar</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="kualitas_Tumpul" id="kualitas_Tumpul" class="custom-checkbox-success">
                            <label for="kualitas_Tumpul">Tumpul</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="kualitas_Tertekan" id="kualitas_Tertekan" class="custom-checkbox-success">
                            <label for="kualitas_Tertekan">Tertekan</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="kualitas_Menjalar" id="kualitas_Menjalar" class="custom-checkbox-success">
                            <label for="kualitas_Menjalar">Menjalar</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="kualitas_Tajam" id="kualitas_Tajam" class="custom-checkbox-success">
                            <label for="kualitas_Tajam">Tajam</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="kualitas_Tertusuk" id="kualitas_Tertusuk" class="custom-checkbox-success">
                            <label for="kualitas_Tertusuk">Tertusuk</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column" style="width: 200px; height:250px;">
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="frekuensi_menetap" id="frekuensi_menetap" class="custom-checkbox-success">
                            <label for="frekuensi_menetap">Menetap</label>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="checkbox" name="frekuensi_intermitmen" id="frekuensi_intermitmen" class="custom-checkbox-success">
                            <label for="frekuensi_intermitmen">intermitmen</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column" style="width: 200px; height:250px;">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_bergerak" id="faktor+pereda_bergerak" class="custom-checkbox-success">
                            <label for="faktor+pereda_bergerak">Bergerak</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_bnyk_aktif" id="faktor+pereda_bnyk_aktif" class="custom-checkbox-success">
                            <label for="faktor+pereda_bnyk_aktif">Banyak Aktifitas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_tarik_nafas" id="faktor+pereda_tarik_nafas" class="custom-checkbox-success">
                            <label for="faktor+pereda_tarik_nafas">Saat Menarik Nafas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_suhu_nafas" id="faktor+pereda_suhu_nafas" class="custom-checkbox-success">
                            <label for="faktor+pereda_suhu_nafas">Suhu Nafas</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_stres_fisik" id="faktor+pereda_stres_fisik" class="custom-checkbox-success">
                            <label for="faktor+pereda_stres_fisik">Stres fisik</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_stres_emosi" id="faktor+pereda_stres_emosi" class="custom-checkbox-success">
                            <label for="faktor+pereda_stres_emosi">Stres emosi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="faktor+pereda_stres_check_lain_1" id="faktor+pereda_stres_check_lain_1" class="custom-checkbox-success">
                            <input type="text" class="form-control border-dark" name="faktor+pereda_stres_check_lain_1">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row mt-2">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr class="border-bottom-0">
                <td>
                    <div class="fw-bold">Respon Kognitif :</div>
                    <!-- pasien mengerti tentang kehamilan -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-5">Apakah pasien mengerti tentang kehamilan</div>
                        <span>:</span>
                        <div class="d-flex align-items-center gap-2 col-1">
                            <input type="checkbox" name="pasien_mengerti_ya" id="pasien_mengerti_ya" class="custom-checkbox-success">
                            <label for="pasien_mengerti_ya">Ya</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-1">
                            <input type="checkbox" name="pasien_mengerti_Tidak" id="pasien_mengerti_Tidak" class="custom-checkbox-success">
                            <label for="pasien_mengerti_Tidak">Tidak</label>
                        </div>
                    </div>
                    <!-- divider -->

                    <div class="d-flex align-items-start gap-2 mt-2">
                        <div class="col-5"> Pasien / keluarga menginginkan informasi tentang </div>
                        <span>:</span>
                        <div class="col">
                            <textarea name="informasi_tentang_pasien_konitif" id="" rows="3" class="form-control border-dark"></textarea>
                        </div>
                    </div>

                    <!-- status psikologi -->
                    <div class="mt-3">
                        <h6 class="fw-bold">Status psikologi</h6>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="psikologi_tenang" id="psikologi_tenang" class="custom-checkbox-success">
                                <label for="psikologi_tenang">Tenang</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="psikologi_Marah" id="psikologi_Marah" class="custom-checkbox-success">
                                <label for="psikologi_Marah">Marah</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="psikologi_Sedih" id="psikologi_Sedih" class="custom-checkbox-success">
                                <label for="psikologi_Sedih">Sedih</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="psikologi_Menangis" id="psikologi_Menangis" class="custom-checkbox-success">
                                <label for="psikologi_Menangis">Menangis</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="psikologi_lain_check" id="psikologi_lain_check" class="custom-checkbox-success">
                                </div>
                                <div class="w-100">
                                    <input type="text" name="psikologi_lain_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4"> Kehamilan diharapkan </div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="kehamilan_diharapkan_ya" id="kehamilan_diharapkan_ya" class="custom-checkbox-success">
                                <label for="kehamilan_diharapkan_ya">Ya</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="kehamilan_diharapkan_Tidak" id="kehamilan_diharapkan_Tidak" class="custom-checkbox-success">
                                <label for="kehamilan_diharapkan_Tidak">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <!-- divider psikologi -->

                    <!-- status sosial -->
                    <div class="mt-3">
                        <h6 class="fw-bold">Status Sosial</h6>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2">Tinggal Bersama </div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="sosial_suami" id="sosial_suami" class="custom-checkbox-success">
                                <label for="sosial_suami">suami</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="sosial_orang_tua" id="sosial_orang_tua" class="custom-checkbox-success">
                                <label for="sosial_orang_tua">Orang Tua</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="sosial_mertua" id="sosial_mertua" class="custom-checkbox-success">
                                <label for="sosial_mertua">Mertua</label>
                            </div>

                            <div class="d-flex align-items-center gap-2 col">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="sosial_lain_check" id="sosial_lain_check" class="custom-checkbox-success">
                                </div>
                                <div class="w-100">
                                    <input type="text" name="sosial_lain_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider -->

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4"> Orang yang membantu setelah di rumah </div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="membantu_dirumah_ya" id="membantu_dirumah_ya" class="custom-checkbox-success">
                                <label for="membantu_dirumah_ya">Ya</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="membantu_dirumah_Tidak" id="membantu_dirumah_Tidak" class="custom-checkbox-success">
                                <label for="membantu_dirumah_Tidak">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <!-- divider -->

                    <!-- status Spritual -->
                    <div class="mt-3">
                        <h6 class="fw-bold">Status Spritual</h6>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4">Apakah selama hamil masih dapat beribadah ? </div>
                            <span>:</span>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="status_spritual_hamil_beribadah_ya" id="status_spritual_hamil_beribadah_ya" class="custom-checkbox-success">
                                <label for="status_spritual_hamil_beribadah_ya">Ya</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="status_spritual_hamil_beribadah_Tidak" id="status_spritual_hamil_beribadah_Tidak" class="custom-checkbox-success">
                                <label for="status_spritual_hamil_beribadah_Tidak">Tidak</label>
                            </div>
                        </div>
                        <!-- divider hamil saat beribadah -->

                        <div class="d-flex align-items-start gap-2">
                            <div class="col-4 my-1">Apakah perlu pelayanan spritual ?</div>
                            <span class="my-1">:</span>
                            <div class="col d-flex align-items-center gap flex-wrap">
                                <div class="d-flex align-items-center gap-2 col-3 me-2 ">
                                    <input type="checkbox" name="status_spritual_perlu_pelayanan_ya" id="status_spritual_perlu_pelayanan_ya" class="custom-checkbox-success">
                                    <label for="status_spritual_perlu_pelayanan_ya">Ya</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="status_spritual_perlu_pelayanan_Tidak" id="status_spritual_perlu_pelayanan_Tidak" class="custom-checkbox-success">
                                    <label for="status_spritual_perlu_pelayanan_Tidak">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-6">
                                    <input type="checkbox" name="status_spritual_perlu_pelayanan_didoakan" id="status_spritual_perlu_pelayanan_didoakan" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="status_spritual_perlu_pelayanan_didoakan" class="flex-shrink-0">Di doakan Oleh</label>
                                        <input type="text" class="form-control border-dark" name="status_spritual_perlu_pelayanan_doa_input">
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="status_spritual_bimbingan_pelayanan_didoakan" id="status_spritual_bimbingan_pelayanan_didoakan" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="status_spritual_bimbingan_pelayanan_didoakan" class="flex-shrink-0">bimbingan rohani oleh </label>
                                        <input type="text" class="form-control border-dark" name="status_spritual_bimbingan_pelayanan_doa_input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- divider hamil saat beribadah -->

                        <!-- status spritual nilai nilai khusus -->
                        <div class="d-flex flex-column">
                            <div>Keyakinan dan nilai-nilai khusus pasien dan keluarga yang berhubungan dengan pelayanan kesehatan :</div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="status_spritual_nilai_Tidak" id="status_spritual_nilai_Tidak" class="custom-checkbox-success">
                                    <label for="status_spritual_nilai_Tidak">Tidak Ada</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="status_spritual_nilai_Ya" id="status_spritual_nilai_Ya" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="status_spritual_nilai_Ya" class="flex-shrink-0">Ya :</label>
                                        <input type="text" name="status_spritual_nilai_Ya_input" id="" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- divider -->
                    </div>
                    <!-- divider -->

                    <div class="mt-4">
                        <div class="d-flex">
                            <h6 class="my-auto"> Perencanaan Pemulangan Kritis</h6>
                            <span>( untuk pasien yang tidak mampu merawat diri sendiri dan bayinya ketika pulang)</span>
                        </div>
                        <div>Kebutuhan pelayanan kebidanan :</div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="keb_pelayanan_kebidanan_pemb_obat" id="keb_pelayanan_kebidanan_pemb_obat" class="custom-checkbox-success">
                                <label for="keb_pelayanan_kebidanan_pemb_obat">Pemberian Obat</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-4">
                                <input type="checkbox" name="keb_pelayanan_kebidanan_post_partum" id="keb_pelayanan_kebidanan_post_partum" class="custom-checkbox-success">
                                <label for="keb_pelayanan_kebidanan_post_partum">Perawatan post partum berkelanjutan</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="keb_pelayanan_kebidanan_perawatan_luka" id="keb_pelayanan_kebidanan_perawatan_luka" class="custom-checkbox-success">
                                <label for="keb_pelayanan_kebidanan_perawatan_luka">Perawatan Luka</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="keb_pelayanan_kebidanan_perawatan_Bayi" id="keb_pelayanan_kebidanan_perawatan_Bayi" class="custom-checkbox-success">
                                <label for="keb_pelayanan_kebidanan_perawatan_Bayi">Perawatan Bayi</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-12">
                                <input type="checkbox" name="keb_pelayanan_kebidanan_perawatan_lain" id="keb_pelayanan_kebidanan_perawatan_lain" class="custom-checkbox-success">
                                <input type="text" name="keb_pelayanan_kebidanan_perawatan_lain_input" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2 col-12">
                                <label for="" class="flex-shrink-0"> Yang membantu perawatan setelah di rumah : </label>
                                <input type="text" name="keb_pelayanan_kebidanan_perawatan_memb_perawatan" id="" class="form-control border-dark">
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6 class="">Pemeriksaan Penunjang Sebelumnya</h6>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="pemeriksaan_penunjang_sebelumnya_tidak_ada" id="pemeriksaan_penunjang_sebelumnya_tidak_ada" class="custom-checkbox-success">
                                <label for="pemeriksaan_penunjang_sebelumnya_tidak_ada">Tidak ada</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="pemeriksaan_penunjang_sebelumnya_ada" id="pemeriksaan_penunjang_sebelumnya_ada" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="pemeriksaan_penunjang_sebelumnya_ada"> Ada</label>
                                    <input type="text" name="pemeriksaan_penunjang_sebelumnya_input" id="pemeriksaan_penunjang_sebelumnya_input" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6 class="fw-bold">Pemeriksaan Fisik Ante Dan Intra Partum </h6>
                        <div class="d-flex flex-column">
                            <!-- keadaan Umum -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-2">Keadaan Umum</div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_umum_baik" id="fisik_ante_umum_baik" class="custom-checkbox-success">
                                    <label for="fisik_ante_umum_baik">Baik</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_umum_Sedang" id="fisik_ante_umum_Sedang" class="custom-checkbox-success">
                                    <label for="fisik_ante_umum_Sedang">Sedang</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_umum_Berat" id="fisik_ante_umum_Berat" class="custom-checkbox-success">
                                    <label for="fisik_ante_umum_Berat">Berat</label>
                                </div>
                            </div>
                            <!-- divider keadaan Umum -->

                            <!-- Kesadaran -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-2">Kesadaran</div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_kesadaran_Compos" id="fisik_ante_kesadaran_Compos" class="custom-checkbox-success">
                                    <label for="fisik_ante_kesadaran_Compos">Compos mentis</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_kesadaran_Somnolen" id="fisik_ante_kesadaran_Somnolen" class="custom-checkbox-success">
                                    <label for="fisik_ante_kesadaran_Somnolen">Somnolen</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_kesadaran_Sopor" id="fisik_ante_kesadaran_Sopor" class="custom-checkbox-success">
                                    <label for="fisik_ante_kesadaran_Sopor">Sopor</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="fisik_ante_kesadaran_Coma" id="fisik_ante_kesadaran_Coma" class="custom-checkbox-success">
                                    <label for="fisik_ante_kesadaran_Coma">Coma</label>
                                </div>
                            </div>
                            <!-- divider keadaan kesadaran -->


                            <div class="d-flex align-items-center gap-2 mt-3 flex-wrap">
                                <!-- tekanan darah -->
                                <div class="d-flex align-items-center gap-2 col-5">
                                    <input type="checkbox" name="fisik_ante_tekanan_darah" id="fisik_ante_tekanan_darah" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="fisik_ante_tekanan_darah" class="col-4">Tekanan Darah</label>
                                        <input type="text" name="fisik_ante_tekanan_darah_input" id="" class="form-control border-dark">
                                        <span class="col-3">mmHg</span>
                                    </div>
                                </div>
                                <!-- divider tekanan darah -->

                                <!-- Nadi -->
                                <div class="d-flex align-items-center gap-2 col-5">
                                    <input type="checkbox" name="fisik_ante_Nadi" id="fisik_ante_Nadi" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="fisik_ante_Nadi" class="col-2">Nadi</label>
                                        <input type="text" name="fisik_ante_Nadi_input" id="" class="form-control border-dark">
                                        <span class="col-3">x/mnt</span>
                                    </div>
                                </div>
                                <!-- divider Nadi -->

                                <!-- pernapasan -->
                                <div class="d-flex align-items-center gap-2 col-5">
                                    <input type="checkbox" name="fisik_ante_pernapasan" id="fisik_ante_pernapasan" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="fisik_ante_pernapasan" class="col-4">pernapasan</label>
                                        <input type="text" name="fisik_ante_pernapasan_input" id="" class="form-control border-dark">
                                        <span class="col-3">x/mnt</span>
                                    </div>
                                </div>
                                <!-- divider pernapasan -->

                                <!-- Suhu -->
                                <div class="d-flex align-items-center gap-2 col-5">
                                    <input type="checkbox" name="fisik_ante_Suhu" id="fisik_ante_Suhu" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="fisik_ante_Suhu" class="col-4">Suhu</label>
                                        <input type="text" name="fisik_ante_Suhu_input" id="" class="form-control border-dark">
                                        <span class="col-3">&deg;C</span>
                                    </div>
                                </div>
                                <!-- divider Suhu -->
                            </div>
                            <!-- divider ante tekanan infra -->

                            <!-- divider top keadaan umum -->
                        </div>
                </td>
            </tr>
            <tr class="border-top-0 border-bottom-0">
                <td>
                    <div class="row">
                        <!-- mata cols 1 -->
                        <div class="col-7 d-flex align-items-center gap-2">
                            <div class="col-2">Mata :</div>
                            <div class="col-3">Konjungtiva :</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="mata_konjungtiva_anemis" id="mata_konjungtiva_anemis" class="custom-checkbox-success">
                                <label for="mata_konjungtiva_anemis">Anemis</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="mata_konjungtiva_tdk_anemis" id="mata_konjungtiva_tdk_anemis" class="custom-checkbox-success">
                                <label for="mata_konjungtiva_tdk_anemis">Tidak Anemis</label>
                            </div>
                        </div>
                        <!-- divider mata -->

                        <!-- mata cols 2 -->
                        <div class="col d-flex align-items-center gap-2">
                            <div class="col-3">Sklera :</div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="mata_sklera_Ikterus" id="mata_sklera_Ikterus" class="custom-checkbox-success">
                                <label for="mata_sklera_Ikterus">Ikterus</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="mata_sklera_tdk_Ikterus" id="mata_sklera_tdk_Ikterus" class="custom-checkbox-success">
                                <label for="mata_sklera_tdk_Ikterus">Tidak Ikterus</label>
                            </div>
                        </div>
                        <!-- divider mata cols 2 -->

                        <!-- payudara cols 1 -->
                        <div class="col-7 d-flex align-items-center gap-2">
                            <div class="col-2">payudara :</div>
                            <div class="col-3">puting :</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="payudara_puting_menonjol" id="payudara_puting_menonjol" class="custom-checkbox-success">
                                <label for="payudara_puting_menonjol">menonjol</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="payudara_puting_datar" id="payudara_puting_datar" class="custom-checkbox-success">
                                <label for="payudara_puting_datar">Datar</label>
                            </div>
                        </div>
                        <!-- divider payudara -->

                        <!-- payudara cols 2 -->
                        <div class="col d-flex align-items-center gap-2">
                            <div class="col-3">colostrum :</div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="payudara_colostrum_Ada" id="payudara_colostrum_Ada" class="custom-checkbox-success">
                                <label for="payudara_colostrum_Ada">Ada</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="payudara_colostrum_tdk_ada" id="payudara_colostrum_tdk_ada" class="custom-checkbox-success">
                                <label for="payudara_colostrum_tdk_ada">Tidak ada</label>
                            </div>
                        </div>
                        <!-- divider payudara cols 2 -->


                        <!-- perut cols 1 -->
                        <div class="col-7 d-flex align-items-start gap-2">
                            <div class="col-2">perut :</div>
                            <div class="col-3">luka bekas operasi :</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="perut_luka_ada" id="perut_luka_ada" class="custom-checkbox-success">
                                <label for="perut_luka_ada">Ada</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="perut_luka_tidak" id="perut_luka_tidak" class="custom-checkbox-success">
                                <label for="perut_luka_tidak">Tidak</label>
                            </div>
                        </div>
                        <!-- divider perut -->

                        <!-- perut cols 2 -->
                        <div class="col d-flex align-items-start gap-2">
                            <div class="col-3">massa :</div>
                            <div class="d-flex align-items-center gap-2 col-3">
                                <input type="checkbox" name="perut_massa_Ada" id="perut_massa_Ada" class="custom-checkbox-success">
                                <label for="perut_massa_Ada">Ada</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col">
                                <input type="checkbox" name="perut_massa_tdk_ada" id="perut_massa_tdk_ada" class="custom-checkbox-success">
                                <label for="perut_massa_tdk_ada">Tidak</label>
                            </div>
                        </div>
                        <!-- divider perut cols 2 -->


                        <div class="d-flex flex-column my-4">
                            <div class="d-flex align-items-center gap-2">
                                <label for="" class="col-2">Lepoid I</label>
                                <input type="text" name="lepoid_i" id="" class="form-control border-dark">
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <label for="" class="col-2">Lepoid II</label>
                                <input type="text" name="lepoid_ii" id="" class="form-control border-dark">
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <label for="" class="col-2">Lepoid III</label>
                                <input type="text" name="lepoid_iii" id="" class="form-control border-dark">
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <label for="" class="col-2">Lepoid IV</label>
                                <input type="text" name="lepoid_iv" id="" class="form-control border-dark">
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-4 d-flex align-items-center gap-2">
                                <label for="">Djj</label>
                                <input type="text" name="djj_input" id="" class="form-control border-dark">
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="djj_reguler" id="djj_reguler" class="custom-checkbox-success">
                                <label for="djj_reguler">Reguler</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="djj_ireguler" id="djj_ireguler" class="custom-checkbox-success">
                                <label for="djj_ireguler">Ireguler</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <label for="">His</label>
                                <input type="text" name="his_input" id="" class="form-control border-dark">
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-2">Periksa Dalam</label>
                            <input type="text" name="periksa_dalam_input" id="" class="form-control border-dark">
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <label for="" class="col-2">Ektremitas atas</label>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="ektremitas_odema" id="ektremitas_odema" class="custom-checkbox-success">
                                <label for="ektremitas_odema">odema</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="ektremitas_cvanosis" id="ektremitas_cvanosis" class="custom-checkbox-success">
                                <label for="ektremitas_cvanosis">cvanosis</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="ektremitas_tdk_ada_keluhan" id="ektremitas_tdk_ada_keluhan" class="custom-checkbox-success">
                                <label for="ektremitas_tdk_ada_keluhan">Tidak ada keluhan</label>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>2. MASALAH KEBIDANAN ANTE PARTUM * : </h6>

                    <div class="mt-3 row">
                        <?php
                        $sections = [
                            'kebidanan' => 'Ku ibu baik, janin baik',
                            'preklamsi' => 'Preklamsi',
                            'hamil' => 'Hamil diluar kandungan',
                            'eklamsi' => 'Eklamsi',
                            'hiperemisis' => 'Hiperemisis gravidarum',
                            'ketuban_pecah' => 'Ketuban pecah dini',
                            'abortus' => 'Abortus incomplit',
                            'mola_hitadosa' => 'Mola hidatidosa',
                            'placenta_previa' => 'Placenta previa',
                            'prematur' => 'Prematur kontraksi',

                        ];

                        $labels = ['G', 'P', 'A'];

                        foreach ($sections as $key => $desc): ?>
                            <div class="col-12 d-flex gap-4">
                                <?php foreach ($labels as $label): ?>
                                    <div class="d-flex align-items-center gap-2 col-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="checkbox" name="<?= $key ?>_gravida_<?= strtolower($label) ?>" id="<?= $key ?>_gravida_<?= strtolower($label) ?>" class="custom-checkbox-success">
                                        </div>
                                        <div class="d-flex align-items-center gap-2 w-100">
                                            <label for="<?= $key ?>_gravida_<?= strtolower($label) ?>"><?= $label ?></label>
                                            <input type="text" name="<?= $key ?>_gravida_input_<?= $label ?>" class="form-control border-dark">
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <!-- Deskripsi tambahan -->
                                <div class="d-flex align-items-center gap-2 col">
                                    <?= $key === 'kebidanan'
                                        ? 'Gravida <input type="text" name="gravida_input_minggu" class="form-control border-dark"> minggu. <span class="col-4">' . $desc . '</span>'
                                        : $desc ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- bottom -->
                        <div class="my-2"><textarea name="masalah_lain_kebidanan_ante" id="" rows="4" class="form-control border-dark"></textarea></div>
                        <!-- divider -->
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex flex-column align-items-end gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0"><?= $city_sign; ?></div>
                            <input type="datetime-local" name="tgl_jam_city" id="" class="form-control border-dark" value="<?= date('Y-m-d H:i') ?>">
                        </div>
                    </div>
                    <div class="text-end">Nama dan tanda tangan bidan</div>
                    <div class="text-end my-2">
                        <img class=" img-responsive center-block my-2" style="width: 10%;" id="qr_bidan" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <select type="select" name="bidan" id="bidan" class="form-select bidan" style="width: 25%;"></select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr class="border-bottom-0">
                <td>
                    <h5>Proses Persalinan :</h5>

                    <div class="mt-4">
                        <div class="d-flex flex-column gap-1">
                            <h6 class="fw-bold">Kala I :</h6>
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Tanggal / jam</div>
                                <span>:</span>
                                <input type="datetime-local" name="tanggal_jam_kala" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i') ?>">
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Masalah</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <input type="checkbox" name="masalah_persalinan_tidak" id="masalah_persalinan_tidak" class="custom-checkbox-success">
                                    <label for="masalah_persalinan_tidak">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="masalah_persalinan_Ada" id="masalah_persalinan_Ada" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="masalah_persalinan_Ada">Ada</label>
                                        <input type="text" name="masalah_persalinan_input" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Penatalaksanaan</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type=" text" name="masalah_persalinan_penatalaksanaan" id="masalah_persalinan_penatalaksanaan" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- divider -->

                    <div class="mt-4">
                        <h6>Kala II</h6>
                        <div class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Tanggal / jam</div>
                                <span>:</span>
                                <input type="datetime-local" name="tanggal_jam_kala_ii" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i') ?>">
                            </div>

                            <!-- start episiotomi -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Episiotomi</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="masalah_persalinan_kala_ii_episiotomi_tidak" id="masalah_persalinan_kala_ii_episiotomi_tidak" class="custom-checkbox-success">
                                    <label for="masalah_persalinan_kala_ii_episiotomi_tidak">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="masalah_persalinan_kala_ii_episiotomi_Ya" id="masalah_persalinan_kala_ii_episiotomi_Ya" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="masalah_persalinan_kala_ii_Ya" class="col-3">Ya, indikasi</label>
                                        <input type="text" name="masalah_persalinan_kala_ii_episiotomi_input" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider episiotomi -->

                            <!-- start Gawat Janin -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Gawat Janin</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="masalah_persalinan_kala_ii_janin_tidak" id="masalah_persalinan_kala_ii_janin_tidak" class="custom-checkbox-success">
                                    <label for="masalah_persalinan_kala_ii_janin_tidak">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="masalah_persalinan_kala_ii_janin_Ya" id="masalah_persalinan_kala_ii_janin_Ya" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="masalah_persalinan_kala_ii_Ya" class="col-4">Ya, tindakan yang dilakukan</label>
                                        <input type="text" name="masalah_persalinan_kala_ii_janin_input" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider gawat janin -->

                            <!-- start Distosia Bahu -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Distosia Bahu</div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="masalah_persalinan_kala_ii_distosia_tidak" id="masalah_persalinan_kala_ii_distosia_tidak" class="custom-checkbox-success">
                                    <label for="masalah_persalinan_kala_ii_distosia_tidak">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="masalah_persalinan_kala_ii_distosia_Ya" id="masalah_persalinan_kala_ii_distosia_Ya" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="masalah_persalinan_kala_ii_Ya" class="col-4">Ya, tindakan yang dilakukan</label>
                                        <input type="text" name="masalah_persalinan_kala_ii_distosia_input" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider janin -->

                            <!-- jenis kelamin bayi -->
                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <label for="" class="col-4">BB Bayi</label>
                                    <input type="text" name="persalinan_bb" id="" class="form-control border-dark">
                                    <span>gram</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-3">
                                    <label for="" class="col-4">PB Bayi</label>
                                    <input type="text" name="persalinan_pb" id="" class="form-control border-dark">
                                    <span>cm</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-4">
                                    <label for="" class="col-4">Jenis Kelamin</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="kelamin_bayi_laki" id="kelamin_bayi_laki" class="custom-checkbox-success">
                                        <label for="kelamin_bayi_laki">Laki-laki</label>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="checkbox" name="kelamin_bayi_perempuan" id="kelamin_bayi_perempuan" class="custom-checkbox-success">
                                        <label for="kelamin_bayi_perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <!-- divider -->

                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Apgar </div>
                                <span>:</span>
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="" class="col-2">1 menit</label>
                                    <input type="text" name="apgar_1menit" class="form-control border-dark">
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2">
                                    <label for="" class="col-2">5 menit</label>
                                    <input type="text" name="apgar_5menit" class="form-control border-dark">
                                </div>
                            </div>
                            <!-- divider -->
                        </div>
                    </div>


                    <div class="mt-4">
                        <h6>Kala III</h6>
                        <div class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Tanggal / jam</div>
                                <span>:</span>
                                <input type="datetime-local" name="tanggal_jam_kala_kala_iii" id="" class="form-control border-dark w-25" value="<?= date('Y-m-d H:i') ?>">
                            </div>


                            <?php
                            $fields = [
                                'Inisiasi menyusui dini',
                                'Pemberian oksitosin 10 IU',
                                'Peregangan tali pusat terkendali',
                                'Massage fundus uteri',
                                'Placenta lahit lengkap'
                            ];

                            foreach ($fields as $index => $label) {
                                $idBase = 'field_' . $index;
                            ?>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="col-3"><?= $label ?></div>
                                    <span>:</span>

                                    <div class="d-flex align-items-center gap-2 col-1">
                                        <input type="checkbox" name="<?= $idBase ?>_ya" id="<?= $idBase ?>_ya" class="custom-checkbox-success">
                                        <label for="<?= $idBase ?>_ya">Ya</label>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 col">
                                        <input type="checkbox" name="<?= $idBase ?>_tidak" id="<?= $idBase ?>_tidak" class="custom-checkbox-success">
                                        <div class="d-flex align-items-center gap-2 w-100">
                                            <label for="<?= $idBase ?>_tidak">Tidak</label>
                                            <input type="text" name="<?= $idBase ?>_input" class="form-control border-dark">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                            <!-- laserasi until atonia -->
                            <div class="d-flex align-items-center gap-2">
                                <!-- laserasi -->
                                <div class="col-3">Laserasi / episiotomy </div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="tidak_laserasi" id="tidak_laserasi" class="custom-checkbox-success">
                                    <label for="tidak_laserasi">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col-4">
                                    <input type="checkbox" name="ya_laserasi" id="ya_laserasi" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="ya_laserasi" class="col-4">ya, dimana</label>
                                        <input type="text" name="ya_laserasi_input" id="" class="form-control border-dark">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <label for="laserasi_derajat" class="">Derajat</label>
                                    <input type="text" name="laserasi_derajat_input" id="" class="form-control border-dark" placeholder="1/2/3/4">
                                </div>
                                <!-- divider -->
                            </div>


                            <div class="d-flex align-items-center gap-2">
                                <!-- penjahitan -->
                                <div class="col-3">penjahitan </div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="tidak_penjahitan" id="tidak_penjahitan" class="custom-checkbox-success">
                                    <label for="tidak_penjahitan">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="ya_penjahitan" id="ya_penjahitan" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="ya_penjahitan" class="col-2">ya</label>
                                        <input type="text" name="ya_penjahitan_input" id="" class="form-control border-dark w-50" placeholder="dengan / tanpa">
                                        <span>anestesi</span>
                                    </div>
                                </div>
                                <!-- divider -->
                            </div>

                            <!-- atonia uteri -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Atonia Uteri </div>
                                <span>:</span>
                                <div class="d-flex align-items-center gap-2 col-1">
                                    <input type="checkbox" name="tidak_atonia" id="tidak_atonia" class="custom-checkbox-success">
                                    <label for="tidak_atonia">Tidak</label>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <input type="checkbox" name="ya_atonia" id="ya_atonia" class="custom-checkbox-success">
                                    <div class="d-flex align-items-center gap-2 w-100">
                                        <label for="ya_atonia" class="col-2">ya, tindakan</label>
                                        <input type="text" name="ya_atonia_input" id="" class="form-control border-dark ">
                                    </div>
                                </div>
                                <!-- divider -->
                            </div>

                            <!-- Jumlah -->
                            <div class="d-flex align-items-center gap-2">
                                <div class="col-3">Jumlah Pendarahan</div>
                                <span>:</span>
                                <div class="col ">
                                    <input type="text" name="ya_jumlah_atonia_pendarahan_input" id="" class="form-control border-dark ">
                                </div>
                                <span>cc</span>
                                <!-- divider -->
                            </div>
                        </div>
                </td>
            </tr>
            <tr class="border-top-0 ">
                <td>
                    <h6>Kala IV</h6>
                    <!-- observasi post partum -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3">Observasi Post Partum</div>
                        <span>:</span>
                        <div class="col-2">Tanggal / Jam</div>
                        <span>:</span>
                        <input type="datetime-local" name="tgl_obserbasi_partum_kala_iv" value="<?= date('Y-m-d H:i'); ?>" class="form-control border-dark w-25">
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap mt-2">
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Tekanan Darah</label>
                            <input type="text" name="tekanan_darah_kala_iv" id="" class="form-control border-dark">
                            <span>mmHg</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Nadi</label>
                            <input type="text" name="Nadi_kala_iv" id="" class="form-control border-dark">
                            <span>x/mnt</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col">
                            <label for="" class="col-4">Pernapasan</label>
                            <input type="text" name="Pernapasan_kala_iv" id="" class="form-control border-dark">
                            <span>x/mnt</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Suhu</label>
                            <input type="text" name="Suhu_kala_iv" id="" class="form-control border-dark">
                            <span>&deg;C</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">TFU</label>
                            <input type="text" name="TFU_kala_iv" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 col">
                            <label for="" class="col-4">CU</label>
                            <input type="text" name="CU_kala_iv" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Kantung kemih</label>
                            <input type="text" name="kantung_kemih_kala_iv" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Pendarahan</label>
                            <input type="text" name="pendarahan_kala_iv" id="" class="form-control border-dark">
                            <span>cc</span>
                        </div>
                    </div>
                    <!-- divider -->


                    <!-- observasi 2 jam post partum -->
                    <div class="d-flex align-items-center gap-2 mt-4">
                        <div class="col-3">Observasi 2 jam Post Partum</div>
                        <span>:</span>
                        <div class="col-2">Tanggal / Jam</div>
                        <span>:</span>
                        <input type="datetime-local" name="tgl_obserbasi_2jam_partum_kala_iv" value="" class="form-control border-dark w-25">
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-wrap mt-2">
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Tekanan Darah</label>
                            <input type="text" name="tekanan_darah__post_2jam_kala_iv" id="" class="form-control border-dark">
                            <span>mmHg</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Nadi</label>
                            <input type="text" name="Nadi__post_2jam_kala_iv" id="" class="form-control border-dark">
                            <span>x/mnt</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col">
                            <label for="" class="col-4">Pernapasan</label>
                            <input type="text" name="Pernapasan__post_2jam_kala_iv" id="" class="form-control border-dark">
                            <span>x/mnt</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Suhu</label>
                            <input type="text" name="Suhu__post_2jam_kala_iv" id="" class="form-control border-dark">
                            <span>&deg;C</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">TFU</label>
                            <input type="text" name="TFU__post_2jam_kala_iv" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 col">
                            <label for="" class="col-4">CU</label>
                            <input type="text" name="CU__post_2jam_kala_iv" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Kantung kemih</label>
                            <input type="text" name="kantung_kemih__post_2jam_kala_iv" id="" class="form-control border-dark">
                        </div>
                        <div class="d-flex align-items-center gap-2 col-4 me-3">
                            <label for="" class="col-4">Pendarahan</label>
                            <input type="text" name="pendarahan__post_2jam_kala_iv" id="" class="form-control border-dark">
                            <span>cc</span>
                        </div>
                    </div>
                    <!-- divider -->
                </td>
            </tr>
            <tr>
                <td>
                    <div class="text-end">Nama dan tanda tangan bidan</div>
                    <div class="text-end my-2">
                        <img class=" img-responsive center-block my-2" style="width: 10%;" id="qr_bidan_2" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <select type="select" name="bidan_2" id="bidan_2" class="form-select bidan" style="width: 25%;"></select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td>
                    <h6>Pemeriksaan Fisik Post Partum </h6>

                    <div class="mt-3 d-flex flex-column gap-1">
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">Tanggal / Jam</div>
                            <input type="datetime-local" name="tgl_jam_fisik_partum" id="" class="form-control border-dark w-25">
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">Keadaan Umum</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_keadaan_baik" id="fisik_keadaan_baik" class="custom-checkbox-success">
                                <label for="fisik_keadaan_baik">Baik</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_keadaan_Sedang" id="fisik_keadaan_Sedang" class="custom-checkbox-success">
                                <label for="fisik_keadaan_Sedang">Sedang</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_keadaan_Berat" id="fisik_keadaan_Berat" class="custom-checkbox-success">
                                <label for="fisik_keadaan_Berat">Berat</label>
                            </div>
                        </div>
                        <!-- divider keadan umum -->

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-3">Kesadaran</div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_kesadaran_compos" id="fisik_kesadaran_compos" class="custom-checkbox-success">
                                <label for="fisik_kesadaran_compos">Compos Mentis</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_kesadaran_Somnolen" id="fisik_kesadaran_Somnolen" class="custom-checkbox-success">
                                <label for="fisik_kesadaran_Somnolen">Somnolen</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_kesadaran_Sopor" id="fisik_kesadaran_Sopor" class="custom-checkbox-success">
                                <label for="fisik_kesadaran_Sopor">Sopor</label>
                            </div>
                            <div class="d-flex align-items-center gap-2 col-2">
                                <input type="checkbox" name="fisik_kesadaran_Koma" id="fisik_kesadaran_Koma" class="custom-checkbox-success">
                                <label for="fisik_kesadaran_Koma">Koma</label>
                            </div>
                        </div>
                        <!-- divider keadan umum -->



                        <div class="d-flex align-items-center gap-2 mt-3 flex-wrap">
                            <div class="d-flex align-items-center gap-2 col-5">
                                <input type="checkbox" name="fisik_post_partum_tekanan_darah" id="fisik_post_partum_tekanan_darah" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="fisik_post_partum_tekanan_darah" class="col-4">Tekanan Darah</label>
                                    <input type="text" name="fisik_post_partum_tekanan_darah_input" id="" class="form-control border-dark">
                                    <span class="col-3">mmHg</span>
                                </div>
                            </div>
                            <!-- divider tekanan darah -->

                            <!-- Nadi -->
                            <div class="d-flex align-items-center gap-2 col-5">
                                <input type="checkbox" name="fisik_post_partum_Nadi" id="fisik_post_partum_Nadi" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="fisik_post_partum_Nadi" class="col-2">Nadi</label>
                                    <input type="text" name="fisik_post_partum_Nadi_input" id="" class="form-control border-dark">
                                    <span class="col-3">x/mnt</span>
                                </div>
                            </div>
                            <!-- divider Nadi -->

                            <!-- pernapasan -->
                            <div class="d-flex align-items-center gap-2 col-5">
                                <input type="checkbox" name="fisik_post_partum_pernapasan" id="fisik_post_partum_pernapasan" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="fisik_post_partum_pernapasan" class="col-4">pernapasan</label>
                                    <input type="text" name="fisik_post_partum_pernapasan_input" id="" class="form-control border-dark">
                                    <span class="col-3">x/mnt</span>
                                </div>
                            </div>
                            <!-- divider pernapasan -->

                            <!-- Suhu -->
                            <div class="d-flex align-items-center gap-2 col-5">
                                <input type="checkbox" name="fisik_post_partum_Suhu" id="fisik_post_partum_Suhu" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="fisik_post_partum_Suhu" class="col-2">Suhu</label>
                                    <input type="text" name="fisik_post_partum_Suhu_input" id="" class="form-control border-dark">
                                    <span class="col-3">&deg;C</span>
                                </div>
                            </div>
                        </div>
                        <!-- divider Suhu -->

                        <div class="d-flex align-items-start gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-8">Mata </div>
                                <span>:</span>
                            </div>

                            <div class="col-2 d-flex flex-column gap-2">
                                <div class="col d-flex">
                                    <div class="col-8">Konjungtiva</div>
                                    <span>:</span>
                                </div>
                                <div class="col d-flex">
                                    <div class="col-8">Sklera</div>
                                    <span>:</span>
                                </div>
                            </div>

                            <div class="col d-flex flex-column gap-2">
                                <div class="col d-flex gap-2">
                                    <div class="col-3 d-flex gap-2">
                                        <input type="checkbox" name="anemis_konjungtiva" id="anemis_konjungtiva" class="custom-checkbox-success">
                                        <label for="anemis_konjungtiva">Anemis</label>
                                    </div>
                                    <div class="col-3 d-flex gap-2">
                                        <input type="checkbox" name="tdk_anemis_konjungtiva" id="tdk_anemis_konjungtiva" class="custom-checkbox-success">
                                        <label for="tdk_anemis_konjungtiva">tidak anemis</label>
                                    </div>
                                </div>
                                <!-- divider -->
                                <div class="col d-flex">
                                    <div class="col d-flex gap-2">
                                        <div class="col-3 d-flex gap-2">
                                            <input type="checkbox" name="Ikterus_sklera" id="Ikterus_sklera" class="custom-checkbox-success">
                                            <label for="Ikterus_sklera">Ikterus</label>
                                        </div>
                                        <div class="col-3 d-flex gap-2">
                                            <input type="checkbox" name="tdk_Ikterus_sklera" id="tdk_Ikterus_sklera" class="custom-checkbox-success">
                                            <label for="tdk_Ikterus_sklera">Tidak Ikterus</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- divider -->
                            </div>
                        </div>



                        <div class="d-flex align-items-start gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-8">ASI </div>
                                <span>:</span>
                            </div>

                            <div class="col-2 d-flex gap-2">
                                <input type="checkbox" name="asi_ada" id="asi_ada" class="custom-checkbox-success">
                                <label for="asi_ada">Ada</label>
                            </div>

                            <div class="col-2 d-flex gap-2">
                                <input type="checkbox" name="asi_tidak_ada" id="asi_tidak_ada" class="custom-checkbox-success">
                                <label for="asi_tidak_ada">Tidak</label>
                            </div>
                        </div>
                        <!-- divider -->



                        <div class="d-flex align-items-start gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-8">Perut </div>
                                <span>:</span>
                            </div>

                            <div class="col-2 d-flex flex-column gap-2">
                                <div class="col d-flex mt-2">
                                    <div class="col-11">Tinggi fundus uteri</div>
                                    <span>:</span>
                                </div>
                                <div class="col d-flex">
                                    <div class="col-11">Luka bekas operasi</div>
                                    <span>:</span>
                                </div>
                            </div>

                            <div class="col d-flex flex-column gap-2">
                                <div class="col d-flex gap-2">
                                    <div class="col-3 d-flex gap-2">
                                        <input type="text" name="input_tinggi_uteri" id="" class="form-control border-dark">
                                    </div>
                                    <div class="col-3 d-flex gap-2">
                                        <label for="" class="my-auto">CU</label>
                                        <input type="text" name="input_tinggi_CU" id="" class="form-control border-dark">
                                    </div>
                                </div>
                                <!-- divider -->
                                <div class="col d-flex">
                                    <div class="col d-flex gap-2">
                                        <div class="col-3 d-flex gap-2">
                                            <input type="checkbox" name="ada_perut_bekas_operasi" id="ada_perut_bekas_operasi" class="custom-checkbox-success">
                                            <label for="ada_perut_bekas_operasi">Ada</label>
                                        </div>
                                        <div class="col-3 d-flex gap-2">
                                            <input type="checkbox" name="tdk_ada_perut_bekas_operasi" id="tdk_ada_perut_bekas_operasi" class="custom-checkbox-success">
                                            <label for="tdk_ada_perut_bekas_operasi">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- divider -->
                            </div>
                        </div>


                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-8">Lochea </div>
                                <span>:</span>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah_lochea" id="" class="form-control border-dark">
                                <span class="col-3">cc</span>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <label for="">warna</label>
                                <input type="text" name="warna_lochea" id="" class="form-control border-dark">
                                <span class="col-3"></span>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <label for="">Bau</label>
                                <input type="text" name="Bau_lochea" id="" class="form-control border-dark">
                                <span class="col-3"></span>
                            </div>
                        </div>
                        <!-- divider -->

                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-8">Perinium </div>
                                <span>:</span>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="perinium_utuh" id="perinium_utuh" class="custom-checkbox-success">
                                <label for="perinium_utuh">utuh</label>
                            </div>

                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="perinium_episiotami" id="perinium_episiotami" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="perinium_episiotami" class="flex-shrink-0">Episiotami, kebersihan</label>
                                    <input type="text" name="episiotami_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider -->



                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-12"> Keadaan kandung kemih</div>
                                <span>:</span>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="kantung_kemih_penuh" id="kantung_kemih_penuh" class="custom-checkbox-success">
                                <label for="kantung_kemih_penuh">penuh</label>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="kantung_kemih_Kosong" id="kantung_kemih_Kosong" class="custom-checkbox-success">
                                <label for="kantung_kemih_Kosong">Kosong</label>
                            </div>
                        </div>
                        <!-- divider -->


                        <div class="d-flex align-items-center gap-2">
                            <div class="col-2 d-flex">
                                <div class="col-12">Ekstremitas bawah</div>
                                <span>:</span>
                            </div>

                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="ektremitas_bawah_tdk_ada_keluhan" id="ektremitas_bawah_tdk_ada_keluhan" class="custom-checkbox-success">
                                <label for="ektremitas_bawah_tdk_ada_keluhan">Tidak ada Keluhan</label>
                            </div>

                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="ektremitas_bawah_ada_keluhan" id="ektremitas_bawah_ada_keluhan" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="ektremitas_bawah_ada_keluhan" class="col-3">Ada Keluhan</label>
                                    <input type="text" name="ektremitas_bawah_input" id="" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <!-- divider -->

                        <div class="form-group border-dark">
                            <div class="fw-bold"> Pemeriksaan penunjang sebelumnya : </div>
                            <textarea name="pemeriksa_input_sebelumnya" id="" class="form-control border-dark" rows="4"></textarea>
                        </div>


                        <div class="d-flex flex-column ">
                            <h6>2. MASALAH KEBIDANAN POST PARTUM ***</h6>
                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <div>
                                        <input type="checkbox" name="p_post_partum_normal" id="p_post_partum_normal" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="p_post_partum_normal">P</label>
                                        <input type="text" name="p_post_partum_normal_input" id="" class="form-control border-dark">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <div>
                                        <input type="checkbox" name="a_post_partum_normal" id="a_post_partum_normal" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="a_post_partum_normal">A</label>
                                        <input type="text" name="a_post_partum_normal_input" id="" class="form-control border-dark">
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <div class="col-7">Post partum normal dengan keadaan umum </div>
                                        <input type="text" name="post_partum_normal_kea_umum" id="" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider -->



                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <div>
                                        <input type="checkbox" name="p_post_partum_sc" id="p_post_partum_sc" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="p_post_partum_sc">P</label>
                                        <input type="text" name="p_post_partum_sc_input" id="" class="form-control border-dark">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <div>
                                        <input type="checkbox" name="a_post_partum_sc" id="a_post_partum_sc" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="a_post_partum_sc">A</label>
                                        <input type="text" name="a_post_partum_sc_input" id="" class="form-control border-dark">
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <div class="col-7">Post partum SC dengan keadaan umum </div>
                                        <input type="text" name="post_partum_sc_kea_umum" id="" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider -->



                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <div>
                                        <input type="checkbox" name="p_post_partum_retensio" id="p_post_partum_retensio" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="p_post_partum_retensio">P</label>
                                        <input type="text" name="p_post_partum_retensio_input" id="" class="form-control border-dark">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <div>
                                        <input type="checkbox" name="a_post_partum_retensio" id="a_post_partum_retensio" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="a_post_partum_retensio">A</label>
                                        <input type="text" name="a_post_partum_retensio_input" id="" class="form-control border-dark">
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <div class="col-7">Post partum dengan retensio plasenta</div>
                                        <input type="text" name="post_partum_retensio_kea_umum" id="" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider -->



                            <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 col-2">
                                    <div>
                                        <input type="checkbox" name="p_post_partum_atonia" id="p_post_partum_atonia" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="p_post_partum_atonia">P</label>
                                        <input type="text" name="p_post_partum_atonia_input" id="" class="form-control border-dark">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 col">
                                    <div>
                                        <input type="checkbox" name="a_post_partum_atonia" id="a_post_partum_atonia" class="custom-checkbox-success">
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="a_post_partum_atonia">A</label>
                                        <input type="text" name="a_post_partum_atonia_input" id="" class="form-control border-dark">
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <div class="col-7">Post partum dengan atonia uteri </div>
                                        <input type="text" name="post_partum_atonia_kea_umum" id="" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <!-- divider -->

                            <textarea name="lain_post_atonia_input" id="" class="form-control border-dark" rows="5"></textarea>
                        </div>
                </td>
            </tr>
            <tr class="border-top-0">
                <td>
                    <div class="d-flex flex-column align-items-end gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0"><?= $city_sign; ?></div>
                            <input type="datetime-local" name="tgl_jam_city_3" id="" class="form-control border-dark" value="<?= date('Y-m-d H:i') ?>">
                        </div>
                    </div>
                    <div class="text-end">Nama dan tanda tangan bidan</div>
                    <div class="text-end my-2">
                        <img class=" img-responsive center-block my-2" style="width: 10%;" id="qr_bidan_3" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <select type="select" name="bidan_3" id="bidan_3" class="form-select bidan" style="width: 25%;"></select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let dataDokter = []
    let dataBidan = []
    let dataPerawat = []
    const mode = "<?= $mode; ?>"


    function cbCommon(data) {

        populateFormFields(data);


        // dokter img
        const jumlahDokter = 5;

        for (let i = 1; i <= jumlahDokter; i++) {
            const dokterSelect = `#dokter_umum${i}`;
            const qrId = `qr_dokter_umum${i}`;

            $(dokterSelect).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(dokterSelect).prop('disabled', true);
            }

            setTimeout(() => {
                console.log(dataDokter);
                dataDokter?.forEach(v => {
                    if (v.text === $(dokterSelect).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrId);
                    }
                });
            }, 500);
        }

        // perawat img
        const jumlahPerawat = 5;

        for (let i = 1; i <= jumlahPerawat; i++) {
            const perawatSelect = `#perawat${i}`;
            const qrId = `qr_perawat${i}`;

            $(perawatSelect).prop('disabled', false).select2('open').select2('close');

            if (mode === "lihat") {
                $(perawatSelect).prop('disabled', true);
            }

            setTimeout(() => {
                // console.log(dataDokter);
                dataPerawat?.forEach(v => {
                    if (v.text === $(perawatSelect).select2('data')[0]?.text) {
                        QRSignatureAPI(v.id_original, qrId);
                    }
                });
            }, 500);
        }

        $('#bidan').prop('disabled', false)
        $('#bidan').select2('open')
        $('#bidan').select2('close')
        if (mode === "lihat")
            $('#bidan').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataBidan?.map(v => {
                if (v.text === $('#bidan').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_bidan')
                }
            })
        }, 1000)

        $('#bidan_2').prop('disabled', false)
        $('#bidan_2').select2('open')
        $('#bidan_2').select2('close')
        if (mode === "lihat")
            $('#bidan_2').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataBidan?.map(v => {
                if (v.text === $('#bidan_2').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_bidan_2')
                }
            })
        }, 1000)

        $('#bidan_3').prop('disabled', false)
        $('#bidan_3').select2('open')
        $('#bidan_3').select2('close')
        if (mode === "lihat")
            $('#bidan_3').prop('disabled', true)

        setTimeout(() => {
            console.log(dataDokter)
            dataBidan?.map(v => {
                if (v.text === $('#bidan_3').select2('data')[0].text) {
                    QRSignatureAPI(v.id_original, 'qr_bidan_3')
                }
            })
        }, 1000)

    }

    function listDokterUmumAPI() {
        $('.dokter_umum').select2({
            ajax: {
                url: '<?= site_url('backend/admission/getKaryawan/5'); ?>',
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
                    dataDokter = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Search for items...',
        })
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
            placeholder: 'Search for items...',
        })
    }

    function listBidanAPI() {
        $('.bidan').select2({
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
                    dataBidan = items
                    return {
                        results: items, // Data from PHP
                        pagination: {
                            more: more, // Check if more data is available
                        },
                    };
                },
                cache: true,

            },
            placeholder: 'Search for items...',
        })
    }


    // mulai
    $(document).ready(function() {
        // Tambahkan ini untuk semua textarea yang aktif
        $('textarea').on('input', function() {
            const clean = sanitizeInput(this.value);
            if (this.value !== clean) {
                this.value = clean;
            }
        });

        const globalData = <?= $global_data; ?>;
        const {
            id_dokter,
            id_perawat,
            nama_perawat
        } = globalData;

        listDokterUmumAPI()
        listPerawatAPI()
        listBidanAPI()

        $('#bidan').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_bidan')
        });

        $('#bidan_2').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_bidan_2')
        });

        $('#bidan_3').on('select2:select', function(e) {
            const {
                id_original
            } = e.params.data;
            QRSignatureAPI(id_original, 'qr_bidan_3')
        });

        // mulai aktif jumlah dokter
        const jumlahDokter = 5;

        for (let i = 1; i <= jumlahDokter; i++) {
            $(`#dokter_umum${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_dokter_umum${i}`);
            });
        }
        // batas jumlah

        // mulai aktif jumlah dokter
        const jumlahPerawat = 5;

        for (let i = 1; i <= jumlahPerawat; i++) {
            $(`#perawat${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_perawat${i}`);
            });
        }
        // batas jumlah

    })
</script>