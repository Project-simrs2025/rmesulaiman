<div class="row">
    <table class="table table-bordered border-dark">
        <tbody>
            <tr>
                <td class="col-6">
                    <div class="d-flex gap-2">
                        <img src="<?= $images; ?>" alt="Logo" style="width: 120px;">
                        <div>
                            <h4><?= $site_title; ?></h4>
                            <div><?= $lokasi; ?></div>
                            <div><?= $telepon; ?></div>
                            <div><?= $email; ?></div>
                        </div>
                    </div>
                </td>
                <td>

                    <?php
                    // Gabungkan tanggal lahir dan umur
                    $tgl_lahir = $tgl_lahir;
                    $umur = $umur;
                    $values = "$tgl_lahir / $umur";

                    $dataform1 = array(
                        array('nama' => "Nama Pasien", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nama Pasien", 'status' => "", 'name' => "nama_pasien"),
                        array('nama' => "Tanggal Lahir/Umur", 'name' => "tanggall_lahir", 'tipe' => "text", 'values' => $values, 'holder' => "Masukkan Tanggal Lahir", 'status' => "disabled"),
                        array('nama' => "Jenis Kelamin", 'name' => "jenkel", 'tipe' => "text", 'values' => "", 'holder' => "jenkel", 'status' => ""),
                        array('nama' => "Nomor Rm", 'tipe' => "text", 'values' => "", 'holder' => "Masukkan Nomor Rm", 'status' => "", 'name' => 'no_rm'),
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
                <td colspan="2">
                    <h5 class="text-center fw-bold">ASESMEN KEBUTUHAN EDUKASI TERINTEGRASI</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <div>Kemampuan Berbahasa</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa_baik" class="custom-checkbox-success" id="bahasa_baik">
                            <label for="bahasa_baik">Baik</label>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa_cukup" class="custom-checkbox-success" id="bahasa_cukup">
                            <label for="bahasa_cukup">Cukup</label>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="bahasa_Kurang" class="custom-checkbox-success" id="bahasa_Kurang">
                            <label for="bahasa_Kurang">Kurang</label>
                        </div>
                    </div>
                    <div class="mt-4">Kemampuan Membaca</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="membaca_ya" class="custom-checkbox-success" id="membaca_ya">
                            <label for="membaca_ya">Ya</label>
                        </div>
                        <div class="col-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="membaca_tidak" class="custom-checkbox-danger" id="membaca_tidak">
                            <label for="membaca_tidak">Tidak</label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="">Bahasa yang digunakan</label>
                        <input type="text" name="bahasa_digunakan" class="form-control border-dark">
                    </div>
                </td>
                <td>
                    <div style="margin-top: -80px;">
                        <div>Pendidikan :</div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="belum_sekolah" id="belum_sekolah" class="custom-checkbox-success">
                                <label for="belum_sekolah">Belum Sekolah</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="tk" id="tk" class="custom-checkbox-success">
                                <label for="tk">TK</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="smp" id="smp" class="custom-checkbox-success">
                                <label for="smp">SMP</label>
                            </div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="Tidak_sekolah" id="Tidak_sekolah" class="custom-checkbox-success">
                                <label for="Tidak_sekolah">Tidak Sekolah</label>
                            </div>
                            <div class="col-3 d-flex align-items-center gap-2">
                                <input type="checkbox" name="SD" id="SD" class="custom-checkbox-success">
                                <label for="SD">SD</label>
                            </div>
                            <div class="col-4 d-flex align-items-center gap-2">
                                <input type="checkbox" name="Sma" id="Sma" class="custom-checkbox-success">
                                <label for="Sma">SMA Sederajat</label>
                            </div>
                            <div class="col d-flex align-items-center gap-2">
                                <input type="checkbox" name="lain-lain_derajat" id="lain-lain_derajat" class="custom-checkbox-success">
                                <div class="d-flex align-items-center gap-2 w-100">
                                    <label for="lain-lain_derajat" class="flex-shrink-0">Lain-lain</label>
                                    <input type="text" name="lain_derajat" id="lain_derajat" class="form-control border-dark">
                                </div>
                            </div>
                        </div>
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
                    <div class="d-flex flex-column gap-2">
                        <div>Hambatan dalam pemberian edukasi :</div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="tidak_a_hambatan" id="tidak_a_hambatan" class="custom-checkbox-success"> -->
                            <label for="tidak_a_hambatan">1. Tidak Ada Hambatan</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="bahasa" id="bahasa" class="custom-checkbox-success"> -->
                            <label for="bahasa">2. Bahasa</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="keterbatasan" id="keterbatasan" class="custom-checkbox-success"> -->
                            <label for="keterbatasan">3. Keterbatasan pengetahuan kognitif</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="pendengaran" id="pendengaran" class="custom-checkbox-success"> -->
                            <label for="pendengaran">4. Pendengaran</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Penglihatan" id="Penglihatan" class="custom-checkbox-success"> -->
                            <label for="Penglihatan">5. Penglihatan</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="keterbatasan_fisik" id="keterbatasan_fisik" class="custom-checkbox-success"> -->
                            <label for="keterbatasan_fisik">6. Keterbatasan fisik</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="berkomunikasi" id="berkomunikasi" class="custom-checkbox-success"> -->
                            <label for="berkomunikasi">7. Berkomunikasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Pendidikan" id="Pendidikan" class="custom-checkbox-success"> -->
                            <label for="Pendidikan">8. Pendidikan</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Usia" id="Usia" class="custom-checkbox-success"> -->
                            <label for="Usia">9. Usia</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Motivasi" id="Motivasi" class="custom-checkbox-success"> -->
                            <label for="Motivasi">10. Motivasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Emosi" id="Emosi" class="custom-checkbox-success"> -->
                            <label for="Emosi">11. Emosi</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2" style="margin-top: -170px;">
                        <div>Intervensi terhadap hambatan: </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="penerjemah" id="penerjemah" class="custom-checkbox-success"> -->
                            <label for="penerjemah">1. Menggunakan penerjemah</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="materi" id="materi" class="custom-checkbox-success"> -->
                            <label for="materi">2. Membatasi Materi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="edukasi_keluarga" id="edukasi_keluarga" class="custom-checkbox-success"> -->
                            <label for="edukasi_keluarga">3. Memberikan edukasi kepada keluarga</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="alat_bantu" id="alat_bantu" class="custom-checkbox-success"> -->
                            <label for="alat_bantu">4. Menggunakan Alat Bantu</label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column gap-2 my-4">
                        <div>metode</div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="individual" id="individual" class="custom-checkbox-success"> -->
                            <label for="individual">1. Individual</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Kelompok" id="Kelompok" class="custom-checkbox-success"> -->
                            <label for="Kelompok">2. Kelompok</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Demontrasi" id="Demontrasi" class="custom-checkbox-success"> -->
                            <label for="Demontrasi">3. Demontrasi</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Diskusi" id="Diskusi" class="custom-checkbox-success"> -->
                            <label for="Diskusi">4. Diskusi/ Tanya Jawab</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-2 my-4">
                        <div>Media :</div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="leaflet" id="leaflet" class="custom-checkbox-success"> -->
                            <label for="leaflet">1. Leaflet</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Audio" id="Audio" class="custom-checkbox-success"> -->
                            <label for="Audio">2. Audio</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Visual" id="Visual" class="custom-checkbox-success"> -->
                            <label for="Visual">3. Visual</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <!-- <input type="checkbox" name="Audiovisual" id="Audiovisual" class="custom-checkbox-success"> -->
                            <label for="Audiovisual">4. Audiovisual</label>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered border-dark">
            <tbody>
                <tr class="text-center">
                    <td>Tanggal / Jam</td>
                    <td>Edukator</td>
                    <td class="col-3">Kebutuhan Edukasi</td>
                    <td>Hambatan</td>
                    <td>Intervensi terhadap hambatan</td>
                    <td>Metode</td>
                    <td>Media</td>
                    <td>Nama & T.Tangan</td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_admisi" class="form-control border-dark"></td>
                    <td>
                        <div class="text-center">Admisi</div>
                    </td>
                    <td>
                        <div style="width: 250px;">1.General consent</div>
                        <ul>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="hak_kewajiban" id="hak_kewajiban">
                                <label for="hak_kewajiban"> Hak dan kewajiban Pasien</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="peraturan" id="peraturan">
                                <label for="peraturan"> Peraturan dan tata tertib RS</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="info_rawat" id="info_rawat">
                                <label for="info_rawat">Informasi rawat inap</label>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" class="custom-checkbox-success" name="perkiraan_biaya" id="perkiraan_biaya">
                                <label for="perkiraan_biaya">Perkiraan Biaya</label>
                            </div>
                        </ul>
                    </td>
                    <td>
                        <textarea name="hambatan_admisi" id="" class="form-control border-dark" rows="4" style="width: 220px; height:180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_admisi" id="" class="form-control border-dark" rows="4" style="width: 220px; height:180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_admisi" id="" class="form-control border-dark" rows="4" style="width: 220px; height:180px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_admisi" id="" class="form-control border-dark" rows="4" style="width: 220px; height:180px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_1" />
                        </div>
                        <select type="select" name="perawat_1" id="perawat_1" class="form-select perawat" style="width: 250px;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_dpjp" class="form-control border-dark" style="width: 220px;"></td>
                    <td>
                        <div class="text-center">
                            <div>Dokter/</div>
                            <div>DPJP</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="keb_pelayanan" id="keb_pelayanan">
                                    <label class="col-10" for="keb_pelayanan"> Kebutuhan pelayanan asuhan pasien(Preventif, Kuratif, Paliatif, Rehabilitasi)</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="penjelasan_asesmen" id="penjelasan_asesmen">
                                    <label class="col-10" for="penjelasan_asesmen">Penjelasan tentang hasil asesmen, diagnosa termasuk penatalaksanaan dan rencana asuhan yang diberikan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="hasil_asuhan" id="hasil_asuhan">
                                    <label class="col-10" for="hasil_asuhan">Hasil asuhan dan pengobatan yang diharapkan dan yang tidak diharapkan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="resiko_komlikasi" id="resiko_komlikasi">
                                    <label class="col-10" for="resiko_komlikasi">Resiko dan komplikasi tindakan medik yang akan dilakukan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="keamanan_efektifitas" id="keamanan_efektifitas">
                                    <label class="col-10" for="keamanan_efektifitas">Keamanan dan efektifitas penggunaan peralatan medis</label>
                                </div>
                            </div>

                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_dpjp" id="" class="form-control border-dark" rows="4" style="width: 220px; height:510px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_dpjp" id="" class="form-control border-dark" rows="4" style="width: 220px; height:510px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_dpjp" id="" class="form-control border-dark" rows="4" style="width: 220px; height:510px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_dpjp" id="" class="form-control border-dark" rows="4" style="width: 220px; height:510px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_2" />
                        </div>
                        <select type="select" name="perawat_2" id="perawat_2" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_perawat" class="form-control border-dark"></td>
                    <td>
                        <div class="text-center">
                            <div>Perawat /</div>
                            <div>Bidan</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="perawatan_diri" id="perawatan_diri">
                                    <label class="col-10" for="perawatan_diri">Perawatan diri</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="prosedur_tindakan" id="prosedur_tindakan">
                                    <label class="col-10" for="prosedur_tindakan"> Prosedur tindakan yang dilakukan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="transfer_pasien" id="transfer_pasien">
                                    <label class="col-10" for="transfer_pasien"> Transfer pasien</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="asesmen_nyeri_perawat" id="asesmen_nyeri_perawat">
                                    <label class="col-10" for="asesmen_nyeri_perawat"> Assesmen nyeri dan manajemen nyeri</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="asesmen_nyeri" id="asesmen_nyeri">
                                    <label class="col-10" for="asesmen_nyeri"> Assesmen nyeri dan manajemen nyeri</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="cara_cuci_tangan" id="cara_cuci_tangan">
                                    <label class="col-10" for="cara_cuci_tangan"> Cara Cuci tangan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="cara_pencegahan" id="cara_pencegahan">
                                    <label class="col-10" for="cara_pencegahan"> Cara Pencegahan infeksi</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="orietasi" id="orietasi">
                                    <label class="col-10" for="orietasi"> Orietasi ruangan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" class="custom-checkbox-success" name="mobilisasi" id="mobilisasi">
                                    <label class="col-10" for="mobilisasi"> Mobilisasi dan ambulansi</label>
                                </div>
                            </div>

                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_perawat" id="" class="form-control border-dark" rows="4" style="width: 220px; height:400px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_perawat" id="" class="form-control border-dark" rows="4" style="width: 220px; height:400px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_perawat" id="" class="form-control border-dark" rows="4" style="width: 220px; height:400px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_perawat" id="" class="form-control border-dark" rows="4" style="width: 220px; height:400px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_3" />
                        </div>
                        <select type="select" name="perawat_3" id="perawat_3" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_DBP" class="form-control border-dark"></td>
                    <td>
                        <div class="text-center">
                            <div>Dokter/</div>
                            <div>Perawat /</div>
                            <div>Bidan</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <div class="d-flex gap-2 flex-column">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="asuhan_lanjutan" id="asuhan_lanjutan" class="custom-checkbox-success">
                                    <label class="col-10" for="asuhan_lanjutan">Asuhan lanjutan di rumah</label>
                                </div>
                                <div class="flex align-items-start gap-2">
                                    <input type="checkbox" name="pelaksanaan_rujuk" id="pelaksanaan_rujuk" class="custom-checkbox-success">
                                    <label class="col-10" for="pelaksanaan_rujuk">Pelaksanaan rujukan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="pelaksanaan_pulang_dokter" id="pelaksanaan_pulang_dokter" class="custom-checkbox-success">
                                    <label class="col-10" for="pelaksanaan_pulang_dokter">Perencanaan pemulangan pasien (rencana pemulangan kompleks/ Discharge planning)</label>
                                </div>
                            </div>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_DBP" id="" class="form-control border-dark" rows="4" style="width: 220px; height:240px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_DBP" id="" class="form-control border-dark" rows="4" style="width: 220px; height:240px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_DBP" id="" class="form-control border-dark" rows="4" style="width: 220px; height:240px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_DBP" id="" class="form-control border-dark" rows="4" style="width: 220px; height:240px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_4" />
                        </div>
                        <select type="select" name="perawat_4" id="perawat_4" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_fisioterapi" class="form-control border-dark"></td>
                    <td>
                        <div class="text-center">
                            <div>Fisioterapi</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <div class="d-flex gap-2 flex-column">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="teknik_rehab" id="teknik_rehab" class="custom-checkbox-success">
                                    <label for="teknik_rehab">Teknik Rehabilitasi</label>
                                </div>
                            </div>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_fisioterapi" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_5" />
                        </div>
                        <select type="select" name="perawat_5" id="perawat_5" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_apoteker" class="form-control border-dark"></td>
                    <td align="center">Apoteker</td>
                    <td>
                        <ol>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="pengunaan_obat" id="pengunaan_obat" class="custom-checkbox-success">
                                    <label class="col-10" for="pengunaan_obat">Penggunaan obat- obatan secara efektif dan aman</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="potensi_obat" id="potensi_obat" class="custom-checkbox-success">
                                    <label class="col-10" for="potensi_obat">Potensi efek samping obat</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="potensi_interaksi" id="potensi_interaksi" class="custom-checkbox-success">
                                    <label class="col-10" for="potensi_interaksi">Potensi interaksi obat antar obat konvensional, obat bebas, serta suplemen atau makanan.</label>
                                </div>

                            </div>

                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_apoteker" id="" class="form-control border-dark" rows="4" style="width: 220px; height:230px"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_apoteker" id="" class="form-control border-dark" rows="4" style="width: 220px; height:230px"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_apoteker" id="" class="form-control border-dark" rows="4" style="width: 220px; height:230px"></textarea>
                    </td>
                    <td>
                        <textarea name="media_apoteker" id="" class="form-control border-dark" rows="4" style="width: 220px; height:230px"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_6" />
                        </div>
                        <select type="select" name="perawat_6" id="perawat_6" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <tr>
                    <td><input type="datetime-local" name="tgl_jam_dietisien" class="form-control border-dark"></td>
                    <td>
                        <div class="text-center">
                            <div>Dietesien</div>
                        </div>
                    </td>
                    <td>
                        <ol>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="memadai" id="memadai" class="custom-checkbox-success">
                                    <label class="col-10" for="memadai"> Diet dan nutrisi yang memadai</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="alergi_memadai" id="alergi_memadai" class="custom-checkbox-success">
                                    <label class="col-10" for="alergi_memadai"> Alergi makanan</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="program_diet" id="program_diet" class="custom-checkbox-success">
                                    <label class="col-10" for="program_diet"> Program diet</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="makanan_hindari" id="makanan_hindari" class="custom-checkbox-success">
                                    <label class="col-10" for="program_diet"> Makanan yang harus dihindari</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="kebutuhan_kalori" id="kebutuhan_kalori" class="custom-checkbox-success">
                                    <label class="col-10" for="kebutuhan_kalori"> kebutuhan kalori</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="jenis_makan" id="jenis_makan" class="custom-checkbox-success">
                                    <label class="col-10" for="jenis_makan"> Jenis makanan yang dibutuhkan pasien</label>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <input type="checkbox" name="ajarkan_cara" id="ajarkan_cara" class="custom-checkbox-success">
                                    <label class="col-10" for="ajarkan_cara"> Ajarkan cara melaksanakan diet sesuai program</label>
                                </div>
                            </div>
                        </ol>
                    </td>
                    <td>
                        <textarea name="hambatan_dietisien" id="" class="form-control border-dark" rows="4" style="width: 220px; height:460px;"></textarea>
                    </td>
                    <td>
                        <textarea name="intervensi_dietisien" id="" class="form-control border-dark" rows="4" style="width: 220px; height:460px;"></textarea>
                    </td>
                    <td>
                        <textarea name="metode_dietisien" id="" class="form-control border-dark" rows="4" style="width: 220px; height:460px;"></textarea>
                    </td>
                    <td>
                        <textarea name="media_dietisien" id="" class="form-control border-dark" rows="4" style="width: 220px; height:460px;"></textarea>
                    </td>
                    <td>
                        <div class="text-center my-1">
                            <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_7" />
                        </div>
                        <select type="select" name="perawat_7" id="perawat_7" class="form-select perawat"
                            style="width: 100%;"></select>
                    </td>
                </tr>
                <?php
                $programCount = 7;
                $base_url = base_url('assets2/rme/img/testttd.png');
                ?>

                <?php
                for ($i = 1; $i <= $programCount; $i++) {
                ?>

                    <tr>
                        <td><input type="datetime-local" name="tgl_jam_td_lain_<?= $i; ?>" class="form-control border-dark"></td>
                        <td>
                            <textarea name="edukator_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 180px;"></textarea>
                        </td>
                        <td>
                            <textarea name="kbtuhan_lain_<?= $i; ?>" rows="4" id="" class="form-control border-dark" style="width: 250px;"></textarea>
                        </td>
                        <td>
                            <textarea name="hambatan_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                        </td>
                        <td>
                            <textarea name="intervensi_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                        </td>
                        <td>
                            <textarea name="metode_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                        </td>
                        <td>
                            <textarea name="media_lain_<?= $i; ?>" id="" class="form-control border-dark" rows="4" style="width: 220px;"></textarea>
                        </td>
                        <td>
                            <div class="text-center my-1">
                                <img class="img-responsive center-block mt-2" style="width: 25%;" id="qr_perawat_tambah_<?= $i ?>" />
                            </div>
                            <select type="select" name="perawat_tambah_<?= $i ?>" id="perawat_tambah_<?= $i ?>" class="form-select perawat"
                                style="width: 100%;"></select>
                        </td>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
    </div>
</div>

<script>
    const mode = "<?= $mode; ?>"
    let dataListPerawat = []
    let dataDokter = []

    $(document).delay(1000).queue(function() {
        callMarkerManager();
    });

    function cbCommon(data) {
        populateFormFields(data);

        for (let i = 1; i <= 7; i++) {
            const selector = `#perawat_${i}`;
            $(selector).prop('disabled', false);
            $(selector).select2('open');
            $(selector).select2('close');

            if (mode === "lihat") {
                $(selector).prop('disabled', true);
            }

            setTimeout(() => {
                const selected = $(selector).select2('data')[0]?.text;
                dataListPerawat?.forEach(v => {
                    if (v.text === selected) {
                        QRSignatureAPI(v.id_original, `qr_perawat_${i}`);
                    }
                });
            }, 1000);
        }


        for (let i = 1; i <= 7; i++) {
            const selector = `#perawat_tambah_${i}`;
            $(selector).prop('disabled', false);
            $(selector).select2('open');
            $(selector).select2('close');

            if (mode === "lihat") {
                $(selector).prop('disabled', true);
            }

            setTimeout(() => {
                const selected = $(selector).select2('data')[0]?.text;
                dataListPerawat?.forEach(v => {
                    if (v.text === selected) {
                        QRSignatureAPI(v.id_original, `qr_perawat_tambah_${i}`);
                    }
                });
            }, 1000);
        }


    }

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
                url: '<?= site_url('backend/admission/getKaryawan'); ?>'
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


        for (let i = 1; i <= 7; i++) {
            $(`#perawat_${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_perawat_${i}`);
            });
        }

        for (let i = 1; i <= 7; i++) {
            $(`#perawat_tambah_${i}`).on('select2:select', function(e) {
                const {
                    id_original
                } = e.params.data;
                QRSignatureAPI(id_original, `qr_perawat_tambah_${i}`);
            });
        }



        //================ new =====================//
    });
</script>